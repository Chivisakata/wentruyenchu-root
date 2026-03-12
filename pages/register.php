<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng ký</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <script defer src="../scripts/checkValidInput.js"></script>
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
            
            .registerForm
            {
                background-color: rgb(29,29,29);
                width:600px;
                height:550px;
                color:white;
                border-radius:30px;
                box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.3);
            }
            .registerForm div
            {
                margin-top:30px;
            }
            .registerForm h2
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
            .registerBtn
            {
                height:50px;
                margin-left:20px;
                margin-top:20px;
                background-color: rgb(123, 150, 255);
                color:rgb(0, 0, 0);
                font-weight: bold;
                border:none;
            }
            .registerBtn:hover
            {
                cursor: pointer;
            }
            .registerBtn:active
            {
                filter:brightness(80%)
            }


        </style>
    </head>
    <body>
        <form class="registerForm" id="registerForm" action="../actions/registerProcess.php" method="POST">
                <h2>Đăng ký</h2>
                <p>Tài Khoản</p>
                <input type="text" id="username" name="username" placeholder="Nhập thông tin tài khoản" required minlength="6" maxlength="20">
            
                <p>Mật Khẩu</p>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required minlength="6" maxlength="20">

                <p>Xác nhận mật khẩu</p>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Xác nhận mật khẩu" required>

                <div>
                    <button type="submit" class="registerBtn">Đăng ký</button>
                </div>
        </form>
    </body>
</html>