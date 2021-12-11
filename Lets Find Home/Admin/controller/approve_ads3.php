<?php
require_once '../model/model.php';

$id = $_GET['id'];
if(approve_ad2($id))
{
    header("location: ../view/Approve_Ads.php");
}



?>