<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Auteur;
use Illuminate\Support\Facades\DB;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $succussCreeation=false;
        return view('auteurs/create', compact('succussCreeation'));
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
            'nomAuteur'=>'required|unique:auteurs'
          ]);
        $VerifierNomAuteur = DB::table('auteurs')->where('nomAuteur', $request->nomAuteur)->first();
        if($VerifierNomAuteur){
            $succussCreeation =false;
            return redirect()->back();
        }else{
            $succussCreeation =true;
        Auteur::create([
            "nomAuteur"=>$request->nomAuteur
            ]);
           
        }
        return view('auteurs/create',compact('succussCreeation'));
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
