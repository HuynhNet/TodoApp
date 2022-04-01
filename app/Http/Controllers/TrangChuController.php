<?php

namespace App\Http\Controllers;
use App\Models\Quyen;
use App\Models\TrangThai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $user = new User();

        $roleId = Quyen::getIdByName(Quyen::$USER_ROLE);
        $statusId = TrangThai::getIdByName(TrangThai::$NORMAL);

        $user->ma_quyen = $roleId->id;
        $user->ma_trang_thai = $statusId->id;
        $user->username = $request->input('userNameInputed');
        $user->password = bcrypt($request->input('passwordInputed'));
        $user->phone = $request->input('phoneNumberInputed');
        $user->email = $request->input('emailInputed');
        $user->birthday = $request->input('birthdayInputed');
        $user->gender = $request->input('genderInputed');

        User::add($user);

        $add_user_success = Session::get('add_user_success');
        Session::put('add_user_success');

        session()->put('addUserSuccess', 'Đăng ký tài khoản thành công');
        return redirect()->route('getLogin');
    }

    public function postLogin(Request $request) {
        $email = $request->input('email-login');
        $password = $request->input('password-login');

        if($this->isAdminUserAuthenticated($email, $password)) {
        } elseif ($this->isNormalUserAuthenticated($email, $password)) {
            return redirect()->route('getHome');
        } else {
            session()->put('loginFail', 'Email hoặc mật khẩu của bạn không đúng!');
            return redirect()->back();
        }
    }

    private function isAuthenticated($email, $password, $roleId) {
        return Auth::attempt(['email' => $email, 'password' => $password, 'ma_quyen' => $roleId]);
    }

    private function isNormalUserAuthenticated($email, $password) {
        return $this->isAuthenticated($email, $password, Quyen::$USER_ROLE);
    }

    private function isAdminUserAuthenticated($email, $password) {
        return $this->isAuthenticated($email, $password, Quyen::$ADMIN_ROLE);
    }

}
