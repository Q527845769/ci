<div class="hr hr32 hr-dotted"></div>
<div class="row">
</div>
<div class="hr hr32 hr-dotted"></div>
</div>
</div>
</div>
</div>
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
            <span>&nbsp; 选择皮肤</span>
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
</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
</div>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/res/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
</script>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/res/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
    if ("ontouchend" in document)
        document.write("<script src='/res/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="/res/js/bootstrap.min.js"></script>
<script src="/res/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/res/js/excanvas.min.js"></script>
<![endif]-->
<script src="/res/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/res/js/jquery.ui.touch-punch.min.js"></script>
<script src="/res/js/jquery.slimscroll.min.js"></script>
<script src="/res/js/jquery.easy-pie-chart.min.js"></script>
<script src="/res/js/jquery.sparkline.min.js"></script>
<script src="/res/js/flot/jquery.flot.min.js"></script>
<script src="/res/js/flot/jquery.flot.pie.min.js"></script>
<script src="/res/js/flot/jquery.flot.resize.min.js"></script>
<script src="/res/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/res/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="/res/js/date-time/moment.min.js"></script>
<script src="/res/js/date-time/daterangepicker.min.js"></script>
<script src="/res/js/chosen.jquery.min.js"></script>
<script src="/res/js/fuelux/fuelux.spinner.min.js"></script>
<script src="/res/js/jquery.knob.min.js"></script>
<script src="/res/js/jquery.autosize.min.js"></script>
<script src="/res/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="/res/js/jquery.maskedinput.min.js"></script>
<script src="/res/js/bootstrap-tag.min.js"></script>
<!-- ace scripts -->
<script src="/res/js/jquery.dataTables.min.js"></script>
<script src="/res/js/jquery.dataTables.bootstrap.js"></script>
<script src="/res/js/ace-elements.min.js"></script>
<script src="/res/js/ace.min.js"></script>
<script src="/res/js/jspacket.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        $("#id_date_picker_1").val(getdate(-24*60*60));
        $("#id_date_picker_2").val(getdate(0));
        $(".pageitemnum").addClass("hide");
        $(".pageitemleft").addClass("disabled");
        $(".pageitemright").addClass("disabled");
        $(".pageitemnum").bind("click", function() {
            $(".pageitemnum").removeClass("active");
            $(this).addClass("active");
            beginindex = parseInt($(this).children("a").html());
            get_online_data();
        });

        $(".pageitemleft").bind("click", function() {
            if (!$(this).hasClass("disabled")) {
                $(".pageitemnum").each(function(e) {
                    var tmp = parseInt($(this).children("a").html()) - 10;
                    if (tmp <= 0)
                        return;
                    $(this).children("a").html(tmp);
                })
            }
        });

        $(".pageitemright").bind("click", function() {
            if (!$(this).hasClass("disabled")) {
                $(".pageitemnum").each(function(e) {
                    var tmp = parseInt($(this).children("a").html()) + 10;
                    if (tmp * 20 > allcount)
                        return;
                    $(this).children("a").html(tmp);
                });
            }
        });


        $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function() {
            $(this).next().focus();
        });


        $('#id_date_picker_1').datepicker({autoclose:true}).on(ace.click_event, function(){
            $("#id_date_picker_1").focus();
        });
        $('#id_date_picker_2').datepicker({autoclose:true}).on(ace.click_event, function(){
            $("#id_date_picker_2").focus();
        });

        $(".zshdate1").bind("click",function(){
            $("#id_date_picker_1").focus();
        });

        $(".zshdate2").bind("click",function(){
            $("#id_date_picker_2").focus();
        });


        $('#id_time_picker_1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        }).on(ace.click_event, function(){
            $("#id_time_picker_1").focus();
        });

        $('#id_time_picker_2').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false
        }).on(ace.click_event, function(){
            $("#id_time_picker_2").focus();
        });

        $(".zshtime1").bind("click",function(){
            $("#id_time_picker_1").focus();
        });

        $(".zshtime2").bind("click",function(){
            $("#id_time_picker_2").focus();
        });


        $(".zsh-select").chosen({disable_search_threshold: 50});

        $("#form_field_select_3_chosen").addClass("col-xs-10 col-sm-2");

        $("#form_field_select_3_chosen").attr("style","width:250px;height:32px;");


    });

</script>
</body>
</html>
