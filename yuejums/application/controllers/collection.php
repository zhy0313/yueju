<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/1/10
 * Time: 10:33
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collection_model');
    }
    public function index(){
        $search = $this->input->post('search');
        $this->load->model('collection_model');
        $total_rows=$this->collection_model->get_all_count();
        $offset=$this->uri->segment(3);
        $offset=!$offset?0:$offset;
        $this->load->library('pagination');
        $config['base_url']='collection/index/';
        $config['total_rows']=$total_rows;
        $config['per_page']=2;
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
        $config['cur_tag_open']='<li class="comment_selected"><a href="collection/index/'.$offset.'" class="comment_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';


        $this->pagination->initialize($config);
        $rs = $this->collection_model->get_by_page($config['per_page'],$offset,$search);
        $arr = array('rs'=>$rs);
        return $this->load->view('collection.php',$arr);
    }
//    public function title(){
//        $search = $this->input->post('search');
//        $this->collection_model->is_title($search);
//        redirect('collection/index');
//    }

}