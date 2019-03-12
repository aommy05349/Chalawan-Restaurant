<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
include("config.inc.php");

$id=$_GET['id'];

$sql="delete from project.member where member_id='$id'";
mysql_query($sql);


echo "<meta http-equiv='refresh' content='0;url=./a_member.php'>";
?>