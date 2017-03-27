<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_wechat extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function go_pay(){
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');
//      $name = $this->session->userdata('name');
        $phone_num = $this->session->userdata('phone_num');
        $id = $this->input->post('house_id');
        $this->load->model('sure_model');
        $this->sure_model->add($start_time,$end_time,$phone_num,$id);
        /*跳接口*/
    }
    public function pay(){
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');
        $price = $this->input->post('price');
        $id = $this->input->post('house_id');
        $address= $this->input->post('address');
        $this->load->view('pay_wechat.php',array(
            'start' => $start_time,
            'end' => $end_time,
            'address'=> $address,
            'price' => $price
        ));
    }
    public function sure(){
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');
        $price = $this->input->post('price');
        $id = $this->input->post('house_id');
        $address= $this->input->post('address');
        $this->load->view('sure_wechat.php',array(
            'start' => $start_time,
            'end' => $end_time,
            'address'=> $address,
            'price' => $price
        ));
    }
}
?>