<?php
include "conn.php";


?>

<?php
if(isset($_POST['signUp'])){
    $fName = $_POST['fName'];
    $uName = $_POST['uName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $cPass = $_POST['cPass'];

    if(empty($fName)||empty($uName)||empty($email)||empty($phone)||empty($pass)||empty($cPass)){
        echo "
            <script>
                alert('SOME FIELDS ARE EMPTY');
                window.location.href='signup.html';
            </script>
        ";
    }
    else if($pass!=$cPass){
        echo "
        <script>
            alert('PASSWORDS DO NOT MATCH');
            window.location.href='signup.html';
        </script>
    ";
    }
    else{
        include "conn.php";
        $sql = "INSERT INTO zaratb(FULLNAME, USERNAME, EMAIL, PHONE, PASSWORD) 
        VALUES ('$fName', '$uName', '$email', '$phone', '$cPass')";

        $query = mysqli_query($conn, $sql);
        if($query){
            session_start();
            $_SESSION['email']="$email";
            echo "
        <script>
            alert('DATA INSERTED SUCCESSFULLY');
            window.location.href='dashboard.php';
        </script>
    ";
        }
        else{
            echo "
            <script>
                alert('SOMETHING WENT WRONG');
                window.location.href='signup.html
                ';
            </script>
        ";
        }
    }
    
}


?>