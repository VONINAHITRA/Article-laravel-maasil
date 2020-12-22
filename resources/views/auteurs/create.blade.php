<!--hérite une page layouts/app-->
@extends('layouts.app')

<!-- Contenu de la page créer auteur -->
@section('contenu-page')
<div class="card">
     <div class="container-fluid">
       <div class="row">
       @if ($succussCreeation==true)
               <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <span style="text-align: center; margin-left: 40% ">Le nouveau Auteur a été bien créee</span>
               </div>
        @endif
        @if ($errors->any())
               <div class="alert alert-warning" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <span style="text-align: center; margin-left: 37% ">L'auteur doit être unique à son nom,veuillez essayer autre nom </span>
               </div>
        @endif
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top:4%">
               <div class="blog-grid">
                  <div class="blog-form" >
                     <h3 style="color:#008080" style="margin-top:-2%;">Nouveau Auteur</h3><hr>
                     <form  method="post" id="formAuteur" action="{{route('auteur.store')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                   <div class="form-group">
                  <label for="nomAuteur">Nom auteur:</label>
                  <input class="form-control" type="text" name="nomAuteur" id="nomAuteur" placeholder="ex: Voninahitra"></br>
                  <input type="hidden" id="idAuteur" class="idAuteur" name="idAuteur">
                  <div calss="row">
                  <div class="col-md-6" justify-content>
                  <button type="reset" class="btn btn-info  btn-sm btn-block">
                    <a href="javascript:history.go(-1)" style="color:#fff;">Annuler</a></button></div>
                  <div class="col-md-6"><button type="submit" class="btn btn-info  btn-sm btn-block" id="btnSubmitAuteur">Valider</button></div></br>
                </div>
                </form>
            </div> 
           </div>
          </div>
         </div>
        </div>
       </div>
       </div>
     </div>
@endsection