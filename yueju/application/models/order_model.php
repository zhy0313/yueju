<?php
//zyb
class Order_model extends CI_Model {

    public function get_order($limit, $offset){
        $this -> db -> select('order.*, house.title, house.city, house.street, house.road, house_type.name, house_img.img_src');
        $this -> db -> from('t_order order');
        $this -> db -> join('t_house house', 'order.house_id = house.house_id');
        $this -> db -> join('t_house_type house_type', 'house.house_id = house_type.type_id');
        $this -> db -> join('t_house_img house_img', 'house.house_id = house_img.house_id');
        $this -> db -> where('order.is_delete', 0);
//        $this->db->order_by('order_id','desc');
        $this->db->limit($limit, $offset);
        return $this -> db -> get() -> result();
    }
    public function get_all_count(){
        $this -> db -> select('order.*, house.title');
        $this -> db -> from('t_order order');
        $this -> db -> join('t_house house', 'order.house_id = house.house_id');
        $this -> db -> where('order.is_delete', 0);
        return $this -> db -> count_all_results();
    }

}

?>