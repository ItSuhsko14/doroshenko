<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'itSushkoAndriy@gmail.com'; // Адреса отримувача
    $subject = $_POST['subject']; // Тема повідомлення
    $message = $_POST['message']; // Тіло повідомлення
    $headers = "From: " . $_POST['email'] . "\r\n"; // Адреса відправника

    // Відправити лист
    $mail_sent = mail($to, $subject, $message, $headers);

    // Перевірка, чи лист успішно надіслано
    if ($mail_sent) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Error: Unable to send message.";
    }
}
?>