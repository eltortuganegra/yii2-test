<?php

namespace app\ddd\services;

use app\ddd\collaborators\AdsGenerator;
use app\ddd\collaborators\XmlParser;
use app\ddd\infrastructure\sources\AdsSource;

class AdsListService
{
    private $xmlParser;
    private $adsGenerator;

    public function __construct()
    {
        $this->xmlParser = new XmlParser();
        $this->adsGenerator = new AdsGenerator();
    }

    public function execute(AdsSource $adsSource):array
    {
        $this->loadItemsFromDataSource($adsSource);
        $this->loadAdsFromParsedItems();

        return $this->adsGenerator->getAds();
    }


    private function loadItemsFromDataSource(AdsSource $adsSource)
    {
        $this->xmlParser->loadFromSource($adsSource);
    }

    private function loadAdsFromParsedItems()
    {
        $parsedItems = $this->xmlParser->getArray();
        $this->adsGenerator->generate($parsedItems['ad']);
    }

}