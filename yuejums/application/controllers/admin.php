<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('house_model');
    }
    public function house()
    {
        $type_id = $this->input->get('type_id');
        $search = $this->input->get('search');
        $offset = $this->input->get('per_page');
        $totalrows = $this->house_model->get_all_house_num($type_id,$search);
        /*分页类配置*/
        $this->load->library('pagination');
        $config['base_url'] = 'admin/house/'.'?search='.$search.'&type_id='.$type_id;
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 5;
        $config['uri_segment']=5;
        $config['page_query_string'] = TRUE;
        $config['enable_query_strings'] = TRUE;
        $this->pagination->initialize($config);
        /*分页类配置结束*/
        $alltype = $this->house_model->get_all_type();
        $result = $this->house_model->get_by_page($type_id,$search,$config['per_page'],$offset);
        $arr=array(
            'house' => $result,
            'types' => $alltype
        );
        $this->load->view('house.php', $arr);
    }
    public function get_add_house_info(){
        $all_type = $this->house_model->get_all_type();
        $all_facility = $this->house_model->get_all_facility();
        $all_rent_type = $this->house_model->get_all_rent_type();
        $arr = array(
            'types' =>$all_type,
            'facilitys'=>$all_facility,
            'rent_types'=>$all_rent_type
        );
        echo json_encode($arr);
    }
    public function add_house(){
        $this->load->view('add_house');
    }
    public function show_house(){
        $this->load ->view('show_house');
    }
    public function edit_house(){
        $this->load ->view('edit_house');
    }
    public function do_add_house(){
        $all_img = $this->input->post('img');
        $main_img = $this->input->post('select_main');
//        var_dump($all_img);
//        var_dump($main_img);
//        die();
        if(count($all_img)){

            $get_img_des = $this->input->post('img_des');
            $title = $this-> input ->post('add_title');
            $city=$this->input->post('add_city');
            $street=$this->input->post('add_street');
            $road=$this->input->post('add_road');
            $type=$this->input->post('add_type');
            $rent_type=$this->input->post('add_rent_type');
            $facilitys=$this->input->post('facilitys');
            $price=$this->input->post('add_price');
            $isorder=$this->input->post('add_isorder');
            $describe=$this->input->post('add_describe');
            $house_id = $this->house_model->add_house($title,$city,$street,$road,$type,$rent_type,$price,$isorder,$describe);
            if(count($all_img)!=0){
                $this->house_model->add_house_img($house_id,$all_img,$main_img,$get_img_des);
            }
            if(count($facilitys)!=0){
                $query=$this->house_model->add_house_facilitys($house_id,$facilitys);
                if($query){
                    redirect('admin/house');
                }
                else{
                    echo '设施添加失败';
                }
            }

            redirect('admin/house');
        }else{
            echo '请上传图片！！！';
        }

    }
    public function del_house(){
        $id=$this->input->get('del_id');
        $query=$this->house_model->delete_house($id);
        if($query){
            redirect('admin/house');
        }else{
            echo '删除失败';
        }
    }
    public function del_some(){
        $house_id = $this->input->input_stream('deletes[]');
        if($house_id!=null){
            $query = $this->house_model->del_some($house_id);
            if($query){
                redirect('admin/house');
            }else{
                echo '删除失败';
            }
        }
        redirect('admin/house');
    }
    public function get_house_info(){
        $id = $this->input->get('id');
        $query = $this->house_model->get_house_info($id);
        $facilitys =$this->house_model->get_house_facilitys($id);
        $house_img = $this->house_model->get_house_img($id);
        $house_conmment = $this->house_model ->get_house_conmment($id);
        $arr =array(
            'house_info' => $query,
            'facilitys' => $facilitys,
            'house_img' => $house_img,
            'house_conmment' =>$house_conmment
        );
        echo json_encode($arr);
    }
    public function get_show_house_order(){
        $id = $this->input->get('id');
        $order =$this->house_model->get_show_house_order($id);
        echo json_encode($order);
    }
    public function get_show_house_collect(){
        $id = $this->input->get('id');
        $collect =$this->house_model->get_show_house_collect($id);
        echo json_encode($collect);
    }
    public function get_edit_house(){
        $id = $this->input->get('id');
        $all_type = $this->house_model->get_all_type();
        $all_facility = $this->house_model->get_all_facility();
        $all_rent_type = $this->house_model->get_all_rent_type();
        $query = $this->house_model->get_house_info($id);
        $facilitys =$this->house_model->get_house_facilitys($id);
        $house_img = $this->house_model->get_house_img($id);
        $arr = array(
            'types' =>$all_type,
            'facilitys'=>$all_facility,
            'rent_types'=>$all_rent_type,
            'house_info'=>$query,
            'has_facilitys'=>$facilitys,
            'house_img'=>$house_img
        );
        echo json_encode($arr);
    }
    public function do_edit_house(){
        $id=$this->input->get('houseid');
        $title = $this-> input ->post('add_title');
        $city=$this->input->post('add_city');
        $street=$this->input->post('add_street');
        $road=$this->input->post('add_road');
        $type=$this->input->post('add_type');
        $rent_type=$this->input->post('add_rent_type');
        $facilitys=$this->input->input_stream('facilitys[]');
        $price=$this->input->post('add_price');
        $isorder=$this->input->post('add_isorder');
        $describe=$this->input->post('add_describe');
        $all_img = $this->input->post('img');
        $main_img = $this->input->post('select_main');
        $get_img_des = $this->input->post('img_des');
        $this->house_model->add_house_img($id,$all_img,$main_img,$get_img_des);
        $this->house_model->do_edit_house($title,$city,$street,$road,$type,$rent_type,$price,$isorder,$describe,$id);
        $this->house_model->do_edit_facilitys($id,$facilitys);
        redirect('admin/house');
    }
    public function up_img(){
        /**
         * upload.php
         *
         * Copyright 2013, Moxiecode Systems AB
         * Released under GPL License.
         *
         * License: http://www.plupload.com/license
         * Contributing: http://www.plupload.com/contributing
         */

#!! IMPORTANT:
#!! this file is just an example, it doesn't incorporate any security checks and
#!! is not recommended to be used in production environment as it is. Be sure to
#!! revise it and customize to your needs.


// Make sure file is not cached (as it happens for example on iOS devices)
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        /*
        // Support CORS
        header("Access-Control-Allow-Origin: *");
        // other CORS headers if any...
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            exit; // finish preflight CORS requests here
        }
        */

// 5 minutes execution time
        @set_time_limit(5 * 60);

// Uncomment this one to fake upload time
// usleep(5000);

// Settings
        $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
        $targetDir = 'uploads/';
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds


// Create target dir
        if (!file_exists($targetDir)) {
            @mkdir($targetDir);
        }

// Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

// Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;


// Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }

            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }

                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }


// Open temp file
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

// Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }

// Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }
    public function del_img(){
        $img_id = $this->input->get('img_id');
        $this->house_model->del_img($img_id);
    }
    public function index()//查询admin表并返回值给admin.php
    {
        $this->load->model("admin_model");
        $result = $this->admin_model->get_admin_all();
        $arr = array(
            'blogs'=>$result
        );
        if ($result) {
            $this->load->view('admin',$arr);
        }else{
            $this->load->view('admin');
            echo "查询失败";
        }
    }
    public function login()//跳转登录页
    {
        $this->load->view('login');
    }
    public function do_login(){//登录并把登录信息存到session
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $this->load->model("admin_model");
        $this->admin_model->do_login($name,$password);
        $result = $this->admin_model->do_login($name,$password);
        $admin=$result;
        $result_cancel = $this->admin_model->do_cancel_num();
        $manage = $result_cancel;
        $result_manege = $this->admin_model->do_invoice_num();
        $invoice = $result_manege;
        $result_voice = $this->admin_model->do_voice_num();
        $voice = $result_voice;
        $arr = $arrayName = array(
            'admin' =>$admin,
            'manage'=>$manage,
            'invoice'=>$invoice,
            'voice'=>$voice
        );
        if($result){
            $this->session->set_userdata($arr);
            redirect("admin/house");	//控制器下方法,首页

        }else{
            echo "error";
        }
    }
    public function do_exit()//退出功能并删除session
    {
        $this->session->unset_userdata("admin");
        $this->session->unset_userdata("manage");
        $this->session->unset_userdata("invoice");
        if ($this->session->admin) {
            echo '<script>alert("退出失败")</script>';
            echo "点击此处<a href='".$this->session->uri."'>重新退出</a>";
        }else{
            redirect($this->session->uri);
        }
    }
    public function del_admin()//删除管理员
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $result = $this->admin_model->del_admin($id);
        if ($result) {
            redirect("admin/index");
            echo "<script>alert('删除成功')</script>";
        }else{
            echo "<script>alert('删除失败，请重新删除')</script>";
            redirect("admin/index");
        }

    }
    public function add_admin(){
        $this->load->view('add_admin');
    }
    public function edit_admin(){
        $this->load->view('admin_update');
    }
    public function get_edit_admin(){//ajax网页面传修改前的值
        $id =$this->input->get(id);
        $this->load->model('admin_model');
        $rs = $this->admin_model->get_admin_by_id($id);
        echo $rs;
    }
    public function get_add_admin(){//添加管理员

         $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 3096;
        $config['file_name']     = date("YmdHis")."_".rand(10000,99999);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img'))
        {
            $is_super = $this->input->post('is_super');
           $password = $this->input->post('password');
            $name = $this->input->post("name");
                $upload_date=$this->upload->date();
            $img = 'upload/'.$upload_date['raw_name'].$upload_date['file_ext'];
            $this->load->model('admin_model');
            $result = $this->admin_model->do_add_admin($name,$password,$img,$is_super);
            if ($result) {
                redirect('admin/index');
            }
        }
        else
        {
//             $error = array('error' => $this->upload->display_errors());
//             var_dump($error);
        // $this->load->view('admin', $error);
            echo "文件上传失败";
        }
    }
    public function update_admin()
    {
        $password = $this->input->post('password');
//        $pass = $this->session->admin->password;
//        $id = $this->session->admin->admin_id;
        $name = $this->input->post("name");
        $img = $this->input->post("img-src");
        $this->load->model('admin_model');
        $result = $this->admin_model->do_update($id,$name,$img);
        if ($result) {
            redirect("admin/index");
        }
        else{
            redirect("admin/index");
        }
    }

    public function order($title = 0, $offset = 0){
        $title = $this -> input -> get('title');
        //加载order_model.php
        $this -> load -> model('order_model');
        $total_rows = $this -> order_model -> get_all_count($title);
        /*分页配置信息开始*/
        $this->load->library('pagination');

        $config['base_url'] = 'order/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 6; //每页显示的数量
        $config['uri_segment'] = 2; //第二段
        $config['reuse_query_string'] = true;  //查询后分页
        $this->pagination->initialize($config);

        $offset = $this -> uri -> segment(2); //第二段
        $offset = !$offset ? 0 : $offset;  //判断
        /*分页配置信息结束*/

        //查所有订单 分页
        $orders = $this -> order_model -> get_by_page($title, $config['per_page'], $offset);
        $this -> load -> view('order', array('orders' => $orders,));
    }//订单
    public function order_mes(){
        $this -> load -> view('admin/order_mes');
    }
    //弹出层信息获取
    public function gain(){
        $id = $this -> input -> get('orderid');
        $this -> load -> model('order_model');
        $query = $this -> order_model-> get_order($id);
        if($query){
            echo json_encode($query);
        }

    }
}
