<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chi tiết truyện</title>
        <link rel="stylesheet" a href="../css/details.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <!--TOP-->
            <div class="navBar">
            <div>
                <a href="home.php">HOME</a>
            </div>
            <div style="display: flex; flex-direction: row; width:60%;">
                <input type="text" placeholder="Nhập tên truyện muốn tìm...">
                <button class="searchIcon"><img src="../images/search-icon.png"></button>
            </div>
            </div>
            <!--MENU-->
            <h1>THÔNG TIN TRUYỆN</h1>
<hr>
            <div class="menu">
                <?php
                            include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
                            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE Id_truyen = " . $_GET['id']);
                            $row = mysqli_fetch_assoc($result);
                            if($row) {
                                $TenTruyen = $row['Ten'];
                                $TacGia = $row['TacGia'];
                                $TheLoai = $row['TheLoai'];
                                $TrangThai = $row['TrangThai'];
                                $AnhBia = $row['AnhBia'];
                                $TongSoChuong = $row['TongSoChuong'];
                                $GioiThieu = $row['GioiThieu'];
                            }
                            else {
                                die("Không tìm thấy truyện");
                            }
                ?>
                <div class="left">
                    <div style="text-align: center;">
                        <h3><?php echo isset($TenTruyen) ? $TenTruyen : '';?></h3>
                        <img src="../images/<?php echo isset($AnhBia) ? $AnhBia : 'gamingcat.jpg'; ?>">
                    </div>
                    <div style="padding: 0 0 0 0;">
                        <b>Tác giả:</b>
                        <span><?php echo isset($TacGia) ? $TacGia : ''; ?></span>
                        <br>
                        <b>Thể loại:</b>
                        <span><?php echo isset($TheLoai) ? $TheLoai : ''; ?></span>
                        <br>
                        <b>Tổng số chương:</b>
                        <span><?php echo isset($TongSoChuong) ? $TongSoChuong : '?'; ?></span>
                        <br>
                        <b>Trạng thái:</b>
                        <span style="color:#428BCA;"><?php echo isset($TrangThai) ? $TrangThai : ''; ?></span>
                    </div>
                </div>
                <div class="detail">
                    <br>
                    <br>
                    <br>
                    <h3>Giới Thiệu:</h3>
                    <hr>
                    <span>
                    <?php echo isset($GioiThieu) ? $GioiThieu : ''; ?>
                    </span>
                    
                </div>
                <div style="width:30%; height: 550px; color:#4E4E4E; box-shadow: 0 0 0 0.2px #000;border-radius: 30px; margin-left:30px; margin-top:30px; margin-right:5px;">
                    <h1 style="padding-left:0">Danh sách chương</h1>
                    <div class="list">
                        <ul class="listContainer">
                           <?php
                            $chuong = mysqli_query($conn, "SELECT * FROM chuong WHERE Id_truyen = " . $_GET['id']);
                            while($row = mysqli_fetch_assoc($chuong)) {
                            ?> 
                                   <li><?php echo $row['TenChuong']; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                       
                    </div>
                </div>
            </div>
            
        </div>

    </body>
</html>