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



<form action="index.php?page=tasks&action=addTask" method="post" id="form1">
    <button type="submit" form="form1" value="create">Add Task</button>
</form>



<script src="js/scripts.js"></script>
</body>
</html>