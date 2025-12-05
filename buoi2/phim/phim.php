<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table{
        width: 90%;
        margin: 0 auto;
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
        <h1>Thông tin phim</h1>
        <a class="btn them" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>
    <table border=1>
        <tr>
            <th>Tên phim</th>
            <th>Đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Quốc gia</th>
            <th>Số tập</th>
            <th>Thể loại</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>

        <?php
            include("connect.php");
            $sql = "SELECT 
                p.*, 
                qg.ten_quoc_gia, 
                dd.ho_ten, 
                GROUP_CONCAT(tl.ten_the_loai SEPARATOR ', ') AS ds_the_loai
            FROM phim p
            JOIN quoc_gia qg ON qg.id = p.quoc_gia_id
            JOIN nguoi_dung dd ON dd.id = p.dao_dien_id
            JOIN phim_the_loai ptl ON p.id = ptl.phim_id
            JOIN the_loai tl ON tl.id = ptl.the_loai_id
            GROUP BY p.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $row["ten_phim"] ?></td>
            <td><?php echo $row["ho_ten"] ?></td>
            <td><?php echo $row["nam_phat_hanh"] ?></td>
            <td><?php echo $row["poster"] ?></td>
            <td><?php echo $row["ten_quoc_gia"] ?></td>
            <td><?php echo $row["so_tap"] ?></td>
            <td><?php echo $row["ds_the_loai"] ?></td>
            <td><?php echo $row["trailer"] ?></td>
            <td><?php echo $row["mo_ta"] ?></td>
            <td class="chuc-nang">
                <a class="btn sua" href="index.php?page_layout=capnhatphim&id=<?php echo $row["id"]; ?>">Cập nhật</a>
                <a class="btn xoa" href="phim/xoaphim.php?id=<?php echo $row["id"]; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>