<?php

use app\ddd\infrastructure\sources\UrlAdsSource;

class UrlAdsSourceTest extends \Codeception\Test\Unit
{

    // tests
    public function testDataMustNotBeNull()
    {
        // Arrange
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $albumsSource = new UrlAdsSource($url);

        // Act
        $data = $albumsSource->getData();

        // Assert
        $this->assertNotNull($data);
    }
}
