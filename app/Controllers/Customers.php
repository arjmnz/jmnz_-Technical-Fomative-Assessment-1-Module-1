<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        static $customers = [
            ['full_name' => 'Ana Reyes', 'email' => 'ana.reyes@example.com', 'phone' => '0917-555-0101'],
            ['full_name' => 'Ben Cruz', 'email' => 'ben.cruz@example.com', 'phone' => '0917-555-0102'],
            ['full_name' => 'Carla Santos', 'email' => 'carla.santos@example.com', 'phone' => '0917-555-0103'],
            ['full_name' => 'Daniel Lim', 'email' => 'daniel.lim@example.com', 'phone' => '0917-555-0104'],
            ['full_name' => 'Ella Garcia', 'email' => 'ella.garcia@example.com', 'phone' => '0917-555-0105'],
        ];

        return view('layouts/header', ['title' => 'Customer Accounts'])
            . view('customers', ['customers' => $customers])
            . view('layouts/footer');
    }
}
