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
        align-items: center
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
    <main>
        <h1>Thêm phim</h1>
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

                    $sql = "INSERT INTO `phim`(`ten_phim`, `dao_dien_id`, `nam_phat_hanh`, `poster`, `quoc_gia_id`, `so_tap`, `trailer`, `mo_ta`) VALUES ('$tenPhim','$daoDien','$namPhatHanh','$poster','$quocGia','$soTap','$trailer','$moTa')";
                    //echo $sql;
                    include('connect.php');
                    mysqli_query($conn, $sql);
                    header('location: index.php?page_layout=phim');
                }
                else{
                    echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            ?>

            <form action="index.php?page_layout=themphim" method="post">
                <div class="box">
                    <p>Tên phim</p>
                    <input type="text" name="ten-phim" placeholder="Tên phim">
                </div>
                <div class="box">
                    <p>Đạo diễn</p>
                    <select name="dao-dien" id="">
                        <option value="1">Josh Cooley</option>
                        <option value="2">James Cameron</option>
                        <option value="3">F. Gary Gray</option>
                        <option value="4">Trấn Thành</option>
                        <option value="5">Gareth Edwards</option>
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
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </main>

</body>
</html>