<?php

namespace Artem\Patterns\Structural\Flyweignt\Classes;

class PhoneVariant
{
    public int $id;
    public String $manufacturer;
    public String $model;

    /**
     * @param int $id
     * @param String $manufacturer
     * @param String $model
     */
    public function __construct(int $id, string $manufacturer, string $model)
    {
        $this->id = $id;
        $this->manufacturer = $manufacturer;
        $this->model = $model;
    }

}