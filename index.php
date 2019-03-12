<?
include("config.inc.php"); //เชื่อมต่อ Database
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?
include("head.php"); // code ของ head
?>
</head>
<body style="font-family:verdana;">
<div class="main">

<?include("header.php");?>
	
	<?if(!isset($_SESSION['id'])){?>
	<div class="hbg">
	<div class="hbg_resize">
   
	<div style="float:left;height:213px;width:270px;border:1px solid white;margin-top:2px;border-radius:5px;font-family:verdana;margin-top:12px;padding:20px 5px 5px 20px;">
		<form action="o_login.php" method="POST">
		<table>
		<tr>
			<td style="font-size:26px;height:50px;" colspan="2">เข้าสู่ระบบ</td>
			
		</tr>
		<tr>
			<td style="font-size:16px;">ชื่อผู้ใช้ : </td><td><input type="text" name="username"/></td>
			
		</tr>
		<tr>
		<td style="font-size:16px;">รหัสผ่าน : </td><td><input type="password" name="password"/></td>
			
		</tr>
		<tr>
		<td colspan="2">
		<input type="submit" value="เข้าสู่ระบบ" onmouseover="" onmouseout="" style="cursor:pointer;text-align:center;width:120px;height:35px;border:0px;font-size:18px;border-radius:6px;color:#FFF;background:#5e960d;">
		<a href="a_regis.php"><input type="botton" value="สมัครสมาชิก" onmouseover="" onmouseout="" style="cursor:pointer;text-align:center;width:120px;height:35px;border:0px;font-size:18px;border-radius:6px;color:#FFF;background:#5e960d;"></a>
		</td>
		</tr>
		</table>
		</form>
    </div>
		<div style="float:left;height:240px;width:540px;margin-top:2px;margin-left:10px;font-family:verdana;">
	<img src="images/a1.jpg" style="margin:10px 5px 5px 10px;border-radius:5px;"/>
	</div>
  </div>
 
  <div class="footer" >
    <div class="footer_resize">
      
      <div class="drf">
       
        <div class="clr"></div>
      
      </div>
      <div class="clr"></div>
    </div>
  </div>
  </div>
	<?}else{?>
	<center>
	<div style="width:1280px;height:auto;min-height:800px;border:0px solid red;">

	<?include("main_menu.php");?>
		
	</div>
	</center>
	<?}?>
  
  

</body>
</html>
