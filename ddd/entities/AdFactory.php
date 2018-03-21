<?php

namespace app\ddd\entities;


use app\ddd\entities\AdImp;

class AdFactory
{
    static public function create($data)
    {
        return new AdImp($data);
    }
}