<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

function getDurasi($id){
    return DB::table('durasi_kesepakatan')
        -> where('id', $id)
        -> first()
        -> deskripsi_durasi;               
}

function getStatus($id){
    return DB::table('status_kesepakatan')
        -> where('id', $id)
        -> first()
        -> deskripsi_status;
}

class KesepakatanController extends Controller
{
    public function daftarKesepakatan(){
        if (Session::has('loggedUsername')) {
            $loggedAs = Session('loggedAs');
            $loggedUsername = Session('loggedUsername');

            $result = array();

            $id = DB::table($loggedAs)
                -> where('username', $loggedUsername)
                -> select('id')
                -> first()
                -> id;

            if($loggedAs == 'petani'){
                $products = DB::table('produk')
                    -> where ('id_petani', $id)
                    -> select('id', 'nama_produk', 'harga_produk')
                    -> get();

                foreach ($products as $product) {
                    $kesepakatan = DB::table('kesepakatan')
                    -> where('id_produk', $product->id)
                    -> select('id', 'id_swalayan', 'id_durasi_kesepakatan', 'id_status_kesepakatan')
                    -> first();

                    if($kesepakatan){

                        $nama_swalayan = DB::table('swalayan')
                        -> where('id', $kesepakatan->id_swalayan)
                        -> first()
                        -> nama;

                        array_push($result, array(
                            "id" => $kesepakatan->id,
                            "nama_produk" => $product->nama_produk,
                            "nama_swalayan" => $nama_swalayan,
                            "durasi_kesepakatan" => getDurasi($kesepakatan->id_durasi_kesepakatan),
                            "harga_produk" => $product->harga_produk,
                            "status_kesepakatan" => getStatus($kesepakatan->id_status_kesepakatan),
                        ));
                    }
                }
            }
            else{
                $kesepakatans = DB::table('kesepakatan')
                    -> where('id_swalayan', $id)
                    -> select('id', 'id_produk', 'id_durasi_kesepakatan', 'id_status_kesepakatan')
                    -> get();

                foreach ($kesepakatans as $kesepakatan) {
                    $nama_swalayan = DB::table('swalayan')
                        -> where('id', $id)
                        -> first()
                        -> nama;

                    $produk = DB::table('produk')
                        -> where('id', $kesepakatan->id_produk)
                        -> first();

                    array_push($result, array(
                        "id" => $kesepakatan->id,
                        "nama_produk" => $produk->nama_produk,
                        "nama_swalayan" => $nama_swalayan,
                        "durasi_kesepakatan" => getDurasi($kesepakatan->id_durasi_kesepakatan),
                        "harga_produk" => $produk->harga_produk,
                        "status_kesepakatan" => getStatus($kesepakatan->id_status_kesepakatan),
                    ));
                }
            }

            return view('kesepakatan.daftar',[
                'loggedAs' => $loggedAs,
                'deals' => $result
            ]);


        }else{
            return redirect('/');
        }  
    }

    public function terimaKesepakatan($id){
        if (Session::has('loggedUsername')) {
            $loggedAs = Session('loggedAs');
            $loggedUsername = Session('loggedUsername');

            DB::table('kesepakatan')
                -> where('id', $id)
                -> update([
                    "id_status_kesepakatan" => 2
                ]);

            return redirect('/request-petani');
            
        }else{
            return redirect('/');
        } 
    }

    public function tolakKesepakatan($id){
        if (Session::has('loggedUsername')) {
            $loggedAs = Session('loggedAs');
            $loggedUsername = Session('loggedUsername');

            DB::table('kesepakatan')
                -> where('id', $id)
                -> update([
                    "id_status_kesepakatan" => 3
                ]);

            return redirect('/daftar-kesepakatan');
            
        }else{
            return redirect('/');
        } 
    }

    public function submitKesepakatan($id){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'swalayan') {
            $loggedAs = Session('loggedAs');
            $loggedUsername = Session('loggedUsername');

            $swalayanId = DB::table('swalayan')
                -> where('username', $loggedUsername)
                -> first()
                -> id;

            DB::table('kesepakatan')
                -> insert([
                    "id_swalayan" => $swalayanId,
                    "id_produk" =>  $id,
                    "id_status_kesepakatan" => 1,
                    "id_durasi_kesepakatan" => 1
                ]);

            return redirect('/request-swalayan');
        }else{
            return redirect('/');
        } 
    }
}
