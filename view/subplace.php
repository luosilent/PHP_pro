<?php
include("../helper/database.php");
include("favplaces.php");
$placename = $_POST["Name"];
$Address1 = $_POST["Address1"];
$Address2 = $_POST["Address2"];
$Time1 = $_POST["Time1"];
$Time2 = $_POST["Time2"];
$Imfornation = $_POST["Imfornation"];
$Url = $_POST["Url"];
$Id = $_POST["Id"];


$sql1 ="INSERT INTO tbl_places (place_name, addr_line1, addr_line2, open_time, close_time, add_info, add_info_url)
VALUES ('".$placename."', '".$Address1."', '".$Address2."', '".$Time1."', '".$Time2."', '".$Imfornation."', '".$Url."')";
$sql2 ="DELETE FROM tbl_places WHERE place_id = '".$Id ."'";
// echo($sql2);exit;
if(isset($placename)){
    if(isset($_POST['add'])) {
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_affected_rows($conn) == 1) {
            echo '
                <script type="text/javascript"> 
                    alert("Add success");            
                    window.location = "favplaces.php";
                </script>
             ';
        }else{
            echo '
                <script type="text/javascript">
                alert("Add failed");           
                    window.location = "favplaces.php";
                </script>
             ';

        }
    }
}else{
     echo '
                <script type="text/javascript">
                alert("Add placename first");           
                    window.location = "favplaces.php";
                </script>
             ';
}


if(isset($Id)){
    if(isset($_POST['del'])) {
        $result2 = mysqli_query($conn, $sql2);
        if (mysqli_affected_rows($conn) == 1) {
            echo '
                <script type="text/javascript"> 
                    alert("del success");            
                    window.location = "favplaces.php";
                </script>
             ';
        }else{
            echo '
                <script type="text/javascript">
                alert("del failed");           
                    window.location = "favplaces.php";
                </script>
             ';

        }
    }
}else{
     echo '
                <script type="text/javascript">
                alert("Add Id first");           
                    window.location = "favplaces.php";
                </script>
             ';
}