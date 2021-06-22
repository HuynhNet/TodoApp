<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TrangChuController extends Controller {

    public function getHome() {
        return view('webpage.trangchu');
    }

    public function getLogin() {
        return view('webpage.login');
    }

    public function getRegister(){
        return view('webpage.dangky');
    }

    public function postDangKy()
    {
        return "sgdfghsd";
    }

}
