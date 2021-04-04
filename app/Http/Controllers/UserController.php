<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;


class UserController extends Controller
{
    public function createLogin(){
        if (Session::has('loggedUsername')) {
            $username = Session::get('loggedUsername');
            $loggedAs = Session::get('loggedAs');

            return redirect('/');
        }

        return view('users.login');
    }

    public function checkLogin(Request $request){
        $petani = DB::table('petani')
                    -> where('email', $request['email'])
                    -> where('password', $request['pass'])
                    -> first();

        $swalayan = DB::table('swalayan')
                    -> where('email', $request['email'])
                    -> where('password', $request['pass'])
                    -> first();


        if($petani || $swalayan){
            $data = $petani ? $petani : $swalayan;
            $request->session()->put('loggedUsername', $data->username);
            $request->session()->put('loggedAs', $petani ? "petani" : "swalayan");

            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public function createDaftar(){
        if (Session::has('loggedUsername')) {
            $username = Session::get('loggedUsername');
            $loggedAs = Session::get('loggedAs');

            return redirect('/');
        }

        return view('users.daftar');
    }

    public function createDaftarPetani(){
        return view('users.daftar-petani');
    }

    public function checkDaftarPetani(Request $request){
        DB::table('petani')->insert([
            'nama' => $request['nama'],
            'username' => $request['username'],
            'password' => $request['password'],
            'email' => $request['email'],
            'nomor_telpon' => $request['noHp'],
            'lokasi_provinsi' => $request['lokasi_provinsi'],
            'lokasi_kabupaten' => $request['lokasi_kabupaten'],
            'lokasi_deskripsi' => $request['lokasi_deskripsi'],

            //! example
            'foto_profil' => 'a',
        ]);

        $request->session()->put([
            'loggedUsername' => $request['username'],
            'loggedAs' => 'petani'
        ]);

        return redirect('/');
    }

    public function createDaftarSwalayan(){
        return view('users.daftar-swalayan');
    }

    public function checkDaftarSwalayan(Request $request){
        DB::table('swalayan')->insert([
            'nama' => $request['nama'],
            'username' => $request['username'],
            'password' => $request['password'],
            'email' => $request['email'],
            'nomor_telpon' => $request['noHp'],
            'lokasi_provinsi' => $request['lokasi_provinsi'],
            'lokasi_kabupaten' => $request['lokasi_kabupaten'],
            'lokasi_deskripsi' => $request['lokasi_deskripsi'],

            //! example
            'foto_profil' => 'a',
        ]);

        $request->session()->put([
            'loggedUsername' => $request['username'],
            'loggedAs' => 'swalayan'
        ]);

        return redirect('/');
    }


    public function logout(){
        if(Session('loggedUsername')){
            Session::forget(['loggedUsername', 'loggedAs']);
        }

        return redirect('/');
    }
}
