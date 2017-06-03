<div id="modal-tree-items" class="modal" tabindex="-1">
	<div class="modal-dialog" style="width: 450px; margin-top: 100px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<label id="myidx" class="blue bigger" style="font-size: 18px;"></label>：<label
					id="mytitlex" class="blue bigger" style="font-size: 18px;"></label>
				<div id="functionname" class="hidden"></div>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" id="form-role">
					<div class="space-4"></div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"
							for="form-field-y"> 说明： </label>
						<div id="myhanyi" class="col-sm-9" style="font-size: 16px"></div>
					</div>
					<div class="space-4"></div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"
							for="form-field-y"> 操作提示： </label>
						<div id="myaction" class="col-sm-9" style="font-size: 16px"></div>
					</div>
					<div id="myhtml-tools"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-sm" data-dismiss="modal">
					<i class="ace-icon fa fa-times"></i>取消
				</button>
				<button class="btn btn-sm btn-primary" onclick="tools_dosave();">
					<i class="ace-icon fa fa-check"></i>执行
				</button>
			</div>
		</div>
	</div>
</div>

<div id="modal-tree-showItems" class="modal" tabindex="-2">
	<div class="modal-dialog" style="width: 450px; margin-top: 100px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<label name="tools_idx" class="blue bigger" style="font-size: 18px;"></label>：<label
					 name="tools_titlex" class="blue bigger" style="font-size: 18px;"></label>
			</div>
			<div class="modal-body" >
				<form class="form-horizontal" role="form" id="form-role-show">
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-sm" data-dismiss="modal">
					<i class="ace-icon fa fa-times"></i>取消
				</button>
			</div>
		</div>
	</div>
</div>

<script id="dataItemhtml" type="text/html">
<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-m"> ${introwords}： </label>
	<div class="col-sm-9" style="font-size: 16px">{{html chosehtml}}</div>
</div>
</script>
<script type="text/javascript">

var tools_id;
var tools_title;
var tools_myactionname;
var tools_introduce;
var tools_functionname;
var tools_modules;
var tools_func;
var flag = 0;
/**
 * 弹窗进行修改参数组件
 * javascript:tools_modify(['id',${id}],'审核操作','请选择您的审核结果，并填入操作理由', '异常审核',{'status':['结果','radio',[{'1':'通过','2':'拒绝'}]],'reason':['理由','text','']},'paywithdraw/checkUnusual')
 * @id	['id',${id}] 相关主键id，需要修改的参数的主键或者唯一条件
 * @title 弹窗标题
 * @myactionname  操作提示
 * @introduce 说明文字
 * @modules 需要修改的参数,规则参考{'字段名':['文字描述','类型',[选项或者文字描述]]} {'status':['结果','radio',[{'1':'通过','2':'拒绝'}]],'reason':['理由','text','']}
 * functionname 操作地址 'paywithdraw/checkUnusual'
 */
function tools_modify(id,title,myactionname,introduce,modules,functionname,func){
	this.tools_id = id;
	this.tools_title = title;
	this.tools_myactionname = myactionname;
	this.tools_introduce = introduce;
	this.tools_functionname = functionname;
	this.tools_modules = modules;
	this.tools_func = func;

    $("#myidx").html(id[1]);
    $("#mytitlex").html(title);
    $("#myaction").html(myactionname);
    $("#myhanyi").html(introduce);
//     var modules= {'status':['选项','radio',[{'1':'通过','2':'拒绝'}]],'reason':['描述','text','']};
	var dataItems = [];
    for(var index in modules){
        var chosehtml = '';
        var module = modules[index];
        switch(module[1]){
        	case 'radio':
            	var i=0;
            	for(var key in module[2][0]){
                	var checkhtml = i==0?'checked':'';
                	chosehtml += '<label><input '+checkhtml+' name="'+index+'" type="radio" value="'+key+'" />'+module[2][0][key]+' </label>'
                	i++;
            	}
            	break;
        	case 'text':
            	chosehtml =	'<input type="text" name="'+index+'" value="'+module[2]+'" class="col-xs-20 col-sm-10" style="margin-left: 10px; width: 230px;" />'
            	break; 
        }
		var dataItem = {'introwords':module[0],'chosehtml':chosehtml}
        dataItems.push(dataItem);
    }
//     $("#dataItemhtml").tmpl(dataItems).appendTo('#form-role');
    $("#myhtml-tools").html($("#dataItemhtml").tmpl(dataItems));
    $('#modal-tree-items').modal('show');
}

/**
 * 弹窗进行修改参数组件
 * javascript:tools_add('审核操作','请选择您的审核结果，并填入操作理由', '异常审核',{'status':['结果','radio',[{'1':'通过','2':'拒绝'}]],'reason':['理由','text','']},'paywithdraw/checkUnusual')
 * @title 弹窗标题
 * @myactionname  操作提示
 * @introduce 说明文字
 * @modules 需要修改的参数,规则参考{'字段名':['文字描述','类型',[选项或者文字描述]]} {'status':['结果','radio',[{'1':'通过','2':'拒绝'}]],'reason':['理由','text','']}
 * functionname 操作地址 'paywithdraw/checkUnusual'
 */
function tools_add(title,myactionname,introduce,modules,functionname,func){
	this.tools_title = title;
	this.tools_myactionname = myactionname;
	this.tools_introduce = introduce;
	this.tools_functionname = functionname;
	this.tools_modules = modules;
	this.tools_func = func;

	$("#mytitlex").html(title);
	$("#myaction").html(myactionname);
	$("#myhanyi").html(introduce);
//     var modules= {'status':['选项','radio',[{'1':'通过','2':'拒绝'}]],'reason':['描述','text','']};
	var dataItems = [];
	for(var index in modules){
		var chosehtml = '';
		var module = modules[index];
		switch(module[1]){
			case 'radio':
				var i=0;
				for(var key in module[2][0]){
					var checkhtml = i==0?'checked':'';
					chosehtml += '<label><input '+checkhtml+' name="'+index+'" type="radio" value="'+key+'" />'+module[2][0][key]+' </label>'
					i++;
				}
				break;
			case 'select':
				chosehtml = '<select class="col-xs-20 col-sm-10" style="margin-left: 10px; width: 230px;"  name="'+index+'">';
				for(var key in module[2][0]){
					chosehtml += '<option value="'+key+'">'+module[2][0][key]+'</option>'
					i++;
				}
				chosehtml += '</select>';
				break;
			case 'text':
				chosehtml =	'<input type="text" name="'+index+'" placeholder="'+module[2]+'" class="col-xs-20 col-sm-10" style="margin-left: 10px; width: 230px;" />'
				break;
		}
		var dataItem = {'introwords':module[0],'chosehtml':chosehtml}
		dataItems.push(dataItem);
	}
//     $("#dataItemhtml").tmpl(dataItems).appendTo('#form-role');
	$("#myhtml-tools").html($("#dataItemhtml").tmpl(dataItems));
	$('#modal-tree-items').modal('show');
}
function tools_dosave(){
	if(flag==1)return;
	flag = 1;
	var packet = {};
	if(this.tools_id!=null){
    	packet[this.tools_id[0]] = this.tools_id[1];
	}
	var func = this.tools_func;
    for(var index in this.tools_modules){
    	switch(this.tools_modules[index][1]){
         	case 'radio':
            	packet[index] = $("[name='"+index+"']:checked").val();
             	break;
         	case 'text':
            	packet[index] = $("[name='"+index+"']").val()
             	break;
			case 'select':
				packet[index] = $("[name='"+index+"']").val()
				break;
		}
    }
    function onsuccess(data) {
		flag=0;
        var datax = eval("(" + data + ")");
        if(datax.status==1){
            alert("处理成功");
			if(undefined!=func){
				$('#modal-tree-items').modal('hide');
				func();
			}else {
				setTimeout(window.location.reload(), 1000);
			}
        }else{
            alert(datax.message);
        }
//         $('#modal-tree-items').modal('hide');    
    }
    function onerrors(data) {
		flag=0;
        alert(JSON.stringify(data));
    }
    jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/helloto33/"+this.tools_functionname, packet, onsuccess, onerrors);
}

/**
 * 弹窗显示信息
 * javascript:tools_show(['id',${id}],'订单详情','paywithdraw/get_order_info',{'orderid':'订单号','userid':'用户userid','money':'订单金额','tax':'手续费','ordertime1':'时间'})
 * @id	['id',${id}] 相关主键id，需要显示的参数的主键或者唯一条件
 * @title 弹窗标题
 * @functionname 操作地址 'paywithdraw/checkUnusual'
 * @keyarray 需要显示的字段与类型，格式参考 {'orderid':'订单号','userid':'用户userid'}
 */
function tools_show(id,title,functionname,keyarray){
	if(flag==1)return;
	flag = 1;
    $('#modal-tree-showItems').find('[name="tools_idx"]').html(id[1]);
    $('#modal-tree-showItems').find('[name="tools_titlex"]').html(title);
	var packet = {};
	packet[id[0]] = id[1];
    function onsuccess(data) {
		flag=0;
        var datax = eval("(" + data + ")");
    	var dataItems = [];
        for(var node in keyarray){
        	for(var node2 in datax){
                if(node==node2){
            		var dataItem = {'introwords':keyarray[node],'chosehtml':datax[node2]};
                	dataItems.push(dataItem);
                	break;
                }
            }
        }
        $("#form-role-show").html($("#dataItemhtml").tmpl(dataItems));
        $('#modal-tree-showItems').modal('show');
    }
    function onerrors(data) {
		flag=0;
        alert(JSON.stringify(data));
    }
    jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/helloto33/"+functionname, packet, onsuccess, onerrors);
	
}
/**
 * 非弹窗修改信息
 * @param id
 * @param modules
 * @param functionname
 */
function tools_edit(id,modules,functionname,func){
	if(flag==1)return;
	flag = 1;
	packet = modules;
	modules[id[0]] = id[1];
	function onsuccess(data) {
		flag=0;
		var datax = eval("(" + data + ")");
		if(datax.status==1){
			alert("操作成功");
			if(undefined!=func){
				func();
			}else{
				setTimeout(window.location.reload(),1000);
			}
		}else{
			alert(datax.message);
		}
	}
	function onerrors(data) {
		flag=0;
		// alert(objtostr(data))
	}
	if(confirm('确认操作吗？')){
		jQuery.comm.sendmessage(window.location.protocol + "//" + window.location.host + "/helloto33/"+functionname, packet, onsuccess, onerrors);
	}else{
		flag=0;
	}
}
</script>