
<?php
session_start();
include 'connect.php';

$userId = $_SESSION['User_id'];
$truyenId = $_GET['id'];

mysqli_query($conn, "DELETE FROM yeuthich WHERE Id_user = $userId  AND Id_truyen = $truyenId");

header("Location: ../pages/details.php?id=$truyenId");
exit();
?>