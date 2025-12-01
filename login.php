<?php
$correct_user = "admin";
$correct_pass = "123456";  // password 6 digit untuk pengujian

$user = $_POST['username'];
$pass = $_POST['password'];

if ($user === $correct_user && $pass === $correct_pass) {
    echo "Login berhasil!";
} else {
    echo "Login gagal!";
}
?>