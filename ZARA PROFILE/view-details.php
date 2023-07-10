<?php
session_start();
if(!$_SESSION['email']){
    header("location:login.php");
}

?>
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
        <td><input type="text" value="<?=$result['FULLNAME']?>"></td>
        <td><input type="text" value="<?=$result['USERNAME']?>"></td>
        <td><input type="text" value="<?=$result['EMAIL']?>" disabled></td>
        <td><input type="text" value="<?=$result['PHONE']?>"></td>
    </tr>
</table>
<button>UPDATE DETAILS</button>
