<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

    public function get_by_page($title, $limit, $offset){ //分页
        $this -> db -> select('order.*, house.title, user.username');
        $this -> db -> from('t_order order');
        $this -> db -> join('t_house house', 'order.house_id = house.house_id');
        $this -> db -> join('t_user user', 'order.user_id = user.user_id');
        $this -> db -> where('order.is_delete', 0);
        if($title){
            $this -> db -> like('house.title', $title);
        }
        $this -> db -> order_by('order.addtime', 'desc'); //排序规则 desc倒序
        $this -> db -> limit($limit, $offset); // 限制查询条数
        return $this -> db -> get() -> result();
    }

    public function get_all_count($title){
        $this -> db -> select('order.*, house.title');
        $this -> db -> from('t_order order');
        $this -> db -> join('t_house house', 'order.house_id = house.house_id');
        $this -> db -> where('order.is_delete', 0);
        if($title){
            $this -> db -> like('house.title', $title);
        }
        return $this -> db -> count_all_results();
    }

    public function get_order($id){
        $this -> db -> from('t_order');
        $this -> db -> where('order_id',$id);
        return $this -> db -> get() -> row();
    }
}