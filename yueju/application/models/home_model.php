<?php
/**
 * Created by PhpStorm.
 * User: 柳昊妍
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model{
    public function get_t_house_all(){
        $res=$this->db->get('t_house');
        return $res->result();
    }
    public function get_by_search($title , $street){  //街道和搜索内容同时搜索和单独街道搜索好使，单独搜索内容不好使？
            if($title ){
                $this->db->like('t_house.title',$title);
            }
            if($street && !$title){
                $this->db->like('t_house.street',$street);
            }
            if($street && $title){
                $array=array('title'=>$title,'street'=>$street);
                $this->db->like($array);
//               $this->db->like('t_house.title',$title);
//               $this->db->or_like('t_house.street',$street);
           }
       $this->db->select('t_house.*,t_house_img.*');
        $this->db->from('t_house');
        $this->db->join('t_house_img','t_house.house_id=t_house_img.house_id');
        $query=$this->db->get()->result();
        return $query;
    }
    public function get_by_recommend(){
        $this->db->select('t_house.*,t_house_img.*');
        $this->db->from('t_house');
        $this->db->join('t_house_img','t_house.house_id=t_house_img.house_id');
        $this->db->limit(3);
        $query=$this->db->get()->result();
        return $query;
    }
    public function get_by_wechat_recommend(){
        $this->db->select('t_house.*,t_house_img.*');
        $this->db->from('t_house');
        $this->db->join('t_house_img','t_house.house_id=t_house_img.house_id');
        $this->db->limit(2);
        $query=$this->db->get()->result();
        return $query;
    }
}