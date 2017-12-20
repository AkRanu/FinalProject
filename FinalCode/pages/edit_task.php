
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
    <h3>Edit Task</h3>
<form action="index.php?page=tasks&action=updateTask&id=<?php echo $data->id ?>" onsubmit="return validateForm()"method="POST">
    Owner email: <input type="text" name="owneremail" value="<?php echo $data->owneremail ?>"><br><br>
    Owner id: <input type="text" name="ownerid" value="<?php echo $data->ownerid ?>" readonly><br><br>
    Created date: <input type="text" name="cdate" value="<?php echo $data->createddate ?>" readonly><br><br>
    Due date: <input type="text" name="ddate" value="<?php echo $data->duedate ?>" ><br><br>
    Message: <input type="text" name="message" value="<?php echo $data->message ?>"><br><br>
    isdone: <input type="text" name="isdone" value="<?php echo $data->isdone ?>"><br><br>
    <br>
    <button type="submit"><h4>Update</h4></button>
</form>
    </center>


<script src="js/scripts.js"></script>
<script>
    function validateForm() {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = document.forms["updateTask"]["owneremail"].value;
        var isdone = document.forms["updateTask"]["isdone"].value;
        var temp;
        // alert(isdone);
        var alertmessage = "";
        if (email == "")
        {
            alertmessage = alertmessage + "Please enter the Email address  ,";
        }
        if (!email.match(mailformat) && email != "")
        {
            alertmessage = alertmessage + "Email address is not Valid ,";
        }
        if (isdone == "1" || isdone == "0"){temp = true}
        if(!temp){
            alertmessage = alertmessage + "Please enter BINARY value 0/1 for IS DONE.";
        }
        if (alertmessage != "")
        {
            alert(alertmessage);
            return false;
        }
    }
</script>
</body>
</html>

<!--<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id ?>" method="post" id="form1">
   <button type="submit" form="form1" value="delete">Delete</button>
</form> -->

