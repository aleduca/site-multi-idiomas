<?php

namespace App\Http\Controllers;

use Database\Query\QueryBuilder;
use Database\Query\Select;

class Posts extends Controller
{
    private $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new QueryBuilder;
    }

    public function index()
    {
        $data = $this->queryBuilder->select('id, title, content')->table('posts' . LANGUAGE)->paginate(5)->execute(new Select());
        return view('site.posts', ['title' => 'Posts', 'data' => $data, 'language' => LANGUAGE]);
    }
}
