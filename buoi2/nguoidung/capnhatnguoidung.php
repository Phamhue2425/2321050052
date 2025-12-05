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
        padding: 20px;
        flex-direction: column;
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
        color: red
    }
</style>
</head>
<body>
    <?php 
        include ('connect.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM nguoi_dung WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $nguoiDung = mysqli_fetch_assoc($result);
    ?>
    <main>
        <h1>Cập nhật người dùng</h1>
        <div class="container">
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

                    $sql = "UPDATE `nguoi_dung` SET `ten_dang_nhap`='$tenDangNhap',`mat_khau`='$matKhau',`ho_ten`='$hoTen',`email`='$email',`sdt`='$sdt',`vai_tro_id`='$vaiTro',`ngay_sinh`='$ngaySinh' WHERE `id`='$id'";
                    //echo $sql;
                    mysqli_query($conn, $sql);
                    header('location: index.php?page_layout=nguoidung');    
                }
                else{
                    echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            ?>

            <form action="index.php?page_layout=capnhatnguoidung&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="ten-dang-nhap" placeholder="Tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap'] ?>"> 
                </div>
                <div class="box">
                    <p>Mật khẩu</p>
                    <input type="password" name="password" placeholder="Mật khẩu" value="<?php echo $nguoiDung['mat_khau'] ?>">
                </div>
                <div class="box">
                    <p>Họ tên</p>
                    <input type="text" name="ho-ten" placeholder="Họ tên" value="<?php echo $nguoiDung['ho_ten'] ?>">
                </div>    
                <div class="box">
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Email" value="<?php echo $nguoiDung['email'] ?>">
                </div>    
                <div class="box">
                    <p>Số điện thoại</p>
                    <input type="text" name="sdt" placeholder="Số điện thoại" value="<?php echo $nguoiDung['sdt'] ?>">
                </div>    
                <div class="box">
                    <p>Ngày sinh</p>
                    <input type="date" name="ngay-sinh" placeholder="Ngày sinh" value="<?php echo $nguoiDung['ngay_sinh'] ?>">
                </div>    
                <div class="box">
                    <p>Vai trò</p>
                    <select name="vai-tro" id="">
                        <option value="1" <?php echo $nguoiDung['ten_vai_tro'] == 1 ? "selected" : "" ?> >Admin</option>
                        <option value="2" <?php echo $nguoiDung['ten_vai_tro'] == 2 ? "selected" : "" ?> >Dao dien</option>
                        <option value="3" <?php echo $nguoiDung['ten_vai_tro'] == 3 ? "selected" : "" ?> >Dien vien</option>
                        <option value="4" <?php echo $nguoiDung['ten_vai_tro'] == 4 ? "selected" : "" ?> >Nguoi dung</option>
                    </select>
                </div>    
                <div class="box">
                    <input type="submit" value="Cập nhật">
                </div>
            </form>
        </div>
    </main>  
</body>
</html>