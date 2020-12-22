<!--hérite une page layouts/app-->
@extends('layouts.app')

<!-- Contenu de la page Acceuil -->
@section('contenu-page')
<div class="card">
       <section class="section gray-bg" id="blog">
            <div class="container-fluid">
                <div class="row justify-content-center " style="margin-top:-7%">
                    <div class="col-lg-8 text-left">
                        <div class="section-title">
                            <h4 style="color:#4682b4"><u>LES CINQUES DERNIER DE LA LISTE DES ARTICLES</u></h4>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="margin-top:3%">
                   <div class="col-lg-3" style="">
                  <div class="box box-solid ">
                 <div class="box-header with-border" style="background-color: #993465;color:#fff;padding-top: 1.5px;padding-bottom: 1.5px;">
               <h4 style="text-align: center;">Nouveau Article/Auteur</h4>
             </div>
             <div class="box-body no-padding" style="margin-top:6%">
                <ul class="nav nav-pills nav-stacked">
                    <li class="pb-3" >
                       <a href="{{route('article.create')}}"><button class="btn btn-default btn-sm btn-block "> Créer un article</button> </a>
                    </li> <br>
                    <li class="">
                    <a href="{{route('auteur.create')}}"><button class="btn btn-default btn-sm btn-block">  Créer un auteur </button></a>
                    </li>
                </ul>
             </div>
         </div> 
      </div>
      <div class="col-md-9" >
      @foreach($articles as $article)
      <div class="justify-content-md-center" >
                    <section style="text-align: left">
                    <div class="col-lg-6 sm-auto" style="margin-top:1%; ">
                        <div class="blog-grid">
                            <div class="blog-info" >
                            <div style="padding:1px; border-radius:5px">
                                <h3 style="margin-top: -2%;padding-top:3px;color:#4682b4">{{$article->titreArticle}}</h3>
                                </div><hr>
                                 <p>Auteur: {{$article->auteurArticle}}</p>
                                 <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Voir plus</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                     </div>
                  @endforeach  
                </div>           
                </div>
            </div>
            </div>
        </section>
        </div>
@endsection
