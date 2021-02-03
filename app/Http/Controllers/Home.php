<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index()
    {
        $data = getPageLanguage('home');

        return view('site.home', ['title' => $data['title'], 'content' => $data['content']]);
    }
}
