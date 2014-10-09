<?php 
require('./include/init.php');

$subtime  = time();
$stunum   = $_POST['stunum']+0;
$stuname  = $_POST['stuname'];
$stumajor = $_POST['stumajor'];
$stuphone = $_POST['stuphone']+0;
$stuemail = $_POST['stuemail'];
$dptA     = isset($_POST['dptA'])+0;
$dptB     = isset($_POST['dptB'])+0;
$selfdesc = $_POST['selfdesc'];

$sql = "insert into submits (subtime,stunum,stuname,stumajor,stuphone,stuemail,dptA,dptB,selfdesc) 
values ($subtime,$stunum,'$stuname','$stumajor',$stuphone,'$stuemail',$dptA,$dptB,'$selfdesc')";
$result = mysql_query($sql, $conn);
if ($result) {
	echo '报名成功！';
} else {
	echo '报名失败！';
}

?>