<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="icon" href="../images/logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/popUp.css">
</head>

<body>
    <?php
    session_start(); //gọi session để lấy biến session 
    if (isset($_SESSION["success"])) {
        echo "<div class='success-message'>" . $_SESSION["success"] . "</div>";
        unset($_SESSION["success"]);
    ?>
        <script src="../scripts/killPopupNotification.js"></script>
    <?php
    }

    if (isset($_SESSION["error"])) {
        echo "<div class='error-message'>" . $_SESSION["error"] . "</div>";
        unset($_SESSION["error"]);
    ?>
    <script src="../scripts/killPopupNotification.js"></script>
    <?php
    }
    ?>

    <form class="loginForm" name="loginForm" action="../actions/loginProcess.php" method="POST">
        <h2>Đăng Nhập</h2>
        <p>Tài Khoản</p>
        <input type="text" placeholder="Nhập thông tin tài khoản" name="username" required>

        <p>Mật Khẩu</p>
        <input type="password" placeholder="Nhập mật khẩu" name="password" required>
        <div>
            <button type="submit" class="loginBtn" id="loginBtn">Đăng nhập</button>
            <button type="button" class="registerBtn" id="registerBtn">Đăng ký</button>
            <script>
                document.getElementById("registerBtn").onclick = function() {
                    window.location.href = "register.php";
                };
            </script>
        </div>
    </form>
</body>

</html>