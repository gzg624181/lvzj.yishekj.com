<?php require_once(dirname(__FILE__).'/inc/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>打款成功</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<link href="templates/style/menu1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/getuploadify.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="templates/js/getjcrop.js"></script>
<script type="text/javascript" src="templates/js/getinfosrc.js"></script>
<script type="text/javascript" src="plugin/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugin/calendar/calendar.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
<script type="text/javascript" src="layer/layer.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style>
.input {
    width: 325px;
    height: 35px;
    border-radius: 3px;
}
.input1 {    width: 280px;
    height: 35px;
    border-radius: 3px;
}
</style>
<script>
function tuijian(){
     if($("#money").val() == "")
	{
		layer.alert("请输入打款金额！",{icon:2});
		$("#money").focus();
		return false;
	}
	}
</script>
</head>
<body>
<?php
//初始化参数
$adminlevel=$_SESSION['adminlevel'];
?>
<?php if($action=="success"){ ?>
<input type="hidden" name="adminlevel" id="adminlevel" value="<?php echo $adminlevel;?>" />
<div class="topToolbar"> <span class="title" style="text-align:center;">打款成功</span> <a title="刷新" href="javascript:location.reload();" class="reload" style="float:right; margin-right:35px;"><i class="fa fa-refresh" aria-hidden="true"></i></a></div>

	<div class="formSubBtn" style="float:left; margin-left:95px;margin-top: 15px;">
  <input type="submit" class="submit" value="打款成功" />
  <input type="button" class="back" value="返回" onclick="history.go(-1);" />
  </div>
<?php }elseif($action=="failed"){ ?>
  <input type="hidden" name="adminlevel" id="adminlevel" value="<?php echo $adminlevel;?>" />
  <div class="topToolbar"> <span class="title" style="text-align:center;"> 提现申请失败</span> <a title="刷新" href="javascript:location.reload();" class="reload" style="float:right; margin-right:35px;"><i class="fa fa-refresh" aria-hidden="true"></i></a></div>

  	<div class="formSubBtn" style="float:left; margin-left:95px;margin-top: 15px;">
    <input type="submit" class="submit" value=" 提现申请失败" />
    <input type="button" class="back" value="返回" onclick="history.go(-1);" />
    </div>
<?php } ?>
</body>
</html>
