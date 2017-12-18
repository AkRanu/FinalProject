<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>
<br>
<body background="http://fortifyexperts.com/wp-content/uploads/2016/07/checklist.jpg"></body>

<form action="index.php?page=tasks&action=addTask" method="post" id="form1">
    <button type="submit" form="form1" value="create">Add Task</button>
</form>
<br>
<h1><a href="index.php?page=accounts&action=show">View my profile </a></h1>
</form>
<br>
<form action="index.php?page=accounts&action=logout" method="post">
    <button type="submit">Log Out</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>