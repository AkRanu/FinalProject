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
    <h3>Task List</h3>

<?php
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);
print utility\htmlTable::generateTableFromOneRecord($data);

?>

<form action="index.php?page=tasks&action=editTask&id=<?php echo $data->id; ?> " method="post">
    <button type="submit">Edit</button>
    <br> <br>
</form>
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>