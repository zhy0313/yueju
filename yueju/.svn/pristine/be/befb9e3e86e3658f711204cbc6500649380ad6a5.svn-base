<?php
/**
 * Created by PhpStorm.
 * User: 柳昊妍
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }
    public function first_page(){
        $result= $this->home_model->get_t_house_all();
        $recommend_houses=$this->home_model->get_by_recommend();
//        var_dump($recommend_house);
//        die();
        $this->load->view('home.php',array(
            'house_all'=>$result,
            'recommend_houses'=>$recommend_houses
        ));
    }
    public function search_house(){
        $street=$this->input->post('Sinput2');
        $title=$this->input->post('title');

        $res=$this->home_model->get_by_search($title, $street);
//        var_dump($res);
//        die();
        $this->load->view('home_search.php',array(
            'res'=>$res
        ));


    }
    public function wechat_home(){
        $result= $this->home_model->get_t_house_all();
        $recommend_houses=$this->home_model->get_by_wechat_recommend();
        $this->load->view('wechat/home-wechat.php',array(
            'house_all'=>$result,
            'recommend_houses'=>$recommend_houses
        ));
    }
    public function wechcat_search_house(){
        $street=$this->input->post('Sinput1');
        $search=$this->input->post('search');
        $res=$this->home_model->get_by_search($search, $street);
        $this->load->view('home_search.php',array(
            'res'=>$res
        ));
    }

}