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
    <?php 
        include ('connect.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM the_loai WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $quocgia = mysqli_fetch_assoc($result);
    ?>
    <main>
        <h1>Cập nhật thể loại</h1>
        <div class="container">
            <?php
                if(!empty($_POST['ten-the-loai'])){

                    $tenTheLoai = $_POST['ten-the-loai'];    

                    $sql = "UPDATE `the_loai` SET `ten_the_loai`='$tenTheLoai' WHERE `id`='$id'";
                    //echo $sql;
                    mysqli_query($conn, $sql);
                    header('location: index.php?page_layout=theloai');    
                }
                else{
                    echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            ?>

            <form action="index.php?page_layout=capnhattheloai&id=<?php echo $id ?>" method="post">
                <div class="box">
                    <p>Tên thể loại</p>
                    <input type="text" name="ten-the-loai" placeholder="Tên thể loại">
                </div>
                <div class="box">
                    <input type="submit" value="Cập nhật">
                </div>
            </form>
        </div>
    </main>
</body>
</html>