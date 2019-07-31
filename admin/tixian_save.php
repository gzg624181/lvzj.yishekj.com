<?php	require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('postmode');

/*
**************************
(C)2010-2015 phpMyWind.com
update: 2014-5-30 17:37:10
person: Feng
**************************
*/


//初始化参数
$tbname = '#@__tixian_record';
$gourl  = 'tixian.php';


//引入操作类
require_once(ADMIN_INC.'/action.class.php');


if($action == 'pick_money'){ //添加打款记录

//打款成功之后，将状态改为2

$dosql->ExecNoneQuery("UPDATE pmw_tixian SET state=2 WHERE uid=$uid and type='$type'");

//打款成功之后，如果营销活动的总开关是关闭的，则将个人申请提现的开关关闭
if($type == "agency"){
 $tbnames = "pmw_agency";
}elseif($type == "guide"){
 $tbnames = "pmw_guide";
}

if($cfg_task=="N"){
  $dosql->ExecNoneQuery("UPDATE $tbnames set cashmoney=0 where uid=$uid and type='$type'");
}

$chargetime = strtotime($chargetime);
$dosql->ExecNoneQuery("INSERT INTO `$tbname` (uid, type, cardname,cardnumber,money,addtime) VALUES ($uid, '$type', '$cardname','$cardnumber',$money,$chargetime)");
$gourl= "success_pickmoney.php?action=success";
header("location:$gourl");

}elseif($action="pick_money_failed"){  //申请提现失败
  //更改状态为1，和添加理由
  $dosql->ExecNoneQuery("UPDATE pmw_tixian set state=1,reason='$reason' where uid=$uid and type='$type'");
  $gourl= "success_pickmoney.php?action=failed";
  header("location:$gourl");

}


//无条件返回
else
{
    header("location:$gourl");
	exit();
}
?>
