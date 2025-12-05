<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table{
        width: 250px;
    }
    .sua{
        color: black;
        border: 2px solid #88bfff;
        padding: 0 10px;
        border-radius: 2px
    }
    .xoa{
        color: white;
        padding: 0 10px;
        background: red;
        border-radius: 2px
    }
    .chuc-nang{
        display: flex;
        justify-content: center;
        gap: 5px
    }
    .btn{
        display: flex;      
    }
    .them{
        color: black;
        padding: 5px;
        border: 2px solid #053975ff;
        border-radius: 5px
    }
</style>

</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items: center; margin: 0 20px">
        <h1>Thông tin thể loại</h1>
        <a class="btn them" href="index.php?page_layout=themtheloai">Thêm thể loại</a>
    </div>
    <table border=1>
        <tr>
            <th>Thể loại</th>
            <th>Chức năng</th>
        </tr>
        
        <?php
            include("connect.php");
            $sql = "SELECT * FROM the_loai";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $row["ten_the_loai"] ?></td>
            <td class="chuc-nang">
                <a class="btn sua" href="index.php?page_layout=capnhattheloai&id=<?php echo $row["id"]; ?>">Cập nhật</a>
                <a class="btn xoa" href="theloai/xoatheloai.php?id=<?php echo $row["id"]; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>