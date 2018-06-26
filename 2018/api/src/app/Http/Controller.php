<?php
namespace MopConApi2018\App\Http;

class Controller
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if (property_exists($this->container, $property)) {
            return $this->container->{$property};
        }
    }
}