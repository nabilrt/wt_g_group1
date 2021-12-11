<?php
require_once '../model/model.php';

class getowner{

    public $message="";

    function getTheowner($data){
        return fetchowner($data);
    }


}


?>