<?php

include_once '../model/model.php';

$a_id=$_GET['key'];

$ads=getTheads2($a_id);

if(empty($a_id)){
    echo "";
}
else{
    echo '<table class="table table-bordered" style="width: 1100px;" >';
    echo '<tr class="table-dark">';
        echo '<th >AD ID</th>';
        echo '<th >H.Owner ID</th>';
        echo '<th >Area</th>';
        echo '<th >Address</th>';
        echo '<th >Rent</th>';
        echo '<th ></th>';
        echo '<th ></th>';
    echo '</tr>';
     if(!empty($ads)){
        foreach ($ads as $ad) : 
            echo  '<tr>';
            echo  '<td>' .$ad['AD_ID']. '</td>';
            echo  '<td >' .$ad['H_Owner_ID']. '</td>';
            echo  '<td>'  .$ad['AD_Area']. '</td>';
            echo  '<td >' .$ad['AD_Address']. '</td>';
            echo  '<td>' .$ad['AD_Rent']. '</td>';
            echo  "<td><a href=../controller/approve_ads2.php?id=" . $ad['AD_ID']." class='btn btn-outline-success'>Approve Ad</a></td>";
            echo  "<td><a href=../controller/approve_ads3.php?id=" . $ad['AD_ID']." class='btn btn-outline-danger'>Reject Ad</a></td>";
          echo "</tr>";
          endforeach; 
          echo "</table>";
     }else{
         echo "";
     }
}

 

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Search Ad</title>
    <!--Importing bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
</head>