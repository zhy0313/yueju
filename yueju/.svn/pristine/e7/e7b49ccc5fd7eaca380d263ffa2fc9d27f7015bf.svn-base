<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/5
 * Time: 14:52
 */
class Collect_model extends CI_Model {

    public function get_collect_by_id_page($id,$limit=7,$offset=0)
    {
        $this->db->select('t_house.*,t_collect.*');
        $this->db->from('t_collect');
        $this->db->join('t_house','t_collect.house_id=t_house.house_id');
        $this->db->where('user_id',$id);
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();
    }
    public function get_collect_by_id($id)
    {
        $this->db->select('t_house.*,t_collect.*');
        $this->db->from('t_collect');
        $this->db->join('t_house','t_collect.house_id=t_house.house_id');
        $this->db->where('user_id',$id);
        return $this->db->get()->result();
    }
    public function get_house_conmment_num($id){
        $this->db->select('t_conmment.*');
        $this->db->from("t_conmment");
        $this->db->where("house_id",$id);
        return $this->db->count_all_results();
    }
    public function get_main_img($id){
        $this->db->select('img_src');
        $this->db->from('t_house_img');
        $this->db->where('house_id',$id);
        $this->db->order_by('is_main','DESC');
        return $this->db->get()->row();

    }

    public function get_all_count_collect($id)
    {
        $this->db->select('t_house.*,t_collect.*');
        $this->db->from('t_collect');
        $this->db->join('t_house','t_collect.house_id=t_house.house_id');
        $this->db->where('user_id',$id);
        return $this->db->count_all_results();
    }

    public function collect_cancel($id)
    {
       return $this->db->delete('t_collect', array('collect_id' => $id));
    }
}