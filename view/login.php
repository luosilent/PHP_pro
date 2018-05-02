<?php

include("../helper/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>favplace</title>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>

    <div class="wrapper">

        <div class="header">
            <h1 style="	height:58px;line-height:58px;margin-top:120px;margin-bottom:30px;font-size:80px">Login Page</h1>
			<h1 style="	height:58px;line-height:58px;margin-top:30px;margin-bottom:60px;font-size:20px">Please enter your user name and password .Both are case sensitive.</h1>
        </div>

        <form id="login-form" method="post" action="../controller/login.php" style="margin-top:100px;">

            <label for="displayName">please input Username</label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2" style="background: #a5ce95;width: 30px;text-align: center">u</span>
                <input type="text" class="form-control" aria-describedby="basic-addon2" id="displayName" name="displayName" placeholder="Username">
<!--                <span class="input-group-addon" id="basic-addon2" style="background: #a5ce95">@example.com</span>-->
            </div>
            <label for="password">please input Password</label>
            <div class="input-group">
                <span class="input-group-addon" id="glyphicon glyphicon-user"  style="background: #a5ce95; width: 30px; text-align: center">*</span>
                <input type="password" class="form-control" aria-describedby="basic-addon1" id="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;margin-top: 30px">Submit</button>

        </form>

        <p>New here? <a href="register.php">Create an account</a></p>

    </div>



<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/main.js"></script>
</body>
</html>
