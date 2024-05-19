<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Gönderilen verilerin işlenmesi
    echo "Adınız: $name\n";
    echo "E-posta: $email\n";
    echo "Mesajınız: $message";
}
?>

