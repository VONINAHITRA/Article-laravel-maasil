@extends('layouts.app')

@section('contentheader_title', 'Chèque')

@section('contentheader_levelactive')
<li class=""><a href="javascript:history.go(-1)">Chèque</a></li>
<li class="" style="color: #fff;"><a href="#">Modification</a></li>
@overwrite

@section('main-content')
    <!-- Main content -->
    <section class="content">
		<div class="box box-danger">
            <div class="box-header with-border">
				<h3 class="box-title form">Modification chèque</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('cheque.update', [$cheques->idCheq]) }}" enctype="multipart/form-data">
                {{csrf_field()}}
				{{method_field('POST')}}
				<div class="box-body">
					<div class="nav-tabs-custom">
							<h3 style="color: #000; text-align: center;">Modification chèque</h3>
						<div class="tab-content">
							<div class="active tab-pane" id="condidentielles">
								<input type="hidden" name="idCheq" id="idCheq">
								<div class="form-group">
									<label for="numCheq" class="col-sm-2 control-label">Numéro chèque : </label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="numCheq" id="numCheq" value="{{$cheques->numCheq}}" placeholder="Numéro chèque" autocomplete="off">
									</div>
								</div>
								<div class="form-group">
									<label for="montantCheq" class="col-sm-2 control-label">Montant : </label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="montantCheq" id="montantCheq" value="{{$cheques->montantCheq}}" placeholder="Montant" autocomplete="off">
									</div>
								</div>
								
								<div class="form-group">
									<label for="datePayeCheq" class="col-sm-2 control-label">Date de paiement : </label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" name="datePayeCheq" id="datePayeCheq" placeholder="dd/mm/yyyy" value="{{$cheques->datePayeCheq}}" autocomplete="off">
									</div>
								</div>
								<div class="form-group">
									<label for="nomBanqCheq" class="col-sm-2 control-label ">Banque à associer : </label>
									<div class="col-sm-10">
										<select class="form-control select" name="nomBanq" id="nomBanq"  style="width: 100%;" required>
											<option>{{$cheques->nomBanq}}</option>
											<option >BOA</option>
											<option >BFV-SG</option>
											<option >BNI</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="descCheq" class="col-sm-2 control-label">Description : </label>
									<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="descCheq" id="descCheq" placeholder="Description" style="text-align: left">
										{{$cheques->descCheq}}
									</textarea>
									</div>
								</div>
							</div>
						</div>
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-10">
							<a href="javascript:history.go(-1)" class="btn btn-default">Annuler</a>
							<button type="submit" class="btn btn-info pull-right">Valider</button>
						</div>
					</div>
					<br/>
				</div>
			</form>
		</div>      
    </section>
@endsection