<?php

use Persons\Person;

class Customer extends Person {
    public function __construct(string $name, int $age, string $adress) {
        parent::__construct($name, $age, $address);
    }

    public function interestedCategories(Restaurant $restaurant) : array {

    }

    public function order(Restaurant $restaurant, array $categories) : Invoice {
        $interest = $this->interestedCategories($restaurant);

    }
}