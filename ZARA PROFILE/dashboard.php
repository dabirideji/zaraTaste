<?php
session_start();
if(!$_SESSION['email']){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    WELCOME TO DASHBOARD
    <a href="view-details.php?uemail='<?=$_SESSION['email']?>'">
        <button>view details</button>
    </a>
    <a href="logout.php">
        <button>logout</button>
    </a>

</body>
</html>