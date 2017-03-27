<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/1/25
 * Time: 16:19
 */
class Room_model extends CI_Model{
    public function get_house_img_by_id($id)
    {
        $this->db->select('t_house_img.*');
        $this->db->from("t_house_img");
        $this->db->where("house_id",$id);
        $this->db->order_by('is_main', 'DESC');
        return $this->db->get()->result();
    }
    public function get_house_img_by_id_four($id)
    {
        $this->db->select('t_house_img.*');
        $this->db->from("t_house_img");
        $this->db->where("house_id",$id);
        $this->db->order_by('is_main', 'DESC');
        $this->db->limit(4);
        return $this->db->get()->result();
    }
    public function get_house_facility_by_id($id)
    {
        $this->db->select('t_facility.*,t_facility_type.*');
        $this->db->from("t_facility");
        $this->db->join('t_facility_type','t_facility.facility_type_id=t_facility_type.facility_type_id');
        $this->db->where("house_id",$id);
        return $this->db->get()->result();
    }

    public function get_house_information_by_id($id)
    {
        $this->db->select('t_house.*,t_house_type.*');
        $this->db->from("t_house");
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->where("house_id",$id);
        return $this->db->get()->row();
    }

    public function get_house_conmment_by_id($id)
    {
        $this->db->select('t_conmment.*,t_user.*');
        $this->db->from("t_conmment");
        $this->db->join("t_user",'t_user.user_id=t_conmment.user_id');
        $this->db->where("house_id",$id);
        return $this->db->get()->result();
    }
    public function get_house_conmment_num($id){
        $this->db->select('t_conmment.*,t_user.*');
        $this->db->from("t_conmment");
        $this->db->where("house_id",$id);
        return $this->db->count_all_results();
    }

    public function get_recommend_house($city,$street,$road,$type_id)
    {

        $this->db->select('t_house.*,t_house.*');
        $this->db->from('t_house');
//        $this->db->join('t_house_img','t_house_img.house_id=t_house.house_id');
        $this->db->where('city',$city);
        $this->db->or_where('street',$street);
        $this->db->or_where('road',$road);
        $this->db->or_where('type_id',$type_id);
//        $this->db->where('is_main',1);
        return $this->db->get()->result();
    }

    public function get_recommend_house_img($id)
    {
        $this->db->select('*');
        $this->db->from('t_house_img');
        $this->db->where('house_id',$id);
        $this->db->order_by('is_main','DESC');
        return $this->db->get()->row();
    }

    public function do_collect($userid,$houseid)
    {
        $time = date('y-m-d h:i:s',time());
        $data = array(
            'user_id' => $userid,
            'house_id' => $houseid,
            'collect_time' => $time
        );

        $this->db->insert('t_collect', $data);
    }
    public function do_del_collect($userid,$houseid)
    {
        $this->db->where('user_id', $userid);
        $this->db->where('house_id', $houseid);
        $this->db->delete('t_collect');
    }
}
?>