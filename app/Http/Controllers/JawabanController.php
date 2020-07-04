<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawab = JawabanModel::get_all();
        return view ('jawaban.index', compact('jawab'));
    }

    public function create (){
        return view ('jawaban.form');
    }

    public function store (Request $request){
       $new_jawab = JawabanModel::save($request->all());
       return redirect('/jawaban');
  }

    public function show ($penanya_id){
        $jawab = JawabanModel::find_by_id($penanya_id);
        return view ('jawaban.show', compact('jawab'));
    }
}
