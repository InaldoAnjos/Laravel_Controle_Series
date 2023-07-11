<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller {
    
    public function index() {

        // Com Eloquent ORM
        // $series = Serie::all();
        $series = Serie::query()->orderby('id')->get();
        
        // Sem Eloquent ORM
        // $series = DB::select('SELECT id, nome FROM series ORDER BY id');

        return view('series.index')->with('series', $series);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $serie = new Serie();
        $serie->nome = $request->input('nome');
        
        // Com Eloquent ORM
        if($serie->save()) {
            return redirect('/series');
        } else {
            return "Deu ruim!";
        }
        
        // Sem Eloquent ORM
        // if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$serie->nome])){
        //     return redirect('/series');
        // } else {
        //     return "Deu erro!";
        // }
    }
}
