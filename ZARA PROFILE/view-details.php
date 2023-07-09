<?php
include "conn.php";
session_start();
// $_SESSION['email']=$result['EMAIL'];

$sql = "SELECT * FROM zaratb WHERE EMAIL = {$_GET['uemail']};";
$query = mysqli_query($conn, $sql);
$row=mysqli_num_rows($query);
$result= mysqli_fetch_assoc($query);
var_dump($result);

?>