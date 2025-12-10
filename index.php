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
    <title>Главная | AvtoHelper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Профессиональный автосервис в вашем городе. Ремонт, диагностика, ТО. Гарантия качества.">
    <meta name="keywords" content="автосервис, ремонт автомобилей, диагностика, замена масла, шиномонтаж, авторемонт">
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

             <?php include 'online_counter.php'; ?>

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
        <div class="hero">
            <h2>Профессиональный ремонт автомобилей</h2>
            <p>Качественно, быстро, с гарантией. Оставьте заявку онлайн или приезжайте прямо сейчас.</p>
            <a href="contacts.php" class="button">Записаться</a>
        </div>

        <div class="about">
            <h2>О нас</h2>
            <p>Мы работаем с 2010 года и специализируемся на ремонте отечественных и импортных автомобилей.</p>
            <img src="img/service.jpg" alt="Фото автосервиса">
        </div>

        <div class="features">
            <h2>Наши преимущества</h2>
            <div class="feature-list">
                <div class="feature">
                    <h3>Опытные мастера</h3>
                    <p>Стаж работы от 5 лет</p>
                </div>
                <div class="feature">
                    <h3>Оригинальные запчасти</h3>
                    <p>Только проверенные поставщики</p>
                </div>
                <div class="feature">
                    <h3>Гарантия 1 год</h3>
                    <p>На все виды работ</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>2025 Автосервис "AvtoHelper"</p>
            <p>г. Тюмень, ул. Автомастерская, д. 1 | Телефон: +7 (999) 999-99-99</p>
        </div>

    </footer>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105758227', 'ym');

        ym(105758227, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/105758227" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


</body>
</html>