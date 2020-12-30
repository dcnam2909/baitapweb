<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="admin.css">
    <title>Quản lý trang bán hàng</title>
    <style>
        .conntent {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .modal-title {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="conntent">
        <div class="modal-dialog  modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-header">
                <h2 class="modal-title" >Đăng nhập</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post" name="admin-login" id="admin-login">
                        <div class="form-group">
                                <label for="exampleInputUsername">Tên đăng nhập:</label>
                                <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Nhập tên đăng nhập" name="admin-username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="admin-password">
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit-admin-login" form="admin-login" class="btn btn-primary">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>

<?php 
require "../view/connDB.php";
session_start();
if(isset($_POST['admin-username'])){
    $user = $_POST['admin-username'];
    $pass = $_POST['admin-password'];
    $hashPass = md5($pass);
    $checkAccount = mysqli_query($conn,"SELECT * FROM taikhoan WHERE username = '$user' AND  password = '$hashPass' AND type = 1");
    if (mysqli_num_rows($checkAccount)){
        $_SESSION['username'] = $user;
        header('location: admin.php');
    } else die();
}
?>