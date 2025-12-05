<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        margin: 0;
    }
    nav{
        background-color: aquamarine;
        display: flex;
        justify-content: space-between;
    }
    ul{
        display: flex;
        list-style: none;
        margin: 0;
        gap: 15px;
    }
    li{
        padding: 10px; 
        font-size: 18px
    }
    a{
        text-decoration: none;
    }
</style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["username"])){
            header('location: login.php');
        }
    ?>

    <header>
        <nav>
            <ul>
                <li class=""><a class="" href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li class=""><a class="" href="index.php?page_layout=phim">Phim</a></li>
                <li class=""><a class="" href="index.php?page_layout=theloai">Thể loại</a></li>
                <li class=""><a class="" href="index.php?page_layout=quocgia">Quốc gia</a></li>
                <li class=""><a class="" href="index.php?page_layout=nguoidung">Người dùng</a></li>
            </ul>
            <ul class="">
                <li class=""><?php echo "Xin chào " . $_SESSION["username"]; ?></li>
                <li class=""><a class="" href="index.php?page_layout=dangxuat">Đăng xuất</a></li>
            </ul>
        </nav>
        <?php
            if(isset($_GET['page_layout'])){
                switch($_GET['page_layout']){
                    case 'trangchu':     
                        include "trangchu.php";
                        break;
                    case 'themnguoidung':
                        include "nguoidung/themnguoidung.php";
                        break;
                    case 'nguoidung':
                        include "nguoidung/nguoidung.php";
                        break;
                    case 'capnhatnguoidung':
                        include "nguoidung/capnhatnguoidung.php";
                        break;
                    case 'xoanguoidung':
                        include "nguoidung/xoanguoidung.php";
                        break;    
                    case 'phim':
                        include "phim/phim.php";
                        break;
                    case 'themphim':
                        include "phim/themphim.php";
                        break;
                    case 'xoaphim':
                        include "phim/xoaphim.php";
                        break;
                    case 'capnhatphim':
                        include "phim/capnhatphim.php";
                        break;
                    case 'theloai':
                        include "theloai/theloai.php";
                        break;
                    case 'themtheloai':
                        include "theloai/themtheloai.php";
                        break;
                    case 'capnhattheloai':
                        include "theloai/capnhattheloai.php";
                        break;
                    case 'xoatheloai':
                        include "theloai/xoatheloai.php";
                        break;
                    case 'quocgia':
                        include "quocgia/quocgia.php";
                        break;
                    case 'themquocgia':
                        include "quocgia/themquocgia.php";
                        break;
                    case 'capnhatquocgia':
                        include "quocgia/capnhatquocgia.php";
                        break;
                    case 'xoaquocgia':
                        include "quocgia/xoaquocgia.php";
                        break;
                    case 'dangxuat':         
                        break;
                }
            }
        ?>
    </header>
    
</body>
</html>