<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comment_model extends CI_Model{
    public function get_all(){
        $this->db->select('t_conmment.*,t_user.username,t_user.img,t_house.title');
        $this->db->from('t_conmment');
        $this->db->join('t_user','t_user.user_id=t_conmment.user_id ');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id  ');
        $this->db->order_by('conmment_date','desc');
        $query=$this->db->get();
        return $query->result();

    }

    /**
     * @param $id 当前点击评论的ID
     * @return mixed 
     */
    public function delete_com($id){
        $query=$this->db->delete('t_conmment',array('comment_id'=>$id));
        return $query;
    }

    /**
     * @param $id 当前点击评论的ID
     * @return mixed 当前点击评论内容
     */
    public function detail_view($id){
        $this->db->select('t_conmment.*,t_user.username,t_user.img,t_house.title');
        $this->db->from('t_conmment');
        $this->db->join('t_user','t_user.user_id=t_conmment.user_id ');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id  ');
        $this->db->order_by('conmment_date','desc');
        $this->db->where('t_conmment.comment_id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    /**
     * @param $title 房源名称
     * @param $name 用户名
     * @param int $limit 限制条数
     * @param int $offset 偏移量
     * @return mixed  符合条件数据
     */
    public function get_by_page($title,$name,$limit=7,$offset=0){
        $this->db->select('t_conmment.*,t_user.username,t_user.img,t_house.title');
        $this->db->from('t_conmment');
        $this->db->join('t_user','t_user.user_id=t_conmment.user_id ');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id  ');
        $this->db->order_by('conmment_date','desc');
        if($title){
            $this->db->like('title',$title);
        }
        if($name){
            $this->db->like('username',$name);
        }
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();

    }

    /**
     * @param $title房源名称
     * @param $name 用户名称
     * @return  获取取到数据行数
     */
    public function get_all_count($title,$name){
        $this->db->select('t_conmment.*,t_user.username,t_user.img,t_house.title');
        $this->db->from('t_conmment');
        $this->db->join('t_user','t_user.user_id=t_conmment.user_id ');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id  ');
        if($title){
            $this->db->like('title',$title);
        }
        if($name){
            $this->db->like('username',$name);
        }
        return $this->db->count_all_results();
    }

    /**
     * 批量删除
     * @param $id 通过ajax获取到的评论id
     */
    public function batch_delete($id){
        $this->db->select('t_conmment.*,t_user.username,t_user.img,t_house.title');
        $this->db->from('t_conmment');
        $this->db->join('t_user','t_user.user_id=t_conmment.user_id ');
        $this->db->join('t_house','t_house.house_id=t_conmment.house_id  ');
        $this->db->where_in('comment_id',$id);
        $query=$this->db->delete('t_conmment');
        return $query;
       
    }
}