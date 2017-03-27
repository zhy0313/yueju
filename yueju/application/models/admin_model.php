<?php
/**
 * Created by PhpStorm.
 * User: 王双丽
 * Date: 2017/2/6
 * Time: 2:58
 */
class Admin_model extends CI_Model {
    public function do_login($name,$pass)
    {
        $query = $this->db->get_where("t_user",array("username" => $name, "password" => $pass));
        return $query->row();
    }
}
