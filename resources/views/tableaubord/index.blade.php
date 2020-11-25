@extends('layouts.app')

@section('contentheader_title', 'Tableau de bord')

@section('main-content')
<div class="row" style="min-height: 50rem">
    <div class="col-md-3">
        <!-- TYPE RENDEZ-VOUS -->
        <div class="box box-solid ">
            <div class="box-header with-border" style="background-color: #6a8190;padding-top: 1.5px;padding-bottom: 1.5px;">
               <h5 style="text-align: center;"> Nombre de chèque par Banque</h5>
            </div>
            <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li class="" >
                        <a href="tout">
                            Tout
                            <span class="label label-danger pull-right">{{count($cheques)}}</span>
                        </a>
                    </li>
                    <li class="">
                        <a nohref href="#" >
                            Banque BFV-SG
                            <span class="label label-danger pull-right">{{count($bfv)}}</span>
                        </a>
                    </li>
                   
                    <li class="">
                        <a nohref href="#" >
                             Banque BOA
                            <span class="label label-danger pull-right">{{count($boa)}}</span>
                        </a>
                    </li>

                     <li class="">
                        <a nohref href="#" >
                            Banque BNI
                            <span class="label label-danger pull-right">{{count($bni)}}</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>   

    </div>

    <div class="col-md-9">
        <div class="box box-white" style="min-height: 25rem">
            <div class="box-header with-border" style="background-color: #708090;">
                <h3 class="box-title" >Répresantation graphique </h3>
            </div>
            <div class="box-body no-padding">
            	<input type="hidden" name="bfv" value="{{count($bfv)}}" id="bfv">
            	<input type="hidden" name="boa" value="{{count($boa)}}" id="boa">
            	<input type="hidden" name="bni" value="{{count($bni)}}" id="bni">
            	<canvas id="myChart3" width="100%" height="50px"></canvas>
                <div  class="table-responsive box-body no-padding">
              
                </div>
        </div>
    </div>
</div>
</div>
  </div>

@endsection


