<?php
include("../helper/database.php");
session_start();
unset($_SESSION["name"]);
unset($_SESSION["user_id"]);
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-3600, '/');
}
session_destroy();
if(empty($_SESSION["name"])) {
    echo "<script>window.location.href='login.php'</script>";
}else{
    echo "<script>window.location.href='../index.php'</script>";
}
?>