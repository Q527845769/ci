<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends MY_Controller {
    
    public $menucheck = array();

    public function __construct() {
        parent::__construct(false, false);
        if (empty($this->SMC_NO3_YG)) {
            header("location:" . $this->config->item('name_domain') . "/login.html");
        }
        $this->load->model('configs_model', 'configs');
        $this->load->helper('other');
        $this->db = $this->load->database('default', true);
        
        $myfilename = DYCONFIG . "private_data.log";
        if (file_exists($myfilename)) {
            $saveres = file_get_contents($myfilename, LOCK_EX);
            $rxry = json_decode($saveres);
            foreach ($rxry as $rx => $ry) {
                foreach ($ry as $key => $val) {
                    $this->menucheck[$rx][$key] = $rxry->$rx->$key;
                }
            }
        }
    }

    public function index() {
       $data = array(
            "systemconfig" => $this->configs->get_navmenu(),
            "menucheck" => $this->menucheck,
            "message" =>array("username"=> $this->SMC_NO3_YG,"mail"=>"aaa"),
            "choose" => array("father" => "系统设置", "child" => "管理员管理"),
            "header1" => array("father" => "管理员管理", "child" => "管理员列表"),
        );
        $this->load->view('managerview', $data);
    }

    public function updateStatus() {
        $id = $this->input->get_post('id');
        $row= $this->db->get_where("manager",array("id"=>$id))->row_array();
        if ($row["status"]==1) {
            $this->db->update('manager', array("status"=>0), "id =".$id);
        }else{
            $this->db->update('manager', array("status"=>1), "id =".$id);
        }
        $res = $this->db->affected_rows();
        echo $res;
    }
    
    public function get_back_data() {
        $list=$this->db->from("manager")->order_by("status desc,id asc")->get()->result_array();
        foreach ($list as &$vo) {
            $vo["s"]=$vo["status"]==1?"启用":"停用";
            $vo["s1"]=$vo["status"]==1?"停用":"启用";
            $vo["s2"]=$vo["status"]==1?"":"red";
        }
        echo json_encode(array("count"=>count($list),"detail"=>$list));
    }
    
    public function mod() {
        $id = $this->input->get_post('id');
        if(empty($id))
            die(json_encode (array("id"=>$id,"uname"=>"","realname"=>"","pwd"=>"")));
        $row=$this->db->get_where("manager",array("id"=>$id))->row_array();
        echo json_encode($row);
    }
    
    public function save() {
        $id = $this->input->get_post('id');
        $data=array(
            "uname" => $this->input->get_post('uname'),
            "realname" => $this->input->get_post('realname'),
            "pwd" => $this->input->get_post('pwd')
        );
        if ($id==0) {
            $data["adtime"] = time();
            $data["status"] = 1;
        }
        if ($id==0) {
            $this->db->insert('manager', $data);
        }else{
            $this->db->update('manager', $data, "id =".$id);
        }
        $res = $this->db->affected_rows();
        echo $res;
    }
    
    public function del() {
        $id = $this->input->get_post('id');
        $this->db->delete('manager', "id =".$id);
        $res = $this->db->affected_rows();
        echo $res;
    }
}
