<?php
session_start();
$masage =  $masage3 = $masage2 = "";
$uname = $pass = "";

if (!isset($_SESSION["uname"])) {
	session_destroy();
	header("location:Log_in_Admin.php");
}

if (isset($_SESSION["uname"])) {
	$data = array(
		'uname' => $uname
	);
	require_once '../controller/approve_ads.php';

	$ads = array(
		'House_Owner_ID' => ' ',
		'AD_Rent' => ' ',
		'AD_Area' => ' ',
		'AD_Address' => ' ',
		'Picture1' => ' ',
		'Picture2' => ' ',
		'Picture3' => ' '


	);

	$manage_ads = new getads($data);

	$ads = $manage_ads->getTheads($data);
}




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
		body {
			background: #EAEDF0 !important;
		}
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
			<div style="width: 1100px; padding: 10px;">
				<div class="container">
					<div style="display: flex;">
						<div>
							<label style="text-align : left; font-size: 30px;"><b>Requested Ads List</b></label>
						</div>
						<div>
						</div>
					</div>
					<table style="text-align: center; margin-top: 10px;" class="table table-bordered">
						<tr>
							<th style="text-align: center;">AD ID</th>
							<th style="text-align: center;">H.Owner ID</th>
							<th style="text-align: center;">Area</th>
							<th style="text-align: center;">Address</th>
							<th style="text-align: center;" colspan="2">Decision</th>
						</tr>
						<?php
						if (!empty($ads))
							foreach ($ads as $ad) : ?>
							<tr>
								<td><?php echo $ad['AD_ID'] ?></td>
								<td><?php echo $ad['H_Owner_ID'] ?></td>
								<td><?php echo $ad['AD_Area'] ?></td>
								<td><?php echo $ad['AD_Address'] ?></td>
								<td><a href="../controller/approve_ads2.php?id=<?php echo $ad['AD_ID'] ?>" class="btn btn-outline-success">Approve</a>&nbsp<a href="../controller/approve_ads3.php?id=<?php echo $ad['AD_ID'] ?>" class="btn btn-outline-danger" )>Delete</a></td>
							</tr>
						<?php endforeach; ?>

					</table>
				</div>
			</div>
		</div>

	</form>

	<br>
	<br>
	<?php include "t_foot.php" ?>

</body>

</html>