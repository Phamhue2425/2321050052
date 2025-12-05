<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
        //1. In ra màn hình
        echo "Hello world! <br>";
        echo "Hi ";

        //2. Biến
        // Cú pháp $ + tên biến = giá trị của biến
        $ten = "Pham Hue";
        $tuoi = 20;
        echo $ten. " " .$tuoi . " tuổi <br>" ;

        //3. Hằng 
        define("SoPi","3.14");
        echo SoPi . "<br>";

        //4. Phân biệt '' và ""
        //echo '$ten' . "<br>";
        //echo "$ten" . "<br>";

        //5. Chuỗi
        #5.1: Kiểm tra độ dài của chuỗi
        echo strlen($ten);

        #5.2: Đếm số từ
        echo str_word_count($ten). "<br>";

        #5.3: Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "A");

        #5.4: Thay thế kí tự trong chuỗi
        str_replace("Anh", "An", $ten);

        //6. Toán tử
        $SoThuNhat = 10;
        $SoThuHai = 5;
        //echo $SoThuNhat + $SoThuHai;
        #+= -+ *= /= %=
        //echo $SoThuNhat %= $SoThuHai;
        //echo $SoThuNhat < $SoThuHai;

        //7. Câu lệnh điều kiện
        // if("Điều kiện){
        //      logic
        //}

        //Kiểm tra tổng của số nhứ nhất và số thứ hai
        // nếu <15 thì in ra nhỏ hơn 15
        // nếu >
        $tong = $SoThuNhat + $SoThuHai;
        echo $tong . "<br>";
        if("$tong < 15"){
            echo "Nhỏ hơn 15" . "<br>";
        }
        elseif("$tong == 15"){
            echo "Tổng bằng 15" . "<br>";
        }
        else{
            echo "Lớn hơn 15" . "<br>";
        }

        //8. switch case
        $color = "red";
        switch($color){
            case "red":
                echo "is red" . "<br>";
                break;
            case "blue":
                echo "is blue" . "<br";
                break;
            default:
                echo "no color" . "<br>";
                break;
        }

        //9. for
        for($i = 0; $i < 5; $i++){
            echo $i . "<br>";
        }

        //10. mảng
        $mang = ["Anh", "Nhat Anh", "Vu Anh"];
        echo "Số phần tử trong mảng: " . count($mang) . "<br>";
        echo $mang[1] . "<br>";
        print_r($mang);
        echo "<br>";
        $mang[0] = "Hai Anh";
        print_r($mang);
        echo "<br>";
        $mang[] = "Tam";
        print_r($mang);
        echo "<br>";
        #xóa
        unset($mang[3]);
        print_r($mang);
        echo "<br>";

        # Sắp xếp mảng
        $mang = ["C","B","D","A"];
        print_r($mang);
        echo "<br>";
        # sx tăng
        sort($mang);
        print_r($mang);
        # sx giảm
        echo "<br>";
        rsort($mang);
        print_r($mang);

        // 11. Kiểm tra biến có tồn tại hay không
        $bienA = "hello";
        isset($bienA);  // trả ra true
        isset($bienB);  // trả ra false

        if(isset($bienB)){
            echo "Biến này có tồn tại";
        }
        else{
            echo "Biến này khôgn tồn tại";
        }

        // Check empty
        $check = "";
        if(empty($check)){
            echo "empty" . "<br>";
        }
        else{
            echo "no  empty" . "<br>";
        }

        //12 Hàm
        # Không tham số
        function XinChao(){
            return "Hello" . "<br>";
        }

        # Có tham số
        function XinChao2($ten){
            return "Hello " . $ten;
        }
        echo XinChao();
        echo XinChao2("Hue");
    ?>
</body>
</html>