<?php

namespace app\controllers;


use app\ddd\infrastructure\sources\UrlAdsSource;
use app\ddd\services\AdsListService;
use yii\web\Controller;

class AdsController extends Controller
{

    public function actionIndex()
    {
        $url = 'http://feeds.spotahome.com/trovit-Ireland.xml';
        $dataSource = new UrlAdsSource($url);

        $adsListService = new AdsListService();
        $ads = $adsListService->execute($dataSource);

        return $this->render('index', [
            'ads' => $ads
        ]);
    }

}