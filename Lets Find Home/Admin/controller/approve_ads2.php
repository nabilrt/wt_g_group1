<?php
require_once '../model/model.php';

$id = $_GET['id'];
if(approve_ad($id))
{
    header("location: ../view/Approve_Ads.php");
}



?>