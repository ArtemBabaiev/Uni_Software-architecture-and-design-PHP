<?php

namespace Artem\Patterns\Creational\Singleton\Classes;
class Catalog extends Singleton
{
    private array $products;

    protected function __construct()
    {
        $this->products = [];
    }

    public function add_product(Product $product)
    {
        $this->products[$product->id] = clone $product;
    }

    public function get_by_id(string $id): Product|null
    {
        if (isset($this->products[$id])){
            return $this->products[$id];
        }
        return null;
    }

    public function remove_by_id(string $id)
    {
        unset($this->products[$id]);
    }

    public function showAll(){
        foreach ($this->products as $product){
            print_r($product);
        }
    }

}