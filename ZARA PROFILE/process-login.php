<?php



if(isset($_POST['login'])){

    $uName = $_POST['uName'];
    $password = $_POST['pass'];
    include ('conn.php');

    $sql = "SELECT * FROM zaratb WHERE USERNAME = '$uName' and PASSWORD ='$password';";
    $query = mysqli_query($conn, $sql);
    $row=mysqli_num_rows($query);
    $result= mysqli_fetch_assoc($query);
    if ($row>0) {
        session_start();
        $_SESSION['email']=$result['EMAIL'];
        $_SESSION['uName']=$result['USERNAME'];
        
        echo "<script>alert('login succes');
            window.location.href='dashboard.php';
        </script>";
    }
    else {
        echo "<script>alert('login failed');
            window.location.href='login.php';
        </script>";
    }



}



?>