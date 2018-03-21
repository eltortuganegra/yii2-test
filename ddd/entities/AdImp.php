<?php

namespace app\ddd\entities;


class AdImp implements Ad
{
    private $id;
    private $title;
    private $link;
    private $city;
    private $mainImage;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->link = $data['url'];
        $this->city = $data['city'];
        $this->mainImage = $data['pictures']['picture'][0]['picture_url'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getMainImage()
    {
        return $this->mainImage;
    }

}