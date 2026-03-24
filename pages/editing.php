<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editing</title>
        <link rel="stylesheet" href="../css/editing.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="body-container">
            <div class="topBar">    <!--LOGO stand for HOME-->
                <a href="admin.php"><img src="../images/homeIcon.png"></a>   
            </div>
            <form action="">
                <div class="addMenu">
                    <div class="right">
                        <table class="infoInput">
                            <thead>
                                <th>Column</th>
                                <th>Type</th>
                                <th>Value</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ten</td>
                                    <td>varchar(255)</td>
                                    <td><textarea></textarea></td>
                                </tr>
                                <tr>
                                    <td>TacGia</td>
                                    <td>varchar(255)</td>
                                    <td><textarea></textarea></td>
                                </tr>
                                <tr>
                                    <td>TheLoai</td>
                                    <td>varchar(255)</td>
                                    <td><textarea></textarea></td>
                                </tr>
                                <tr>
                                    <td>TongSoChuong</td>
                                    <td>int(11)</td>
                                    <td><textarea></textarea></td>
                                </tr>
                                <tr>
                                    <td>TrangThai</td>
                                    <td>varchar(50)</td>

                                    <td><textarea></textarea></td>
                                </tr>
                                <tr>
                                    <td>GioiThieu</td>
                                    <td>text</td>
                                    <td><textarea></textarea></td>
                                </tr>
                                <tr>
                                    <td>Avatar</td>
                                    <td>.jpg</td>
                                    <td><input type="file" accept="image/*" id="fileInput"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="functionBtn">
                <button type="submit">Lưu</button>
            </div>
            </form>
            
        </div>
    </body>
</html>