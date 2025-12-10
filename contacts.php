<?php
$data_file = 'form_data.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    if (!empty($name) && !empty($phone)) {
        $date = date('Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'];
        $data_string = "[$date] IP: $ip | Имя: $name | Телефон: $phone | Сообщение: $message\n";

        if (!file_exists($data_file)) {
            file_put_contents($data_file, "=== Заявки автосервиса AvtoHelper ===\n\n");
        }

        file_put_contents($data_file, $data_string, FILE_APPEND);
        $success_message = "Спасибо, $name! Ваша заявка №" . count(file($data_file)) . " принята.";
    } else {
        $error_message = "Пожалуйста, заполните имя и телефон.";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MXT6TL6PG1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-MXT6TL6PG1');
    </script>
    <meta charset="UTF-8">
    <title>Контакты | AvtoHelper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Контакты автосервиса AvtoHelper. Адрес, телефон, режим работы, форма обратной связи.">
    <meta name="keywords" content="контакты автосервиса, адрес, телефон, как проехать, форма обратной связи">
    <link rel="stylesheet" href="style.css">
</head>
<body oncontextmenu="return false;" ondragstart="return false;">
    <header role="banner">
        <div class="container">
            <div class="logo">
                <img class="logopng" src="img/logo.png">
                <div>
                    <h1>AvtoHelper</h1>
                    <p>Ваш надёжный автосервис</p>
                </div>
            </div>
            <nav aria-label="Основное меню">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="services.html">Услуги</a></li>
                    <li><a href="price.html">Цены</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2 class="page-title">Контакты</h2>
        <?php if (isset($success_message)): ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
        <?php elseif (isset($error_message)): ?>
            <div class="alert alert-error">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Наши реквизиты</h3>
                <p><strong>Адрес:</strong> г. Тюмень, ул. Автомастерская, д. 1</p>
                <p><strong>Телефон:</strong> +7 (999) 999-99-99</p>
                <p><strong>Email:</strong> info@avtohelper.ru</p>
                <p><strong>Режим работы:</strong></p>
                <p>Пн-Пт: 9:00 - 20:00</p>
                <p>Сб: 10:00 - 18:00</p>
                <p>Вс: 10:00 - 16:00</p>
            </div>

            <div class="contact-form">
                <h3>Форма обратной связи</h3>
                <form method="POST" action="">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="tel" name="phone" placeholder="Ваш телефон" required>
                    <textarea name="message" placeholder="Сообщение или описание проблемы" rows="5"></textarea>
                    <button type="submit" class="button">Отправить</button>
                </form>
            </div>
        </div>

        <div class="map">
            <h3>Мы на карте</h3>
            <img src="img/map.jpg" alt="Карта расположения автосервиса">
        </div>
    </main>

    <footer>
        <div class="container">
            <p>2025 Автосервис "AvtoHelper"</p>
            <p>г. Тюмень, ул. Автомастерская, д. 1 | Телефон: +7 (999) 999-99-99</p>
        </div>
    </footer>
</body>
</html>