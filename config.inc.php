<?
if(!isset($_SESSION)) {
	session_start();
}
	
$conn = mysql_connect("localhost","root","123123") or die("Cannot connect server");
mysql_select_db("project",$conn) or die("Cannot connect database");	
mysql_query($conn,"SET NAMES UTF8");
date_default_timezone_set('Asia/Bangkok');

?>