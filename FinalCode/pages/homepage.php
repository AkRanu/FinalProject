<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Final Project</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<body background="https://businessbetties.com/wp-content/uploads/2016/10/052416-01-1280x640.jpg"></body>

<h2>
    <?php

    //this how to print some data;
    //echo $data['site_name'];

    ?> </h2>

<!--/<h3><a href="index.php?page=accounts&action=all">Show All Accounts</a></h3>-->
<!--<h3><a href="index.php?page=tasks&action=all">Show All Tasks</a></h3>-->
<center>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b><font color="white">Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br><br>

        <label><b>Password</b></label></font>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <br><br>

        <button type="submit">  Login  </button>
    </div>
    </div>



</form>
<h3><a href="index.php?page=accounts&action=register">New User?</a></h3>
</center>

<script src="js/scripts.js"></script>
</body>
</html>