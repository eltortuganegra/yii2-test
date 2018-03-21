<?php

namespace app\ddd\collaborators;


use app\ddd\entities\AdFactory;

class AdsGenerator
{
    private $ads;

    public function generate(array $parseItems)
    {
        $iterator = $this->filterFields($parseItems);
        $this->ads = iterator_to_array($iterator);
    }

    private function filterFields(array $parseItems)
    {
        foreach ($parseItems as $item) {
            $ad = AdFactory::create($item);

            yield $ad;
        }
    }

    public function getAds()
    {
        return $this->ads;
    }

}