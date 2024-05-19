<?php
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $user_num = substr($username, 0, strpos($username, '@'));
    echo "Hoşgeldiniz, $user_num";
} else {
    header('Location: login.html');
    exit();
}
?>
