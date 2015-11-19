<?php


namespace Prefix\Component\Weather\Api;

class OpenWeatherClient
{
    private $url;
    private $buzz;
    private $json;



    public function __construct($url, $buzz)
    {
        $this->url = $url;
        $this->buzz = $buzz;

    }


    public function dane()
    {
        $odpowiedz = $this->buzz->get($this->url);
        $json = $odpowiedz->getContent();
        $this->json = json_decode($json);

        echo 'Temperatura wynosi '.($this->json->main->temp-273).' stopni';
    }
}