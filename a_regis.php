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
 
<script language="javascript">
	/*function gener_id(){
		$new_id =mysql_result(mysql_query("Select Max(User_id)+1 as MaxID from  std"),0,"MaxID");
 		if($new_id==''){ 
			$std_id="00001";
            	}else{
                	$std_id=sprintf("%05d",$new_id);
		}
	}*/
	function fncSubmit()
	{
		function inputDigits(sensor){
			var regExp = /[0-9]$/;
			if(!regExp.test(sensor.value)){
				alert("กรอกตัวเลขเท่านั้น");
				sensor.value = sensor.value.substring(0, sensor.value.length -1);
			}
		}
		if(document.register.personid.value == "")
		{
			alert('Please input Person ID');
			document.register.personid.focus();    
			return false;
		}
		if(document.register.uname.value == "")
		{
			alert('Please input Name');
			document.register.uname.focus();    
			return false;
		}  	
		if(document.register.lname.value == "")
		{
			alert('Please input Surname');
			document.register.lname.focus();    
			return false;
		}  		
		if(document.register.add.value == "")
		{
			alert('Please input Address');
			document.register.add.focus();    
			return false;
		}  		
		if(document.register.phon.value == "")
		{
			alert('Please input Phone number');
			document.register.phon.focus();    
			return false;
		}  	
		if(document.register.usname.value == "")
		{
			alert('Please input Username');
			document.register.usname.focus();
			return false;
		}  
		if(document.register.pword.value == "")
		{
			alert('Please input Password');
			document.register.pword.focus();    
			return false;
		}  
		if(document.register.conpword.value == "")
		{
			alert('Please input Confirm Password');
			document.register.conpword.focus();     
			return false;
		}  
		if(document.register.pword.value != document.register.conpword.value)
		{
			alert('Confirm Password Not Match');
			document.register.conpword.focus();     
			return false;
		}  
	
		document.register.submit();
}

function resetx(){
	
	document.getElementById("personid").value='';

	document.getElementById("uname").value='';
	document.getElementById("lname").value='';
	document.getElementById("addx").value='';
	document.getElementById("phon").value='';
	document.getElementById("usname").value='';
	document.getElementById("pword").value='';
	document.getElementById("conpword").value='';
	
}
</script>
  
  
  <div>
   		<center>
<div style="width:1280px;height:auto;min-height:800px;border:0px solid red;">
	
			<div style="float:left;height:600px;width:600px;border:1px solid #fff;margin-top:2px;border-radius:5px;font-family:verdana;margin-top:12px;padding:20px 5px 5px 20px;">
        		<ul class="b">
			<form name="register" method="post" action="testregis.php" OnSubmit="return fncSubmit();" enctype="multipart/form-data">
  		
  			<li>เลขบัตรประจำตัวประชาชน <input type="text" id="personid" name="personid" maxlength=13 size="25" onKeyUp="javascript:inputDigits(this);"></li><br>
			<li>ชื่อ<input type="radio" name="sex" value="นาย" checked />นาย
				<input type="radio" name="sex" value="นาง" />นาง
				<input type="radio" name="sex" value="นางสาว" />นางสาว
				<input type="text" id="uname" name="uname" size="20" />
		        นามสกุล  <input type="text" id="lname" name="lname" size="20" /></td></li><br>
			<table>
			<tr>
				<td>ที่อยู่</td><td><textarea id="addx" name="add" cols="25" rows="3" ></textarea></td></tr>
			<tr>
				<td>เบอร์โทรศัพท์ </td><td><input type="text" id="phon" name="phon" size="20" /></td></tr>
			<tr>
				<td>ชื่อผู้ใช้งาน</td><td> <input type="text" id="usname" name="usname" size="20" /></td></tr>
			<tr>
				<td>รหัสผ่าน </td><td><input type="text" id="pword" name="pword" size="20" /></td></tr>				
			<tr>
				<td>ยืนยันรหัสผ่าน</td><td><input type="text" id="conpword" name="conpword" size="20" /></td></tr>
			<tr>
				<td>เลือกรูปประจำตัว</td><td><input name="myfile" accept="image/*" type="file" id="pic" size="55" /></td></tr>
			   
			</table>
			<br><br>
			<li ><input type="submit" name="submit" value="ยืนยัน"/>   
                 <a href="index.php"><input type="button" name="reset" value="ยกเลิก" /></a>
			      <input type="button" name="reset" value="แก้ไข" onclick="resetx();"/></li> 
			</form>
		</ul>
	</div>
</div>
   		</center>	
  </div>
</body>
</html>
