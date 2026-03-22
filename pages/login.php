<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Roboto Mono", "san-serif", "Arial";
                display: flex;
                justify-content: center;
                align-items: center;
                padding-top:90px;
                min-width: 500px;
                background-color:grey;
            }
            p
            {
                padding-left:28px;
            }
            
            .loginForm
            {
                background-color: rgb(29,29,29);
                width:600px;
                height:500px;
                color:white;
                border-radius:30px;
                box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.3);
            }
            .loginForm div
            {
                margin-top:30px;
            }
            .loginForm h2
            {
                text-align: center;
            }
            input[type="text"], input[type="password"], button
            {
                width:90%;
                height:10%;
                padding-left:10px;
                margin-left:20px;
                border-radius:20px;
                font-size:17px;
            }
            button{
                width:92%;
            }
            .loginBtn, .registerBtn
            {
                height:50px;
                margin-top:20px;
                background-color: white;
            }
            .loginBtn, .registerBtn
            {
                height:50px;
                margin-left:20px;
                margin-top:20px;
                background-color: rgb(218, 218, 218);
                color:rgb(0, 0, 0);
                font-weight: bold;
                border:none;
            }
            .registerBtn
            {
                margin-top:20px;
                background-color: rgb(123, 150, 255);
            }
            .loginBtn:hover, .registerBtn:hover
            {
                cursor: pointer;
            }
            .loginBtn:active
            {
                filter:brightness(80%)
            }
            .registerBtn:active
            {
                filter:brightness(80%);
            }
            .success-message {
                position: fixed;
                top: 20px;
                right: 20px;
                background: #4CAF50;
                color: white;
                padding: 12px 20px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <?php
        session_start();//gọi session để lấy biến session 
        if (isset($_SESSION["success"])) 
        {
           echo "<div class='success-message'>" . $_SESSION["success"] . "</div>";
           unset($_SESSION["success"]);
        }
        ?>
        <script src="../scripts/killPopupNotification.js"></script>

        <form class="loginForm" name="loginForm" action="../actions/loginProcess.php" method="POST">
                <h2>Đăng Nhập</h2>
                <p>Tài Khoản</p>
                <input type="text" placeholder="Nhập thông tin tài khoản" name="username" required>
            
                <p>Mật Khẩu</p>
                <input type="password" placeholder="Nhập mật khẩu"  name="password" required>
                <div>
                    <button type="submit" class="loginBtn" id="loginBtn">Đăng nhập</button> 
                    <button type="button" class="registerBtn" id="registerBtn">Đăng ký</button>
                    <script>
                    document.getElementById("registerBtn").onclick = function () {
                    window.location.href = "register.php";
                };
                </script>
                </div>
        </form>
    </body>
</html>