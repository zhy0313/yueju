<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/5
 * Time: 13:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('collect_model');
    }

    public function about()
    {
        $this->load->view('about');
    }
    public function captcha(){
        $this->load->helper("captcha");
        $vals = array(
            'img_path' =>'./assets/img/captcha/',
            'img_url'=>base_url().'./assets/img/captcha/',
            'img_width' =>103,
            'img_height' =>36,
            'expiration' =>60
        );
        $cap = create_captcha($vals);
        $data['captcha'] = $cap['image'];
        echo $data;
    }
    public function do_login_ajax(){//检验密码
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $loginuri = $this->input->post('loginuri');
        $result = $this->admin_model->do_login($username,$password);
        if($result){
            redirect($loginuri);
            echo '1';
        }else{
            echo '0';
        }
    }
    public function do_login(){
        $this->load->helper('captcha');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $loginuri = $this->input->post('loginuri');
        $result = $this->admin_model->do_login($username,$password);
        $arr['user']=$result;
        if($result){
            $this->session->set_userdata($arr);
            redirect($loginuri);
        }else{
            echo '密码错误';
        }
    }

    public function exit_user()
    {
        $this->session->unset_userdata("user");
        $loginuri = $this->input->post('loginuri');
        echo $loginuri;die();
        if ($this->session->user) {
            echo '<script>alert("退出失败")</script>';
            echo "点击此处<a href='".$loginuri."'>重新退出</a>";
        }else{
            redirect($loginuri);
        }
    }
    public function collect(){
//        $userid = 1;
        $userid=$this->session->user->user_id;
        $total_row=$this->collect_model->get_all_count_collect($userid);
        $offset=$this->uri->segment(3);
        $offset=!$offset?0:$offset;
        $this->load->library('pagination');
        $config['base_url']='admin/collect/';
        $config['total_rows']=$total_row;
        $config['per_page']=4;
        $config['uri_segment']=3;
        $config['first_link']="《";
        $config['last_link']="》";
        $config['prev_link']="<";
        $config['next_link']=">";
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li class="comment_selected"><a href="admin/collect/'.$offset.'" class="comment_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $this->pagination->initialize($config);
        $result=$this->collect_model->get_collect_by_id_page($userid,$config['per_page'],$offset);
//        echo $this->pagination->create_links();
        for($i=0;$i<count($result);$i++){
            $id=$result[$i]->house_id;
            $rs_conmment_num[$i] = $this->collect_model->get_house_conmment_num($id);
            $rs_img[$i] = $this->collect_model->get_main_img($id);
        }
        $arr['rs']=$result;
        $arr['rs_num']=$rs_conmment_num;
        $arr['rs_imgs']=$rs_img;
        if($result){
            $this->load->view('collect',$arr);
        }
    }

    public function collect_cancel()
    {
        $id = $this->input->get('id');
        $rss = $this->collect_model->collect_cancel($id);
        $userid = 1;
//        $userid=$this->session->user->user_id;
        $total_row=$this->collect_model->get_all_count_collect($userid);
        $offset=$this->uri->segment(3);
        $offset=!$offset?0:$offset;
        $this->load->library('pagination');
        $config['base_url']='admin/collect/';
        $config['total_rows']=$total_row;
        $config['per_page']=4;
        $config['uri_segment']=3;
        $config['first_link']="《";
        $config['last_link']="》";
        $config['prev_link']="<";
        $config['next_link']=">";
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li class="comment_selected"><a href="admin/collect/'.$offset.'" class="comment_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $this->pagination->initialize($config);
        $result=$this->collect_model->get_collect_by_id_page($userid,$config['per_page'],$offset);
//        echo $this->pagination->create_links();
        for($i=0;$i<count($result);$i++){
            $id=$result[$i]->house_id;
            $rs_conmment_num[$i] = $this->collect_model->get_house_conmment_num($id);
            $rs_img[$i] = $this->collect_model->get_main_img($id);
        }
        $arr['rs']=$result;
        $arr['rs_num']=$rs_conmment_num;
        $arr['rs_imgs']=$rs_img;
//    echo '1';
       echo json_encode($arr) ;
    }
    public function order($offset=0){
        $this->load->model('order_model');
        $total_rows = $this -> order_model -> get_all_count();
        /*分页配置信息开始*/
        $this->load->library('pagination');
        $config['base_url'] = 'order/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 5; //每页显示的数量
        $config['uri_segment'] = 2; //第二段
        $this->pagination->initialize($config);

        $offset = $this -> uri -> segment(2); //第二段
        $offset = !$offset ? 0 : $offset;  //判断
        /*分页配置信息结束*/
        $orders = $this -> order_model -> get_order($config['per_page'], $offset);
        $this -> load -> view('order', array('order' => $orders));
    }
}