<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adı ve şifre kontrolü
    $user_num = substr($username, 0, strpos($username, '@'));
    if ($password === $user_num) {
        echo 'success';
    } else {
        echo 'failure';
    }
}
?>

