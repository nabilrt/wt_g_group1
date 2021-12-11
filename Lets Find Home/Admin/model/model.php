<?php

$User_name= $Password ="";

require_once 'db_connect.php';


function getmanager($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `manager` where NID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    if (!empty($row)) {
        return $row;
    }
}

function getrenter($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `renters` where NID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    if (!empty($row)) {
        return $row;
    }
}



function gethouseowner($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `owners` where NID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    if (!empty($row)) {
        return $row;
    }
}

function approve_ad($id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE unapprovedads set Decision = ? where AD_ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            "Accepted", $id
        ]);
    } catch (PDOException $e) {
        echo "change profile picture  " . $e->getMessage();
    }
    $conn = null;
    return true;
}


function approve_ad2($id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE unapprovedads set Decision = ? where AD_ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            "Delete", $id
        ]);
    } catch (PDOException $e) {
        echo "change profile picture  " . $e->getMessage();
    }
    $conn = null;
    return true;
}

function searchUser($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `unapprovedads` WHERE AD_ID LIKE '%$id%'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function getTheads2($id)
{
    // $id = $_SESSION["uname"];
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `unapprovedads` where AD_ID LIKE '%$id%' AND decision IS NULL";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

    
}


function getTheads($data)
{
    // $id = $_SESSION["uname"];
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `unapprovedads` HAVING Decision IS NULL or Decision=''";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function fetcmanager($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `manager`";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

}


function fetcrentars($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `renters`";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

}

function fetchowner($data){
    $conn = db_conn();
        $selectQuery = "SELECT * FROM `owners`";
        try {
            $stmt = $conn->query($selectQuery);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

function delete_manager($id){

    $conn = db_conn();
    $selectQuery = "DELETE FROM `manager` WHERE `NID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function EAdminInfo($data){
     $isUpdated = false;
    $conn = db_conn();
    $selectQuery = "UPDATE test set name = ?, email = ?, Gender = ? where uname = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data["name"], $data["email"], $data["gender"], $_SESSION["uname"]
        ]);
    } catch (PDOException $e) {
        echo "Update " . $e->getMessage();
    }
    $_SESSION["name"] = $data["name"];
    $_SESSION["email"] = $data["email"];
    $_SESSION["gender"] = $data["gender"];
    // $isUpdated = true;
    $conn = null;
    if ($isUpdated) 
    {
        return true;
    } else {
        return false;
    }
}



function addHouseOwners($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into owners (Name, Email, NID, Password, Gender)
VALUES (:Name, :Email,:NID, :Password,:Gender)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':Name' => $data["name"],
            ':Email' => $data["email"],
            ':NID' => $data["nid"],
            ':Password' => $data["pass"],
            ':Gender' => $data["gender"],
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
    $conn = null;
    return true;
}


 function CheckLogin($data)
 { 

    $conn = db_conn();
    $selectQuery = "SELECT * FROM admin where uname = ? AND Pass= BINARY ?";;
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data["uname"], $data["pass"]]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $ches = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;

    if (!empty($ches)) 
    {

        $_SESSION["uname"] = $ches["uname"];
        $_SESSION['name'] = $ches["name"];
        $_SESSION['email'] = $ches["email"];
        $_SESSION['nid'] = $ches["NID"];
        $_SESSION['pass'] = $ches["pass"];
        $_SESSION['gender'] = $ches["Gender"];
        header("location:deshbord.php");
        return true;
 

    } else {
        return false;
    }
      
 }

 function ad_count()
{


    $conn = db_conn();
    $sql = "SELECT COUNT(*) FROM unapprovedads where decision like '%Accepted%'";
    $res = $conn->query($sql);
    $count = $res->fetchColumn();

    return $count;
}

function pending_count(){

    $conn = db_conn();
    $sql = "SELECT COUNT(*) FROM unapprovedads where decision IS NULL";
    $res = $conn->query($sql);
    $count = $res->fetchColumn();

    return $count;
}
