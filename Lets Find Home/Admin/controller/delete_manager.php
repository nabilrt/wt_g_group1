<?php
include_once '../model/model.php';

$id=$_GET['id'];

if(delete_manager($id)){

    header('Location:../view/Manager_List.php');
}


?>