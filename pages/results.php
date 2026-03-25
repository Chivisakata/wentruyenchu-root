<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" a href="../css/results.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        body
        {
            font-family: 'Roboto Mono', sans-serif;
        }
        .resultStr
        {
            font-size:26px;
            text-decoration: underline;
            text-underline-offset: 10px;
        }
    </style>
</head>

<body>
    <?php
    $keyword = $_GET['keyword'] ?? '';
    ?>
    <div class="justUpdate">
        <div>
            <p class="resultStr">Kết quả cho: <b><?php echo $keyword;?></b></p>
            <button>></button>
        </div>
        <div class="wrapper">
            <?php
            include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE (Ten LIKE '%$keyword%' OR TacGia LIKE '%$keyword%' OR TheLoai LIKE '%$keyword%')");
            while ($row = mysqli_fetch_assoc($result)) {
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
    <?php include "../components/footer.php";?>
</body>

</html>