<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
include("config.inc.php");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from project.member where member_username='$username' and member_password='$password' limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result)>0){
	while($rows=mysql_fetch_assoc($result)){
		$_SESSION['id']=$rows['member_id'];
		$_SESSION['member_name']=$rows['member_name'];
		$_SESSION['member_surname']=$rows['member_surname'];
	}
	echo "<meta http-equiv='refresh' content='0;url=./'>"; //refresh เพื่อสู่ระบบ
}else{
	?>
	<script>
		alert('ไม่พบชื่อผู้ใช้นี้');
	</script>
	<?
	echo "<meta http-equiv='refresh' content='0;url=./'>"; //refresh กลับไปหน้า Login
}


?>