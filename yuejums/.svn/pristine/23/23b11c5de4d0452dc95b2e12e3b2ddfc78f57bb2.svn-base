<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/3
 * Time: 18:54
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
    public function index($offset=0){
        $this->load->model('message_model');
        $total_row=$this->message_model->get_all_count();
        $offset=$this->uri->segment(3);
        $offset=!$offset?0:$offset;
        $this->load->library('pagination');
        $config['base_url']='message/index/';
        $config['total_rows']=$total_row;
        $config['per_page']=4;
        $config['uri_segment']=3;
        $config['first_link']="首页";
        $config['last_link']="尾页";
        $config['prev_link']="上一页";
        $config['next_link']="下一页";
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li class="comment_selected"><a href="message/index/'.$offset.'" class="comment_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
//        $this->pagination->initialize($config);
        $rs=$this->message_model->get_by_page($config['per_page'],$offset);
        echo $this->pagination->create_links();
        $this->pagination->initialize($config);
        $arr = array(
            "blogs" => $rs
        );
        if($rs){
            $this->load->view("message", $arr);
        }else{
            $this->load->view("message");
        }
    }
    public function del_message(){
        $this->load->model("message_model");
        $id = $this->uri->segment(3);
        $result = $this->message_model->del($id);
        if ($result){
            redirect("message/index");
        }else{
            echo "删除失败";
        }
    }
    public function del_some()
    {
        $delArr = $this->input->input_stream('box[]');
        $this->load->model("message_model");
        $result=$this->message_model->del_some_by_id($delArr);
        if ($result) {
            redirect("message/index");
        }else{
            redirect("message/index");
        }
    }
}