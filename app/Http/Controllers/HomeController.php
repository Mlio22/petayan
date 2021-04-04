<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

function getProdukData($limit){
    $datas = (array) DB::table('produk')
        -> select('id', 'id_petani','nama_produk', 'harga_produk', 'gambar_produk', 'waktu_kadaluarsa', 'kategori_produk')
        -> limit($limit)
        -> get();

    $lokasi = null;
    $datas = $datas["\x00*\x00items"];

    foreach ($datas as $data) {
        $petani = DB::table('petani')
            -> where('id', $data->id_petani)
            -> select('id', 'lokasi_provinsi', 'lokasi_kabupaten')
            -> first();

        $data->lokasi_provinsi = $petani->lokasi_provinsi;
        $data->lokasi_kabupaten = $petani->lokasi_kabupaten;
    }


    return array_chunk($datas, 3);
}

function getSwalayanData($limit){
    $datas = (array) DB::table('swalayan')
        -> select('nama', 'lokasi_provinsi', 'lokasi_kabupaten')
        -> limit($limit)
        -> get();
        
    $datas = $datas["\x00*\x00items"];

    return array_chunk($datas, 3);
}

class HomeController extends Controller
{   
    public function createHome(){
        $username = null;
        $loggedAs = null;
        $datas = null;

        if (Session::has('loggedUsername')) {
            $username = Session('loggedUsername');
            $loggedAs = Session('loggedAs');
        }

        if ($loggedAs == 'petani'){
            $datas = getSwalayanData(6);
        }

        else if ($loggedAs == 'swalayan'){
            $datas = getProdukData(6);
        }

        else {
            $datas = [
                'produk' => getProdukData(3),
                'swalayan' => getSwalayanData(3)
            ];
        }

        // return dd($datas);

        return view('home.index', [
            'username' => $username, 
            'loggedAs' => $loggedAs,
            'datas' => $datas
        ]);
    }
}
