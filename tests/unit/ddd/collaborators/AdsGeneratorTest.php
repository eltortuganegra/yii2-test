<?php

use app\ddd\collaborators\AdsGenerator;
use app\ddd\collaborators\XmlParser;
use app\ddd\infrastructure\sources\UrlAdsSource;

class AdsGeneratorTest extends \Codeception\Test\Unit
{

    // tests
    public function testMustReturnAnArray()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $urlAdsSource = new UrlAdsSource($url);
        $xmlParser = new XmlParser();
        $xmlParser->loadFromSource($urlAdsSource);
        $parsedItems = $xmlParser->getArray();
        $adsGenerator = new AdsGenerator();
        $adsGenerator->generate($parsedItems['ad']);
        $items = $adsGenerator->getAds();

        // Act
        $isArray = is_array($items);

        // Assert
        $this->assertTrue($isArray);
    }
}
