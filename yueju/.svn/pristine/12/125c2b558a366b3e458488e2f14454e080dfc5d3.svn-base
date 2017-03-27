<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/23
 * Time: 16:17
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('room_model');
    }
    public function index()
    {
        $id = $this->uri->segment(3);
//        $id=1;
        $rs_img_four=$this->room_model->get_house_img_by_id_four($id);
        $rs_img=$this->room_model->get_house_img_by_id($id);
        $rs_facility = $this->room_model->get_house_facility_by_id($id);
        $rs_information = $this->room_model->get_house_information_by_id($id);
        $rs_conmment = $this->room_model->get_house_conmment_by_id($id);
        $rs_conmment_num = $this->room_model->get_house_conmment_num($id);
        $rs_recommend = $this->room_model->get_recommend_house($rs_information->city,$rs_information->street,$rs_information->road,$rs_information->type_id);
        $rs_recommend_img = array();
        for($i=0;$i<count($rs_recommend);$i++){
            $rs_recommend_img[$i] = $this->room_model->get_recommend_house_img($rs_recommend[$i]->house_id);
        }
        $arr = array(
            'house_img_four'=>$rs_img_four,
            'house_img' => $rs_img,
            'facility' =>$rs_facility,
            'information' =>$rs_information,
            'conmment' =>$rs_conmment,
            'con_num' =>$rs_conmment_num,
            'recommend' =>$rs_recommend,
            'recommend_img' =>$rs_recommend_img
        );
        $this->load->view('wechat/room.php',$arr);
    }

}