<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Typeprivate extends MY_Controller {
	public function __construct() {
		parent::__construct(true, false);
                if(empty($this->SMC_NO3_YG)){
                  //  header("location:".$this->config->item('name_domain')."/helloto33/login.html");
                }
                 $this->load->model('configs_model','configs');
                 $this->load->helper('other');
	}
        
    public function save_private_data() {
        $data = $this->input->get_post('data');
      //  file_put_contents(DYCONFIG."private_data.log1", $data, LOCK_EX);
        echo file_put_contents(DYCONFIG."private_data.log",$data,LOCK_EX);
    }
    
   public function get_private_data() {
        $result = array();
        $username = $this->configs->get_username();
        $systemconfig = $this->configs->get_navmenu();

        foreach ($username as $key => $value) {
            foreach ($systemconfig as $k1 => $row1) {
                foreach ($row1["child"] as $k2 => $row2) {
                    $key1 = $key;
                    $name1 = $row2["ns"];
                    $result[$name1][$key] = 1;
                }
            }
        }
        $myfilename = DYCONFIG."private_data.log";
        if (file_exists($myfilename)) {
            $saveres = file_get_contents($myfilename, LOCK_EX);
             $rxry = json_decode($saveres);
             foreach ($rxry as $rx => $ry){
                  foreach ($ry as $key => $val){
                      $result[$rx][$key] = $rxry->$rx->$key;
                   }
             }
        }
        echo json_encode($result);
    }

    public function index() {
        
        $menucheck = array();
        $myfilename = DYCONFIG."private_data.log";
        if (file_exists($myfilename)) {
            $saveres = file_get_contents($myfilename, LOCK_EX);
             $rxry = json_decode($saveres);
             foreach ($rxry as $rx => $ry){
                  foreach ($ry as $key => $val){
                      $menucheck[$rx][$key] = $rxry->$rx->$key;
                   }
             }
        }        
        $usernamezz = $this->SMC_NO3_YG;
        $result = array();
        $username = $this->configs->get_username();
        $systemconfig = $this->configs->get_navmenu();

        foreach ($username as $key => $value) {
            foreach ($systemconfig as $k1 => $row1) {
                foreach ($row1["child"] as $k2 => $row2) {
                    $key1 = $key;
                    $name1 = $row2["ns"];
                    $result[$name1][$key] = 1;
                }
            }
        }
        
        $myfilename = DYCONFIG."private_data.log";
        if (file_exists($myfilename)) {
            $saveres = file_get_contents($myfilename, LOCK_EX);
             $rxry = json_decode($saveres);
             foreach ($rxry as $rx => $ry){
                  foreach ($ry as $key => $val){
                      $result[$rx][$key] = $rxry->$rx->$key;
                   }
             }
        }
        $data = array(
            "systemconfig" => $this->configs->get_navmenu(),
            "menucheck" => $menucheck,
            "message" => array("username" => $usernamezz, "mail" => "aaa"),
            "gamelist" => $this->config->item('gamecode'),
            "username" => $this->configs->get_username(),
            "channellist" => $this->config->item('channellist'),
            "plist" => json_encode($result),
            "choose" => array("father" => "系统设置", "child" => "后台权限设定"),
            "header1" => array("father" => "系统设置", "child" => "后台权限设定"),
            "header2" => array("father" => "系统设置", "child" => "编辑后台人员的权限。 "),
            "header3" => array("father" => "后台权限设定创建于2014年7月23日", "child" => " 后台权限设定从2014年7月25日开始 (v1.0) "),
        );
        $this->load->view('typeprivateview', $data);
    }


}
