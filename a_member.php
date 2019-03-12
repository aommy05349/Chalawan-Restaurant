<?
include("config.inc.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?include("head.php");?>
</head>
<body style="font-family:verdana;">
<div class="main">

<?include("header.php");?>
<center>
<div style="width:1280px;height:auto;min-height:800px;border:0px solid red;">

<?include("main_menu.php");?>
		
<div style="float:left;width:900px;height:auto;min-height:100px;margin-top:50px;border:0px solid red;">	


<?

if($_GET['id']>0){
	?>
	<form action="savemember.php" method="POST">
	
	<table style="width:40%;">
	<tr><td colspan="2" style="text-align:center;font-weight:bold;font-size:18px;">แก้ไขข้อมูลสมาชิก</td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>

	<?
$id=$_GET['id'];
$sql="select * from project.member where member_id='$id' order by member_id limit 1";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){
	?>
	<input type="hidden" name="member_id" value="<?echo $rows['member_id'];?>"/>
		
		
		<tr><td>ชื่อผู้ใช้</td>
		<td>
		<input type="text" value="<?echo $rows['member_username'];?>" name="usname" style="width:96px;" disabled />
		<input type="button" value="ลบ" style="width:40px;" onclick="if(confirm('ลบผู้ใช้ ?')){window.location.href='del_member.php?id=<?echo $rows['member_id'];?>'}"/>
		</td>
		</tr>
		<tr><td>คำนำหน้า</td><td><input type="text" value="<?echo $rows['member_title'];?>" name="sex" style="width:140px;"/></td></tr>
		<tr><td>ชื่อ</td><td><input type="text" value="<?echo $rows['member_name'];?>" name="uname" style="width:140px;"/></td></tr>
		<tr><td>นามสกุล</td><td><input type="text" value="<?echo $rows['member_surname'];?>" name="lname" style="width:140px;"/></td></tr>
		<tr><td>เบอร์โทร</td><td><input type="text" value="<?echo $rows['member_phone'];?>" name="phon" style="width:140px;"/></td></tr>
		<tr><td>หมายเลขบัตรประชาชน</td><td><input type="text" value="<?echo $rows['member_personid'];?>" name="personid" style="width:140px;"/></td></tr>
		<tr><td>ที่อยู่</td>
		
		<td><textarea id="addx" name="add" cols="25" rows="3" ><?echo $rows['member_address'];?></textarea>
		
		
		</td></tr>
		<tr>
		<td></a></td>
		<td><input type="submit" value="Save"/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="a_member.php"><input type="button" value="Cancel"/></a></a></td>
		</tr>
	
		
		
	
	<?
	
	}
?>
</table>
</form>
<?
}else{

?>
<table style="width:100%;">
<tr><td colspan="8" style="text-align:left;font-weight:bold;font-size:18px;">รายชื่อสมาชิก</td></tr>

<tr>
	<td style="font-weight:bold;">#</td>
	<td style="font-weight:bold;">ชื่อผู้ใช้</td>
	<td style="font-weight:bold;">คำนำหน้า</td>
	<td style="font-weight:bold;">ชื่อ</td>
	<td style="font-weight:bold;">นามสกุล</td>
	<td style="font-weight:bold;">เบอร์โทร</td>
	<td style="font-weight:bold;">เลขบัตรประชาชน</td>
	<td style="font-weight:bold;">ที่อยู่</td>
	<td style="font-weight:bold;">แก้ไข</td>
</tr>
<?
$i=1;
$sql="select * from project.member order by member_id";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){?>
		
		<tr>
		<td><?echo $i++;?></td>
		<td><?echo $rows['member_username'];?></td>
		<td><?echo $rows['member_title'];?></td>
		<td><?echo $rows['member_name'];?></td>
		<td><?echo $rows['member_surname'];?></td>
		<td><?echo $rows['member_phone'];?></td>
		<td><?echo $rows['member_personid'];?></td>
		<td><?echo $rows['member_address'];?></td>
		<td><a href="a_member.php?id=<?echo $rows['member_id'];?>"><img src="images/edit2.png" style="width:25px;cursor:pointer;"></a></td>
		<td><?echo $rows['member_image'];?></td>
		
		</tr>
		
	<?}?>
	</table>
	<?
}	
	
	
?>	

</div>

</div>
</center>
</body>
</html>
