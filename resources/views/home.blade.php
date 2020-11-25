@extends('layouts.app')
@section('contentheader_title','Page d\'accueil ' )

@section('main-content')
<div class="container" style="min-height: 50rem">
    <div class="row justify-content-center">
        <div class="col-md-12">
                 <header class="masthead">
             <div class="container">
                <div class="masthead-subheading" style="font-size: 25px">Bonjour  {{ Auth::user()->name }}!</div>
                <div class="masthead-heading">Application web,<br/>développé en PHP avec le Framework Laravel 6.20 , Base de données MySQL</div>
                <a class="btn btn-default btn-xl text-uppercase js-scroll-trigger" style="border-color: red" href="{{route('bord')}}"><img src="img/icon_tabbord.png"> TABLEAU DE BORD</a>
            </div>
         </header>
    </div>
    </div>
@endsection
