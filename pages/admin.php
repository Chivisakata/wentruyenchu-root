<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin's page</title>
        <link rel="stylesheet" a href="../css/admin.css">
        <link rel="stylesheet" a href="../css/popUp.css">
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
            <a href="home.php"><img src="../images/homeIcon.png"></a>      
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
               <table class="infoInput">
                    <thead>
                        <th>Id_User</th>
                        <th>User_name</th>
                        <th>NgayDangKy</th>
                        <th>Role</th>
                    </thead>
                    <tbody>
                        <?php
                        include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
                        $result = mysqli_query($conn, "SELECT * FROM users");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row['Id_user'] ?></td>
                                <td><?php echo $row['User_name'] ?></td>
                                <td><?php echo $row['NgayDangKy'] ?></div>
                                </td>
                                <td><?php echo $row['Role'] ?></td>
                                <td>
                                    <a href="../actions/deleteUser.php?Id_user=<?php echo $row['Id_user']; ?>">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>