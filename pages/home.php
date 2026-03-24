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
        <script src="../scripts/changeAvatar.js" defer></script>
    </head>

    <body>
        <?php
        session_start();// Bắt đầu session để truy cập biến session
        //kiểm tra session đăng nhập
        if (isset($_SESSION["success"])) 
        {
            echo "<div class='success-message'>" . $_SESSION["success"] . "</div>";
            unset($_SESSION["success"]);
        }
        ?>
                <script src="../scripts/killPopupNotification.js"></script>

        <?php
        //kiểm tra session của user
        if(isset($_SESSION['User_name'])) {
            $userid = $_SESSION['User_id'];
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
                    <div class="hamburgerMenu">
                        <button class="hamburger" id="menuBtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="menu-options" id="menuOptions">
                        <button href="#" id="changeAvatar">Đổi Avatar</button>
                        <input type="file" id="avatarInput" accept=".jpg" style="display: none;">
                        <button href="#">Truyện đã lưu</button>
                    </div>
                    </div>
                    <img src="../images/<?php echo $avatar; ?>">
                    <div class="greetingText">
                        <p>Xin chào Bạn đọc <?php echo $username; ?></p>
                    </div>
                </div>
                <form name="search-box" style="display: flex; flex-direction: row; width:60%;" action="../actions/search.php" method="POST">
                    <input type="text" placeholder="Nhập tên truyện muốn tìm..." name="keyword" required>
                    <button type="submit" id="searchIcon"><img src="../images/search-icon.png"></button>
                </form>
                
                <div class="login-logout-btn">
                    <?php if (!isset($_SESSION['User_id'])):?>
                        <button id="loginBtn">Đăng nhập</button>
                        <script>
                            document.getElementById("loginBtn").onclick = function () {
                            window.location.href = "login.php";
                        };
                        </script>
                    <?php else: ?>
                        <button id="logoutBtn">Đăng xuất</button>
                        <script>
                            //hủy mọi session
                            document.getElementById("logoutBtn").onclick = function () { 
                            fetch("../actions/logoutProcess.php", {
                            method: "POST"})
                            .then(()=>{
                                location.reload();
                            })
                        };
                        </script>
                    <?php endif; ?>
                </div>
                    
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
        <?php include "../components/footer.php";?>
        <script>
            // Wrap everything in a DOMContentLoaded listener
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menuBtn');
    const menuOptions = document.getElementById('menuOptions');

    if (menuBtn && menuOptions) {
        menuBtn.addEventListener('click', (event) => {
            // Prevent the click from bubbling up to the window
            event.stopPropagation(); 
            menuOptions.classList.toggle('show');
            console.log("Menu toggled!"); // Check your browser console (F12) to see this
        });

        // Close the menu if user clicks anywhere else
        window.addEventListener('click', () => {
            menuOptions.classList.remove('show');
        });
    } else {
        console.error("Could not find menuBtn or menuOptions IDs in the HTML.");
    }
});
        </script>
    </body>
</html>