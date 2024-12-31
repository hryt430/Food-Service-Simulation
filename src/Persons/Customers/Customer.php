<?php

use Persons\Person;

class Customer extends Person {
    public function __construct(string $name, int $age, string $adress) {
        parent::__construct($name, $age, $address);
    }

    public function interestedCategories(Restaurant $restaurant) : array {
        $foodItems = $restaurant->menu;
        
    }

    public function order(Restaurant $restaurant, array $categories) : Invoice {
        return $restaurant->order($categories);
    }
}