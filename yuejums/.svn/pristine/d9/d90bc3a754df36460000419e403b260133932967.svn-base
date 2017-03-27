<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class House_model extends CI_Model {
    public function get_by_page($type_id,$search,$limit,$offset){
        $this->db->from('t_house');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->where('t_house.is_delete',0);
        if($type_id &&$type_id != 0){
            $this->db->where('t_house.type_id',$type_id);
        }
        if($search){
            $this->db->like('t_house.title',$search);
        }
        $this->db->order_by('t_house.house_id','desc');
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();
//        $this->db->query("select * from t_house,t_house_type where t_house.type_id=t_house_type.type_id and t_house.is_delete=0")->result();
    }
    public function get_all_house_num($type_id,$search){
        $this->db->from('t_house');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->where('t_house.is_delete',0);
        if($type_id&&$type_id != 0){
            $this->db->where('t_house.type_id',$type_id);
        }
        if($search){
            $this->db->like('t_house.title',$search);
        }
        return $number=$this->db->count_all_results();
    }
    public function get_all_type(){
        $this->db->from('t_house_type');
        return $this->db->get()->result();
    }
    public function  get_all_facility(){
        $this->db->from('t_facility_type');
        return $this->db->get()->result();
    }
    public function get_all_rent_type(){
        $this->db->from ('t_house_rent_type');
        return $this->db->get()->result();
    }
    public function delete_house($id){
        $data = array(
            'is_delete' =>1
        );
        $this->db->where('house_id',$id);
        return $this->db->update('t_house',$data);
    }
    public function del_some($id){
        $data = array(
            'is_delete' =>1
        );
        $this->db->where_in('house_id', $id);
        return $this->db->update('t_house',$data);
    }
    public function add_house($title,$city,$street,$road,$type,$rent_type,$price,$isorder,$describe){
        $data = array(
            'title' => $title,
            'city' => $city,
            'street' => $street,
            'road' => $road,
            'type_id' => $type,
            'rent_type_id' => $rent_type,
            'price' => $price,
            'is_order' => $isorder,
            'house_describe' => $describe,
            'is_delete' => 0,
        );
        $this->db->insert('t_house', $data);
        return $this->db->insert_id();

    }
    public function add_house_img($house_id,$all_img,$main_img,$get_img_des){
        for($i=0; $i<count($all_img); $i++){
            for($j=0; $j<count($main_img); $j++){
                $is_main = 0;
                $str = explode('.',$all_img[$i]);
                if($str[0]==$main_img[$j]){
                    $is_main = 1;
                }
            }
            $data = array(
                'is_main'=>$is_main,
                'thumb_src'=>'uploads/'.$all_img[$i],
                'house_id'=>$house_id,
                'describe'=>$get_img_des[$i]
            );
            $this->db->insert('t_house_img', $data);
        }
    }
    public function add_house_facilitys($house_id,$facilitys){
        for($i=0; $i<count($facilitys); $i++){
            $data=array(
                'facility_type_id' =>$facilitys[$i],
                'house_id' => $house_id
            );
            $this->db->insert('t_facility',$data);
        }
    }
    public function get_house_info($id){
        $this->db->select('t_house.*,t_house_type.name as type_name,t_house_rent_type.name as rent_name');
        $this->db->from('t_house');
        $this->db->join('t_house_type','t_house.type_id=t_house_type.type_id');
        $this->db->join('t_house_rent_type','t_house.rent_type_id=t_house_rent_type.rent_type_id');
        $this->db->where('house_id',$id);
        return $this->db->get()->row();
    }
    public function get_house_facilitys($id){
        $this->db->select('t_facility_type.*');
        $this->db->from('t_facility_type');
        $this->db->join('t_facility','t_facility.facility_type_id=t_facility_type.facility_type_id');
        $this->db->where('t_facility.house_id',$id);
        return $this->db->get()->result();
    }
    public function get_house_img($id){
        $this->db->from('t_house_img');
        $this->db->where('house_id',$id);
        return $this->db->get()->result();
    }
    public function get_show_house_order($id){
        $this->db->from('t_order');
        $this->db->join('t_user','t_order.user_id=t_user.user_id');
        $this->db->where('house_id',$id);
        return $this->db->get()->result();
    }
    public function get_house_conmment($id){
        $this->db->from('t_conmment');
        $this->db->join('t_user','t_conmment.user_id=t_user.user_id');
        $this->db->join('t_comment_img','t_comment_img.comment_id=t_conmment.comment_id');
        $this->db->where('house_id',$id);
        return $this->db->get()->result();
    }
    public function get_show_house_collect($id){
        $this->db->from('t_collect');
        $this->db->join('t_user','t_user.user_id=t_collect.user_id');
        $this->db->where('house_id',$id);
        return $this->db->get()->result();
    }
    public function do_edit_house($title,$city,$street,$road,$type,$rent_type,$price,$isorder,$describe,$id){
        $data = array(
            'title' => $title,
            'city' => $city,
            'street' => $street,
            'road' => $road,
            'type_id' => $type,
            'rent_type_id' => $rent_type,
            'price' => $price,
            'is_order' => $isorder,
            'house_describe' => $describe,
        );
        $this->db->where('house_id', $id);
        return $this->db->update('t_house', $data);
    }
    public function do_edit_facilitys($id,$facilitys){
        $this->db->where('house_id', $id);
        $this->db->delete('t_facility');
        for($i=0; $i<count($facilitys); $i++){
            $data=array(
                'facility_type_id' =>$facilitys[$i],
                'house_id' => $id
            );
            $this->db->insert('t_facility',$data);
        }
    }
    public function del_img($img_id){
        $this->db->where('img_id', $img_id);
        return $this->db->delete('t_house_img');
    }

}