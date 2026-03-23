<?php
session_start();

//hủy tất cả session
$_SESSION = [];
session_destroy(); 
var_dump("Log out thanh cong");
?>