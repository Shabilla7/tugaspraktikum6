<?php
namespace App\Http\Controllers;//dipakai untuk mengaktifkan class fungsi index

class GuruController extends Controller {
    public function formulir_proses(Request $request){
    $nama = $request->input('nama');
    $alamat = $request->input('alamat');

        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
?>