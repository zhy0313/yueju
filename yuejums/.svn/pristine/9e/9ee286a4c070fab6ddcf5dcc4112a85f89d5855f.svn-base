<?php
class Facility_model extends CI_Model{
    public function get_all($limit=7,$offset=0){
        $this->db->select("t_facility_type.*");
        $this->db->from("t_facility_type");
        $this->db->limit($limit,$offset);
        $query=$this->db->get();
        return $query->result();
    }
    public function get_all_count(){
        $this->db->select('*');
        $this->db->from('t_facility_type');
        return $number=$this->db->count_all_results();
    }
    public function del_facility($id)//通过id删除
    {
        $query = $this->db->delete('t_facility_type',array('facility_type_id' => $id));
        return $query;
    }
    public function add_facility($name,$img)//添加设施
    {
        $arr = array(
            "facility_type_id"=>'',
            'name'=>$name,
            'icon'=>$img
            );
        $this->db->insert('t_facility_type', $arr);

    }
    public function del_some_by_id($arr)//多选删除
    {

        $this->db->where_in('facility_type_id',$arr);
        $query = $this->db->delete('t_facility_type');

        return $this->db->affected_rows();
    }

    public function get_facility_by_id($id)
    {
        return $this->db->get_where('mytable', array('id' => $id))->row();
    }
}
?>