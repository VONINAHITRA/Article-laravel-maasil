<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Flashy;
use response;
use App\Cheque;

class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cheques = Cheque::paginate(6);
        $chequesAll = Cheque::all();
        $boa = Cheque::where('nomBanq','=','BOA')->get();
        $bfv = Cheque::where('nomBanq','=','BFV-SG')->get();;
        $bni = Cheque::where('nomBanq','=','BNI')->get();
             return view('cheques.index', compact('cheques','boa','bni','bfv','chequesAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retourner view ajout chèque
         return view('cheques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $numCheqVerif = DB::table('cheques')->where('numCheq', $request->numCheq)->first();
        if($numCheqVerif){
          Flashy::warning('Erreur, le numéro du chèque existe déjà');
           return redirect()->back();
        }else{
          $validation = $this->validate($request,[
                  'numCheq'=>'required|max:5',
                  'montantCheq'=>'required',
                  'datePayeCheq'=>'required',
                  'nomBanq'=>'required',
                  'descCheq'=>'required'
        ]);
          $cheque = Cheque::create([
                  'numCheq'=>$request->get('numCheq'),
                  'montantCheq'=>$request->get('montantCheq'),
                  'datePayeCheq'=>$request->get('datePayeCheq'),
                  'nomBanq'=>$request->get('nomBanq'),
                  'descCheq'=>$request->get('descCheq')
        ]);
          Flashy::success('Message, L\'ajout du nouveau chèque à été bien éffectué'); 
        }
     return redirect('/cheque');
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
    public function edit($idCheq)
    {
      $cheques = Cheque::where('idCheq',$idCheq)->first();
        return view('cheques.edit', compact('cheques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCheq)
    {
        $this->validate($request,[
                  'numCheq'=>'required',
                  'montantCheq'=>'required',
                  'datePayeCheq'=>'required',
                  'nomBanq'=>'required',
                  'descCheq'=>'required'
        ]); 
       $cheque = Cheque::where('idCheq',$idCheq)->update([
                  'numCheq'=>$request->get('numCheq'),
                  'montantCheq'=>$request->get('montantCheq'),
                  'datePayeCheq'=>$request->get('datePayeCheq'),
                  'nomBanq'=>$request->get('nomBanq'),
                  'descCheq'=>$request->get('descCheq')
        ]);
        Flashy::success('Message, La modification du chèque a été bien éffectué'); 
      return redirect('/cheque');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCheq)
    {
       $cheque = Cheque::where('idCheq','=',$idCheq)->delete();
        Flashy::success('Suppriossion, La suppression du chèque a été éffectué'); 
        return redirect('/cheque');
    }
}
