<?php
session_start();
include 'config.php';

$userId = $_SESSION['User_id'];
$truyenId = $_GET['id'];

// Chuẩn bị SQL
$sql = "INSERT INTO yeuthich (Id_user, Id_truyen) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $userId, $truyenId);

// Thực thi
$stmt->execute();

header("Location: ../pages/details.php?id=$truyenId");
exit();
?>