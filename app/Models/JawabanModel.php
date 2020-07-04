<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_all() {

        $jawab = DB::table('jawaban')->get();
        return $jawab;
    }

    public static function save ($data) {
        unset($data["_token"]);
        $new_jawab = DB::table('jawaban')->insert($data);
        return $new_jawab;
    }

    public function create (){
        return view ('jawaban.form');
    }

    public static function find_by_id($penanya_id){
        $jawab = DB::table('jawaban')->where('penanya_id', $penanya_id)->first();
        return $jawab;
    }
}