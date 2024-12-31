<?php

namespace FoodOrders;

class FoodOrder {
    protected array $items;
    protected Timestamp $orderTime;

    public function __construct(array $items, Timestamp $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;
    }
}