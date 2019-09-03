<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
    
    $series = serie::query()->orderBy('nome')->get();

    $mensagem = $request->session()->get('mensagem');

	return view('series.index', compact('series'));
    
  }

    public function create()
    {
    	return view ('series.create');
    }

    public function store(Request $request)
    {
    	 Serie::create($request->all());

         $request->session()->flash
            'mensagem',
            "Série{$série->id} criada com sucesso{$serie->nome}"
         );

         return redirect('/series');

    	
    }
}
