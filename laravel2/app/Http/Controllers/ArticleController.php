<?php

namespace App\Http\Controllers;

use API;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return API::ok('listado de noticias', $articles);
    }
}
