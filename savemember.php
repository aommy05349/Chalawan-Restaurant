<?
include("config.inc.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
$id=$_POST["member_id"];


$personid=$_POST["personid"];
$uname=$_POST["uname"];
$lname=$_POST["lname"];
$sex=$_POST["sex"];
$add=$_POST["add"];
$phon=$_POST["phon"];


$sql="select * from project.member where member_id='$id'";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==0){
		
		
		?>
		<script>
		alert('ไม่พบข้อมุลในระบบ');
		</script>
		<?
		echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=./a_member.php'>";
	}else{
		
		$sql="update project.member set member_personid='$personid',member_name='$uname',member_surname='$lname',
		member_title='$sex',member_address='$add',member_phone='$phon' where member_id='$id'";
		mysql_query($sql);
		
		
	echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=./a_member.php'>";
	}

?>