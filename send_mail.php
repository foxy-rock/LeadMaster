<?php
// Проверяем, что форма отправлена методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем и очищаем данные из формы
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['phone']);

    // Проверяем, что email валиден
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Некорректный email");
    }

    // Тема письма
    $subject = "Новая заявка с сайта";

    // Тело письма
    $message = "Поступила новая заявка:\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Телефон: " . $phone . "\n";

    // Заголовки письма
    $headers = "From: no-reply@yourdomain.com\r\n"; // замените на ваш домен или почту
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";

    // Отправляем письмо
    $to = "xaa1@rambler.ru"; // ваша почта для получения заявок

    if (mail($to, $subject, $message, $headers)) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Ошибка при отправке заявки.";
    }
} else {
    echo "Некорректный запрос.";
}
?>