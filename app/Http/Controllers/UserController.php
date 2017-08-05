<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;	

use DB;
class UserController extends Controller {
	public function index(){ 
		return DB::table('users')->get(); 
	}
}
