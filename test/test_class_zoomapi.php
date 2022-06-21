<?php

include "app/ZoomAPI.php";
include "core/config.php";

$con = new ZoomAPI(API_KEY, API_SECRET, API_SECRET);

function test_instance_class()
{
    global $con;
    if($con == true){
        echo 'Classe instanciada com sucesso !' .PHP_EOL;
    }
}

test_instance_class();
