<?php
 session_start();
$masage=  $masage3 = $masage2 = "";
$name = $pass = "" ;

if(!isset($_SESSION["uname"])){
    session_destroy();
    header("location:Log_in_Admin.php");
}

if(isset($_SESSION["uname"]))
{
$data=array(

);
	require_once '../controller/h_owner_list.php';

	$h_owner=array(
	    'nid'=>' ',
	    'email'=>' ',
	    'name'=>' '

	);

	$manage_h_owner=new getowner($data);

	$h_owner=$manage_h_owner->getTheowner($data);


}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="bootstrap.css" />  
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
			<div >
			<?php include "b_class.php" ?>
			</div>
			<div style="width: 1100px; padding: 10px;">
			<div class="container">
				<label style="text-align : left; font-size: 30px;"><b>House Owner List</b></label>
				<table style="text-align: center;" class="table table-bordered">  
	          <tr>
	          	<th style="text-align: center;">Action</th>
	          	<th style="text-align: center;">NAME</th>
	          	<th style="text-align: center;">EMAIL</th>   
	            <th style="text-align: center;">NID</th> 
	          </tr>
               <?php
                if (!empty($h_owner))
                    foreach ($h_owner as $re) : ?>
                    <tr >
                    	<td ><a href="View_details.php?id=<?php echo $re['NID'] ?>" class="btn btn-outline-info">View Details</a></td>
                        <td ><?php echo $re['Name'] ?></td>
                        <td ><?php echo $re['Email'] ?></td>
                        <td ><?php echo $re['NID'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
			</div>
	   </div>
	</form>
	</div>
<br>
<br>
<?php include "t_foot.php" ?>

</body>
</html>