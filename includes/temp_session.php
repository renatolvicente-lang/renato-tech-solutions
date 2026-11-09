<?php
include "../infra/conn.php";

session_start();

$temp_session = time();

if((time()-$temp_session) > 900){
    session_destroy();
    exit();
}



?>