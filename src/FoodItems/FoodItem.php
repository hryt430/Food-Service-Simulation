<?php

namespace FoodItems;

abstract class FoodItem {
    protected string $name;
    protected string $desc;
    protected float $price;

    public function __construct(string $name, string $desc, float $price) {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
    }
}