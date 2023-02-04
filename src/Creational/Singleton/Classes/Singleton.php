<?php

namespace Artem\Patterns\Creational\Singleton\Classes;

use Exception;

class Singleton
{
    private static array $instances = [];

    protected function __construct() { }

    //Заборона клонування
    protected function __clone() { }

    //Заборона ансериалізації

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            print_r("Created new instance of " . static::class . "\n");
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }
}