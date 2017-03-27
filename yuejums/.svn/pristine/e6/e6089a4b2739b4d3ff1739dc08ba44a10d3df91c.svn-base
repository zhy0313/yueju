<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Collection_model extends CI_Model{
    public function get_by_page($limit=6,$offset=0,$search){
        $this->db->select('t_collect.*,t_user.*,t_house.*');
        $this->db->from('t_collect');
        $this->db->join('t_user','t_user.user_id=t_collect.user_id ');
        $this->db->join('t_house','t_house.house_id=t_collect.house_id  ');
        $this->db->order_by('collect_time','desc');
        if($search){
            $this->db->like('t_house.title',$search);
        }
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();

    }
    public function get_all_count(){
        $this->db->select('*');
        $this->db->from('t_collect');
//        if($search){
//            $this->db->like('t_house.title',$search);
//        }
        return $this->db->count_all_results();
    }
//    public function is_title($search){
//        $this->db->select('t_house.title');
//        $this->db->from('t_house');
//        if($search){
//          $query =  $this->db->like('t_house.title',$search);
//            return $query->get()->result();
//        }
//    }
}