<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>

    <body>
<!----TOP---->
        <div>
            <div class="navBar">
                <div class="left">
                    <img src="images/gamingcat.jpg">
                    <div>
                        <p>Xin chào</p>
                        <p>Bạn đọc {NgườiDung}</p>
                    </div>
                </div>
                <div style="display: flex; flex-direction: row; width:60%;">
                    <input type="text" placeholder="Nhập tên truyện muốn tìm...">
                    <button class="searchIcon"><img src="images/search-icon.png"></button>
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
                            include 'connect.php'; // Kết nối đến cơ sở dữ liệu
                            $result = mysqli_query($conn, "SELECT * FROM truyen");

                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div>
                                    <img src="images/<?php echo $row['AnhBia']; ?>">
                                    <p><?php echo $row['Ten']; ?></p>
                                </div>
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
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        
                    </div>
                </div>

<!----MỚI NHẤT---->
                <div class="newest">
                    <div>
                        <p>Mới Nhất:</p>
                        <button>></button>
                    </div>
                    
                    <div class="wrapper">
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        
                    </div>
                </div>

<!----YÊU THÍCH NHẤT-->
                <div class="mostLoved">
                    <div>
                        <p>Vừa Cập Nhật:</p>
                        <button>></button>
                    </div>
                    <div class="wrapper">
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        
                    </div>
                </div>

<!-----Truyện Full-->
                <div class="fullNovel">
                    <div>
                        <p>Truyện Full:</p>
                        <button>></button>
                    </div>
                    
                    <div class="wrapper">
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        <div>
                            <img src="images/placeholder.jpg">
                            <p>TenTP</p>
                            <p>TenTG</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>