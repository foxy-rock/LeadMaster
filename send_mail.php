<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    if (empty($email) || empty($phone)) {
        die("Пожалуйста, заполните все поля.");
    }

    $to = "danila961111@gmail.com"; // замените на ваш email
    $subject = "Запись на прием";

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Новая заявка:\nE-mail: $email\nТелефон: $phone\n";

    if (mail($to, $subject, $body, $headers)) {
        // Успешно — делаем редирект
        header("Location: index.html"); // замените '/' на URL вашей главной страницы
        exit;
    } else {
        die("Ошибка при отправке заявки.");
    }
} else {
    die("Некорректный запрос");
}
?>