<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        static $users = [
            ['username' => 'admin', 'full_name' => 'Maria Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'John Ramos', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Lea Mendoza', 'role' => 'Cashier'],
            ['username' => 'inventory01', 'full_name' => 'Paul Flores', 'role' => 'Inventory Staff'],
            ['username' => 'manager01', 'full_name' => 'Rose Aquino', 'role' => 'Manager'],
        ];

        return view('layouts/header', ['title' => 'User Accounts'])
            . view('users', ['users' => $users])
            . view('layouts/footer');
    }
}
