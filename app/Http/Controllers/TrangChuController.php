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

    public function postDangKy(Request $request)
    {
        $this->validate($request,
            [
                'emailInputed' => 'unique:users,email',
                'phoneNumberInputed' => 'unique:users,phone'
            ],
            [
                'emailInputed.unique' => 'Email đã tồn tại!',
                'phoneNumberInputed.unique' => 'Số điện thoại đã tồn tại'
            ]
        );
        return redirect()->back();
    }

}
