<?php

namespace Artem\Patterns\Structural\Flyweignt\Classes;

class Phone
{
    public int $id;
    public  string $name;
    public  PhoneVariant $variant;

    /**
     * @param int $id
     * @param string $name
     * @param PhoneVariant $variant
     */
    public function __construct(int $id, string $name, int $variantId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->variant = VariantStorage::getVariant($variantId);
    }


}