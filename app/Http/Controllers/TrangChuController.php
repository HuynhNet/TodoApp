<?php

namespace App\Http\Controllers;
use App\Enums\RouterConstants;
use App\Enums\SessionConstants;
use App\Enums\SessionMessage;
use App\Models\Quyen;
use App\Models\TrangThai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
                'emailInputed.unique' => trans('validation.unique', ['attribute' => 'email']),
                'phoneNumberInputed.unique' => trans('validation.unique', ['attribute' => 'phone number'])
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

        session()->put(SessionConstants::registerSuccess, trans('session.'.SessionMessage::registerSuccessMessage));

        return redirect()->route(RouterConstants::getLogin);
    }

    public function postLogin(Request $request) {
        $email = $request->input('email-login');
        $password = $request->input('password-login');

        if($this->isAdminUserAuthenticated($email, $password)) {
            return "";
        } elseif ($this->isNormalUserAuthenticated($email, $password)) {
            return redirect()->route(RouterConstants::getHome);
        } else {
            session()->put(SessionConstants::loginFail, trans('session.'.SessionMessage::loginFailMessage));
            return redirect()->back();
        }
    }

    public function renderForgotPasswordPage() {
        return view('webpage.forgot-password');
    }

    public function changePassword(Request $request) {
        $hasRegisteredEmail = $request->input('hasRegisteredEmail');
        $isEmailExisted = User::isEmailExisted($hasRegisteredEmail);
        if($isEmailExisted) {
            $newPassword = $request->input('newPassword');
            $confirmNewPassword = $request->input('confirmNewPassword');

            if($this->isCorrectPassword($newPassword, $confirmNewPassword)) {
                User::updatePassword($hasRegisteredEmail, $newPassword);
                session()->put(SessionConstants::changePasswordSuccess, trans('session.'.SessionConstants::changePasswordSuccess));
                return redirect()->route(RouterConstants::getLogin);
            }

            session()->put(SessionConstants::confirmPasswordFail, trans('session.'.SessionConstants::confirmPasswordFail));
            return redirect()->back();
        }
        session()->put(SessionConstants::notExistedEmail, trans('session.'.SessionConstants::notExistedEmail));
        return redirect()->back();
    }

    private function isCorrectPassword($newPassword, $newConfirmPassword) {
        return $newPassword == $newConfirmPassword;
    }

    private function isNormalUserAuthenticated($email, $password) {
        return $this->isAuthenticated($email, $password, Quyen::getIdByName(Quyen::$USER_ROLE)->id);
    }

    private function isAdminUserAuthenticated($email, $password) {
        return $this->isAuthenticated($email, $password, Quyen::getIdByName(Quyen::$ADMIN_ROLE)->id);
    }

    private function isAuthenticated($email, $password, $roleId) {
        return Auth::attempt(['email' => $email, 'password' => $password, 'ma_quyen' => $roleId]);
    }
}
