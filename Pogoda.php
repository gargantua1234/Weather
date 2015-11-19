<html>
    <head>
        <meta charset="Utf-8"/>
    </head>
    
    <?php
        require_once 'vendor/autoload.php';
        use Buzz\Browser;
        use Prefix\Component\Weather\Api\OpenWeatherClient;
        
        $przegladarka = new Browser();
        $url = 'http://api.openweathermap.org/data/2.5/weather?q=London&APPID=96cdeb166e66f9c035e9e7f8ce665ec8';
        $klient = new OpenWeatherClient($url, $przegladarka);
    $klient->dane();



