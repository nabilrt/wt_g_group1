<?php
session_start();
$masage =  $masage3 = $masage2 = "";
$name = $pass = "";

if (!isset($_SESSION["uname"])) {
	session_destroy();
	header("location:Log_in_Admin.php");
}

require_once '../controller/get_ads_count.php';

$ad_num=get_ad_count();

require_once '../controller/get_pending_count.php';

$pending_count=get_pending();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap.css" />
	<!-- 	<link rel="stylesheet" type="text/css" href="deshbord.css"> -->
	<div class="sticky"><?php include "new_header.php" ?></div>
	<div></div>
	<style type="text/css">
		body {
			background: #EAEDF0 !important;
		}
	</style>


</head>

<body class="body">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<br>
		<br>
		<br>
		<br>
		<div style="display: flex;">
			<div>
				<?php include "b_class.php" ?>
			</div>

			<div style="padding-left: 30px;">
				
				<div class="container">
				<legend>Welcome <?php echo $_SESSION['name']; ?></legend>
				<br><br>
					<div class="row">
						<div class="col">
							<div class="card" style="width: 18rem;">
								<p style="font-size:60px; text-align:center; color:blue"><?php echo $pending_count; ?></p>
								<div class="card-body">
									<h5 class="card-title">Pending Approval</h5>
									<p class="card-text">This statistics shows how many ads are currently pending to be approved by you.</p>
									<a href="Approve_Ads.php" class="btn btn-primary">Show Details</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 18rem;">
							<p style="font-size:60px; text-align:center; color:blue"><?php echo $ad_num; ?></p>
								<div class="card-body">
									<h5 class="card-title">Approved Ads</h5>
									<p class="card-text">This statistics shows how many ads have been approved by you till this date.</p>
									<a href="Manage_Ads.php" class="btn btn-primary">Show Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<br>
	<br>
	<?php include "t_foot.php" ?>
</body>

</html>