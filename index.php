<?php
include("helper/database.php");
error_reporting(0);
session_start();
if(! isset($_SESSION["user_id"])){
    $_SESSION["user_id"] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>favplace</title>
</head>
<body>
    <script type="text/javascript">

        <?php
        if($_SESSION["user_id"] > 0){
            echo ' var login = true;';
        } else {
            echo ' var login = false;';
        }


            if(login){
                echo "window.location = 'view/favplaces.php';";
            } else {
                echo "window.location = 'view/login.php';";
            }
        ?>

    </script>
</body>
</html>
