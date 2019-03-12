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
	<form action="savefood.php" method="POST">
	
	<table style="width:40%;">
	<tr><td colspan="2" style="text-align:center;font-weight:bold;font-size:18px;">แก้ไขข้อมูลอาหาร</td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>

	<?
$id=$_GET['id'];
$sql="select * from project.food where food_id='$id' order by food_name limit 1";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){
	?>
	<input type="hidden" name="food_id" value="<?echo $rows['food_id'];?>"/>
		
		
		<tr><td>ชื่ออาหาร</td>
		<td>
		<input type="text" value="<?echo $rows['food_name'];?>" name="food_name" style="width:96px;" />
		<input type="button" value="ลบ" style="width:40px;" onclick="if(confirm('ลบอาหาร ?')){window.location.href='del_food.php?id=<?echo $rows['food_id'];?>'}"/>
		</td>
		</tr>
		<tr><td>ราคา</td><td><input type="text" value="<?echo $rows['food_price'];?>" name="food_price" style="width:140px;"/></td></tr>
		<tr><td>ราคาพิเศษ</td><td><input type="text" value="<?echo $rows['food_speprice'];?>" name="food_speprice" style="width:140px;"/></td></tr>
		<tr><td>รายละเอียด</td>
		
		<td><textarea id="food_desc" name="food_desc" cols="25" rows="3" ><?echo $rows['food_desc'];?></textarea>
		
		
		</td></tr>
		
		<tr>
		<td></a></td>
		<td><input type="submit" value="Save"/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="a_foods.php"><input type="button" value="Cancel"/></a></a></td>
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
<tr><td colspan="5" style="text-align:left;font-weight:bold;font-size:18px;">เพิ่มรายการอาหาร</td></tr>

<tr>
	<td style="font-weight:bold;">#</td>
	<td style="font-weight:bold;">ชื่ออาหาร</td>
	<td style="font-weight:bold;">ราคา</td>
	<td style="font-weight:bold;">รายละเอียด</td>
	<td style="font-weight:bold;"></td>

</tr>
<form action="addfood.php" method="POST">
<tr>
		<td></td>
		<td><input type="text" name="food_name"/></td>
		<td><input type="text" name="food_price"/></td>
		<td><textarea id="food_desc" name="food_desc" cols="25" rows="3" ><?echo $rows['food_desc'];?></textarea></td>
	
		<td><input type="submit" value="เพิ่มอาหาร"/></td>
</tr>
</form>
<tr>
<td>&nbsp;</td>	
</tr>	
<tr><td colspan="5" style="text-align:left;font-weight:bold;font-size:18px;">รายการอาหาร</td></tr>	
<tr>
	<td style="font-weight:bold;">#</td>
	<td style="font-weight:bold;">ชื่ออาหาร</td>
	<td style="font-weight:bold;">ราคา</td>
	<td style="font-weight:bold;">รายละเอียด</td>

	<td style="font-weight:bold;">แก้ไข</td>
</tr>
<?
$i=1;
$sql="select * from project.food order by food_name";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){?>
		
		<tr>
		<td><?echo $i++;?></td>
		<td><?echo $rows['food_name'];?></td>
		<td><?echo $rows['food_price'];?></td>
		<td><?echo $rows['food_desc'];?></td>

		<td><a href="a_foods.php?id=<?echo $rows['food_id'];?>"><img src="images/edit2.png" style="width:25px;cursor:pointer;"></a></td>
	
		
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
