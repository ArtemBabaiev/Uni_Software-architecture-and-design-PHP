<?php

namespace Artem\Patterns\Structural\Flyweignt\Classes;

class VariantStorage
{
    private static array $variants;

    public static function getVariant(int $id): PhoneVariant
    {
        if (!isset(self::$variants)) {
            self::$variants = [
                1 => new PhoneVariant(1, "Apple", "Pro"),
                2 => new PhoneVariant(2, "Samsung", "Lite"),
                3 => new PhoneVariant(3, "Xiaomi", "Standard")
            ];
        }
        return self::$variants[$id];
    }
}