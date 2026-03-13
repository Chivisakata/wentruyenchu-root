<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php
        session_start();// Bắt đầu session để truy cập biến session
        if(isset($_SESSION['User_name'])) {
            $username = $_SESSION['User_name'];
            $avatar = $_SESSION['Avatar'];
        }
        else {
            $username = "";
            $avatar = "gamingcat.jpg";
        }
        ?>
<!----TOP---->
        <div>
            <div class="navBar">
                <div class="left">
                    <img src="../images/<?php echo $avatar; ?>">
                    <div>
                        <p>Xin chào</p>
                        <p>Bạn đọc <?php echo $username; ?></p>
                    </div>
                </div>
                <div style="display: flex; flex-direction: row; width:60%;">
                    <input type="text" placeholder="Nhập tên truyện muốn tìm...">
                    <button class="searchIcon"><img src="../images/search-icon.png"></button>
                </div>
                
                
                <button id="loginBtn">Đăng nhập</button>
                <script>
                    document.getElementById("loginBtn").onclick = function () {
                    window.location.href = "login.php";
                };
                </script>
                    
            </div>
            
            

<!----MENU VIEW---->
            <div class="menu">
                <div class="categories">
                    <ul>
                        <li><a href=#>Ngôn Tình</a></li>
                        <li>HE</li>
                        <li>Ngọt</li>
                        <li>Nữ Cường</li>
                        <li>Sủng</li>
                        <li>Niên Đại</li>
                        <li>Chữa Lành</li>
                        <li>Hiện Đại</li>
                        <li>Sảng Văn</li>
                        <li>Xuyên Không</li>
                        <li>Gia Đình</li>
                        <li>Hài Hước</li>
                        <li>Dưỡng Thê</li>
                        <li>Cổ Đại</li>
                        <li>Điền Văn</li>
                        <li>Trọng Sinh</li>
                        <li>Hào Môn Thế Gia</li>
                        <li>Hệ Thống</li>
                        <li>Dị Năng</li>
                        <li>Đô Thị</li>
                        <li>Cưới Trước Yêu Sau</li>
                        <li>Xuyên Sách</li>
                        <li>Hư Cấu Kỳ Ảo</li>
                        <li>Tiểu Thuyết</li>
                        <li>Linh Dị</li>
                        <li>Mỹ Thực</li>
                        <li>Gia Đấu</li>
                        <li>Hành Động</li>
                        <li>Tổng Tài</li>
                        <li>Kinh Dị</li>
                        <li>Truy Thê</li>
                        <li>Ngược</li>
                        <li>Hoán Đổi Thân Xác</li>
                        <li>Trả Thù</li>
                        <li>Học Đường</li>
                        <li>Tiên Hiệp</li>
                        <li>Showbiz</li>
                        <li>Đam Mỹ</li>
                        <li>Trinh Thám</li>
                        <li>Bách Hợp</li>
                        <li>Phiêu Lưu</li>
                        <li>Độc Tâm</li>
                        <li>Phép Thuật</li>
                        <li>BE</li>
                        <li>OE</li>
                    </ul>
                </div>

<!----MỚI UPDATE---->

                <div class="justUpdate">
                    <div>
                        <p>Vừa Cập Nhật:</p>
                        <button>></button>
                    </div>
                    <div class="wrapper">
                            <?php
                            include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
                            $result = mysqli_query($conn, "SELECT * FROM truyen");

                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <a href="details.php?id=<?php echo $row['Id_truyen']; ?>">
                                        <img src="../images/<?php echo $row['AnhBia']; ?>">
                                        <p><?php echo $row['Ten']; ?></p>
                                    </a>
                            <?php
                            }
                            ?>
                </div>

<!----TOP tuần---->
                <div class="topOTW">
                    <div>
                        <p>Vừa Cập Nhật:</p>
                        <button>></button>
                    </div>
                    <div class="wrapper">
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        
                    </div>
                </div>

<!----MỚI NHẤT---->
                <div class="newest">
                    <div>
                        <p>Mới Nhất:</p>
                        <button>></button>
                    </div>
                    
                    <div class="wrapper">
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        
                    </div>
                </div>

<!----YÊU THÍCH NHẤT-->
                <div class="mostLoved">
                    <div>
                        <p>Vừa Cập Nhật:</p>
                        <button>></button>
                    </div>
                    <div class="wrapper">
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        
                    </div>
                </div>

<!-----Truyện Full-->
                <div class="fullNovel">
                    <div>
                        <p>Truyện Full:</p>
                        <button>></button>
                    </div>
                    
                    <div class="wrapper">
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        <a>
                            <img src="../images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>