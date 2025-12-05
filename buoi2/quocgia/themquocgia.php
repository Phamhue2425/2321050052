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
        <h1>Thêm quốc gia</h1>
        <div class="container">
            <?php
                if(!empty($_POST['ten-quoc-gia'])){

                    $tenQuocGia = $_POST['ten-quoc-gia'];     

                    $sql = "INSERT INTO `quoc_gia`(`ten_quoc_gia`) VALUES ('$tenQuocGia')";
                    //echo $sql;
                    include('connect.php');
                    mysqli_query($conn, $sql);
                    header('location: index.php?page_layout=quocgia');
                }
                else{
                    echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin</p>";
                }
            ?>

            <form action="index.php?page_layout=themquocgia" method="post">
                <div class="box">
                    <p>Tên quốc gia</p>
                    <input type="text" name="ten-quoc-gia" placeholder="Tên quốc gia">
                </div>
                <div class="box">
                    <input type="submit" value="Thêm mới">
                </div>
            </form>
        </div>
    </main>

</body>
</html>