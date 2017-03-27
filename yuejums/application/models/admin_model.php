<?php
class Admin_model extends CI_Model{
    public function do_login($name,$pass)//密码登录common.php的内容
    {
        $query = $this->db->get_where("t_admin",array("name" => $name, "password" => $pass));
        return $query->row();
    }
    public function do_cancel_num()//获取取消订单且未处理的条数common.php的内容
    {
        $this->db->where("manage","0");
        return $this->db->count_all_results("t_cancel");
    }
    public function do_invoice_num()//获取未邮寄的发票的记录common.php的内容
    {
        $this->db->where("is_invoice","1");
        $this->db->where("is_post","0");

        // 两个条件，is_invoice=1和is_post=0
        return $this->db->count_all_results("t_order");
    }
    public function do_voice_num()//获取未处理的发票的记录common.php的内容
    {
        $this->db->where("is_invoice","1");
        $this->db->where("voiced","0");
        // 两个条件，is_invoice=1和is_post=0
        return $this->db->count_all_results("t_order");
    }
    //管理员信息更改
    public function get_admin_all()//管理员全部显示
    {
        return $this->db->get("t_admin")->result();
    }
    public function get_admin_by_id($id)//通过id查询管理员
    {
        $query=$this->db->get_where('t_admin',array('admin_id'=>$id));
        return $query->row();
    }
    public function do_add_admin($name,$password,$img,$is_super){//添加管理员
        $data = array(
            'admin_id'=>'',
            'name' => $name,
            'password' =>$password,
            'img_src' => $img,
            'is_super_admin'=>$is_super
        );

        $this->db->insert('t_admin', $data);
    }
    public function do_update($id,$name,$img){//管理员信息更改
        $arr=array(
            'name'=>$name,
            'img_src'=>$img,
        );
        $this->db->where('admin_id', $id);
        $query=$this->db->update('t_admin', $arr);
        return $query;
    }
    public function del_admin($id)//管理员删除
    {
        return $this->db->delete('t_admin',array('admin_id' => $id));
    }
}
?>