<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class RequestController extends Controller
{
    public function requestPetani(){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'petani') {
            return view('request.petani', [
                'loggedAs' => 'petani',
            ]);
        }else{
            return redirect('/');
        } 
    }

    public function requestSwalayan(){
        if (Session::has('loggedUsername') && Session('loggedAs') == 'swalayan') {
            return view('request.swalayan', [
                'loggedAs' => 'swalayan',
            ]);
        }else{
            return redirect('/');
        }
    }
}
