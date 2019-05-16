<?php
session_start();
if(!isset($_SESSION['username'])){
header('loaction:login.php');}
?>
<!DOCTYPE html>
<html>
<head></head>head<body>
	<h2>Hii  <?php echo $_SESSION['username']; ?></h2>
    <title>::My Shop::</title>
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link href="fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="subheader">
                <div class="container">
                    <p>Welcome to BeStylish & BeYou !!!</p>
                    <a href="#">Guest</a><a href="#">Consumer</a><a href="#">Download App</a><a href="#">Help</a>
                </div>
            </div>
            <!--==main header==-->
            <div id="main-header">
                <!--logo-->
                <div id="logo">
                    <span id="ist">BeStylish & </span><span id="iist">BeYou !!!</span>
                </div>



	<a href="logout.php">Logout</a>
</body></html>