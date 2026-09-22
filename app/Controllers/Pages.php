<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        return view('layouts/header', ['title' => 'Home'])
            . view('home')
            . view('layouts/footer');
    }

    public function about(): string
    {
        return view('layouts/header', ['title' => 'About'])
            . view('about')
            . view('layouts/footer');
    }
}
