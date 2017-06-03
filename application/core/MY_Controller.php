<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 扩展CI的主控制器类
 * 请开发人员自己的页面控制器一定要继承本扩展类，而不要直接继承CI_Controller
 * 因为后续的全系统逻辑，比如页面请求统计
 * 
 * @author ARTFANTASY (artfantasy@gmail.com)
 * @version 2011.04.30 18:10
 */

class MY_Controller extends CI_Controller {
	public $username = null;
	public $uid = null;
        public $SMC_NO3_YG = null;


        /**
	 * 构造函数会根据传入参数的不同，而决定是否需要做特殊处理
	 * 默认处理方式是：
	 * 判断登录：	如果已登录，则本台服务器上生成登录SESSION，页面控制中可以直接使用SESSION，或者直接$this->username得到当前登录用户名,$this->uid得到uid
	 * 			如果未登录，则根据参数选择是否跳转到登录页，并告知登录页，登录成功后请跳回本页
	 * 
	 * 参数详解：
	 * $need_login：取值如下
	 * true: 默认值，进行登录判断
	 * false: 代表不需要进行登录判断等操作，后面两参数也将无效
	 * 
	 * $login_redirect_url:取值如下
	 * '': 空值，也是默认值，如果用户未登录，将跳转到登录页，并告知登录页，登录成功后请跳回本页
	 * [HTTP URL]: 一个URL，如果用户未登录，将跳转到登录页，并告知登录页，登录成功后请跳到HTTP URL
	 * false: 关闭未登录跳转，用户未登录时，不进行任何跳转，继续执行程序，一般AJAX访问时，需要设置此值为false，然后自己在页面控制器中可进行未登录用户该执行的操作
	 * 
	 * $logout_redirect_msg:未登录跳转到登录页面时，登录页面会将这个参数的值展示在页面中，给予用户友好的提示，可传空或不传
	 * 
	 * @param boolean $need_login 是否需要判断登录逻辑
	 * @param mixed $login_redirect_url　如果需要登录逻辑，假如用户未登录时该执行的操作
	 * @param string $logout_redirect_msg　如果需要登录逻辑，假如用户未登录时，跳转到登录页时，在登录页中的提示信息
	 */
    function __construct($need_login = true, $login_redirect_url = '', $logout_redirect_msg = '') {
        parent::__construct();
        $this->load->library('session');
        //$this->SMC_NO3_YG = $this->session->userdata('SMC_NO3_YG');
        $this->SMC_NO3_YG = "huangwei";
       
        $myfilename = "../application/logforview/log-".date("Y-m-d").".json";
        $data = array();
        //var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
        $user_IP = !empty($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
        $user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
//        $user_IP =!empty($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] :
//                    (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] :
//                    (!empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown'));
//        
        $data["TIME"] =  date("Y-m-d H:i:s");
        
        $data["IP"] =  $user_IP;
        $data["ROLE"] = $this->SMC_NO3_YG;
        $data["URL"] = $_SERVER['PHP_SELF'];
        $data["PARAM"] = json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
        
        if(($data["URL"] != "/helloto33/typeprivate/save_private_data")&&($data["URL"] !="/helloto33/castshoporder/send_number")){
          file_put_contents($myfilename,",".json_encode($data)."\n", FILE_APPEND );
        }
        
        if($need_login) {
	        $islogin = $this->_islogin();
	        if(!$islogin && $login_redirect_url !== false) {	//如果未明确声明不允许跳转，则跳转
	        	$this->_gologin($login_redirect_url = '', $logout_redirect_msg = '');
	        }
        }
    }
    
    /**
     * 判断是否登录
     * 
     * @return boolean 如果用户已登录，返回true,并且给类成员username和uid赋值,　未登录时则返回false
     */
    protected function _islogin() {
		$this->load->library('login_lib');
		$islogin = $this->login_lib->init_login();
    
		if($islogin) {	//已登录
			$this->username = $_SESSION['SMC_USERNAME'];
			$this->uid = intval($_SESSION['SMC_UID']);
			$this->gid = intval($_SESSION['SMC_GID']);
			return true;
		} else {
			return false;
		}
    }
    
    protected function _gologin($login_redirect_url = '', $logout_redirect_msg = '') {
		if(!function_exists('base_url')) {
			$this->load->helper('url');
		}
		
		$curr_url = $login_redirect_url == '' ? current_url() : $login_redirect_url;
		$msg = empty($logout_redirect_msg) ? '' : "&msg=" . urlencode(base64_encode($logout_redirect_msg));
		header("location:". site_url(LOGIN_URI) ."?gourl=" . urlencode($curr_url) . $msg);
		exit;
    }
}