@extends('layouts.sbadmin')
@section('title', 'Charts')

@section('navbar')
@section('sidebar')
@parent
@endsection
@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Charts <small>Graphics</small>
		</h1>
	</div>
</div>


<div class="row" ng-controller="ChartsCtrl">
	<div class="col-lg-12">
		<h3>Charts of @{{name}}</h3>
		<div class="small">
		</div>
	</div>
</div>



@endsection
<!-- /.row -->
