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


<form action="index.php?page=tasks&action=createTask" method="POST">
    Owner email: <input type="text" name="owneremail"><br>
    Owner id: <input type="text" name="ownerid"><br>
    Created date: <input type="text" name="cdate"><br>
    Due date: <input type="text" name="ddate"><br>
    Message: <input type="text" name="message"><br>
    isdone: <input type="text" name="isdone"><br>
    <br>
    <button type="submit">Add</button>
</form>



<script src="js/scripts.js"></script>
</body>
</html>