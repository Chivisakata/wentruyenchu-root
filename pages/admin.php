<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin's page</title>
        <link rel="stylesheet" a href="../css/admin.css">
        <link rel="stylesheet" a href="../css/popUp.css">
         <link rel="icon" href="../images/logo.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php $type = $_GET['type'] ?? 'truyen'; //nhận option để load đúng giao diện ?>
        <!--Kiểm tra role-->
        <?php
        session_start();//gọi session để lấy biến session 
        if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }
        ?>
        <!--Kiểm tra trạng thái upload-->
        <?php
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

        <div class="topBar">    <!--LOGO stand for HOME-->
            <a href="home.php" style="margin: 10px 0px 15px 20px;"><img src="../images/logo.jpg" style="width:80px; height:80; border-radius:50px; border:2px solid white;"></a>      
        </div>
        <div style="display:flex; flex-direction: row;">
            <div class="leftMenu">
                <div class="btnGroup">
                    <button onclick="window.location.href='admin.php?type=truyen'">Truyen</button>
                    <button onclick="window.location.href='admin.php?type=chuong'">Chuong</button>
                    <button onclick="window.location.href='admin.php?type=users'">Users</button>
                </div>
            </div>
            <div class="main">
               <?php
                    if ($type == 'truyen') 
                    {
                        include "../components/tableTruyen.php";
                    }
                    elseif ($type == 'chuong') 
                    {
                        include "../components/tableChuong.php";
                    }
                    elseif ($type == 'users')
                    {
                       include "../components/tableUser.php";
                    }
               ?>
            </div>
        </div>
    </body>
</html>