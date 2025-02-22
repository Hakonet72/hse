<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini alıyoruz
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $product = $_POST['product'];

    // E-posta ayarları
    $to = "timurozer04@gmail.com";  // E-posta adresi
    $subject = "Yeni Sipariş Formu";  // E-posta başlığı
    $message = "Ad: $name\nE-posta: $email\nAdres: $address\nÜrün: $product";  // E-posta içeriği
    $headers = "From: no-reply@yourdomain.com";  // Gönderen e-posta adresi

    // E-posta gönderme işlemi
    if (mail($to, $subject, $message, $headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderilemedi.";
    }
}
?>
