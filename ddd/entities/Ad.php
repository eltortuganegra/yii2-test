<?php

namespace app\ddd\entities;

interface Ad
{

    public function getId();

    public function getTitle();

    public function getLink();

    public function getCity();

    public function getMainImage();

}