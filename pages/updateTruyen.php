<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add</title>
        <link rel="stylesheet" href="../css/add.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
            $idTruyen = (int)$_GET['id'];
            include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE Id_truyen = $idTruyen");
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="body-container">
            <div class="topBar">    <!--LOGO stand for HOME-->
                <a href="admin.php"><img src="../images/homeIcon.png"></a>   
            </div>
                <div class="addMenu">
                    <div class="right">
                        <form action="../actions/updateTruyen.php" method="POST" enctype="multipart/form-data">
                        <table class="infoInput">
                            <thead>
                                <th>Column</th>
                                <th>Type</th>
                                <th>Value</th>
                            </thead>
                            <tbody>
                                <tr style="display:none">
                                    <td><input type="text" name="Id_truyen" value="<?php echo $row['Id_truyen']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Ten</td>
                                    <td>varchar(255)</td>
                                    <td><textarea required name="Ten"><?php echo $row['Ten']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>TacGia</td>
                                    <td>varchar(255)</td>
                                    <td><textarea required name="TacGia" ><?php echo $row['TacGia']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>TheLoai</td>
                                    <td>varchar(255)</td>
                                    <td><textarea required name="TheLoai" ><?php echo $row['TheLoai']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>TongSoChuong</td>
                                    <td>int(11)</td>
                                    <td><textarea name="TongSoChuong" ><?php echo $row['TongSoChuong']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>TrangThai</td>
                                    <td>varchar(50)</td>
                                    <td><textarea required name="TrangThai" ><?php echo $row['TrangThai']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>GioiThieu</td>
                                    <td>text</td>
                                    <td><textarea required name="GioiThieu" ><?php echo $row['GioiThieu']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Avatar</td>
                                    <td>.jpg</td>
                                    <td><input type="file"  id="fileInput" name="AnhBia" accept=".jpg"s ></td>
                                </tr>
                                <tr style="display:none">
                                    <td><input type="text" name="AnhBiaGoc" value="<?php echo $row['AnhBia']; ?>"></td>
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