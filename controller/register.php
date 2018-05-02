<?php
include("../helper/database.php");

session_start();
$SESSION["user_id"] = 0;

$email = ""; 
if(isset($_REQUEST["email"])){
    $email = html_entity_decode($_REQUEST["email"]);
    $email = trim($email);
    $email = stripslashes($email);
    $email = strip_tags($email);

}

$displayName = "";
if(isset($_REQUEST["displayName"])){
    $displayName = html_entity_decode($_REQUEST["displayName"]);
    $displayName = trim($displayName);
    $displayName = stripslashes($displayName);
    $displayName = strip_tags($displayName);
}

$password = "";
if(isset($_REQUEST["password"])){
    $password = html_entity_decode($_REQUEST["password"]);
    $password = trim($password);
    $password = sha1($password);
}

$sql = "SELECT id FROM tbl_accounts
        WHERE displayName = '".$displayName."'; 
        ";

$result = mysqli_query($conn, $sql);
if(!isset($_REQUEST["displayName"])){

    echo "<script type=\"text/javascript\">
        alert('The username are useless!');history.back(0);
        </script>";
}
if(mysqli_num_rows($result) == 0){
    $sql = "INSERT INTO tbl_accounts (`id`, `email`, `displayName`, `password`)
            VALUES (NULL, '".$email."', '".$displayName."', '".$password."')";

        $result = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) == 1){
            $user_id = mysqli_insert_id($conn);
            $_SESSION["user_id"] = $user_id;
        }
}else{
    echo "<script type=\"text/javascript\">
        alert('The username are useless!');history.back(0);
        </script>";
}

if ($_SESSION["user_id"] > 0){
    echo '
            <script type="text/javascript">
                window.location = "login.php";
            </script>
         ';
} else {
    echo '
            <script type="text/javascript">
                window.location = "../index.php";
            </script>
         ';
}

session_write_close();

?>