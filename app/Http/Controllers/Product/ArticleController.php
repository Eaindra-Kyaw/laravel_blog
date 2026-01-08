<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index1()
    {
        return "Colorful Lipsticks";
    }

    public function detail($id)
    {
        return "Product Detail - $id";
    }

    public function sample()
    {
        return "Sample Product";
    }

    public function index()
    {
        $data = [
        [ "id" => 1, "item" => "3CE" ],
        [ "id" => 2, "item" => "Romand" ],
        [ "id" => 3, "item" => "Dior" ],
        [ "id" => 4, "item" => "YSL" ],
        [ "id" => 5, "item" => "JoJo" ],
        ];
    return view('articd /Applications/MAMP/htdocs/laravel_blog
    ls -lacles.index', [
    'articles' => $data
    ]);
}
}

