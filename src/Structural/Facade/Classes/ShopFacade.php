<?php

namespace Artem\Patterns\Structural\Facade\Classes;

use mysql_xdevapi\Exception;

class ShopFacade
{
    private Warehouse $warehouse;
    private PaymentSystem $paymentSystem;

    /**
     * @param Warehouse $warehouse
     * @param PaymentSystem $paymentSystem
     */
    public function __construct()
    {
        $this->warehouse = new Warehouse();
        $this->paymentSystem = new PaymentSystem();
    }


    public function getProduct(int $id): Product
    {
        return $this->warehouse->getProduct($id);
    }

    public function buy(int $id): bool
    {
        try {
            $price = $this->getProduct($id)->price;
            $this->warehouse->sellProduct($id);
            $this->paymentSystem->pay($price);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}