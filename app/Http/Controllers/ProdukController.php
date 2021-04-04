<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class ProdukController extends Controller
{
    public function daftarProduk(){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'petani') {
            $loggedUsername = Session('loggedUsername');
            $loggedAs = Session('loggedAs');

            $petaniID = DB::table('petani')
                -> where('username', $loggedUsername)
                -> select('id')
                -> first()
                -> id;

            $products = DB::table('produk')
                -> where('id_petani', $petaniID)
                -> limit(4)
                -> select('id', 'nama_produk', 'kategori_produk', 'harga_produk')
                -> get();

            return view('produk.daftar', [
                'loggedAs' => $loggedAs,
                'products' => $products
            ]);

        }else{
            return redirect('/');
        }   
    }

    public function createTambahProduk(){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'petani') {
            return view('produk.tambah-produk', [
                'loggedAs' => 'petani',
            ]);

        }else{
            return redirect('/');
        }  
    }

    public function checkTambahProduk(Request $request){
        $nama_produk = $request->nama_produk;
        $harga_produk = $request->harga_produk;
        $waktu_kadaluarsa = $request->waktu_kadaluarsa;
        $kategori_produk = $request->kategori_produk;

        $loggedUsername = Session('loggedUsername');
        $loggedAs = Session('loggedAs');

        $petaniID = DB::table('petani')
            -> where('username', $loggedUsername)
            -> select('id')
            -> first()
            -> id;

        DB::table('produk')
            -> insert([
                'id_petani' => $petaniID,
                'nama_produk' => $nama_produk,
                'harga_produk' => $harga_produk,
                'waktu_kadaluarsa' => $waktu_kadaluarsa,
                'kategori_produk' => $kategori_produk,

                //! contoh
                'gambar_produk' => 'a',
            ]);

        return redirect('/daftar-produk');
    }

    public function createEditProduk($id){

        if (Session::has('loggedUsername') && Session('loggedAs') == 'petani') {
            $loggedUsername = Session('loggedUsername');

            $petaniID = DB::table('petani')
                -> where('username', $loggedUsername)
                -> select('id')
                -> first()
                -> id;

            $product = DB::table('produk')
                -> where('id', $id)
                -> where('id_petani', $petaniID)
                -> select('id', 'nama_produk', 'kategori_produk', 'harga_produk', 'waktu_kadaluarsa')
                -> first();

            return view('produk.edit-produk', [
                'loggedAs' => 'petani',
                'product' => $product,
            ]);

        }else{
            return redirect('/');
        } 
    }

    public function checkEditProduk(Request $request, $id){
        $id_produk = $id;

        $nama_produk = $request->nama_produk;
        $harga_produk = $request->harga_produk;
        $waktu_kadaluarsa = $request->waktu_kadaluarsa;
        $kategori_produk = $request->kategori_produk;

        $loggedUsername = Session('loggedUsername');
        $loggedAs = Session('loggedAs');

        $petaniID = DB::table('petani')
            -> where('username', $loggedUsername)
            -> select('id')
            -> first()
            -> id;

        DB::table('produk')
            -> where('id',$id_produk)
            -> update([
                'id_petani' => $petaniID,
                'nama_produk' => $nama_produk,
                'harga_produk' => $harga_produk,
                'waktu_kadaluarsa' => $waktu_kadaluarsa,
                'kategori_produk' => $kategori_produk,

                //! contoh
                'gambar_produk' => 'a',
            ]);

        return redirect('/daftar-produk');
    }

    public function hapusProduk($id){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'petani') {
            $loggedAs = Session('loggedAs');
            $loggedUsername = Session('loggedUsername');

            $petaniID = DB::table('petani')
                -> where('username', $loggedUsername)
                -> select('id')
                -> first()
                -> id;

            DB::table('produk')
                -> where('id', $id)
                -> where('id_petani', $petaniID)
                -> delete();
        } 

        return redirect('/daftar-produk');

    }

    public function detailProduk($id){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'swalayan') {
            $loggedAs = Session('loggedAs');

            $produk = DB::table('produk')
                -> where('id', $id)
                -> select('id', 'id_petani', 'nama_produk', 'harga_produk', 'waktu_kadaluarsa', 'kategori_produk')
                -> first();

            $petani = DB::table('petani')
                -> where('id', $produk->id_petani)
                -> select('lokasi_kabupaten', 'lokasi_provinsi', 'lokasi_deskripsi')
                -> first();

            return view('produk.detail-produk', [
                "loggedAs" => $loggedAs,
                "produk" => $produk,
                "petani" => $petani
            ]);

        } 

        return redirect('/');
    }

}
