<?php

namespace app\ddd\infrastructure\sources;

interface AdsSource
{
    public function getData():string;
}