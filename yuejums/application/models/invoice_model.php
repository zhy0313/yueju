<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {
	// public function change_view($id){
	// 	$arr=array(
	// 		'is_post'=>1
	// 	);
	// 	$this -> db -> select('t_order.*,t_user.*');
	// 	$this -> db -> from('t_order');
	// 	$this -> db -> join('t_user','t_order.user_id = t_user.user_id');
	// 	$this -> db -> where('t_order.order_id',$id);
	// 	$this->db->update('');
	// 	return $this->db->get()->row();
	// }
	public function get_order(){
		// 获取订单信息
		// 把t_user的username加入到t_order中
		// $query = $this -> db -> query('select t_order.*,t_user.username from t_order,t_user where t_order.user_id = t_user.user_id');
		// return $query -> result();
		// select * from t_order join t_user on t_user.user_id = t_order.user_id将整个t_user加入到t_order中
		$this -> db -> select('t_order.*,t_user.username');
		$this -> db -> from('t_user');
		$this -> db -> join('t_order','t_order.user_id = t_user.user_id');

		return $this -> db -> get() -> result();
		
	}
	public function get_by_page($search,$limit = 5,$offset){
		$this -> db -> select('t_order.*,t_user.username');
		$this -> db -> from('t_user');
		$this -> db -> join('t_order','t_order.user_id = t_user.user_id');

		// $this -> db -> join('t_user','t_order.house_id = t_house.house_id');
		$this -> db -> where('t_order.is_delete',0);
		if($search){
			$this -> db -> like('t_order.order_id',$search);
		}
		$this -> db -> order_by('t_order.order_id','desc');
		$this -> db -> limit($limit,$offset);
		return $this -> db -> get() -> result();
	}
	public function get_all_count($search){
		// $query = $this -> db -> query('select count(*) from t_order,t_user where t_order.order_id = t_user.user_id');
		// return count($query -> count());
		// select t_order.*,t_user.username,t_house.price from t_order,t_user,t_house where t_order.user_id = t_user.user_id and t_order.house_id=t_house.house_id

		$this -> db -> select('t_order.*,t_user.username');
		$this -> db -> from('t_user');
		$this -> db -> join('t_order','t_order.user_id = t_user.user_id');
		// $this -> db -> join('t_user','t_order.house_id = t_house.house_id');
		$this -> db -> where('t_order.is_delete',0);
		if($search){
			$this -> db -> like('t_order.order_id',$search);
		}
		return $this -> db -> count_all_results();
	}
	public function update_by_invoice($id){
		$this -> db -> select('t_order.*,t_user.username');
		$this -> db -> from('t_user');
		$this -> db -> join('t_order','t_order.user_id = t_user.user_id');

		$this -> db -> where('t_order.order_id',$id);
		return $this->db->get()->row();
	}
 	public function update_by_id($id){
 		$arr=array('is_post'=>1);
 		$this->db->where('order_id',$id);
 		$this->db->update('t_order',$arr);
 	}
 	public function update_more($id,$invoice_title,$invoice_num,$edit_time){
 		$arr=array(
 			'invoice_title'=>$invoice_title,
 			'invoice_num'=>$invoice_num,
 			'invoice_time'=>$edit_time,
 			'invoiced'=>1
 		);
 		$this->db->where('order_id',$id);
 		$this->db->update('t_order',$arr);
 	}
}

