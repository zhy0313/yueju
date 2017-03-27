<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/4
 * Time: 0:10
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Message_model extends CI_Model{
    public function get_all(){
        $sql = "select t_user.img,t_user.username,t_message.content,t_message.message_id,t_message.addtime from t_message,t_user where t_message.sender = t_user.user_id";
        return $this->db->query($sql)->result();
    }
    public function get_all_count(){
        $this->db->select('*');
        $this->db->from('t_message');
        return $number=$this->db->count_all_results();
    }
    public function get_by_page($limit=7,$offset=0){
        $this->db->select('t_user.img,t_user.username,t_message.content,t_message.message_id,t_message.addtime');
        $this->db->from('t_message');
        $this->db->join('t_user','t_user.user_id=t_message.sender ');
        $this->db->order_by('addtime','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();

    }
    public function del($id){
        $query = $this->db->delete('t_message',array('message_id' => $id));
        return $query;
    }
    public function del_some_by_id($arr){

        $this->db->where_in('message_id',$arr);
        $query = $this->db->delete('t_message');

        return $this->db->affected_rows();
    }
}