<?php
class Message_model extends CI_Model {
    public function get_message($userid){
        $this->db->from('t_message');
        $this->db->where('sender',-1);
        if($userid){
            $this->db->where('receiver',$userid);
        }
        $this->db->order_by('message_id','desc');
        $this->db->limit(4);
        return $this->db->get()->result();
    }
}


?>