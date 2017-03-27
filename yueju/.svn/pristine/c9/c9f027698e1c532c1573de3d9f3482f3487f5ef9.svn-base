<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class House_zhong extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('house_zhong_model');
  }
  public function index(){
    $res1= $this->house_zhong_model->get_t_house_all();
    $res2 =$this->house_zhong_model->get_t_house_type();
    $res3 =$this->house_zhong_model->get_t_facility();
    $allimg=$this->house_zhong_model->get_all_img();
    $hititle =$this->house_zhong_model->get_all_htitle();
    $hsdes =$this->house_zhong_model->get_all_describe();
    $hscity =$this->house_zhong_model->get_all_city();

    $fenye = $this->house_zhong_model->fenye('house_zhong/index/',3,count($allimg));
//                var_dump($fenye);
//                die;
    $arr =array(
        'house_all'=>$res1,
        'house_type'=>$res2,
        'facility'=>$res3,
        'hs_img'=>$allimg,
        'hs_title'=>$hititle,
        'hs_city'=>$hscity,
        'hs_des'=>$hsdes
    );
    $arr=array_merge($arr,$fenye);
    $this->load->view('house-center.php',$arr);
  }
  public function find_house(){
    $city = $_POST['Sinput1'];
    $street = $_POST['Sinput2'];
    $price_a=$_POST['price_a'];
    $price_b = $_POST['price_b'];
    $p_house_type = $_POST['p_house_type'];
    $p_facility_type = $_POST['p_facility_type'];
    $res1= $this->house_zhong_model->get_t_house_all();
    $res2 =$this->house_zhong_model->get_t_house_type();
    $res3 =$this->house_zhong_model->get_t_facility();
    $allimg=$this->house_zhong_model->get_all_img();
    $hititle =$this->house_zhong_model->get_all_htitle();
    $hsdes =$this->house_zhong_model->get_all_describe();
    $hscity =$this->house_zhong_model->get_all_city();
    $all =$this->house_zhong_model->get_house($city,$street,$price_a,$price_b,$p_house_type,$p_facility_type);
    $souimg=$this->house_zhong_model->get_sou_img($all);

    $soutitle=$this->house_zhong_model->get_sou_title($all);
//                var_dump($soutitle);
    $soucity=$this->house_zhong_model->get_sou_city($all);
    $soudes=$this->house_zhong_model->get_sou_des($all);
    $fenye = $this->house_zhong_model->fenye('house_zhong/sou_fenye/',3,count( $souimg));
//                var_dump($fenye);
//                die;
    $arr =array(
        'house_all'=>$res1,
        'house_type'=>$res2,
        'facility'=>$res3,
        'all_img'=>$allimg,
        'hi_title'=>$hititle,
        'hs_city'=>$hscity,
        'hs_des'=>$hsdes,
        'result'=>$all,
        'hs_img'=>$souimg,
        'hs_title'=>$soutitle,
        'hs_city'=>$soucity,
        'hs_des'=> $soudes,
        't_city'=>$city,
        't_street'=>$street,
    );
    $arr=array_merge($arr,$fenye);

//                var_dump($arr);
    if($all==null){
      echo'---+++';
      redirect('house_zhong');
    }else{
      $this->load->view('house-center.php',$arr);
    }
  }

}

?>