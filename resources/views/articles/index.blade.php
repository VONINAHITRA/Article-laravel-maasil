<!--hérite une page layouts/app-->
@extends('layouts.app')

<!-- Contenu de la page index Article -->
@section('contenu-page')
  <h3 style="margin-left:3%;padding-bottom:3%;color:#4682b4;"><u>LA LISTE DES ARTICLES</u></h3>
      @foreach($articles as $article)
      <div class="col-md-12 md-auto" style="margin-top:2%; hover:opacity:0.3;">
             <div class="blog-grid"  style="margin-top:1%;">
              <div class="blog-info" >
              <div class="card blog-grid">
                <div class="text-center"><h2 style="color:#4682b4">{{$article->titreArticle}}</h2></div><hr>
                 <h5 class="card-title">Auteur:  {{$article->auteurArticle}}</h5>
                </div>
               <div class="card-body text-center">
            <p class="card-text ">{{$article->texteArticle}}</p>
            </div><hr>
          <span>Date de modification: {{$article->created_at->format('j/m/Y')}}</span><br>
        <span>Date de modification: {{$article->updated_at->format('j/m/Y')}}</span>
       </div>
     </div>
   </div>
 </div>
</div>
       @endforeach  
        </section>
        </div>
        </div>
        </div>
@endsection