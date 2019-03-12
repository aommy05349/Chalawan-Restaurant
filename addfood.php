<?
include("config.inc.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?
$food_name=$_POST["food_name"];
$food_price=$_POST["food_price"];
$food_desc=$_POST["food_desc"];


$sql="select * from project.food where food_name='$food_name'";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==0){
		
		$sql="insert into project.food(food_name,food_price,food_desc) 
		values('$food_name','$food_price','$food_desc')";
		mysql_query($sql);
		
		echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=./a_foods.php'>";
	}else{
		?>
		<script>
		alert('รายการอาหารซ้ำ กรุณาลองใหม่อีกครั้ง');
		</script>
		<?
	echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=./a_foods.php'>";
	}

?>