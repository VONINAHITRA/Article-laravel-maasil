<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Auteur;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = article::all();
        return view('articles/index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $succussCreeation=false;
        $auteurs = Auteur::all();
        return view('articles/create',compact('succussCreeation','auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'titreArticle'=>'required',
            'texteArticle'=>'required',
            'auteurArticle'=>'required'
          ]);
        $succussCreeation =true;
        $auteurs = Auteur::all();
        Article::create([
            "titreArticle"=>$request->titreArticle,
            "texteArticle"=>$request->texteArticle,
            "auteurArticle"=>$request->auteurArticle,
         ]);  

         return view('articles/create',compact('succussCreeation','auteurs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
