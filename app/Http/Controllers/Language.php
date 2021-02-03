<?php

namespace App\Http\Controllers;

class Language extends Controller
{
    public function index($language)
    {
        changeLanguage($language);
    }
}
