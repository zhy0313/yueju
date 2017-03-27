<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class House_zhong_model extends CI_Model{
    public function get_t_house_all(){
        $res=$this->db->get('t_house');
//            $sql = "SELECT city FROM t_house";
//            $res=$this->db->query($sql);
        return $res->result();
    }
    public function get_t_house_type(){
        $res=$this->db->get('t_house_type');
        return $res->result();
    }
    public function get_t_facility(){
        $res=$this->db->get('t_facility_type');
        return $res->result();
    }
    public function get_all_img(){//获取t_house_img下的所有src
        $sql = "SELECT house_id FROM t_house";
        $res=$this->db->query($sql)->result();
        $all = array();
        foreach($res as $v){
            $sql2 ="select img_src from t_house_img where house_id=".$v->house_id."";
            $res2=$this->db->query($sql2)->result();

//                var_dump($res2);
            $all=array_merge($all,$res2);
        }
        return $all;

    }
    public function get_all_htitle(){//获取所有的房源的title
        $sql = "SELECT house_id FROM t_house_img";
        $res=$this->db->query($sql)->result();
//            var_dump($res);
        $all = array();
        foreach($res as $v){
            $sql2 ="select title from t_house where house_id=".$v->house_id."";
            $res2=$this->db->query($sql2)->result_array();
            $all=array_merge($all,$res2);
        }
        return $all;
    }
    public function get_all_describe(){
        $sql = "SELECT house_id FROM t_house_img";
        $res=$this->db->query($sql)->result();
//            var_dump($res);
        $all = array();
        foreach($res as $v){
            $sql2 ="select house_describe from t_house where house_id=".$v->house_id."";
            $res2=$this->db->query($sql2)->result_array();
            $all=array_merge($all,$res2);
        }
        return $all;
    }
    public  function fenye($h_uri,$h_uri_n,$fy_all){
        $offset=$this->uri->segment($h_uri_n);
        if($offset==null){
            $offset=0;
        }
//            echo $offset;
        $this->load->library('pagination');

        $config['base_url'] =$h_uri;
        $config['total_rows'] = $fy_all;//一共多少要分
//           $this->db->count_all('t_house_img')
        $config['per_page'] = 12;//分页一页多少内容
        $config['uri_sigment'] = $h_uri_n;
        $config['first_link']='<<首页';
        $config['last_link'] = '尾页>>';
        $config['first_tag_open'] = '<li class="fen_li">';
        $config['num_tag_open'] = '<li class="fen_li">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="fen_li"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_link'] = '<<';
        $config['next_link'] = '>>';
//            $config['display_pages'] = FALSE;


        $config['first_tag_close'] = '</li>';

//            $config['next_link'] = '《';
        $this->pagination->initialize($config);
        $arr=array(
            'ye_num'=>$config['total_rows'],//一共多少内容
            'one_num'=> $config['per_page'],//一页多少
            'this_num'=>$offset//当前页
        );
        return $arr;
    }
    public function get_all_city(){
        $sql = "SELECT house_id FROM t_house_img";
        $res=$this->db->query($sql)->result();
//            var_dump($res);
        $all = array();
        foreach($res as $v){
            $sql2 ="select city from t_house where house_id=".$v->house_id."";
            $res2=$this->db->query($sql2)->result_array();
            $all=array_merge($all,$res2);
        }
        return $all;
    }
//        通过搜索框参数查询后台house_id
    public function get_house($city,$street,$price_a,$price_b,$p_house_type,$p_facility_type){
        if($price_a==''&&$price_b!=''){
            $price_a=0;
        }else if($price_b==''&&$price_a!=''){
            $price_b=123465465464674987898;
        }else if($price_b==''&&$price_a==''){
            $price_a=0;
            $price_b=674945645645687898;
        }
//            echo $price_a.$price_b;
        $house_type = explode("+", $p_house_type);//房间类型
        $facility_type = explode("+",$p_facility_type); //房间设施 wifi
        $res=$this->db->get('t_house')->result();
        $all = array();
        foreach($res as $v){
//                var_dump($v->city==$city&&$v->street == $street&&$v->price>=$price_a&&$v->price<=$price_b);
//                echo'----';
//                var_dump($city);
            if($v->city==$city&&$v->street == $street&&$v->price>=$price_a&&$v->price<=$price_b){
                array_push($all,$v->house_id);
//                    echo 'ssss';
            }
        }
        $result = array();
        $house_m = array();
        $facility_fti = array();
        $facility_fti1 = array();
        $biao_biao=0;
        foreach($all as $num){
//                echo $num;
            if($p_house_type==''&&$p_facility_type==''){
                array_push($result,$num);
            }else if($p_house_type==''&&$p_facility_type!=''){
                $sql_tat ="select facility_type_id from t_facility where house_id=".$num."";
                $resq = $this->db->query($sql_tat)->result_array();
                if($resq!=null){
                    foreach($resq as $resq_num){
                        $sql_fti ="select name from t_facility_type where facility_type_id=".$resq_num['facility_type_id']."";
                        $res_fti = $this->db->query($sql_fti)->result_array();
                        $facility_fti=array_merge($facility_fti,$res_fti);
                    }
                    $fff_biao=0;
//                        var_dump($facility_fti);
                    foreach($facility_fti as $ff_num){
//                            $fff_biao=0;
                        foreach($facility_type as $fy_num){
//                                echo $fy_num;
                            if($ff_num['name']==$fy_num){
                                $fff_biao=1;
                                continue;
                            }
                        }
                        if($fff_biao==0){
                            break;
                        }
                    }
                    if($fff_biao==1)
                    {
                        array_push($result,$num);
                    }
                }
//                    }

            }else if($p_house_type!=''&&$p_facility_type==''){
                $sql_ht ="select type_id from t_house where house_id=".$num."";
                $resq = $this->db->query($sql_ht)->result_array();
                foreach( $resq as $resq_res){
                    $sql_n13 ="select name from t_house_type where type_id=".$resq_res['type_id']."";
                    $aa = $this->db->query( $sql_n13)->result_array();
                    foreach($aa as $aa_res){
                        foreach($house_type as $number){
                            if($number ==$aa_res['name']){
                                array_push($result,$num);
                            }
                        }
                    }
//                        $house_m =array_merge($house_m,$aa);
                }

            }else if($p_house_type!=''&&$p_facility_type!=''){
                $sql_ht1 ="select type_id from t_house where house_id=".$num."";
                $resq1 = $this->db->query($sql_ht1)->result_array();
                foreach( $resq1 as $resq_res1){
                    $sql_n14 ="select name from t_house_type where type_id=".$resq_res1['type_id']."";
                    $aa1 = $this->db->query( $sql_n14)->result_array();
                    foreach($aa1 as $aa_res1){
                        foreach($house_type as $number){
                            if($number ==$aa_res1['name']){
                                /**************************/
                                $biao_biao=1;
                                /************************/
                            }
                        }
                    }
                }
                $sql_tat1 ="select facility_type_id from t_facility where house_id=".$num."";
                $resq1 = $this->db->query($sql_tat1)->result_array();
                if($resq1!=null){
                    foreach($resq1 as $resq_num1){
                        $sql_fti1 ="select name from t_facility_type where facility_type_id=".$resq_num1['facility_type_id']."";
                        $res_fti1 = $this->db->query($sql_fti1)->result_array();
                        $facility_fti1=array_merge($facility_fti1,$res_fti1);
                    }
                    $fff_biao1=0;
//                                var_dump($facility_fti1);
                    foreach($facility_fti1 as $ff_num1){
                        //                            $fff_biao=0;
                        foreach($facility_type as $fy_num1){
//                                        echo 'asd';
//                                        echo $fy_num1;
                            if($ff_num1['name']==$fy_num1){
                                $fff_biao1=1;
                                continue;
                            }
                        }
                        if($fff_biao1==0){
                            break;
                        }
                    }
                    if($fff_biao1==1) {
                        if($biao_biao==1){
                            array_push($result,$num);
                        }
                    }
                }
            }

        }
//            foreach($result as $q){
//                echo $q;
//            }
        return $result;
    }
    public function get_sou_img($arr){//通过house_id获取src
        foreach($arr as $v){
//                echo $v;
            $sql ="select img_src from t_house_img where house_id=".$v."";
            return $this->db->query($sql)->result();
//                var_dump($res);
        }
    }
    public function get_sou_title($arr){
        $all = array();
        foreach($arr as $v){
//                echo $v;
            $sql ="select img_src from t_house_img where house_id=".$v."";
            $arr2= $this->db->query($sql)->result_array();
            $sql = "select title from t_house where house_id=" . $v . "";
            $res=$this->db->query($sql)->result_array();
//                echo count($arr2);
            if($arr2!=null){
                for($num = 0 ;$num<count($arr2);$num++){
//                        echo 'p';
                    $all=array_merge($all,$res);
                }
            }
        }
//            var_dump($all);
        return $all;
    }
    public function get_sou_city($arr){
        $all = array();
        foreach($arr as $v){
            $sql ="select img_src from t_house_img where house_id=".$v."";
            $arr2= $this->db->query($sql)->result_array();
            $sql = "select city from t_house where house_id=" . $v . "";
            $res=$this->db->query($sql)->result_array();
            if($arr2!=null){
                for($num = 0 ;$num<count($arr2);$num++){
                    $all=array_merge($all,$res);
                }
            }
        }
        return $all;
    }
    public function get_sou_des($arr){
        $all = array();
        foreach($arr as $v){
            $sql ="select img_src from t_house_img where house_id=".$v."";
            $arr2= $this->db->query($sql)->result_array();
            $sql = "select house_describe from t_house where house_id=" . $v . "";
            $res=$this->db->query($sql)->result_array();
            if($arr2!=null){
                for($num = 0 ;$num<count($arr2);$num++){
                    $all=array_merge($all,$res);
                }
            }
        }
        return $all;
    }
    public function get_sou_street($arr){
        $all = array();
        foreach($arr as $v){
            $sql ="select img_src from t_house_img where house_id=".$v."";
            $arr2= $this->db->query($sql)->result_array();
            $sql = "select street from t_house where house_id=" . $v . "";
            $res=$this->db->query($sql)->result_array();
            if($arr2!=null){
                for($num = 0 ;$num<count($arr2);$num++){
                    $all=array_merge($all,$res);
                }
            }
        }
        return $all;
    }
}
?>