<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configs_model extends CI_Model {
	var $totaldb = null;
	
    public function __construct() {
		parent::__construct();
	}
        
        
     public function get_username() {
        $user_private["huanwei"] =array("name"=>"黄蔚","password"=>"fongqinyang123bphr","child"=>array("html","bbb" ));
        $user_private["huangwei"] =array("name"=>"黄蔚(海外)","password"=>"fengqinyang123bphr","child"=>array("html","bbb" ));
        $user_private["qihualiang"] =array("name"=>"祁华亮","password"=>"ygmm0217bphr","child"=>array("html","bbb" ));
        $user_private["songxiaoniang"] =array("name"=>"宋晓亮","password"=>"yiqishenggugegebphr","child"=>array("html","bbb" ));
        $user_private["nijie"] =array("name"=>"睨杰","password"=>"ouyangkebphr","child"=>array("html","bbb" ));
        $user_private["yukai"] =array("name"=>"虞凯","password"=>"huazhenbphr","child"=>array("html","bbb" ));
        $user_private["wufang"] =array("name"=>"吴芳","password"=>"yuebuqunbphr","child"=>array("html","bbb" ));
        $user_private["zhangwang"] =array("name"=>"张皖","password"=>"renwoxingbphr","child"=>array("html","bbb" ));
        $user_private["wangshun"] =array("name"=>"王顺","password"=>"guduqiubaibphr","child"=>array("html","bbb" ));
        $user_private["zhangwei"] =array("name"=>"张巍","password"=>"linhucongbphr","child"=>array("html","bbb" ));
        $user_private["mark"] =array("name"=>"mark","password"=>"xiaolongkefubphr","child"=>array("html","bbb" ));
        $user_private["lijuan"] =array("name"=>"李娟","password"=>"lijuananhuibbbphr","child"=>array("html","bbb" ));
        $user_private["huangbihong"] =array("name"=>"黄碧红","password"=>"huansangirlbphr","child"=>array("html","bbb" ));
        $user_private["kefu1"] =array("name"=>"客服","password"=>"fenwujiutianbphr","child"=>array("html","bbb" ));
        $user_private["huayuanhao"] =array("name"=>"化元豪","password"=>"shanchangyehaobphr","child"=>array("html","bbb" ));
        $user_private["huangzhongpao"] =array("name"=>"黄棕袍","password"=>"xuzhubphr","child"=>array("html","bbb" ));
        $user_private["qinzui"] =array("name"=>"秦醉","password"=>"wuyazhiloveapplebphr","child"=>array("html","bbb" ));
        $user_private["jiangzhi"] =array("name"=>"蒋志","password"=>"yuunjiangzhi","child"=>array("html","bbb" ));
        $user_private["yufei"] =array("name"=>"余飞","password"=>"yebuunyufeibphr","child"=>array("html","bbb" ));
         
        return $user_private;
    }



    public function get_navmenu() {

//        $nav_menu["首页"] =array("url"=>"shouye.html","cls"=>"icon-double-angle-right");
        $nav_menu["首页"] =array("url"=>"#","ns"=>"sy" ,"cls"=>"icon-double-angle-right","child"=>array(
            array("name"=>"首页","ns"=>"sy_sy" ,"url"=>"shouye.html","cls"=>"icon-double-angle-right"),
        ));
        
        $nav_menu["用户管理"] =array("url"=>"#","ns"=>"yhgl" ,"cls"=>"icon-double-angle-right","child"=>array(
            array("name"=>"用户信息管理","ns"=>"yhgl_wjxxxx" ,"url"=>"infodetail.html","cls"=>"icon-double-angle-right"),
            array("name"=>"黑名单信息管理","ns"=>"yhgl_hmdjl" ,"url"=>"infoblack.html","cls"=>"icon-double-angle-right"),
            array("name"=>"玩家列表","ns"=>"yhgl_wjlb" ,"url"=>"online.html","cls"=>"icon-double-angle-right"),
            array("name"=>"斗地主举报管理","ns"=>"yhgl_ddzreport" ,"url"=>"ddzreport.html","cls"=>"icon-double-angle-right"),
        ));

        $nav_menu["充值模块"] =array("url"=>"#","ns"=>"czmk" ,"cls"=>"icon-double-angle-right","child"=>array(
            array("name"=>"玩家订单查询","ns"=>"czmk_wjddcx" ,"url"=>"infodindan.html","cls"=>"icon-double-angle-right"),
            array("name"=>"充值数据分析","ns"=>"czmk_czsjfx" ,"url"=>"reportmoney.html","cls"=>"icon-double-angle-right"),
            array("name"=>"月充值统计","ns"=>"czmk_ycztj" ,"url"=>"reportycz.html","cls"=>"icon-double-angle-right"),
            array("name"=>"玩家充值排行","ns"=>"czmk_xiaoliang1" ,"url"=>"xiaoliang1.html","cls"=>"icon-double-angle-right"),
            array("name"=>"大玩家充值排名","ns"=>"czmk_dwjczpm" ,"url"=>"infogreatplay.html","cls"=>"icon-double-angle-right"),
            array("name"=>"充值渠道管理","ns"=>"czmk_czqdgl" ,"url"=>"payconduit.html","cls"=>"icon-double-angle-right"),
        ));
//
//        $nav_menu["兑换模块"] =array("url"=>"#","ns"=>"dhmk" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"玩家提现订单查询","ns"=>"dhmk_wjtxddcx" ,"url"=>"withdraworder.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"异常提现订单审核","ns"=>"dhmk_ycddsh" ,"url"=>"paywithdraw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"提现黑名单","ns"=>"dhmk_txhmd" ,"url"=>"withdrawblackuser.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"支付宝黑名单","ns"=>"dhmk_zfbhmd" ,"url"=>"withdrawblackalipay.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"提现充值关联倍数管理 ","ns"=>"dhmk_txczgkvsgk" ,"url"=>"withdrawmultiple.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"订单日志查询","ns"=>"dhmk_ddrzcx" ,"url"=>"withdrawlog.html","cls"=>"icon-double-angle-right"),
//        ));
//
//        $nav_menu["客服模块"] =array("url"=>"#","ns"=>"kfmk" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"玩家反馈建议","ns"=>"kfmk_wjfkyj" ,"url"=>"infoback.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家反馈区域分布","ns"=>"kfmk_wjfkyjqx" ,"url"=>"infoback_line.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"消息列表","ns"=>"kfmk_xxlb" ,"url"=>"systemmes.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"短信发送历史记录","ns"=>"sms" ,"url"=>"sms.html","cls"=>"icon-double-angle-right"),
//        ));
//
//        $nav_menu["数据统计"] =array("url"=>"#","ns"=>"sjtj" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"运营数据总表","ns"=>"sjtj_yysjzb" ,"url"=>"reporttotal.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"运营数据总表(月)","ns"=>"sjtj_yysjzbm" ,"url"=>"reporttotalm.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"游戏数据报表","ns"=>"sjtj_yxsjbb" ,"url"=>"reportgame.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"当前在线人数","ns"=>"sjtj_ddzxrs" ,"url"=>"reportonline.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"历史链接人数","ns"=>"sjtj_lsljsj" ,"url"=>"reportlink.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家每日净分分布","ns"=>"sjtj_wanshun1" ,"url"=>"wanshun1.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家每日净分排名100名","ns"=>"sjtj_wanshun2" ,"url"=>"wanshun2.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"游戏净分排名","ns"=>"sjtj_wanshun4" ,"url"=>"wanshun4.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"游戏版本运营数据分析","ns"=>"sjtj_wanshun8" ,"url"=>"wanshun8.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"在线玩家列表","ns"=>"kfmk_zxwjlb" ,"url"=>"onlineuser.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"百人牛牛庄家输赢","ns"=>"bairen66" ,"url"=>"bairen66.html","cls"=>"icon-double-angle-right"),
//        ));
//
//        $nav_menu["渠道管理"] =array("url"=>"#","ns"=>"qdgl" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"渠道列表","ns"=>"qdgl_channellist" ,"url"=>"channellist.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"渠道包列表","ns"=>"qdgl_channelpackagelist" ,"url"=>"channelpackagelist.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"待发布数据","ns"=>"qdgl_senddata" ,"url"=>"senddata.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"日数据分析","ns"=>"qdgl_dataanalysis" ,"url"=>"dataanalysis.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"月数据分析","ns"=>"qdgl_monthdata" ,"url"=>"monthdata.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"渠道实时数据","ns"=>"qdgl_datareal" ,"url"=>"datareal.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"发布设置","ns"=>"qdgl_releasesetting" ,"url"=>"releasesetting.html","cls"=>"icon-double-angle-right"),
//        ));
//
//        $nav_menu["代理管理"] =array("url"=>"#","ns"=>"dlgl" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"代理管理","ns"=>"dlgl_daili" ,"url"=>"daili.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"代理加钱管理","ns"=>"dlgl_money" ,"url"=>"daili_money.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"广告方案设置","ns"=>"dlgl_ggfasz" ,"url"=>"proxyad.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"代理数据表","ns"=>"dlgl_total" ,"url"=>"daili_total.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"代理明细表","ns"=>"dlgl_detail" ,"url"=>"daili_detail.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"代理聊天记录","ns"=>"dlgl_chat" ,"url"=>"daili_chat.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"用户分级管理","ns"=>"kfmk_zfxsgl" ,"url"=>"tagmanage.html","cls"=>"icon-double-angle-right"),
//        ));
//
//        $nav_menu["版本更新管理"] =array("url"=>"#","ns"=>"bbgxgl" ,"cls"=>"icon-double-angle-right","child"=>array(
////            array("name"=>"js平台升级版本管理","ns"=>"bbgxgl_jsupload" ,"url"=>"jsversion.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"js平台升级版本管理EX","ns"=>"bbgxgl_jsupload" ,"url"=>"jsversionex.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"IOS升级服务器管理","ns"=>"bbgxgl_ioszhenbaoshenji" ,"url"=>"packetupgradeios.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"整包升级服务器管理","ns"=>"bbgxgl_zhenbaoshenji" ,"url"=>"packetupgrade.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"模块升级服务器管理","ns"=>"bbgxgl_mokuaishenji" ,"url"=>"packetmodel.html","cls"=>"icon-double-angle-right"),
//        ));
//
//        $nav_menu["游戏配置"] =array("url"=>"#","ns"=>"yxpz" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"系统公告","ns"=>"yxpz_xtgg" ,"url"=>"castsys.html","cls"=>"icon-double-angle-right"),
//            //array("name"=>"游戏消息","ns"=>"yxpz_gamemessage" ,"url"=>"gamemessagecct.html","cls"=>"icon-double-angle-right"),
//            //array("name"=>"游戏参数配置","ns"=>"yxpz_configcenter" ,"url"=>"configcenter.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"游戏参数配置reids版","ns"=>"yxpz_configredis" ,"url"=>"config_redis.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"支付模式切换开关","ns"=>"payswich" ,"url"=>"payswich.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家行为配置","ns"=>"yxpz_wjxwpz" ,"url"=>"gamebehaviourconfig.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"新广告墙开关","ns"=>"yygl_nggqsd" ,"url"=>"castnewadv.html","cls"=>"icon-double-angle-right"),
//        ));

//        $nav_menu["运维管理"] =array("url"=>"#","ns"=>"ywgl" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"系统监控","ns"=>"ywgl_xitongjiankong" ,"url"=>"xitongjiankong.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(腾讯)","ns"=>"ywgl_proxyforddstx" ,"url"=>"proxyforddstx.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(兆维)","ns"=>"ywgl_proxyforddszw" ,"url"=>"proxyforddszw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(上海)","ns"=>"ywgl_proxyforddsgx" ,"url"=>"proxyforddsgx.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(广州)","ns"=>"ywgl_proxyforddsgz" ,"url"=>"proxyforddsgz.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(8080)","ns"=>"ywgl_proxyfordds8080" ,"url"=>"proxyfordds8080.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(8080老接口)","ns"=>"ywgl_proxyfordds8080d" ,"url"=>"proxyfordds8080d.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy二级代理","ns"=>"ywgl_proxyforddsej" ,"url"=>"proxyforddsej.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy批处理切换(8080)","ns"=>"ywgl_proxyfordds8080bat" ,"url"=>"proxyfordds8080bat.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy批处理切换(8080内网)","ns"=>"ywgl_proxyfordds8080batlw" ,"url"=>"proxyfordds8080batlw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy批处理切换(8080腾讯)","ns"=>"ywgl_proxyfordds8080bat1" ,"url"=>"proxyfordds8080bat1.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(捕鱼)","ns"=>"ywgl_proxyforddsfish" ,"url"=>"proxyforddsfish.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"js系统打包升级管理","ns"=>"ywgl_jzsd" ,"url"=>"typegame.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"gamesever切换","ns"=>"ywgl_switch" ,"url"=>"typeserver.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"世纪互联带宽监控","ns"=>"ywgl_watchctl" ,"url"=>"watchctl.html","cls"=>"icon-double-angle-right"),
//        ));

        $nav_menu["系统设置"] =array("url"=>"#","ns"=>"xtsz" ,"cls"=>"icon-double-angle-right","child"=>array(
            array("name"=>"管理员管理","ns"=>"xtsz_gly" ,"url"=>"manager.html","cls"=>"icon-double-angle-right"),
            array("name"=>"后台权限设定","ns"=>"xtsz_private" ,"url"=>"typeprivate.html","cls"=>"icon-double-angle-right"),
            array("name"=>"后台操作记录","ns"=>"xtsz_houtaicaozuojilu" ,"url"=>"wanshunfishlog.html","cls"=>"icon-double-angle-right"),
        ));

       // $nav_menu["系统信息"] =array("url"=>"sysmsg.html","cls"=>"icon-dashboard");
       // $nav_menu["全局数据"] =array("url"=>"globaldata.html","cls"=>"icon-text-width");
//        $nav_menu["渠道管理"] =array("url"=>"#","ns"=>"qdgl" ,"cls"=>"icon-edit","child"=>array(
//            array("name"=>"渠道列表","ns"=>"qdgl_channellist" ,"url"=>"channellist.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"待发布数据","ns"=>"qdgl_senddata" ,"url"=>"senddata.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"数据分析","ns"=>"qdgl_dataanalysis" ,"url"=>"dataanalysis.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"实时数据","ns"=>"qdgl_datareal" ,"url"=>"datareal.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"发布设置","ns"=>"qdgl_releasesetting" ,"url"=>"releasesetting.html","cls"=>"icon-double-angle-right"),
//        ));
//        $nav_menu["运维管理"] =array("url"=>"#","ns"=>"ywgl" ,"cls"=>"icon-desktop","child"=>array(
//            array("name"=>"系统监控","ns"=>"ywgl_xitongjiankong" ,"url"=>"xitongjiankong.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(腾讯)","ns"=>"ywgl_proxyforddstx" ,"url"=>"proxyforddstx.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(兆维)","ns"=>"ywgl_proxyforddszw" ,"url"=>"proxyforddszw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(上海)","ns"=>"ywgl_proxyforddsgx" ,"url"=>"proxyforddsgx.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(广州)","ns"=>"ywgl_proxyforddsgz" ,"url"=>"proxyforddsgz.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(8080)","ns"=>"ywgl_proxyfordds8080" ,"url"=>"proxyfordds8080.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy服务器切换(8080老接口)","ns"=>"ywgl_proxyfordds8080d" ,"url"=>"proxyfordds8080d.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy二级代理","ns"=>"ywgl_proxyforddsej" ,"url"=>"proxyforddsej.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy批处理切换(8080)","ns"=>"ywgl_proxyfordds8080bat" ,"url"=>"proxyfordds8080bat.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy批处理切换(8080内网)","ns"=>"ywgl_proxyfordds8080batlw" ,"url"=>"proxyfordds8080batlw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"Proxy批处理切换(8080腾讯)","ns"=>"ywgl_proxyfordds8080bat1" ,"url"=>"proxyfordds8080bat1.html","cls"=>"icon-double-angle-right"),
//
//            array("name"=>"Proxy服务器切换(捕鱼)","ns"=>"ywgl_proxyforddsfish" ,"url"=>"proxyforddsfish.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"js系统打包升级管理","ns"=>"ywgl_jzsd" ,"url"=>"typegame.html","cls"=>"icon-double-angle-right"),
//         //   array("name"=>"apk渠道包生成系统","ns"=>"ywgl_fjsd" ,"url"=>"typeroom.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"gamesever切换","ns"=>"ywgl_switch" ,"url"=>"typeserver.html","cls"=>"icon-double-angle-right"),
//         //   array("name"=>"版本控制","ns"=>"ywgl_version" ,"url"=>"typeversion.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"后台权限设定","ns"=>"ywgl_private" ,"url"=>"typeprivate.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"后台操作记录","ns"=>"ywgl_houtaicaozuojilu" ,"url"=>"wanshunfishlog.html","cls"=>"icon-double-angle-right"),
//           // array("name"=>"活动控制设置","ns"=>"ywgl_huodongkongzhishezhi" ,"url"=>"typegamehd.html","cls"=>"icon-double-angle-right"),
//            ));

//        $nav_menu["运营管理"] =array("url"=>"#","ns"=>"yygl" ,"cls"=>"icon-double-angle-right","child"=>array(
//            array("name"=>"系统公告","ns"=>"yygl_xtgg" ,"url"=>"castsys.html","cls"=>"icon-double-angle-right"),
//          //  array("name"=>"系统广播","ns"=>"yygl_xtgb" ,"url"=>"castgb.html","cls"=>"icon-double-angle-right"),
//        //    array("name"=>"活动设定","ns"=>"yygl_hdsd" ,"url"=>"castactive.html","cls"=>"icon-double-angle-right"),
//        //    array("name"=>"任务设定","ns"=>"yygl_rwsd" ,"url"=>"casttask.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"游戏消息","ns"=>"yygl_gamemessage" ,"url"=>"gamemessagecct.html","cls"=>"icon-double-angle-right"),
//           // array("name"=>"斗地主比赛场奖项","ns"=>"yygl_gameddzbisai1" ,"url"=>"gameddzbisai1.html","cls"=>"icon-double-angle-right"),
//         //   array("name"=>"斗地主比赛场","ns"=>"yygl_gameddzbisai" ,"url"=>"gameddzbisai.html","cls"=>"icon-double-angle-right"),
//          //  array("name"=>"斗地主升级管理","ns"=>"yygl_gameddzupload" ,"url"=>"gameddzupload.html","cls"=>"icon-double-angle-right"),
//          //  array("name"=>"斗地主排行奖励","ns"=>"yygl_gameddzpaihang" ,"url"=>"gameddzpaihang.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"销售商品管理","ns"=>"yygl_xsspgl" ,"url"=>"castgood.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"实物订单管理(话费)","ns"=>"yygl_swddgl" ,"url"=>"castshoporder.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"实物订单管理(实物)","ns"=>"yygl_swddglsw" ,"url"=>"castshopordersw.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"实物订单管理明细(京东)","ns"=>"yygl_jdddglsw" ,"url"=>"castshoporderjd.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"实物订单管理监控(京东)","ns"=>"yygl_jdjiankongddglsw" ,"url"=>"reporthisjd.html","cls"=>"icon-double-angle-right"),
////
////            array("name"=>"一元话费管理","ns"=>"yygl_yyhfgl" ,"url"=>"castshoporder1.html","cls"=>"icon-double-angle-right"),
//          //  array("name"=>"卡密管理管理","ns"=>"yygl_kamigl" ,"url"=>"castkami.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"广告墙开关","ns"=>"yygl_ggqsd" ,"url"=>"castadv.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"新广告墙开关","ns"=>"yygl_nggqsd" ,"url"=>"castnewadv.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"js平台升级版本管理","ns"=>"yygl_jsupload" ,"url"=>"jsversion.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"js平台升级版本管理EX","ns"=>"yygl_jsupload" ,"url"=>"jsversionex.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"IOS升级服务器管理","ns"=>"yygl_ioszhenbaoshenji" ,"url"=>"packetupgradeios.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"整包升级服务器管理","ns"=>"yygl_zhenbaoshenji" ,"url"=>"packetupgrade.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"模块升级服务器管理","ns"=>"yygl_mokuaishenji" ,"url"=>"packetmodel.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"审核和支付地址开关","ns"=>"payswich" ,"url"=>"payswich.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"短信发送历史记录","ns"=>"sms" ,"url"=>"sms.html","cls"=>"icon-double-angle-right"),
//            //array("name"=>"用户建议回复","ns"=>"suggest" ,"url"=>"suggest.html","cls"=>"icon-double-angle-right"),
//            //array("name"=>"在线客服","ns"=>"chat" ,"url"=>"chat.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"百人牛牛庄家输赢","ns"=>"bairen66" ,"url"=>"bairen66.html","cls"=>"icon-double-angle-right"),
//            ));
//        $nav_menu["运营报表"] =array("url"=>"#","ns"=>"yybb" ,"cls"=>"icon-list","child"=>array(
//           // array("name"=>"运营渠道分析","ns"=>"yybb_yyqdfx" ,"url"=>"reportanaly.html","cls"=>"icon-double-angle-right"),
//           // array("name"=>"运营渠道管理","ns"=>"yybb_yyqdgl" ,"url"=>"reportmanage.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"运营数据总表","ns"=>"yybb_yysjzb" ,"url"=>"reporttotal.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"运营数据总表(月)","ns"=>"yybb_yysjzbm" ,"url"=>"reporttotalm.html","cls"=>"icon-double-angle-right"),
//           // array("name"=>"平台数据总表","ns"=>"yybb_ptsjzb" ,"url"=>"reportsys.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"游戏数据报表","ns"=>"yybb_yxsjbb" ,"url"=>"reportgame.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"捕鱼运营总表","ns"=>"yybb_buyyzb" ,"url"=>"wanshunfish8.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"斗地主比赛运营总表","ns"=>"yybb_buyyzbddzbs" ,"url"=>"wanshunfish8ddzbs.html","cls"=>"icon-double-angle-right"),
////             array("name"=>"B类游戏比赛运营总表","ns"=>"yybb_buyyzbblbs" ,"url"=>"wanshunfish8blbs.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"电玩城运营总表","ns"=>"yybb_buyyzb" ,"url"=>"wanshunfish8dw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"当前在线人数","ns"=>"yybb_ddzxrs" ,"url"=>"reportonline.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"历史在线人数","ns"=>"yybb_lszxsj" ,"url"=>"reporthis.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"捕鱼历史在线人数","ns"=>"yybb_bulizxs" ,"url"=>"reporthisfish.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"历史链接人数","ns"=>"yybb_lsljsj" ,"url"=>"reportlink.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"金豆和保险箱变化表","ns"=>"yybb_coffee" ,"url"=>"reportcoffee.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"金豆和保险箱监控","ns"=>"yybb_coffee1" ,"url"=>"reportcoffee1.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"比赛场奖励监控","ns"=>"yybb_coffee2" ,"url"=>"reportcoffee2.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"充值数据分析","ns"=>"yybb_czsjfx" ,"url"=>"reportmoney.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"商城报表","ns"=>"yybb_scbb" ,"url"=>"reportshop.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"输赢机器人统计","ns"=>"yybb_syjqr" ,"url"=>"reportsyjqr.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"净分统计","ns"=>"yybb_cstj" ,"url"=>"reportcs.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"月充值统计","ns"=>"yybb_ycztj" ,"url"=>"reportycz.html","cls"=>"icon-double-angle-right"),
//
//            array("name"=>"玩家每日净分分布","ns"=>"yybb_wanshun1" ,"url"=>"wanshun1.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家每日净分排名100名","ns"=>"yybb_wanshun2" ,"url"=>"wanshun2.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"金豆和兑换卷全服分布","ns"=>"yybb_wanshun3" ,"url"=>"wanshun3.html","cls"=>"icon-double-angle-right"),
//
//            array("name"=>"游戏净分排名","ns"=>"yybb_wanshun4" ,"url"=>"wanshun4.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"充值贡献度排名","ns"=>"yybb_wanshun5" ,"url"=>"wanshun5.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家充值排行","ns"=>"yybb_xiaoliang1" ,"url"=>"xiaoliang1.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"游戏版本运营数据分析","ns"=>"yybb_wanshun8" ,"url"=>"wanshun8.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"游戏奖励查询","ns"=>"yybb_reportgamejl" ,"url"=>"reportgamejl.html","cls"=>"icon-double-angle-right"),
//            ));
//        $nav_menu["客服管理"] =array("url"=>"#","ns"=>"kfgl" ,"cls"=>"icon-edit","child"=>array(
//            array("name"=>"用户信息管理","ns"=>"kfgl_wjxxxx" ,"url"=>"infodetail.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"用户信息管理（研发）","ns"=>"kfgl_wjxxxx1" ,"url"=>"infodetail1.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"黑名单信息管理","ns"=>"kfgl_hmdjl" ,"url"=>"infoblack.html","cls"=>"icon-double-angle-right"),
//
//            array("name"=>"异常提现订单审核","ns"=>"kfgl_ycddsh" ,"url"=>"paywithdraw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"提现黑名单","ns"=>"kfgl_txhmd" ,"url"=>"withdrawblackuser.html","cls"=>"icon-double-angle-right"),
//
//            array("name"=>"玩家反馈建议","ns"=>"kfgl_wjfkyj" ,"url"=>"infoback.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家使用宝盒变化记录","ns"=>"kfgl_wjsybhbujl5" ,"url"=>"wanshunfishx5.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家游戏记录","ns"=>"kfgl_wjyyjl" ,"url"=>"inforecord.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家竞分报表","ns"=>"kfgl_wjjfbg" ,"url"=>"infojinfen.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家PK赛记录","ns"=>"kfgl_wjpksjl" ,"url"=>"infopk.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家话费赛记录","ns"=>"kfgl_wjhfsjl" ,"url"=>"infohf.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家金豆变化记录","ns"=>"kfgl_wjjdbh" ,"url"=>"infojindubianhua.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家赠送记录","ns"=>"kfgl_wjzsjl" ,"url"=>"infogive.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"宝盒赠送记录","ns"=>"kfgl_byzszsjl" ,"url"=>"infogivefish.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"幸运抽奖记录","ns"=>"kfgl_xycjjl" ,"url"=>"infogivefishjiang.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家赠送记录排行","ns"=>"kfgl_wjzsjlph" ,"url"=>"infogive1.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家输赢记录排行","ns"=>"kfgl_wjsyjlph" ,"url"=>"infogive2.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家兑换记录","ns"=>"kfgl_wjdhjl" ,"url"=>"infoexchange.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家任务记录","ns"=>"kfgl_wjrwjl" ,"url"=>"infotask.html","cls"=>"icon-double-angle-right"),
////            array("name"=>"玩家商城记录","ns"=>"kfgl_wjscjl" ,"url"=>"infoshop.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"大玩家充值排名","ns"=>"kfgl_dwjczpm" ,"url"=>"infogreatplay.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家订单查询","ns"=>"kfgl_wjddcx" ,"url"=>"infodindan.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家提现订单查询","ns"=>"kfgl_wjtxddcx" ,"url"=>"withdraworder.html","cls"=>"icon-double-angle-right"),

//            array("name"=>"玩家金豆排行","ns"=>"kfgl_wjjdph" ,"url"=>"infojindu.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家等级排行","ns"=>"kfgl_wjdjph" ,"url"=>"infolevel.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"开洗分记录","ns"=>"kfgl_kxfjl" ,"url"=>"infokaixi.html","cls"=>"icon-double-angle-right"),

            //));

//        $nav_menu["捕鱼项目"] =array("url"=>"#","ns"=>"buyuxianmu" ,"cls"=>"icon-edit","child"=>array(
//             array("name"=>"捕鱼游戏记录","ns"=>"yybb_wanshunfish1" ,"url"=>"wanshunfish1.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼使用技能记录","ns"=>"yybb_wanshunfish2" ,"url"=>"wanshunfish2.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼解锁炮台记录","ns"=>"yybb_wanshunfish3" ,"url"=>"wanshunfish3.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼使用互动表情记录","ns"=>"yybb_wanshunfish4" ,"url"=>"wanshunfish4.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家使用宝盒记录","ns"=>"yybb_wanshunfish5" ,"url"=>"wanshunfish5.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"掉落道具记录","ns"=>"yybb_wanshunfish6" ,"url"=>"wanshunfish6.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"钻石报表","ns"=>"yybb_zsbb" ,"url"=>"wanshunfish7.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼卡片查询","ns"=>"yybb_byukapianchaxun" ,"url"=>"wanshunfish71.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼竞技比赛","ns"=>"yybb_buyujinqibisai" ,"url"=>"wanshunfish72.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"玩家意见统计","ns"=>"yybb_wanjiayijian" ,"url"=>"wanshunfish9.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼任务查询","ns"=>"yybb_puyurenwuchaxun" ,"url"=>"wanshunfish10.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"一网打尽翻翻乐查询","ns"=>"yybb_yiwandajin" ,"url"=>"wanshunfish11.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"捕鱼大厅钻石抽奖查询","ns"=>"yybb_puyudatinzhshi" ,"url"=>"wanshunfish12.html","cls"=>"icon-double-angle-right"),
//               ));

//          $nav_menu["电玩城项目"] =array("url"=>"#","ns"=>"dianwanchengxianmu" ,"cls"=>"icon-edit","child"=>array(
//            array("name"=>"水果机游戏记录","ns"=>"dwcxianmu_wanshunfish1" ,"url"=>"wanshunfish1dw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"水果机猜大小记录","ns"=>"dwcxianmu_wanshunfish2" ,"url"=>"wanshunfish2dw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"寻宝记录","ns"=>"dwcxianmu_wanshunfish3" ,"url"=>"wanshunfish3dw.html","cls"=>"icon-double-angle-right"),
//            array("name"=>"皇家酒馆游戏记录","ns"=>"dwcxianmu_wanshunfish4" ,"url"=>"wanshunfish4dw.html","cls"=>"icon-double-angle-right"),
//              array("name"=>"皇家纸牌游戏记录","ns"=>"dwcxianmu_wanshunfish5" ,"url"=>"wanshunfish5dw.html","cls"=>"icon-double-angle-right"),
//              array("name"=>"皇家免费游戏记录","ns"=>"dwcxianmu_wanshunfish6" ,"url"=>"wanshunfish6dw.html","cls"=>"icon-double-angle-right"),
//
//            ));

       // $nav_menu["渠道管理"] =array("url"=>"qudao.html","cls"=>"icon-edit");
       // $nav_menu["合作伙伴"] =array("url"=>"hezuo.html","cls"=>"icon-list-alt");

        return $nav_menu;

    }


}
