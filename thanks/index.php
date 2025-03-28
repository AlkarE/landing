<?php
    // header("refresh: 3; url = ".$_COOKIE['cabinet']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Keitaro tracking script -->
<script type='application/javascript'>
if (!window.KTracking){window.KTracking={collectNonUniqueClicks: true, multiDomain: false, R_PATH: 'https://trader-day.com/DfyzQqBk', P_PATH:'https://trader-day.com/6874d8b/postback', listeners: [], reportConversion: function(){this.queued = arguments;}, getSubId: function(fn) {this.listeners.push(fn);}, ready: function(fn) {this.listeners.push(fn);} };}(function(){var a=document.createElement('script');a.type='application/javascript';a.async=true;a.src='https://trader-day.com/js/k.min.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(a,s)})();
</script><noscript><img height='0' width='0' alt='' src='https://trader-day.com/DfyzQqBk'/></noscript>
<script>
    // Функция для установки cookie
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
    }

    // Функция для получения значения cookie
    function getCookie(name) {
        const cookies = document.cookie.split('; ');
        for (let cookie of cookies) {
            const [key, value] = cookie.split('=');
            if (key === name) {
                return value;
            }
        }
        return null;
    }

    // Проверяем, была ли отправлена конверсия
    if (!getCookie('conversionSent')) {
        const revenue = 0;
        const status = 'lead';
        const tid = Math.floor(Math.random() * 1000000000);

        // Отправляем конверсию
        KTracking.reportConversion(revenue, status, { tid });

        // Устанавливаем cookie, чтобы отметить отправку конверсии
        setCookie('conversionSent', 'true', 1); // Cookie действует 1 день
        console.log('Conversion sent');
    } else {
        console.log('Conversion already sent, skipping...');
    }
</script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon-32x32.png" type="image/x-icon">
    <title>Gracias</title>
    <link rel="stylesheet" href="css/normalize.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16882638542"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16882638542'); </script>

</head>

<body>
<!-- Event snippet for Lead reg conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-16882638542/DkoDCN7fyq8aEM69ovI-'}); </script>




     <div class="main">
        <div class="container">
            <div class="order-info">
                <div class="success-icon">
                    <svg viewBox="0 0 24 24" width="100" height="100">
                        <path fill="currentColor" d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                </div>
                <h2>Vielen Dank für Ihre Anfrage!</h2>
                <p> 
                    Wir haben Ihre Daten erhalten und einer unserer Mitarbeiter wird Sie in Kürze unter der von Ihnen angegebenen Telefonnummer kontaktieren.
                </p>
            </div>
        </div>
    </div>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url('images/photo-1560264280-88b68371db39.jpg') center center/cover no-repeat fixed;
        }

        .main {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(-45deg, 
                rgba(0, 210, 122, 0.8), 
                rgba(35, 166, 213, 0.8), 
                rgba(35, 213, 171, 0.8), 
                rgba(0, 210, 122, 0.8));
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            backdrop-filter: blur(5px);
            padding: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .order-info {
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            text-align: center; 
            width: 100%;
            transition: all 0.3s ease;
        }

        .order-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .success-icon {
            color: #00d27a;
            margin-bottom: 30px;
            transform: scale(1.2);
        }

        .order-info h2 {
            color: #00d27a;
            font-size: 48px;
            margin-bottom: 30px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .order-info p {
            color: #2c3e50;
            font-size: 22px;
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto;
            font-weight: 500;
        }

        .sale_text {
            font-weight: 700;
            margin: 30px 0px 10px;
            color: white;
        }

        .sale_link {
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 20px;
            color: #0d6efd;
        }
    </style>

    <script src="js/jquery.min.js"></script>


</body>

</html>