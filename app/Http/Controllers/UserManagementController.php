<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class UserManagementController extends Controller
{
    public function profil(){
        if (Session::has('loggedUsername')) {
            $loggedUsername = Session('loggedUsername');
            $loggedAs = Session('loggedAs');

            $datas = null;

            $datas = DB::table($loggedAs)
                -> where('username', $loggedUsername)
                -> select('nama', 'email', 'nomor_telpon', 'lokasi_provinsi', 'lokasi_kabupaten', 'lokasi_deskripsi')
                -> get();
                
            return view('userManagement.profile', [
                'loggedAs' => $loggedAs,
                'datas' => $datas[0]
            ]);
        }else{
            return redirect('/');
        }        
    }

    public function createChangePassword(){
        if (Session::has('loggedUsername')) {
            $loggedUsername = Session('loggedUsername');
            $loggedAs = Session('loggedAs');

            $datas = DB::table($loggedAs)
                -> where('username', $loggedUsername)
                -> select('nama', 'email', 'nomor_telpon', 'lokasi_provinsi', 'lokasi_kabupaten', 'lokasi_deskripsi')
                -> get();

            return view('userManagement.change-password', [
                'loggedAs' => $loggedAs,
                'datas' => $datas[0]
            ]);
        }else{
            return redirect('/');
        }
    }

    public function checkChangePassword(Request $request){
        $passwordBefore = $request['password_before'];
        $passwordAfter = $request['password_after'];

        $loggedUsername = Session('loggedUsername');
        $loggedAs = Session('loggedAs');

        $passwordDb = DB::table($loggedAs)
            -> where('username', $loggedUsername)
            -> select('password')
            -> get();

        $passwordDb = $passwordDb[0]->password;

        if($passwordDb == $passwordBefore){
            DB::table($loggedAs)
                -> where('username', $loggedUsername)
                -> update(['password' => $passwordAfter]);

                return redirect('/profile');
        }else{
            return redirect('/change-password');
        }
        
    }

    public function createChangeData(){
        if (Session::has('loggedUsername')) {
            $loggedUsername = Session('loggedUsername');
            $loggedAs = Session('loggedAs');

            $datas = DB::table($loggedAs)
                -> where('username', $loggedUsername)
                -> select('nama', 'email', 'nomor_telpon', 'lokasi_provinsi', 'lokasi_kabupaten', 'lokasi_deskripsi')
                -> get();

            return view('userManagement.change-data', [
                'loggedAs' => $loggedAs,
                'datas' => $datas[0]
            ]);
        }else{
            return redirect('/');
        }
    }

    public function checkChangeData(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $noHp = $request['noHp'];
        $lokasi_provinsi = $request['lokasi_provinsi'];
        $lokasi_kabupaten = $request['lokasi_kabupaten'];
        $lokasi_deskripsi = $request['lokasi_deskripsi'];

        $loggedUsername = Session('loggedUsername');
        $loggedAs = Session('loggedAs');

        DB::table($loggedAs)
            -> where('username', $loggedUsername)
            -> update([
                'nama' => $name,
                'email' => $email,
                'nomor_telpon' => $noHp,
                'lokasi_provinsi' => $lokasi_provinsi,
                'lokasi_kabupaten' => $lokasi_kabupaten,
                'lokasi_deskripsi' => $lokasi_deskripsi,
            ]);

        return redirect('/profile');
    }
    
}
