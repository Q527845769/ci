<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('common/header'); ?>

    <body>
<script id="datamodel1" type="text/html" >
	<tr>
		<td class="left">${id}</td>
		<td class="left">${uname}</td>
		<td class="left">${pwd}</td>
		<td class="left">${realname}</td>
	  	<td class="left">${adtime}</td>
		<td class="left" style="color:${s2}">${s}</td>
		<td class="left">
			<button class="btn btn-xs btn-success" onclick="javascript:status('${id}')" style="margin-top:1px;">
				<span class="bigger-110">${s1}</span>
				<i class="icon-on-right"></i>
			</button>
			<button onclick="javascript:mod('${id}')" class="btn btn-xs btn-success ">
				<span class="bigger-110">修改</span>
				<i class="icon-on-right"></i>
			</button>
			<button onclick="javascript:del('${id}')" class="btn btn-xs btn-success " >
				<span class="bigger-110">删除</span>
				<i class="icon-on-right"></i>
			</button>
		</td>
	</tr>
</script>
<script id="datamodel2" type="text/html">
				<table class="table table-striped table-bordered table-hover">
                  <tr>
                    <td>用户名<input name="id" id="iid" type="hidden" value="${id}"></td>
                    <td><input type="text" id="uname" name="uname" placeholder="用户名" class="col-xs-10 col-sm-8" style="height:30px;width:200px;margin-right:5px" value="${uname}"></td>
                  </tr>
                  <tr>
                    <td>真实姓名</td>
                    <td><input type="text" id="realname" name="realname" placeholder="真实姓名" class="col-xs-10 col-sm-8" style="height:30px;width:200px;margin-right:5px" value="${realname}"></td>
                  </tr>
                  <tr>
                    <td>密码</td>
                    <td><input type="text" id="pwd" name="pwd" placeholder="密码" class="col-xs-10 col-sm-8" style="height:30px;width:200px;margin-right:5px" value="${pwd}"></td>
                  </tr>
                </table>

</script>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
						aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="myModalLabel">
					管理员管理
				</h4>
			</div>
			<div class="modal-body" id="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" 
						data-dismiss="modal">关闭
				</button>
				<button type="button" class="btn btn-primary" onClick="save()">
					提交更改
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <?php $this->load->view('common/message', $message); ?>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

          <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>

                <div class="sidebar" id="sidebar">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch (e) {
                        }
                    </script>

                    <?php $this->load->view('common/nav_shortcut'); ?>

                    <?php $this->load->view('common/nav_left1', $systemconfig, $choose, $menucheck); ?>

                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>

                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'collapsed')
                        } catch (e) {
                        }
                    </script>
                </div>


            <div class="main-content">
                    <?php $this->load->view('common/nav_top', $header1); ?>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <!--<?php //$this->load->view('common/nav_top2', $header3);       ?>  -->

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 widget-container-span">
                                        <div class="widget-box">
                                            <div class="widget-header header-color-blue2">
                                                <h5><i class="icon-arrow-left"></i><?php  echo $header1["child"] ?></h5>

                                                
                                            </div>

                                            <div class="widget-toolbox padding-8 clearfix">

                                                <button onclick="javascript:reflesh()" class="btn btn-xs btn-success " style="margin-top:1px;">
                                                    <span class="bigger-110">刷新</span>
                                                    <i class="icon-search icon-on-right"></i>
                                                </button>

                                                <a href="javascript:mod('0')" class="btn btn-xs btn-success " style="margin-top:1px;">
                                                    <span class="bigger-110">添加</span>
                                                    <i class="icon-plus icon-on-right"></i>
                                                </a>  
                                            </div>

                                            <div class="widget-body">

                                                <div class="widget-main"  style ="padding:0;">
                                                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                                        <thead id="targethead">
                                                            <tr>
                                                                <th class="left">管理员id</th>
                                                                <th class="left">用户名</th>
                                                                <th>密码</th>
                                                                <th>真实姓名</th>
                                                                <th>时间</th>
                                                                <th>状态</th>
                                                                <th width="260">操作</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody id="targetbody">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /row -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
              </div><!-- /.main-content -->

              <div class="ace-settings-container" id="ace-settings-container">
                  <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                      <i class="icon-cog bigger-150"></i>
                  </div>

                  <div class="ace-settings-box" id="ace-settings-box">
                      <div>
                          <div class="pull-left">
                              <select id="skin-colorpicker" class="hide">
                                  <option data-skin="default" value="#438EB9">#438EB9</option>
                                  <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                  <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                  <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                              </select>
                          </div>
                          <span>&nbsp; Choose Skin</span>
                      </div>

                      <div>
                          <input type="checkbox"  class="ace ace-checkbox-2" id="ace-settings-navbar"  />
                          <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                      </div>

                      <div>
                          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"  />
                          <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                      </div>

                      <div>
                          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                          <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                      </div>

                      <div>
                          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                          <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                      </div>

                      <div>
                          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                          <label class="lbl" for="ace-settings-add-container">
                              Inside
                              <b>.container</b>
                          </label>
                      </div>
                  </div>
              </div><!-- /#ace-settings-container -->
            </div><!-- /.main-container-inner -->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='../res/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>


    <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='../res/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="../res/js/bootstrap.min.js"></script>
        <script src="../res/js/typeahead-bs2.min.js"></script>

        <!-- ace scripts -->
        <script src="../res/js/ace-elements.min.js"></script>
        <script src="../res/js/ace.min.js"></script>
        <script src="../res/js/jspacket.js"></script>
        <!-- inline scripts related to this page -->

        <script type="text/javascript">
			//刷新
            function reflesh() {
                get_online_data();
            }
			//保存
			function save(){
				var packet = {
					id:$("#iid").val(),
					uname:$("#uname").val(),
					realname:$("#realname").val(),
					pwd:$("#pwd").val(),
				};
				function onsuccess(data) {
					$('#myModal').modal('hide');
					reflesh();
				}
				function onerrors(data) {
					// alert(objtostr(data))
				}
				jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/manager/save", packet, onsuccess, onerrors);			
			}
			//增加修改
			function mod(id){
				var packet = {
					id:id
				};
				function onsuccess(data) {
					var datax = eval("(" + data + ")");
					$("#modal-body").html($("#datamodel2").tmpl(datax));
					$('#myModal').modal('show');
				}
				function onerrors(data) {
					// alert(objtostr(data))
				}
				jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/manager/mod", packet, onsuccess, onerrors);
			}
			//更改status
            function status(id) {

                function onsuccess(data) {
                    get_online_data();
                }
                function onerrors(data) {
                    alert('修改不成功！');
                }

                var packet = {
                    id: id,
                };
                jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/manager/updateStatus", packet, onsuccess, onerrors);
            }
			//删除
			function del(id){
				var packet = {
					id:id
				};
				function onsuccess(data) {
					get_online_data();
				}
				function onerrors(data) {
					// alert(objtostr(data))
				}
				jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/manager/del", packet, onsuccess, onerrors);
			}
			
			function get_online_data() {
				var packet = {
					action: 'get_online_data',
				};
				function onsuccess(data) {
					$(".pageitemnum").removeClass("hide");
					$(".pageitemleft").removeClass("disabled");
					$(".pageitemright").removeClass("disabled");
					var datax = eval("(" + data + ")");
					if(datax["status"]=="1"){
						alert("userid或帐号至少填一个！");
						return ;
					}
					allcount = datax["count"];
					
	
					$(".pageitemnum").each(function(e) {
						if (e * 20 < allcount) {
							$(this).children("a").html(e + parseInt(beginindex / 10) * 10 + 1);
						} else {
							$(this).addClass("hide");
						}
					})

					//$("#sample-table-2_info").html(msg);
					$("#targetbody").html($("#datamodel1").tmpl(datax["detail"]));
				}
				function onerrors(data) {
					// alert(objtostr(data))
				}
				jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/manager/get_back_data", packet, onsuccess, onerrors);
        }
		get_online_data();
        </script>
    </body>
</html>


