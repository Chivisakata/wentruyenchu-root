<?php
session_start();
include 'config.php';

$userId = $_SESSION['User_id'];
$truyenId = $_GET['id'];

mysqli_query($conn, "INSERT INTO yeuthich (Id_user, Id_truyen) VALUES ($userId, $truyenId)");

header("Location: ../pages/details.php?id=$truyenId");
exit();
?>