<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {

    public static function get_all() {

        $tanya = DB::table('pertanyaan')->get();
        return $tanya;
    }

    public static function save ($data) {
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function find_by_id($id){
        $tanya = DB::table('pertanyaan')->where('id', $id)->first();
        return $tanya;
    }

    public static function update($id , $request){
        $tanya = DB::table('pertanyaan')
                ->where('id', $id)
                ->update([
                    'judul' => $request["judul"],
                    'isi' => $request["isi"],
                    'penanya_id' => $request["penanya_id"],
                    'tanggal_dibuat' => $request["tanggal_dibuat"],
                    'tanggal_diperbarui' => $request["tanggal_diperbarui"]
                ]);
        return $tanya;
    }

    public static function destroy($id){
        $deleted = DB::table('pertanyaan')
            ->where('id', $id)
            ->delete();
        return $deleted;
    }
}