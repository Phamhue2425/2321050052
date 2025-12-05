<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 2</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>

    </form>
    <?php
        include('connect.php');  // nối 2 file với nhau
        if(isset($_POST['username']) && isset($_POST['password'])){
            $TenDangNhap = $_POST['username'];
            $MatKhau = $_POST['password'];
        }
            //echo $MatKhau
            //echo $TenDangNhap

            //Nếu tên đăng nhập = admin
            //Mật khẩu 123 thì cho phép người dùng vào trang chủ
            $sql = "select * from nguoi_dung where ten_dang_nhap = '$TenDangNhap' and mat_khau = '$MatKhau'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                session_start();
                $_SESSION["username"] = $TenDangNhap;
                header('location: index.php');
            }
            // if($TenDangNhap == 'admin' && $MatKhau == '123'){
            //     $_SESSION["username"] = $TenDangNhap;
            //     header('location: trangchu.php');
            // }
             else{
                echo "<p class='warning'>Sai thông tin đăng nhập </p>";
             }
    ?>
</body>
</html>

