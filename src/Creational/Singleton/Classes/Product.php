<?php

namespace Artem\Patterns\Creational\Singleton\Classes;

use DateTime;

class Product
{
    public readonly string $id;
    public string $name;
    public string $product_number;
    public string $description;
    public float $price;
    public int $stock_quantity;
    public int $sold_quantity;
    public array $characteristic;
    public Category $category;
    public DateTime $created_at;
    public DateTime $updated_at;

    /**
     * @param string $name
     * @param string $product_number
     * @param string $description
     * @param float $price
     * @param int $stock_quantity
     * @param int $sold_quantity
     * @param array $characteristic
     * @param Category $category
     */
    public function __construct( string $name, string $product_number, string $description, float $price,
                                int $stock_quantity, int $sold_quantity, array $characteristic,
                                Category $category)
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->product_number = $product_number;
        $this->description = $description;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->sold_quantity = $sold_quantity;
        $this->characteristic = $characteristic;
        $this->category = $category;
        $this->created_at = new DateTime();
        $this->updated_at = new DateTime();
    }


}