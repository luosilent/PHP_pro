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

$sql ="INSERT INTO tbl_places (place_name, addr_line1, addr_line2, open_time, close_time, add_info, add_info_url)
VALUES ('".$placename."', '".$Address1."', '".$Address2."', '".$Time1."', '".$Time2."', '".$Imfornation."', '".$Url."')";

$result = mysqli_query($conn, $sql);
//判断是否点了名字为update的按钮
if(isset($_POST['add'])) {
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
}else{
    echo '
            <script type="text/javascript">
            alert("Add failed");           
                window.location = "favplaces.php";
            </script>
         ';

}
?>