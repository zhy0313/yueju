<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller
{
    public function index()
    {
        $this->load->model('facility_model');
        $total_row = $this->facility_model->get_all_count();
        $offset = $this->uri->segment(3);
        $offset = !$offset ? 0 : $offset;
        $this->load->library('pagination');
        $config['base_url'] = 'facility/index/';
        $config['total_rows'] = $total_row;
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['first_link'] = "首页";
        $config['last_link'] = "尾页";
        $config['prev_link'] = "上一页";
        $config['next_link'] = "下一页";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="comment_selected"><a href="facility/index/' . $offset . '" class="comment_selected">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
//        $this->pagination->initialize($config);
        $rs=$this->facility_model->get_all($config['per_page'],$offset);
        echo $this->pagination->create_links();
        $this->pagination->initialize($config);
        $arr = array('rs' => $rs);
        return $this->load->view('facility.php', $arr);
    }
    public function del_facility(){
        $this->load->model("facility_model");
        $id = $this->uri->segment(3);
        $result = $this->facility_model->del($id);
        if ($result){
            redirect("facility/index");
        }else{
            echo "删除失败";
        }
    }
    public function del_some()
    {
        $delArr = $this->input->input_stream('del[]');
        $this->load->model("facility_model");
        $result=$this->facility_model->del_some_by_id($delArr);
        if ($result) {
            redirect("facility/index");
        }else{
            redirect("facility/index");
        }
    }
    public function get_add_facility(){//添加设施，引入插件
        $this->load->view('add_facility');
    }

    public  function add_facility(){
        $name=$this->input->post('facility_name');
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 3096;
        $config['file_name']     = date("YmdHis")."_".rand(10000,99999);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')){
            $upload_date=$this->upload->date();
            $img = 'upload/'.$upload_date['raw_name'].$upload_date['file_ext'];
            $this->load->model('facility_model');
            $rs=$this->facility_model->add_facility($name,$img);
            if($rs){
                redirect('facility/index');
            }else{
                redirect('facility/index');
            }
        }

    }//添加设施
    /*
     * ajax地方法往页面传修改前的值
     * */
    public function get_update_facility()
    {
        $id=$this->input->get("id");
        $this->load->model("facility_model");
        $rs=$this->facility_model->get_facility_by_id($id);
        $arr['rs']=$rs;
        echo $rs;
    }
    public function update_facility(){
        $this->load->view('update_facility');
    }
    public function do_update_facility()//修改设施
    {

    }
}
