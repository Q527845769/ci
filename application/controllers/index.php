<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {
	public function __construct() {
		parent::__construct(false, false);
                if(empty($this->SMC_NO3_YG)){
                    //header("location:".$this->config->item('name_domain')."/login.html");
                }
                 $this->load->model('configs_model','configs');
                 $this->load->helper('other');
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
           $data =array(
               "systemconfig" => $this->configs->get_navmenu(),
               "menucheck" => $menucheck,
               "message" =>array("username"=> $usernamezz,"mail"=>"aaa"),
               "choose" => array("father"=>"运营报表","child"=>"当前在线人数"),
               "header1" => array("father"=>"运营报表","child"=>"当前在线人数"),
               "header2" => array("father"=>"二人麻将","child"=>"在线人数实时统计 "),
               "header3" => array("father"=>"二人麻将后台创建于2014年5月20日","child"=>" 游戏运营从2014年5月25日开始 (v1.0) "),
          );
           $this->load->view('indexview',$data);
  
	}
}

