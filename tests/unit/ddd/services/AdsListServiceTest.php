<?php

use app\ddd\infrastructure\sources\UrlAdsSource;
use app\ddd\services\AdsListService;

class AdsListServiceTest extends \Codeception\Test\Unit
{
    // tests
    public function testAdsListServiceMustNotReturnNull()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $dataSource = new UrlAdsSource($url);
        $adsListService = new AdsListService();

        // Act
        $ads = $adsListService->execute($dataSource);

        // Assert
        $this->assertNotNull($ads, 'AdsListService must return not null.');
    }

    // tests
    public function testAdsListServiceMustReturnAnArray()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $dataSource = new UrlAdsSource($url);
        $adsListService = new AdsListService();
        $ads = $adsListService->execute($dataSource);

        // Act
        $isArray = is_array($ads);

        // Assert
        $this->assertTrue($isArray, 'Ads must be an array.');
    }

    // tests
    public function testFirstElementOfAdsMustBeAnInstanceOfAdClass()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $dataSource = new UrlAdsSource($url);
        $adsListService = new AdsListService();
        $ads = $adsListService->execute($dataSource);
        $firstElement = $ads[0];

        // Act
        $isInstanceOfAd = $firstElement instanceof \app\ddd\entities\Ad;

        // Assert
        $this->assertTrue($isInstanceOfAd, 'Item is not an instance of Ad.');
    }

}
