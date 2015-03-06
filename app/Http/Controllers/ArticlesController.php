<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    
    /**
     * View a list of articles
     * @return type
     */
    public function index()
    {
        return view('articles', [
            'articles' => Article::all()
        ]);
    }
    
    
    /**
     * Populate Articles
     */
    public function populate()
    {
        $article = new Article();
        
        $article->title = 'article title';
        $article->body = 'some big ass test text';
        $article->intro = 'intro text';
        $article->updated_at = \Carbon\Carbon::now();
        
        $article->save();
    }
}