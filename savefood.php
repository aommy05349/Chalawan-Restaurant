<?
include("config.inc.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
$id=$_POST["food_id"];

$food_name=$_POST["food_name"];
$food_price=$_POST["food_price"];
$food_desc=$_POST["food_desc"];



$sql="select * from project.food where food_id='$id' limit 1";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==0){
		
		
		?>
		<script>
		alert('ไม่พบข้อมูลอาหารในระบบ');
		</script>
		<?
		echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=./a_foods.php'>";
	}else{
		
		$sql="update project.food set food_name='$food_name',food_price='$food_price',food_desc='$food_desc' where food_id='$id'";
		mysql_query($sql);
		
		
	echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=./a_foods.php'>";
	}

?>