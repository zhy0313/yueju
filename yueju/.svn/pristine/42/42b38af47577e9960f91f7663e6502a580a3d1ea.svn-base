<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment_model extends CI_Model{
    public function get_by_username($limit,$offset,$userId){
        $this->db->select('t_conmment.content, t_conmment.comment_id,
            t_order.start_time, t_order.end_time,t_house.title,
            t_house.city,t_house.street,
            t_house.road,t_house.house_id,
            t_conmment.score,t_house_type.name,t_house_img.img_src');
        $this->db->from('t_conmment');
        $this->db->join(' t_order','t_order.user_id=t_conmment.user_id 
                and t_order.house_id=t_conmment.house_id');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->join('t_house_img','t_house.house_id=t_house_img.house_id');
        $this->db->where('t_conmment.user_id',$userId);
        $this->db->order_by('conmment_date','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();
    }
    public function get_by_username_all($userId){
        $this->db->select('t_conmment.content, t_conmment.comment_id,
            t_order.start_time, t_order.end_time,t_house.title,t_conmment.score,
            t_house.city,t_house.street,
            t_house.road,t_house.house_id,
            t_house_type.name,t_house_img.img_src');
        $this->db->from('t_conmment');
        $this->db->join(' t_order','t_order.user_id=t_conmment.user_id 
                and t_order.house_id=t_conmment.house_id');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->join('t_house_img','t_house.house_id=t_house_img.house_id');
        $this->db->where('t_conmment.user_id',$userId);
        $this->db->order_by('conmment_date','desc');
        $query=$this->db->get();
        return $query->result();
    }
    public function get_all_count($userId){
        $this->db->select('t_conmment.content, t_conmment.comment_id,
            t_order.start_time, t_order.end_time,t_house.title,t_house.city,t_house.street,
            t_house.road,t_house.house_id,t_conmment.score');
        $this->db->from('t_conmment');
        $this->db->join(' t_order','t_order.user_id=t_conmment.user_id 
                and t_order.house_id=t_conmment.house_id');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id');
        $this->db->where('t_conmment.user_id',$userId);
        $this->db->order_by('conmment_date','desc');
        return $this->db->count_all_results();
       
    }
    public function delete_com($id){
        $query=$this->db->delete('t_conmment',array('comment_id'=>$id));
        return $query;
    }
    public function show_this($id,$userId){
        $this->db->select('t_conmment.content, t_conmment.comment_id,
            t_order.start_time, t_order.end_time,t_house.title,t_conmment.score,
            t_house.city,t_house.street,
            t_house.road,t_house.house_id,
            t_house_type.name,t_house_img.img_src');
        $this->db->from('t_conmment');
        $this->db->join(' t_order','t_order.user_id=t_conmment.user_id 
                and t_order.house_id=t_conmment.house_id');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->join('t_house_img','t_house.house_id=t_house_img.house_id');
        $this->db->where('t_conmment.user_id',$userId);
        $this->db->order_by('conmment_date','desc');
        $this->db->where('t_conmment.comment_id',$id);
        $query=$this->db->get();
        return $query->row();
    }
    public function update_id($hid,$score,$content){
        $arr=array(
            'score'=>$score,
            'content'=>$content
        );
        $this->db->where('comment_id',$hid);
        return $this->db->update('t_conmment',$arr);
    }
    public function com_count($house_id){
        $this->db->select('t_conmment.*');
        $this->db->from('t_conmment');
        $this->db->where('t_conmment.house_id',$house_id);
       return $this->db->count_all_results();
    }
}