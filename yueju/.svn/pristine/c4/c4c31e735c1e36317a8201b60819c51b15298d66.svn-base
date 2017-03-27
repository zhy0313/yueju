<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Sure_model extends CI_Model{
    public function add($start_time,$end_time,$phone_num,$id){
        $data = array(
            'start_time' => $start_time,
            'end_time' => $end_time,
            'phone_num' => $phone_num
        );
        $this->db->where('house_id', $id);
        $this->db->insert('t_order', $data);
    }
}
?>
