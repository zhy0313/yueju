<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function message(){
	    //取session  id
        $this->load->library('session');
        $id=$this->session->user->user_id;
        var_dump($id);
        die();
	    $this->load->model('message_model');
        $message = $this->message_model->get_message($id);
        $arr =array(
            'message'=>$message
        );
	    $this->load->view('message',$arr);
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

	public function wechat_order(){
		$this->load->model('wechat_order_model');
		$wechat_orders = $this -> wechat_order_model -> get_wechat_order();
		$this -> load -> view('wechat/wechat_order', array('wechat_order' => $wechat_orders));
	}
}
