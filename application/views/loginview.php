<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('no3/common/header'); ?>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="icon-leaf green"></i>
                                    <span class="red"></span>
                                    <span class="white">666后台</span>
                                </h1>
                                <h4 class="blue">&copy; </h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="icon-coffee green"></i>
                                                请输入您的个人信息：
                                            </h4>

                                            <div class="space-6"></div>

                                            <!--<form action="<?php //echo $this->config->item('name_domain');?>/helloto33/login" method="post">-->
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" id="Username" name= "Username" class="form-control" placeholder="Username" />
                                                            <i class="icon-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" id="Password" name= "Password" class="form-control" placeholder="Password" />
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="input-icon input-icon-right">
                                                            <input type="text" id="Code" name= "Code" class="form-control" placeholder="验证码" />
                                                        </span>
                                                        <span><?php echo $oneCode;?></span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Remember Me</span>
                                                        </label>

                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary" onclick="login()">
                                                            <i class="icon-key"></i>
                                                            Login
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            <!--</form>-->


                                            <div class="social-login center">
                                            </div>
                                        </div><!-- /widget-main -->

                                        <div class="toolbar clearfix">
<!--                                            <div>-->
<!--                                                <a href="#" onclick="show_box('forgot-box');-->
<!--                                                                                                        return false;" class="forgot-password-link">-->
<!--                                                    <i class="icon-arrow-left"></i>-->
<!--                                                    I forgot my password-->
<!--                                                </a>-->
<!--                                            </div>-->
<!---->
<!--                                            <div>-->
<!--                                                <a href="#" onclick="show_box('signup-box');-->
<!--                                                                                                        return false;" class="user-signup-link">-->
<!--                                                    I want to register-->
<!--                                                    <i class="icon-arrow-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
                                        </div>
                                    </div><!-- /widget-body -->
                                </div><!-- /login-box -->

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="icon-key"></i>
                                                Retrieve Password
                                            </h4>

                                            <div class="space-6"></div>
                                            <p>
                                                Enter your email and to receive instructions
                                            </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" />
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="icon-lightbulb"></i>
                                                            Send Me!
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /widget-main -->

                                        <div class="toolbar center">
                                            <a href="#" onclick="show_box('login-box');
                                                                                                return false;" class="back-to-login-link">
                                                Back to login
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /widget-body -->
                                </div><!-- /forgot-box -->

                                <div id="signup-box" class="signup-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="icon-group blue"></i>
                                                New User Registration
                                            </h4>

                                            <div class="space-6"></div>
                                            <p> Enter your details to begin: </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" />
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Username" />
                                                            <i class="icon-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Password" />
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Repeat password" />
                                                            <i class="icon-retweet"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl">
                                                            I accept the
                                                            <a href="#">User Agreement</a>
                                                        </span>
                                                    </label>

                                                    <div class="space-24"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                                            <i class="icon-refresh"></i>
                                                            Reset
                                                        </button>

                                                        <button type="button" class="width-65 pull-right btn btn-sm btn-success">
                                                            Register
                                                            <i class="icon-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="toolbar center">
                                            <a href="#" onclick="show_box('login-box');
                                                                                                return false;" class="back-to-login-link">
                                                <i class="icon-arrow-left"></i>
                                                Back to login
                                            </a>
                                        </div>
                                    </div><!-- /widget-body -->
                                </div><!-- /signup-box -->
                            </div><!-- /position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.main-container -->

   

        <!-- basic scripts -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='../res/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>

        <!--[if IE]>
        <script type="text/javascript">
        window.jQuery || document.write("<script src='../res/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='../res/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>

        <!--[if IE]>
        <script type="text/javascript">
        window.jQuery || document.write("<script src='../res/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->

        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='../res/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="../res/js/bootstrap.min.js"></script>
        <script src="../res/js/typeahead-bs2.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="../res/js/excanvas.min.js"></script>
        <![endif]-->

        <!-- ace scripts -->
        <script src="../res/js/ace-elements.min.js"></script>
        <script src="../res/js/ace.min.js"></script>
        <script src="../res/js/jspacket.js"></script>
        <!-- inline scripts related to this page -->



        <script type="text/javascript">
            function show_box(id) {
                jQuery('.widget-box.visible').removeClass('visible');
                jQuery('#' + id).addClass('visible');
            }
            
            function login() {

                function onsuccess(data) {
                    var rs = eval(data);

                    if(rs.result == 1){
                        location.href = rs.msg;
                    } else {
                        alert(rs.msg);
                        location.reload();
                    }
                    //location.reload();
                }
                function onerrors(data) {
                    alert('登陆不成功！');
                }

                var packet = {
                    username: $('#Username').val(),
                    password: $('#Password').val(),
                    code: $('#Code').val()
                };
                jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/helloto33/login/login_submit", packet, onsuccess, onerrors);
            }
        </script>
    </body>
</html>