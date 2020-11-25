@extends('layouts.app')

@section('contentheader_title', 'Chèque')

@section('contentheader_levelactive')
<li class=""><a href="javascript:history.go(-1)">Chèque</a></li>
<li class="" style="color: #fff;"><a href="#">List</a></li>
@overwrite


@section('main-content')
<div class="row" style="min-height: 50rem">
    <div class="col-md-3">
        <!-- TYPE RENDEZ-VOUS -->
        <div class="box box-solid ">
            <div class="box-header with-border" style="background-color: #6a8190;padding-top: 1.5px;padding-bottom: 1.5px;">
               <h4 style="text-align: center;"> Type de Chèque</h4>
            </div>
            <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li class="" >
                        <a href="tout">
                            Tout
                            <span class="label label-danger pull-right">{{count($chequesAll)}}</span>
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
        <div class="box box-white">
            <div class="box-header with-border" style="background-color: #708090;">
                <h3 class="box-title" >Production </h3>
                <div class="box-tools pull-right">                      
                      <a class="btn btn-default btn-sm" href="{{route('cheque.create')}}" style="margin-bottom: 1px"><img src="img/icons8_Plus_Math_20px.png">Nouveau chèque</a>
                </div>
            </div>
            <div class="box-body no-padding">

                <!-- <div  class="table-responsive mailbox-messages"> -->
                <div  class="table-responsive box-body no-padding">
                    <br />
                    <br />
                    <table id="empTables" class="table table-hover table-striped table2excel">
                        <thead class="theadexcel">
                            <tr class="header">
                                <th style="width: 50px;" class="noExl no-filter no-sort no-search "></th>
                                <th style="width: 50px;" class="noExl no-filter no-sort no-search "></th>
                                <th class="filter"><b>Numéro chèque</b></th>
                                <th class="filter"><b>Montant </b></th>
                                <th class="filter"><b>Date de paiement</b></th>
                                <th class="filter"><b>Banque</b></th>
                                <th class="filter"><b>Description</b></th>
                                <th class="filter"><b>Date de modification</b></th>
                                <th class="filter"><b>Date de création</b></th>
                            </tr>
                         @foreach($cheques as $cheque)
                            <tr>
                          <td> 
                        <form  action ="{{route('cheque.destroy', $cheque->idCheq)}}" method="post" class=""  onclick=" return confirmSup();">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" type="submit"><img src="img/icons8_Trash_Can_20px.png"> Supprimer</button>
                        </form> 
                    </td>
                    <td>
                        <form action = "{{route('cheque.edit', [$cheque->idCheq])}}" method="post" class="">
                            @csrf
                            @method('GET')
                            <button class="btn btn-warning btn-xs" type="submit"><img src="img/icons8_Edit_20px_1.png"> Modifier</button>
                        </form>
                    </td>
                            <td>{{$cheque->numCheq}}</td>
                            <td>{{$cheque->montantCheq}}</td>
                            <td>{{$cheque->datePayeCheq}}</td>
                            <td>{{$cheque->nomBanq}}</td>
                            <td>{{$cheque->descCheq}}</td> 
                            <td>{{$cheque->updated_at->format('j/m/Y H:i ')}}</td>
                            <td>{{$cheque->created_at->format('j/m/Y H:i ')}}</td>
                           </tr>
                           @endforeach  
                        </tfoot>

                    </table>
                   <span style="float: right;margin-right: 1rem">{{$cheques->links()}}</span>
                </div>
               
            </div>
        </div>
    </div>
</div>
<br/>
@endsection
