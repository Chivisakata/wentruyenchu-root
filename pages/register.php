<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng ký</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../css/popUp.css">
        <script defer src="../scripts/checkValidInput.js"></script>
        
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION["error"])) 
        {
           echo "<div class='error-message'>" . $_SESSION["error"] . "</div>";
           unset($_SESSION["error"]);
           ?>
        <script src="../scripts/killPopupNotification.js"></script>
        <?php
        }
        ?>
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