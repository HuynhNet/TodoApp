<?php

namespace App\Http\Controllers;
use App\Models\Quyen;
use App\Models\TrangThai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        $userModel = new User();
        $user = new User();

        $quyenModel = new Quyen();
        $roleId = $quyenModel->getIdByName('user');

        $trangThaiModel = new TrangThai();
        $statusId = $trangThaiModel->getIdByName('normal');

        $user->ma_quyen = $roleId->id;
        $user->ma_trang_thai = $statusId->id;
        $user->username = $request->input('userNameInputed');
        $user->password = bcrypt($request->input('passwordInputed'));
        $user->phone = $request->input('phoneNumberInputed');
        $user->email = $request->input('emailInputed');
        $user->birthday = $request->input('birthdayInputed');
        $user->gender = $request->input('genderInputed');

        $userModel->add($user);

        Session::put('add_user_success', 'Đăng ký tài khoản thành công');
        return redirect()->route('getLogin')->with('add_user_success');
    }

}
