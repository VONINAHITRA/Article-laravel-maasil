<!--hérite une page layouts/app-->
@extends('layouts.app')

<!-- Contenu de la page créer Article -->
@section('contenu-page')
<div class="card">
     <div class="container-fluid">
       <div class="row">
       @if ($succussCreeation==true)
               <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <span style="text-align: center; margin-left: 40% ">Le nouveau Article a été bien créee</span>
               </div>
        @endif
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top:4%">
               <div class="blog-grid">
                  <div class="blog-form" >
                     <h3 style="color:#008080" style="margin-top:-2%;">Nouveau Article</h3><hr>
                     <form  method="post" id="formArticle" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                   <div class="form-group">
                   <label for="titreArticle">Titre de l'article:</label>
                  <input class="form-control" type="text" name="titreArticle" id="titreArticle" placeholder="ex: Eléction Sénatorial à Madagascar"></br>
                  <input type="hidden" id="idArticle" class="idArticle" name="idArticle">
    
                   <label for="auteurArticle">Auteur de l'article:</label>
                    <select class="form-control select2" name="auteurArticle" id="auteurArticle">
                    @foreach($auteurs as $auteur)
                        <option>{{$auteur->nomAuteur}}</option>
                     @endforeach    
                    </select></br>
                   <label for="texteArticle">text de l'article:</label>
                   <textarea class="form-control" rows="3" name="texteArticle" id="texteArticle" placeholder="ex: Le contenu de l'article"></textarea>
                    </div>
                  <div calss="row">
                  <div class="col-md-6" justify-content>
                  <button type="reset" class="btn btn-info  btn-sm btn-block"><a href="javascript:history.go(-1)" style="color:#fff;">Annuler</a></button></div>
                  <div class="col-md-6"><button type="submit" class="btn btn-info  btn-sm btn-block" id="btnSubmitArticle">Valider</button></div></br>
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