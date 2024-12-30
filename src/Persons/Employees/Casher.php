<?php

use Persons\Employees\Employee;

class Casher extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary) {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {
        
    }

    public function generateInvoice(FoodOrder $order): Invoice {
        
    }
}