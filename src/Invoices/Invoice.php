<?php

namespace Invoices;

class Invoice {
    protected float $finalPrice;
    protected Timestamp $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, Timestamp $orderTime, int $estimatedTimeInMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }
}