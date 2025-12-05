<?php
    // cookie 
    # lưu ở phía người dùng
    # dùng cho những thông tinn ít quan trọng
    $cookieName = "user";
    $cookieValue = "PhamHue";
    //86400 = 30 ngay
    //setcookie($cookieName, $cookieValue, time()+(86400), "/");
    if(isset($_COOKIE[$cookieName])){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie chưa tồn tại";
    }

    // session 
    # lưu ở server
    # thông tin quan đăng nhập, giỏ hàng,...
    session_start();
    $_SESSION["name"] = "Pham Hue";
    echo $_SESSION["name"];
?>