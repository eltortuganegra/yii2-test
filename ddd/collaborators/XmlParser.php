<?php

namespace app\ddd\collaborators;

use app\ddd\infrastructure\sources\AdsSource;

class XmlParser
{
    private $data;

    public function loadFromSource(AdsSource $adsSource)
    {
        $xmlString = $adsSource->getData();
        $xml = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $this->data = json_decode($json, TRUE);
    }

    public function getArray()
    {
        return $this->data;
    }
}