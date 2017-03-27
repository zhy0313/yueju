
<?php
/**
 * * Created by PhpStorm.
 * User: zjl
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment extends CI_Controller{
    /**
     * pc端页面显示，分页
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
   public function show(){
//       $newdata = array(
//           'user_id'  => '1',
//           'email'     => 'johndoe@some-site.com',
//           'logged_in' => TRUE
//       );
//       $this->session->set_userdata($newdata);

//        $userId=$this->session->userdata('user_id');
        $userId=$this->session->user->user_id;
//       var_dump($userId);
//       die();
        $this->load->model('comment_model');
        $total_row=$this->comment_model->get_all_count($userId);
        $offset=$this->input->get('per_page');
        $this->load->library('pagination');
        $config['base_url']='comment/show';
        $config['page_query_string']=TRUE;
        $config['total_rows']=$total_row;
        $config['per_page']=3;
        $config['uri_segment']=3;
        $config['first_link']="<<首页";
        $config['last_link']="尾页>>";
        $config['prev_link']="<<";
        $config['next_link']=">>";
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['first_tag_open']='<li class="big-page">';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li class="big-page">';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li class="comment_selected"><a href="" class="com-number">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $this->pagination->initialize($config);
        $result=$this->comment_model->get_by_username($config['per_page'],$offset,$userId);
        foreach($result as $comment){
                          $house_id=$comment->house_id;
                          $comment->count=$this->comment_model->com_count($house_id);
                       }
       $arr['comments']=$result;
       $this->load->view('comment.php',$arr);
    }

    /**
     * 微信端页面显示
     */
    public function w_show(){
        $this->load->model('comment_model');
        $userId=$this->session->user->user_id;;
        $result=$this->comment_model->get_by_username_all($userId);
        foreach($result as $comment){
            $house_id=$comment->house_id;
//            var_dump($house_id);
//            die();
            $comment->count=$this->comment_model->com_count($house_id);
        }
        $arr['comments']=$result;
        $this->load->view('wechat/comment_wechat.php',$arr);
    }
    /**
     * pc端删除评论
     */
    public function delete(){
        $com_id=$this->uri->segment(3);
        $this->load->model('comment_model');
        $rs=$this->comment_model->delete_com($com_id);
        if($rs){
            echo '<script>alert("删除成功")</script>';
            redirect("comment/show");
        }
    }

    /**
     * 微信端删除评论
     */
    public function w_delete(){
        $com_id=$this->uri->segment(3);
        $this->load->model('comment_model');
        $rs=$this->comment_model->delete_com($com_id);
        if($rs){
            echo '<script>alert("删除成功")</script>';
            redirect("comment/w_show");
        }
    }
    /**
     * 弹层信息页面展示ajax
     */
    public function comment_revise(){
        $userId=$this->session->user->user_id;
//        var_dump($userId);
//        die();
        $id=$this->input->get('comment_id');
        $this->load->model('comment_model');
        $curr_com=$this->comment_model->show_this($id,$userId);
        $house_id=$curr_com->house_id;
        $curr_com->count=$this->comment_model->com_count($house_id);
        echo json_encode($curr_com);
    }

    /**
     * pc端页面更新
     */
    public function do_revise(){
//      $username = $this->session->userdata('username');
        $hid=$this->input->get('hid');
        $score=$this->input->get('score');
        $content=$this->input->get('content');
        $this->load->model('comment_model');
        $result=$this->comment_model->update_id($hid,$score,$content);
        if($result){
            redirect('comment/show');
        }
        else{
            echo '更新失败';
        }
    }

    /**
     * 微信端修改页面更新
     */
    public function w_do_revise(){
//        $username = $this->session->userdata('username');
        $hid=$this->input->get('hid');
        $score=$this->input->get('score');
        $content=$this->input->get('content');
        $this->load->model('comment_model');
        $result=$this->comment_model->update_id($hid,$score,$content);
        if($result){
            redirect('comment/w_show');
        }
        else{
            echo '更新失败';
        }
    }
    /*
     * 微信端修改评论页面显示*/
    public function display(){
        $id=$this->uri->segment(3);
        $userId=$this->session->user->user_id;;
        $this->load->model('comment_model');
        $result=$this->comment_model->show_this($id,$userId);
            $house_id=$result->house_id;
            $result->count=$this->comment_model->com_count($house_id);
        $arr['detail']=$result;
        $this->load->view('wechat/com_revise.php',$arr);
    }
}