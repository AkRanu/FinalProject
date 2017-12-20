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
<body background="https://ak7.picdn.net/shutterstock/videos/1430977/thumb/7.jpg"></body>
    <center>
        <h3>Add Task</h3>
        <?php date_default_timezone_set('America/New_York'); ?>

    <form action="index.php?page=tasks&action=createTask" method="POST">
        Created date: <input type="text" name="cdate" value="<?php echo date('m/d/y');?>"><br><br>
        Due date: <input type="text" name="ddate"><br><br>
        Message: <input type="text" name="message"required><br><br>
        isdone: <input type="text" name="isdone"required><br><br>
        <br>
        <button type="submit" id ="create"><h4>Add</h4></button>
    </form>

    </center>




<script src="js/scripts.js"></script>
</body>
</html>