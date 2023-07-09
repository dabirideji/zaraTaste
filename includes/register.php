<?php 
session_start(); // Start the session

if (isset($_POST['signup'])) {
    include('connect.php');

    // Variables for the inputs
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $confirmPword = $_POST['Cpword'];

    // Error Handlers
    if (empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($pword) || empty($confirmPword)) {
        header('location: ../register.php?error=emptyfields');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9]*S/", $userName)) {
        header('location: ../register.php?error=Invalidemaiusernamel');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: ../register.php?error=Invalidemail');
        exit();
    } elseif (preg_match("/^[a-zA-Z0-9]*S/", $userName)) {
        header('location: ../register.php?error=InvalidUserame');
        exit();
    } elseif ($pword !== $confirmPword) {
        header('location: ../register.php?error=passworddonotmatch');
        exit();
    } else {
        $sql = "SELECT userName FROM information WHERE userName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../register.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $user_o = mysqli_stmt_num_rows($stmt);
            if ($user_o > 0) {
                header('location: ../register.php?error=Usernameialreadytaken');
                exit();
            } else {
                // Generate and store the OTP
                $otp = mt_rand(100000, 999999);
                $_SESSION['otp'] = $otp; // Store the OTP in the session
                $_SESSION['userName'] = $userName; // Store the userName in the session
                $sql = "INSERT INTO information (firstName,lastName,userName,pword,email,otp) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header('location: ../register.php?error=sqlerror');
                    exit();
                } else {
                    $hashpwd = password_hash($pword, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $userName, $hashpwd, $email, $otp);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                    exit();
                }
            }
        }
    }
    mysqli_close($conn);
} else {
    header('location: ../register.php');
    exit();
}
?>





