<?php
require_once "./connDB.php";
session_start();
if (isset($_POST['logout'])){
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']);
        header('location: home.php');
        exit;
    }
}

if (isset($_POST['login'])){   
    if (isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashpwd = md5($password);
    $query = mysqli_query($conn, "SELECT * FROM taikhoan WHERE username='$username' AND password = '$hashpwd'");

    if (mysqli_num_rows($query) == 0) {
        echo '<script>if(confirm("Sai tên đăng hoặc mật khẩu"))
                        window.location="home.php"</script>';
        exit;
    }

    $_SESSION['username'] = mysqli_fetch_array($query)['displayname'];
    header('location: home.php');
    }
}

if (isset($_POST['reg'])){
    $hoten = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['enterpassword'];
    $repassword = $_POST['enterrepassword'];

    if ($password != $repassword){
        echo '<script>if(confirm("Mật khẩu và mật khẩu kiểm tra không đúng"))
                        window.location="home.php"</script>';
        exit();
    }

    $hashpwd = md5($password);
    $query = "INSERT INTO taikhoan (username, password, displayname) VALUES ('$email','$hashpwd','$hoten')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo '<script>if(confirm("Đăng kí thất bại"))
                        window.location="home.php"</script>';
        exit();
    }
    else {
        $_SESSION['username'] = $hoten;
        header('location: home.php');
        exit();
    }
}


?>