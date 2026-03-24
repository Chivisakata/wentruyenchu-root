<?php
$keyword = trim($_POST["keyword"] ?? "");
if(!$keyword)
    {
        header("Location: ../pages/home.php");
        exit();
    }
else
    {
        header("Location: ../pages/results.php?keyword=" .urlencode($keyword));
        exit();
    }
