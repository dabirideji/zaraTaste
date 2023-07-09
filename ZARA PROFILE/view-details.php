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
<table>
    <tr>
        <th>FULLNAME</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
    </tr><tr>
        <td><?=$result['FULLNAME']?></td>
        <td><?=$result['USERNAME']?></td>
        <td><?=$result['EMAIL']?></td>
        <td><?=$result['PHONE']?></td>
    </tr>
        
</table>