<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    p{
        font-weight: bold;
    }
    h1{
        text-align: center;
    }
    .container{
        border: 2px solid black;
        display: flex;
        justify-content: center;
        width: 350px;
        border-radius: 15px;
        padding: 20px
    }
    .box{
        margin: 10px;
    }
    main{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .warning{
        text-align: center;
        color: red
    }
</style>
</head>
<body>
    <main>
        <h1>Thêm người dùng</h1>
        <div class="container">
            <form action="index.php?page_layout=themnguoidung" method="post">
                <div class="box">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="ten-dang-nhap" placeholder="Tên đăng nhập">
                </div>
                <div class="box">
                    <p>Mật khẩu</p>
                    <input type="password" name="password" placeholder="Mật khẩu">
                </div>
                <div class="box">
                    <p>Họ tên</p>
                    <input type="text" name="ho-ten" placeholder="Ho ten">
                </div>    
                <div class="box">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email">
                </div>    
                <div class="box">
                    <p>Số điện thoại</p>
                    <input type="text" name="sdt" placeholder="So dien thoai">
                </div>    
                <div class="box">
                    <p>Ngày sinh</p>
                    <input type="date" name="ngay-sinh" placeholder="Ngay sinh">
                </div>    
                <div class="box">
                    <p>Vai trò</p>
                    <select name="vai-tro" id="">
                        <option value="1">Admin</option>
                        <option value="2">Đạo diễn</option>
                        <option value="3">Diễn viên</option>
                        <option value="4">Người dùng</option>
                    </select>
                </div>    
                <div class="box">
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </main>

    <?php
        if(!empty($_POST['ten-dang-nhap']) &&
            !empty($_POST['password']) &&
            !empty($_POST['ho-ten']) && 
            !empty($_POST['email']) &&
            !empty($_POST['sdt']) &&
            !empty($_POST['ngay-sinh']) &&
            !empty($_POST['vai-tro'])){

            $tenDangNhap = $_POST['ten-dang-nhap'];    
            $matKhau = $_POST['password'];    
            $hoTen = $_POST['ho-ten'];    
            $email = $_POST['email'];    
            $sdt = $_POST['sdt'];    
            $ngaySinh = $_POST['ngay-sinh'];    
            $vaiTro = $_POST['vai-tro'];  

            $sql = "INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `ho_ten`, `email`, `sdt`, `vai_tro_id`, `ngay_sinh`) VALUES ('$tenDangNhap','$matKhau','$hoTen','$email','$sdt','$vaiTro','$ngaySinh')";
            //echo $sql;
            include('connect.php');
            mysqli_query($conn, $sql);
            header('location: index.php?page_layout=nguoidung');    
        }
        else{
            echo "<p class='warning'>'Vui lòng nhập đầy đủ thông tin'</p>";
        }
    ?>
</body>
</html>