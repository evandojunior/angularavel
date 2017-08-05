@extends('layouts.laravel')

@section('title', 'angular+laravel')

@section('content')


    <div class="col-md-6 col-md-offset-3" ng-hide="!showMenu">
        <form name="form" method="POST" ng-submit="submit()"  ng-controller="LoginCtrl">
            <div class="form-group" ng-class="">
                <label for="username">Username</label>
                <input type="text" name="username"  class="form-control" ng-model="username" required />
                <!--<span ng-show="" class="help-block">Username is required</span>-->
            </div>
            <div class="form-group" ng-class="">
                <label for="password">Password</label>
                <input type="password" name="password"  class="form-control" ng-model="password" required />
                <!--<span ng-show="" class="help-block">Password is required</span>-->
            </div>
            <div class="form-actions">
                <button type="submit" ng-disabled="" class="btn btn-primary">Login</button>
                <a href="#/register" class="btn btn-link">Register</a>
            </div>
        </form>
    </div>
@endsection
