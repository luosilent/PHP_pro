<?php
include("../helper/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>favplaces</title>
	
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	
</head>
<body>

<div class="wrapper">

    <div class="header">
		<h1 style="	height:58px;line-height:58px;margin-top:80px;margin-bottom:120px;font-size:80px">Sign Up</h1>
    </div>

    <form id="login-form" method="post" action="../controller/register.php" style="margin-top:50px">

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Email address">
        </div>
        <div class="form-group">
            <label for="displayName">Display Name</label>
            <input type="text" id="displayName" name="displayName" placeholder="Display name (Username, full name, etc.)">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Create account</button>

    </form>

</div>

<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/main.js"></script>
</body>
</html>
