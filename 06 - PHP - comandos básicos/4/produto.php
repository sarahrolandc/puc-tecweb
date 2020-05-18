<?php

class Product
{
    public $code;
    public $name;
    public $quantity;
    public $price;
    public $final_price;

    function __construct($code, $name, $quantity, $price)
    {
        $this->name = $name;
        $this->code = $code;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->final_price = $this->calc_final_price($quantity, $price);
    }
    function calc_final_price($quantity, $price)
    {
        return $quantity * $price;
    }
    public function calc_total($products)
    {
        $totalP = 0;
        foreach ($products as $prod) {
            $totalP += $prod->final_price;
        }
        return $totalP;
    }
}
