<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function developers() {
        return view('developers');
    }
    public function articles() {
        $articles = new Articles();
        return view('articles', ['articles' => $articles->all()]);
    }
    public function id($id) {
        $article = Articles::select(['id', 'title', 'article', 'image'])->where('id', $id)->first();
        return view('article-content')->with(['article'=>$article]);
    }
}
