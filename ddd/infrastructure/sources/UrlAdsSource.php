<?php

namespace app\ddd\infrastructure\sources;


class UrlAdsSource implements AdsSource
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getData():string
    {
        $data = file_get_contents($this->url, true);

        return $data;
    }
}