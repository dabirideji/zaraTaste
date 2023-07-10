<?php 

if (isset($_POST['login'])) {
    require 'connect.php';

    $user=$_POST['userName'];
    $pword=$_POST['pword'];

    if(empty($user) || empty($user) ){
        header('location: login.php?error=emptyFields');
        exit();
    }
    else{
        $query="SELECT * From tbl_registered WHERE userName=? OR email=? ";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query)){
            header('location: login.php?error=sqlerror');
            exit();
        }
        else {


            mysqli_stmt_bind_param($stmt,"ss",$user,$user);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);

            if ($row =mysqli_fetch_assoc($result)) {
                $pwdCheck=password_verify($pword,$row['pword']);
                if ($pwdCheck == false) {
                    header("location:login.php?wrongpassword");
                    exit();
                }
               elseif ($pwdCheck == true) {
                 session_start();
                 $_SESSION['userid']=$row['userName'];

                 header("location:../index.php?login=success");
               }
            }
            else{
                header('location: login.php?error=userdoesnotexists');
                exit();
            }

        }





    }


}
else{
     header('location: login.php');
     exit();
    
}



?>