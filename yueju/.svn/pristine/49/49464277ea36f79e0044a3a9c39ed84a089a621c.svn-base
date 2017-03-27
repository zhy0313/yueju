<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/5
 * Time: 13:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Collect extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function do_login(){

    }
    public function collect(){
        $userid = 1;
//        $userid=$this->session->user->user_id;

        $result=$this->admin_model->get_collect_by_id($userid);
//        echo $this->pagination->create_links();
        for($i=0;$i<count($result);$i++){
            $id=$result[$i]->house_id;
            $rs_conmment_num[$i] = $this->admin_model->get_house_conmment_num($id);
            $rs_img[$i] = $this->admin_model->get_main_img($id);
        }
        $arr['rs']=$result;
        $arr['rs_num']=$rs_conmment_num;
        $arr['rs_imgs']=$rs_img;
        if($result){
            $this->load->view('wechat/collect',$arr);
        }
    }

    public function collect_cancel()
    {
        $id = $this->input->get('id');
        $rss = $this->admin_model->collect_cancel($id);
        $userid = 1;
//        $userid=$this->session->user->user_id;

        $result=$this->admin_model->get_collect_by_id($userid);
//        echo $this->pagination->create_links();
        for($i=0;$i<count($result);$i++){
            $id=$result[$i]->house_id;
            $rs_conmment_num[$i] = $this->admin_model->get_house_conmment_num($id);
            $rs_img[$i] = $this->admin_model->get_main_img($id);
        }
        $arr['rs']=$result;
        $arr['rs_num']=$rs_conmment_num;
        $arr['rs_imgs']=$rs_img;
//    echo '1';
        echo json_encode($arr) ;
    }
}