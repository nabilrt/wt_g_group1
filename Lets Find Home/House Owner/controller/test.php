<?php

include_once '../model/model.php';

$a_id=$_GET['key'];

$ads=fetch_Ads($a_id);

if(empty($a_id)){
    echo "";
}
else{
    echo '<table class="table table-bordered">';
    echo '<tr class="table-dark">';
    echo '<th class="table-dark"></th>';
        echo '<th class="table-dark">AD Rent</th>';
        echo '<th class="table-dark">AD Area</th>';
        echo '<th class="table-dark">AD Address</th>';
        echo '<th class="table-dark"></th>';
        echo '<th class="table-dark"></th>';
    echo '</tr>';
     if(!empty($ads)){
        foreach ($ads as $ad) : 
            echo  '<tr class="table-info">';
            echo  "<td class='table-info'><a href=show_Ad.php?id=" . $ad['AD_ID']." class='btn btn-outline-info'>Show Details</a></td>";
            echo  '<td class="table-info">' .$ad['AD_Rent']. '</td>';
            echo  '<td class="table-info">'  .$ad['AD_Area']. '</td>';
            echo  '<td class="table-info">' .$ad['AD_Address']. '</td>';
            echo  "<td class='table-info'><a href=edit_ad.php?id=" . $ad['AD_ID']." class='btn btn-outline-info'>Edit Ad</a></td>";
            echo  "<td class='table-info'><a href=delete_ad.php?id=" . $ad['AD_ID']." class='btn btn-outline-info'>Delete Ad</a></td>";
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