<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AddChuong</title>
        <link rel="stylesheet" href="../css/uploadChuong.css">
        <link rel="icon" href="../images/logo.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--Kiểm tra role-->
        <?php
        session_start();//gọi session để lấy biến session 
        if (!isset($_SESSION['Role']) || $_SESSION['Role'] !== 'admin') {
        // không phải admin từ chối truy cập
        header("Location: /403.php"); 
        exit();
        }
        ?>
        <div class="body-container">
            <div class="topBar">    <!--LOGO stand for HOME-->
                <a href="admin.php" style="margin: 10px 0px 15px 20px;"><img src="../images/logo.jpg" style="width:80px; height:80; border-radius:50px; border:2px solid white;"></a>   
            </div>
                <div class="addMenu">
                    <div class="right">
                        <form action="../actions/uploadChuong.php" method="POST" enctype="multipart/form-data">
                        <table class="infoInput">
                            <thead>
                                <th>Column</th>
                                <th>Type</th>
                                <th>Value</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Id_truyen</td>
                                    <td>int</td>
                                    <td><textarea required name="Id_truyen"></textarea></td>
                                </tr>
                                <tr>
                                    <td>TenChuong</td>
                                    <td>varchar(255)</td>
                                    <td><textarea required name="TenChuong"></textarea></td>
                                </tr>
                                <tr>
                                    <td>NoiDung</td>
                                    <td>text</td>
                                    <td><textarea name="NoiDung"></textarea></td>
                                </tr>
                                <tr>
                                    <td>SoChuong</td>
                                    <td>int</td>

                                    <td><textarea required name="SoChuong"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
                <div class="functionBtn">
                <button type="submit">Lưu</button>
                </form>
            </div>
           
            
        </div>
    </body>
</html>