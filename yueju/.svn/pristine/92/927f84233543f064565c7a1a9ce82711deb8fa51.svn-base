<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/31
 * Time: 23:18
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('room_model');
    }

    public function index()
    {
        $this->load->view('submit_book');
    }
    public function refer()
    {
        $id=$this->input->post('house_id');
        $star_time=$this->input->post('star_time');
        $over_time=$this->input->post('over_time');
        $rs=$this->room_model->get_house_information_by_id($id);
        $arr['star_time']=$star_time;
        $arr['over_time']=$over_time;
        $arr['rs']=$rs;
//        echo $rs;die();
        $this->load->view('submit_book',$arr);
    }
}