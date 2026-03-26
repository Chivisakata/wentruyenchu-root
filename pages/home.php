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
        <?php include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu ?>
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
        if(isset($_SESSION['User_id'])) {
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
                <?php if (isset($_SESSION['User_name'])):?>
                    <div class="hamburgerMenu">
                        <button class="hamburger" id="menuBtn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="menu-options" id="menuOptions">
                            <button href="#" id="changeAvatar">Đổi Avatar</button>
                            <form id="avatarForm" action="../actions/uploadAvatar.php" method="POST" enctype="multipart/form-data" style="display:none;">
                                <input name="avatar" type="file" id="avatarInput" accept=".jpg" style="display: none;">\
                            </form>
                            <button><a href="favorite.php" style="text-decoration: none;color: inherit;display:block">Truyện đã lưu</a></button>
                        </div>
                    </div>
                <?php endif; ?>
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
                    <?php if (!isset($_SESSION['User_name'])):?>
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
                        <li><a href="results.php?keyword=<?= urlencode('Ngôn Tình') ?>">Ngôn Tình</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('HE') ?>">HE</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Ngọt') ?>">Ngọt</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Nữ Cường') ?>">Nữ Cường</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Sủng') ?>">Sủng</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Niên Đại') ?>">Niên Đại</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Chữa Lành') ?>">Chữa Lành</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hiện Đại') ?>">Hiện Đại</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Sảng Văn') ?>">Sảng Văn</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Xuyên Không') ?>">Xuyên Không</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Gia Đình') ?>">Gia Đình</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hài Hước') ?>">Hài Hước</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Dưỡng Thê') ?>">Dưỡng Thê</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Cổ Đại') ?>">Cổ Đại</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Điền Văn') ?>">Điền Văn</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Trọng Sinh') ?>">Trọng Sinh</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hào Môn Thế Gia') ?>">Hào Môn Thế Gia</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hệ Thống') ?>">Hệ Thống</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Dị Năng') ?>">Dị Năng</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Đô Thị') ?>">Đô Thị</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Cưới Trước Yêu Sau') ?>">Cưới Trước Yêu Sau</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Xuyên Sách') ?>">Xuyên Sách</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hư Cấu Kỳ Ảo') ?>">Hư Cấu Kỳ Ảo</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Tiểu Thuyết') ?>">Tiểu Thuyết</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Linh Dị') ?>">Linh Dị</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Mỹ Thực') ?>">Mỹ Thực</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Gia Đấu') ?>">Gia Đấu</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hành Động') ?>">Hành Động</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Tổng Tài') ?>">Tổng Tài</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Kinh Dị') ?>">Kinh Dị</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Truy Thê') ?>">Truy Thê</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Ngược') ?>">Ngược</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Hoán Đổi Thân Xác') ?>">Hoán Đổi Thân Xác</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Trả Thù') ?>">Trả Thù</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Học Đường') ?>">Học Đường</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Tiên Hiệp') ?>">Tiên Hiệp</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Showbiz') ?>">Showbiz</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Đam Mỹ') ?>">Đam Mỹ</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Trinh Thám') ?>">Trinh Thám</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Bách Hợp') ?>">Bách Hợp</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Phiêu Lưu') ?>">Phiêu Lưu</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Độc Tâm') ?>">Độc Tâm</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('Phép Thuật') ?>">Phép Thuật</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('BE') ?>">BE</a></li>
                        <li><a href="results.php?keyword=<?= urlencode('OE') ?>">OE</a></li>
                    </ul>
                </div>

<!----MỚI UPDATE---->
            <div>
                <div class="justUpdate">
                    <div>
                        <p>Vừa Cập Nhật:</p>
                    </div>
                    <div class="wrapper">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM truyen ORDER BY NgayTao DESC LIMIT 20;");
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
                </div>
<!----Truyện Full---->
                <div class="fullNovel">
                    <div>
                        <p>Truyện FULL:</p>
                    </div>
                    <div class="wrapper">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE TrangThai = 'Hoàn thành';");
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
                </div>

<!----NGÔN TÌNH---->
                <div class="romance">
                    <div>
                        <p>Truyện Ngôn Tình:</p>
                    </div>
                    <div class="wrapper">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE TheLoai LIKE '%Ngôn Tình%';");
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
                </div>


<!----BÁCH HỢP-->
                <div class="girlLove">
                    <div>
                        <p>Truyện Bách Hợp:</p>
                    </div>
                    <div class="wrapper">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE TheLoai LIKE '%Bách Hợp%';");
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