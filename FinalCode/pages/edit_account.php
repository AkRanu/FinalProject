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
    <h3>Edit Profile</h3>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"required><br><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"required><br><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"required><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"required><br><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"required><br><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"required><br><br>
    <input type="submit" value="Edit">
</form>

<script src="js/scripts.js"></script>
</body>
</html>
