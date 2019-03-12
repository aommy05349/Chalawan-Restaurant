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
<title>C H A L A W A N</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<?include("style.php");?>
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body style="font-family:verdana;">
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="" style="text-align:center;font-size:20px;font-family:verdana;"><a href="index.html">CHALAWAN PLUB AND RESTUARANT</li>
        </ul>
      </div>
	 
      <div class="clr"></div>
      <div class="logo"><img src="images/logo11.png" style="height:100px;margin-top:-45px;" align = 'right'/></div>
	  <div class="clr"></div>
    </div>
  </div>

  
  
  <div>
   	<?include("main_menu.php");?>
	<!--<div style="float:left;height:600px;width:600px;border:1px solid #fff;margin-top:2px;border-radius:5px;font-family:verdana;margin-top:12px;padding:20px 5px 5px 20px;"> -->
    <div style="float:left;width:900px;height:auto;min-height:100px;margin-top:50px;border:0px solid red;">	 
	 <?

if($_GET['id']>0){
	?>
	<form action="savegood.php" method="POST">
	
	<table style="width:40%;">
	<tr><td colspan="2" style="text-align:center;font-weight:bold;font-size:18px;">แก้ไขข้อมูลสินค้า</td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>

	<?
$id=$_GET['id'];
$sql="select * from project.good where good_id='$id' order by good_name limit 1";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){
	?>
	<input type="hidden" name="good_id" value="<?echo $rows['good_id'];?>"/>
		
		
		<tr><td>ชื่อสินค้า</td>
		<td>
		<input type="text" value="<?echo $rows['good_name'];?>" name="good_name" style="width:96px;" />
		<input type="button" value="ลบ" style="width:40px;" onclick="if(confirm('ลบสินค้า?')){window.location.href='del_good.php?id=<?echo $rows['good_id'];?>'}"/>
		</td>
		</tr>
		<tr><td>ราคา</td><td><input type="text" value="<?echo $rows['good_price'];?>" name="good_price" style="width:140px;"/></td></tr>
		
		
		<tr>
		<td></a></td>
		<td><input type="submit" value="Save"/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="a_goods.php"><input type="button" value="Cancel"/></a></a></td>
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
<tr><td colspan="5" style="text-align:left;font-weight:bold;font-size:18px;">เพิ่มรายการสินค้า</td></tr>

<tr>
	<td style="font-weight:bold;">#</td>
	<td style="font-weight:bold;">ชื่อสินค้า</td>
	<td style="font-weight:bold;">ราคา</td>
	<td style="font-weight:bold;"></td>

</tr>
<form action="addgood.php" method="POST">
<tr>
		<td></td>
		<td><input type="text" name="good_name"/></td>
		<td><input type="text" name="good_price"/></td>
		
	
		<td><input type="submit" value="เพิ่มสินค้า"/></td>
</tr>
</form>
<tr>
<td>&nbsp;</td>	
</tr>	
<tr><td colspan="5" style="text-align:left;font-weight:bold;font-size:18px;">รายการสินค้า</td></tr>	
<tr>
	<td style="font-weight:bold;">#</td>
	<td style="font-weight:bold;">ชื่อสินค้า</td>
	<td style="font-weight:bold;">ราคา</td>
	<td style="font-weight:bold;">แก้ไข</td>
</tr>
<?
$i=1;
$sql="select * from project.food order by food_name";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){?>
		
		<tr>
		<td><?echo $i++;?></td>
		<td><?echo $rows['good_name'];?></td>
		<td><?echo $rows['good_price'];?></td>
	
		<td><a href="a_goods.php?id=<?echo $rows['good_id'];?>"><img src="images/edit2.png" style="width:25px;cursor:pointer;"></a></td>
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