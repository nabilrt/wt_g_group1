<?php
 session_start();
$masage=  $masage3 = $masage2 = "";
$name = $pass = "" ;

if(!isset($_SESSION["uname"])){
    session_destroy();
    header("location:Log_in_Admin.php");
}

    $uName=    $_SESSION["uname"]; 
      $Name=  $_SESSION['name'] ;
      $email=  $_SESSION['email'] ;
        $Nid= $_SESSION['nid'] ;
        $pass=$_SESSION['pass']; 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="deshbord.css"> -->
	<div class="sticky"><?php include "new_header.php" ?></div>
	    <style type="text/css">
    body { background: #EAEDF0 !important; }
   </style>
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
			<div class="container">

			
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	          <div style="color: black;">
			      <h2>ADMIN'S INFORMATION</h2>
			      <div  >
			        <label> Name: 
			        <span><?php echo $Name; ?></span>
			        </label>
			        <br><br>
			      </div>
			      <div>
			        <label> Email: 
			        <span><?php echo $email; ?></span>
			        </label>
			        <br><br>
			      </div>
			        <div>
			        <label> NID: 
			        <span><?php echo $_SESSION['nid']; ?></span>
			        </label>
			        <br><br>
			      </div>
			      <br><br>
			      </div>
			    </div>  
			  </form>
			  </div>
			</div>	
		</div>

	</form>

<br>
<br>
<?php include "t_foot.php" ?>

</body>
</html>