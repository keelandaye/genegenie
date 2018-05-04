<?php

session_start();

$detail = $_SESSION['detail'];

if($detail == "true") {
    $_SESSION['detail']="false";
} else {
    $_SESSION['detail']="true";
}

header("Location: /results.php");

?>