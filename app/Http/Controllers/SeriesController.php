<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
    	$series = [
    		'Mr.Robot',
    		'Breaking Bad',
    		'True Detective',
    		'Spartacus: Blood and Sand'
    	];

     	return view('series.index', compact('series'));
    }

    public function create()
    {
    	return view ('series.create');
    }
}
