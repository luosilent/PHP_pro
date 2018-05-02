<?php

include("../helper/database.php");

session_start();
$SESSION["user_id"] = 0;


$email = "";
if(isset($_REQUEST["email"]) ){
    $email = html_entity_decode($_REQUEST["email"]);
    $email = trim($email);
    $email = stripslashes($email);
    $email = strip_tags($email);
}

$displayName = "";
if(isset($_REQUEST["displayName"])){
    $displayName = html_entity_decode($_REQUEST["displayName"]);
    $displayName = trim($displayName);

}

$password = "";
if(isset($_REQUEST["password"])){
    $password = html_entity_decode($_REQUEST["password"]);
    $password = trim($password);
    $password = sha1($password);
}

$sql = "SELECT id,displayName FROM tbl_accounts
          WHERE displayName = '".$displayName."'
          AND password = '".$password."'
          ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $user_id = $row["id"];
    $_SESSION["user_id"] = $user_id;
    $_SESSION["name"] = $row["displayName"];


    if ($_SESSION["user_id"] > 0) {
        echo '
            <script type="text/javascript">
                window.location = "../view/favplaces.php";
            </script>
         ';
    } else {
        echo '
            <script type="text/javascript">
                window.location = "../view/login.php";
            </script>
    
        ';
    }
}else {
    echo '
            <script type="text/javascript">           
              window.location = "../view/login.php";
            </script>
    
        ';
}
session_write_close();
?>
