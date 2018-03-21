<?php

use app\ddd\collaborators\XmlParser;

class XmlParserTest extends \Codeception\Test\Unit
{
    // tests
    public function testDataMustBeArray()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $urlAdsSource = new \app\ddd\infrastructure\sources\UrlAdsSource($url);
        $xmlParser = new XmlParser();
        $xmlParser->loadFromSource($urlAdsSource);
        $items = $xmlParser->getArray();

        // Act
        $isArray = is_array($items);

        // Assert
        $this->assertTrue($isArray);
    }

    // tests
    public function testDataMustHave500Elements()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $urlAdsSource = new \app\ddd\infrastructure\sources\UrlAdsSource($url);
        $xmlParser = new XmlParser();
        $xmlParser->loadFromSource($urlAdsSource);
        $items = $xmlParser->getArray();

        // Act
        $totalItems = count($items['ad']);

        // Assert
        $this->assertEquals(535, $totalItems);
    }
}
