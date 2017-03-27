<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function cancel_view(){
        $this->load->view('cancel_details.php');
        /** 加载ajax的页面 */
    }
    public function cancel_detail(){
        $id=$this->input->post('cancel_id');
        $this->load->model('cancel_model');
        $detail=$this->cancel_model->get_by_id($id);
        echo json_encode($detail);
    }
    public function cancel($manage=0,$offset=0){
        /** @$manage 种类 --已同意，已拒绝，未处理 */
        if($manage!=0){
            $manage=$this->uri->segment(3);
        }
        else if($manage==null){
            $manage=0;
        }      
        $cancelagid=$this->input->get('cancelagid');
        $cancelreid=$this->input->get('cancelreid');
        $id_search=$this->input->get('id_search');
        $username_search=$this->input->get('username_search');
        $title_search=$this->input->get('title_search');
        $this->load->model('cancel_model');
        $offset=$this->input->get('per_page');
        $this->cancel_model->update_by_manage1($cancelagid);
        $this->cancel_model->update_by_manage2($cancelreid);
        $total_rows=$this->cancel_model->get_all_counts($manage,$id_search,$username_search,$title_search);
        $this->load->library('pagination');
        $config['base_url'] = 'Order/cancel/'.$manage.'?id_search='.$id_search.'&username_search='.$username_search.'&title_search='.$title_search;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 3;
        $config['first_link'] = '首页';
        $config['last_link'] = '尾页';
        $config['prev_link']='上一页';            
        $config['next_link']='下一页';  
        $config['first_tag_open']='<li>';      
        $config['first_tag_close']='</li>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li class="cancel_active cancel_selected"><a href="Order/cancel/'.$manage.'?id_search='.$id_search.'&per_page='.$offset.'&username_search='.$username_search.'&title_search='.$title_search.'" class="cancel_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';  
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li class="cancel_prev">';
        $config['prev_tag_close']='</li>';
        $this->pagination->initialize($config);
        $result=$this->cancel_model->get_by_page($manage,$id_search,$username_search,$title_search,$config['per_page'],$offset);
        $this->load->view('cancel.php',array(
            'rs' => $result
        ));
    }
}
?>

