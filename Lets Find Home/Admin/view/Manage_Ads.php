<?php
 session_start();
$masage=  $masage3 = $masage2 = "";
$uname = $pass = "" ;


if(!isset($_SESSION["uname"])){
    session_destroy();
    header("location:Log_in_Admin.php");
}

	$ad_Area = "";
    $search_error = "";
    $not_found = "";
    if (isset($_POST["search"])) {
        $ad_Area = $_POST["keyword"];

        if (empty($ad_Area)) {
            $search_error = "Field Cannot Be Empty";
        }
        if (!empty($ad_Area)) {
            require_once '../controller/search_an_ad.php';
            $search_ad = new Search($ad_Area);
            $searched_Ads = $search_ad->searchAd($ad_Area);

            if (empty($searched_Ads)) {
                $not_found = "No Such Ad Found";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Ads</title>
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
			<div style="width: 1100px; padding: 10px;">
            <div class="container">
				<div >
				<div>
				 <div>
					<label style="text-align : left; font-size: 25px;"><b>Manage Ads List</b></label>
				 </div>
				 <div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
					<label style="font-size: 20px;"><b>Search</b></label>	
					<input type="text" style="margin-top: 7px;" class="form-control" name="keyword" placeholder="By Ad-ID" id="keyword" value="" onkeyup="search_data(this.value)">
					<!-- <button>Search</button> -->
					</form>
				 </div>
				</div><br><br>
                    <div class="container" id="showD"></div>
				
				</div>
			</div>
		</div>

	</form>
    </div>

	 <script>
        function search_data(key) {
            let id;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                id = this.responseText;
                console.log(id);
                document.getElementById("showD").innerHTML = this.responseText;
            }
            xhttp.open("GET", "../controller/test.php?key=" + key);
            xhttp.send();
        }
    </script>

<br>
<br>
<?php include "t_foot.php" ?>

</body>
</html>