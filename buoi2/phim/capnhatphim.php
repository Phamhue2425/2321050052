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
        $sql = "SELECT * FROM phim WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $phim = mysqli_fetch_assoc($result);
    ?>
    <main>
        <h1>Cập nhật phim</h1>
        <div class="container">
            <?php
                if(!empty($_POST['ten-phim']) &&
                    !empty($_POST['dao-dien']) &&
                    !empty($_POST['nam-phat-hanh']) && 
                    !empty($_POST['poster']) &&
                    !empty($_POST['quoc-gia']) &&
                    !empty($_POST['so-tap']) &&
                    !empty($_POST['trailer']) &&
                    !empty($_POST['mo-ta'])){

                    $tenPhim = $_POST['ten-phim'];    
                    $daoDien = $_POST['dao-dien'];    
                    $namPhatHanh = $_POST['nam-phat-hanh'];    
                    $poster = $_POST['poster'];    
                    $quocGia = $_POST['quoc-gia'];    
                    $soTap = $_POST['so-tap'];    
                    $trailer = $_POST['trailer'];  
                    $moTa = $_POST['mo-ta'];  

                    $sql = "UPDATE `phim` SET `ten_phim`='$tenPhim',`dao_dien_id`='$daoDien',`nam_phat_hanh`='$namPhatHanh',`poster`='$poster',`quoc_gia_id`='$quocGia',`so_tap`='$soTap',`trailer`='$trailer',`mo_ta`='$moTa' WHERE `id`='$id'";
                    //echo $sql;
                    mysqli_query($conn, $sql);
                    header('location: index.php?page_layout=phim');    
                }
                else{
                    echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            ?>

            <form action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên phim</p>
                    <input type="text" name="ten-phim" placeholder="Tên phim">
                </div>
                <div class="box">
                    <p>Đạo diễn</p>
                    <select name="dao-dien" id="">
                        <option value="2">Josh Cooley</option>
                        <option value="3">James Cameron</option>
                        <option value="4">F. Gary Gray</option>
                        <option value="5">Trấn Thành</option>
                        <option value="6">Gareth Edwards</option>
                    </select>
                </div>
                <div class="box">
                    <p>Năm phát hành</p>
                    <input type="text" name="nam-phat-hanh" placeholder="Năm phát hành">
                </div>    
                <div class="box">
                    <p>Poster</p>
                    <input type="text" name="poster" placeholder="Poster">
                </div>    
                <div class="box">
                    <p>Quốc gia</p>
                    <select name="quoc-gia" id="">
                        <option value="1">Việt Nam</option>
                        <option value="2">Mỹ</option>
                        <option value="3">Anh</option>
                        <option value="4">Nhật Bản</option>
                        <option value="5">Thái Lan</option>
                        <option value="6">Hàn Quốc</option>
                        <option value="7">Trung Quốc</option>
                    </select>
                </div>    
                <div class="box">
                    <p>Số tập</p>
                    <input type="number" name="so-tap" placeholder="Số tập">
                </div>    
                <div class="box">
                    <p>Trailer</p>
                    <input type="text" name="trailer" placeholder="Trailer">
                </div>    
                <div class="box">
                    <p>Mô tả</p>
                    <input type="text" name="mo-ta" placeholder="Mô tả">
                </div>       
                <div class="box">
                    <input type="submit" value="Cập nhật">
                </div>
            </form>
        </div>
    </main>
</body>
</html>