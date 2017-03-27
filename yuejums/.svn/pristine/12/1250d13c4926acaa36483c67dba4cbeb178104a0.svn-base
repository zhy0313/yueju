<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function invoice_detail(){
		$this -> load -> view('invoice-dialog.php');
	}
	public function invoice_edit(){
		$id=$this->input->post('order_id');
		$this -> load -> model('invoice_model');
		$edit = $this -> invoice_model -> update_by_invoice($id);
		echo json_encode($edit);  	
	} 
    public function order(){
    	$editid=$this->input->post('invoice_number');
    	$invoice_title=$this->input->post('invoice_title');
    	$invoice_num=$this->input->post('invoice_num');
    	$edit_time=$this->input->post('edit_time');

    	$invoiceid = $this->input->get('invoiceid');
    	$search = $this -> input -> get('search');
    	$this -> load -> model('invoice_model');
    	$this->invoice_model->update_by_id($invoiceid);
    	$this->invoice_model->update_more($editid,$invoice_title,$invoice_num,$edit_time);
    	$total_rows = $this -> invoice_model -> get_all_count($search);

    	/*分页配置start*/
    	$this -> load -> library('pagination');
		$config['base_url'] = 'invoice/order?search='.$search;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;/*按第三段参数进行分页*/

		$offset = $this -> input -> get('per_page');

		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class = "comment_selected"><a href = "invoice/order?search='.$search.'&per_page='.$offset.'" class = "comment_selected">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$this -> pagination -> initialize($config); 

		// $offset = $this -> uri -> segment(3);拿到第三段的值
		// $offset = !$offset ? 0 : $offset;
		/*分页配置end*/
    	$this -> load -> model('invoice_model');
    	$result = $this -> invoice_model -> get_order();
    	$page = $this -> invoice_model -> get_by_page($search,$config['per_page'],$offset);
    	$this -> load -> view('invoice.php',array(
    		'page' => $page
    	));    	
    }
    // public function add_invoice(){
    // 	$this -> load -> view('invoice/add_invoice.php');
    // }
    
}

