<?php
 session_start();
$masage=  $masage3 = $masage2 = "";
$name = $pass = "" ;

if(!isset($_SESSION["uname"])){
    session_destroy();
    header("location:Log_in_Admin.php");
}
$id=$_GET['id'];
require_once '../controller/view_details3.php';
$owner=getuser($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="deshbord.css"> -->
	<div class="sticky"><?php include "new_header.php" ?></div>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<br>
		<br>
		<br>
		<br>

		<div style="display: flex;">
			<div>
				  <?php include "b_class.php" ?>
			</div>
			<div  style="margin-left:10px ;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	          <div style="color: black;">
			      <h2>MANAGER'S INFORMATION</h2>
			      <div  >
			        <label> Name: 
			        <span><?php echo $owner["Name"]; ?></span>
			        </label>
			        <br><br>
			      </div>
			      <div>
			        <label> Email: 
			        <span><?php echo $owner["Email"]; ?></span>
			        </label>
			        <br><br>
			      </div>
			      <div>
			        <label> NID: 
			        <span><?php echo $owner["NID"]; ?></span>
			        </label>
			        <br><br>
			      </div>
			      <div>
			        <label> Gender: 
			        <span><?php echo $owner["Gender"]; ?></span>
			        </label>
			        <br><br>
			      </div>

			      <br><br>
			      </div>
			    </div>  
			  </form>
			</div>	
		</div>

	</form>

<br>
<br>
<?php include "t_foot.php" ?>

</body>
</html>