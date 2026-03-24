<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" a href="../css/results.css">
    
</head>

<body>
    <?php
    $keyword = $_GET['keyword'] ?? '';
    ?>
    <!----MỚI UPDATE---->
    <div class="justUpdate">
        <div>
            <p>Kết quả cho: <?php echo $keyword;?></p>
            <button>></button>
        </div>
        <div class="wrapper">
            <?php
            include '../actions/connect.php'; // Kết nối đến cơ sở dữ liệu
            $result = mysqli_query($conn, "SELECT * FROM truyen WHERE (Ten LIKE '%$keyword%' OR TacGia LIKE '%$keyword%')");
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