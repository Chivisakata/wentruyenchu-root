<?php
session_start();
require_once "config.php"; // file config DB

if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['avatar']['tmp_name'];
    $fileName = $_FILES['avatar']['name'];
    $fileType = $_FILES['avatar']['type'];

    // Kiểm tra file .jpg
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    if ($fileExt !== "jpg" || $fileType !== "image/jpeg") {
        die("Chỉ được upload file JPG!");
    }

    // Tạo tên file mới tránh trùng lặp
    $id_user = $_SESSION['User_id'];
    $newFileName = "avatar_{$id_user}_" . time() . ".jpg";
    $uploadDir = __DIR__ . "/../images/"; // folder images cùng cấp với actions
    $destPath = $uploadDir . $newFileName;

    if (move_uploaded_file($fileTmpPath, $destPath)) {
        // đường dẫn lưu vào DB (relative)
        $dbPath = $newFileName;

        /* updateDB */
        $sql = "UPDATE users SET Avatar = ? WHERE Id_user = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $dbPath, $id_user);
        $stmt->execute();
        $_SESSION['Avatar'] = $newFileName;
        header("Location: ../pages/home.php");
        exit();
    } else {
        die("Có lỗi khi upload file!");
    }
} else {
    die("Không có file được gửi!");
}
?>