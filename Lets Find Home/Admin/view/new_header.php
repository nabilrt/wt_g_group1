<?php
$NID = "";
$Full_Name = $Email = $Gender = $Password = $Image = "";
// if (!isset($_SESSION["NID"])) {
//     session_destroy();
//     header("location:howner_login.php");
// }
// if (isset($_SESSION["NID"])) {
//     $NID = $_SESSION["NID"];
//     $data = array(
//         'NID' => $NID
//     );
//     require_once '../controller/getUserData.php';
//     $h_owner_dashboard = new getDataFromFile($data);
//     $owner=$h_owner_dashboard->checkFromFiles($data);
//     $Full_Name = $owner['Name'];
//     $Gender = $owner['Gender'];
//     $Email = $owner['Email'];
//     $Password = $owner['Password'];
//     $Image = $owner['Image'];
// }
?>


<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
</head>
    <body>
      <nav class="navbar fixed-top navbar-dark bg-dark" style="background-color: #8A9EA0;">
          <div>&nbsp;&nbsp;<img class="rounded float-end" src="logo.png" width="40px" height="35px"></div>
          <div style="font-family: 'Faster One', cursive;font-size:26px; text-align: center; color: #EAEDF0;">Lets Find Home</div>
          <div style="font-family: 'Titillium Web', sans-serif; color: #EAEDF0; "><?php echo "Hi, ". $_SESSION['name'];?>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
          <a href="Logout.php" style="padding-right:5px;" class="btn btn-outline-danger"><span><b>&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;</b></span></a></div>
      </nav>


    </body>
</html>