@extends('layouts.sbadmin')
@section('title', 'Home')

@section('navbar')
@section('sidebar')
@parent
@endsection
@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Dashboard <small>Statistics Overview</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol>
	</div>
</div>


<div class="row" ng-controller="UserCtrl">
	<div class="col-lg-12">
		<h3>My Users</h3>
		<div class="small">
			<input class="form-control" ng-model="query" placeholder="Pesquisar">
		</div>
		<table class="table"> 
			<caption>Lista de usuarios.</caption> 
			<thead> <tr>
				<th>#</th> 
				<th>Name</th> 
				<th>Email</th> 
				<th></th> 
			</tr> 
		</thead> 
		<tbody>
			<tr ng-repeat="user in users | filter:query | orderBy:orderProp"> 
				<th scope="row">@{{user.id}}</th> 
				<td>@{{user.name}}</td> 
				<td>@{{user.email}}</td> 
				<td><a href="#" data-toggle="modal" data-target="#myModal" ng-click="update(editingItem)"><i class="fa fa-pencil-square-o"></i></a>
					<a href="#"><i class="fa fa-trash-o"></i>
					</td> 
				</tr> 
			</tbody> 
		</table>
	</div>
	<div id="errorModal" class="modal fade"> <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-warning">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title ">@{{error.title}}</h4>
			</div>
			<div class="modal-body">
				<p>@{{error.message}}</p> </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"
					data-dismiss="modal">Fechar</button> </div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Editar usuário</h4>
				</div>
				<div class="modal-body">
					<p>User: @{{user.name}}</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



	@endsection
	<!-- /.row -->
