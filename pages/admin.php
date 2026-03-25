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
                    <colgroup>
                        <col style="width:100px">
                        <col style="width:250px">
                        <col style="width:100x">
                        <col style="width:550px">
                        <col style="width:50px">
                        <col style="width:90px">
                        <col style="width:120px">
                    </colgroup>
                    <thead>
                        <th>Id_truyen</th>
                        <th>TenTruyen</th>
                        <th>Id_Chuong</th> 
                        <th>TenChuong</th>
                        <th>SoChuong</th>
                        <th>
                            <button id="addstoryBtn">Thêm chương</button>
                            <script>
                                document.getElementById("addstoryBtn").onclick = function() {
                                    window.location.href = "add.php";
                                };
                            </script>
                        </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
                        $result = mysqli_query($conn, "SELECT truyen.*, chuong.* FROM truyen JOIN chuong ON truyen.Id_truyen = chuong.Id_truyen");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row['Id_truyen'] ?></td>
                                <td><?php echo $row['Ten'] ?></td>
                                <td><?php echo $row['Id_chuong'] ?></td>
                                <td><?php echo $row['TenChuong'] ?></td>
                                <td><?php echo $row['SoChuong'] ?></td>
                                <td>
                                    <a href="editing.php?id=<?php echo $row['Id_truyen']; ?>">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="../actions/deleteTruyen.php?id=<?php echo $row['Id_truyen']; ?>">
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