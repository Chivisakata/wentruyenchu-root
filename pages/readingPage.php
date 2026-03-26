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
        <script>
            function changeBGColor(color, textColor)
            {
                document.body.style.backgroundColor = color;
                document.body.style.color = textColor;
            }

            function changeFont(name)
            {
                document.body.style.fontFamily = name;
            }
        </script>
        <script src="../scripts/chapterSwitcher.js" defer></script>
    </head>
    <body>
        <?php
        //lấy nội dung truyện
            include '../actions/config.php'; // Kết nối đến cơ sở dữ liệu
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
                    <button onclick="changeBGColor('Black', 'White')">Black</button>
                    <button onclick="changeBGColor('White', 'Black')">White</button>
                    <button onclick="changeBGColor('Beige', 'Black')">Beige</button>
                </div>
                <hr>
                <div class="box-bottom">
                    <button onclick="changeFont('Roboto Mono')">Roboto Mono</button>
                    <button onclick="changeFont('Serif')">Serif</button>
                    <button onclick="changeFont('sans-serif')">Sans Serif</button>
                    <button onclick="changeFont('Source Sans Pro')">Source Sans Pro</button>
                    <button onclick="changeFont('Monospace')">Monospace</button>
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
    </body>
</html>