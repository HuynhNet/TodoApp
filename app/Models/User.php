<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\This;
use function Symfony\Component\Translation\t;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    const TABLE_NAME = 'user';

    protected $table = 'users';
    protected $fillable = [
        'ma_quyen',
        'ma_trang_thai',
        'username',
        'password',
        'phone',
        'email',
        'birthday',
        'gender'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function add(User $user) {
        $user->save();
    }

    public static function isEmailExisted($email) {
        return DB::table(User::TABLE_NAME)->where('email', $email)->exists();
    }

    public static function updatePassword($email, $password) {
        DB::table(User::TABLE_NAME)
            ->where('email', $email)
            ->update(['password' => Hash::make($password)]);
    }
}
