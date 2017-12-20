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

<body background="http://fortifyexperts.com/wp-content/uploads/2016/07/checklist.jpg"></body>
<center>
<br><br><h2>Welcome</h2>

<h2><a href="index.php?page=accounts&action=show">My Profile</a></h2>
</form>
<!--<h4>Welcome <?php echo $data->fname ?></h4>--><br><br>


<?php
//this is how you print something
    print utility\htmlTable::genarateTableFromMultiArray($data);
?>
<br>

    <form action="index.php?page=tasks&action=addTask" method="post" id="form1">
    <button type="submit" form="form1" value="create">Add Task</button>
    </form>
    <br><br>

    <form action="index.php?page=accounts&action=logout" method="post">
    <button type="submit">Log Out</button>
    </form>

</center>

<script src="js/scripts.js"></script>
</body>
</html>