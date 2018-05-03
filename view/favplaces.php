<?php
include("../helper/database.php");
error_reporting(0);
session_start();
if(! isset($_SESSION["user_id"])){
    $_SESSION["user_id"] = 0;
    $_SESSION["name"] = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>favplace</title>
	<link rel="stylesheet" type="text/css" href="../public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <script src="../public/js/jquery-3.3.1.min.js"></script>
    <script src="../public/js/main.js"></script>

</head>
<body>




<div class="wrapper">



<div class="header " id="favorite">
	<div >
		<ul class="nav nav-pills">
	  <li class="nav-item">
		<a class="nav-link active" href="favplaces.php">Favorite Place</a>
	  </li>
	  <li class="nav-item Logout">
		<a class="nav-link" href="#">Logout</a>
	  </li>
	   
	  </ul>
	</div>

<<<<<<< HEAD
    <div style="align-self: flex-end;margin-right:180px; font-size:2rem;background-color: lightblue; ">welcome <?php echo $_SESSION["name"];?></div>
=======
    <div style="align-self: flex-end;margin-right:180px;font-size:2rem;background-color: lightblue; ">welcome <?php echo $_SESSION["name"];?></div>
>>>>>>> 34e80c16f3703bff2014305db1f09e86db9d8d79
</div>

<div class="content" >
	
	<h2>Favorite Place</h2>
	
    <table class="table table-bordered">
            

            <tr><th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>open_time / close_time</th>
                <th>Imfornation</th>
                <th>Url</th></tr>

            <?php
<<<<<<< HEAD
            
=======
           
>>>>>>> 34e80c16f3703bff2014305db1f09e86db9d8d79
            if(!$_GET["word"] && !$_GET["word2"]){
                $sql = "SELECT * FROM tbl_places order by 	place_id";
            }
            else{
                $sql = "SELECT * FROM tbl_places where 1 ";
                if($_GET["word"])
                {
                    $sql .= " and place_id='{$_GET['word']}'";
                }
                if($_GET['word2'])
                {
                    $sql .= " and place_name like '%{$_GET['word2']}%'";
                }
            }

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                    echo '<tr><td>' . $row['place_id'] . '</td>';
                    echo '<td>' . $row['place_name'] . '</td>';
                    echo '<td>' . $row['addr_line1'] . $row['addr_line2'].'</td>';
                    echo '<td>' . $row['open_time'] . "/" . $row['close_time'] . '</td>';
                    echo '<td>' . $row['add_info'] . '</td>';
                    echo '<td>' . $row['add_info_url'] . '</td></tr>';

            }
            ?>
        </table>
    <h2>Filter Criteria</h2>
    <form id="input" method="get" style="margin-top: 20px;">

        <div class="input">
            <label >Place Id</label>
            <input name="word" placeholder="Enter place id">
        </div>

        <div class="input">
            <label >Place Name</label>
            <input name="word2" placeholder="Enter place name">
        </div>
        <button type="submit"  class="btn btn-primary" style="width: 100%; margin-top: 20px">Filter</button>

    </form>

    <h2>Add Places</h2>

    <form id="input" action="subplace.php" method="post">
        <body><ul>
            <li>place_name<input id="Name" name="Name" type="text" /></li>
            <li>addr_line1<input id="Address1" name="Address1" type="text" /></li>
            <li>addr_line2<input id="Address2" name="Address2" type="text" /></li>
            <li>open_time<input id="Time1" name="Time1" type="text" /></li>
            <li>close_time<input id="Time2" name="Time2" type="text" /></li>
            <li>Imfornation<input id="Imfornation" name="Imfornation" type="text" /></li>
            <li>Url<input id="Url" name="Url" type="text" /></li>
            <input type="submit" value="add" name="add" />
            <li>Id<input id="Id" name="Id" type="text" /></li>
            <input type="submit" value="del" name="del" />
        </ul>
    </form>


</div>

	
</div>

        <script type="text/javascript">
            <?php

            if($_SESSION["user_id"] > 0){
                echo ' var login = true;';
            } else {
                echo ' var login = false;';
            }
            ?>

            function checkLogin(){

                if(login){
                    $(".Logout").html('<a class="nav-link" href="logout.php" onclick="return confirm(\'Are you sure to quit?\');">Logout</a>');
                } else {
                    window.location = "login.php";
                }

            }

            $(document).ready(function () {
                    checkLogin();
            });

        </script>

</body>
</html>

<?php
session_write_close();
?>
