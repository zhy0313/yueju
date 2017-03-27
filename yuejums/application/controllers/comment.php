<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment extends CI_Controller{
    /**
     * 分页查询
     */
    public function paging(){
        $title=$this->input->get('title');
        $name=$this->input->get('username');
        $this->load->model('comment_model');
        $total_row=$this->comment_model->get_all_count($title,$name);
        $offset=$this->input->get('per_page');
        $this->load->library('pagination');
        $config['base_url']='comment/paging?title='.$title.'&name='.$name;
        $config['page_query_string']=TRUE;
        $config['total_rows']=$total_row;
        $config['per_page']=6;
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
        $config['cur_tag_open']='<li class="comment_selected"><a href="comment/paging?title='.$title.'&per_page='.$offset.'" class="comment_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $this->pagination->initialize($config);
        $rs=$this->comment_model->get_by_page($title,$name,$config['per_page'],$offset);
        $arr['pages']=$rs;
        $this->load->view('comment',$arr);
    }

    /**
     *评论详情
     */
    public function comment_details(){
        $this->load->view('comment_details');
    }

    /**
     *删除
     */
    public function delete(){
        $com_id=$this->uri->segment(3);
        $this->load->model('comment_model');
        $rs=$this->comment_model->delete_com($com_id);
        if($rs){
            redirect("comment/paging");
        }
    }

    /**
     *评论详情
     */
    public function comment_detail(){
        $id=$this->input->post('comment_id');
        $this->load->model('comment_model');
        $detail=$this->comment_model->detail_view($id);
        echo json_encode($detail);
    }

    /**
     *批量删除
     */
    public function delete_many(){
        $id=$this->input->post('delete_id');
        $this->load->model('comment_model');
        $data=$this->comment_model->batch_delete($id);
        if($data){
            echo "success";
        }else{
            echo "failed";
        }
    }
}