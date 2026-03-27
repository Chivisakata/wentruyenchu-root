<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đọc truyện</title>
        <link rel="stylesheet" href="../css/readingPage.css">
        <link rel="icon" href="../images/logo.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
        <script src="../scripts/chapterSwitcher.js" defer></script>
    </head>
    <body>
        <?php
        //lấy nội dung truyện
            include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
            $result = mysqli_query($conn, "SELECT * FROM chuong WHERE Id_chuong = " . $_GET['id_chuong']);
            $row = mysqli_fetch_assoc($result);
            if($row) {
                $TenChuong = $row['TenChuong'];
                $NoiDung = $row['NoiDung'];
            }
            else {
                header("Location: 404.php");
                exit();
            }
        ?>
        <details class="fab-menu">
            <summary class="fab-button">
                <span><img src="../images/settingIcon.jpg"></span>
            </summary>
            <div class="fab-box">
                <div class="box-top">
                    <button onclick="applyTheme('Black')">Black</button>
                    <button onclick="applyTheme('White')">White</button>
                    <button onclick="applyTheme('Beige')">Beige</button>
                </div>
                <hr>
                <div class="box-bottom">
                    <button onclick="applyFont('Roboto Mono')">Roboto Mono</button>
                    <button onclick="applyFont('Serif')">Serif</button>
                    <button onclick="applyFont('sans-serif')">Sans Serif</button>
                    <button onclick="applyFont('Source Sans Pro')">Source Sans Pro</button>
                    <button onclick="applyFont('Monospace')">Monospace</button>
                </div>
            </div>
        </details>
        <div class="fab-overlay" onclick="this.previousElementSibling.removeAttribute('open')"></div>

        <div class="top">
            <div class="btnGroupAndInfo">        <!--Navigate bar-->
                <div>       <!--Name, info of novel-->
                    <span><?php echo $TenChuong; ?></span>
                </div>
                <div class="btnGroup">       <!--Nav bar-->
                    
                    <button class="previous-btn" data-min="1">Trang Trước</button>
                    <?php include "../components/dropdown_chuong.php";?>
                    <button class="next-btn"  data-max=<?php echo $count;?>>Trang Sau</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="page">      <!--Noi dung truyen-->
                <p><?php echo $NoiDung; ?></p>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <div class="btnGroup">       <!--Nav bar-->
                    <button class="previous-btn" data-min="1">Trang Trước</button>
                    <?php include "../components/dropdown_chuong.php";?>
                    <button class="next-btn" data-max=<?php echo $count;?>>Trang Sau</button>
                </div>
        </div>
        <?php include "../components/footer.php";?>
         <script>
            function applyTheme(color) {
                if (color === 'Black') {
                    document.body.style.backgroundColor = 'black';
                    document.body.style.color = 'white';
                } else if (color === 'Beige') {
                    document.body.style.backgroundColor = 'rgb(245, 245, 220)';
                    document.body.style.color = 'black';
                } else {
                    document.body.style.backgroundColor = 'white';
                    document.body.style.color = 'black';
                }

                //Save theme locally
                localStorage.setItem('user-theme', color);
            }

            function applyFont(fontName) {
                document.body.style.fontFamily = fontName;
                // SAVE the choice
                localStorage.setItem('user-font', fontName);
            }

            //Load saved Theme or saved Font if save locally
            document.addEventListener('DOMContentLoaded', () => {
            // Check if a theme was saved previously
            const savedTheme = localStorage.getItem('user-theme');
            if (savedTheme) {
                applyTheme(savedTheme);
            }

            // Check if a font was saved previously
            const savedFont = localStorage.getItem('user-font');
            if (savedFont) {
                applyFont(savedFont);
            }
        });
        </script>
    </body>
</html>