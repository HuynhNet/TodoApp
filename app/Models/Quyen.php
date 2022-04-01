<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quyen extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_quyen'
    ];

    public static $USER_ROLE = 'user';
    public static $ADMIN_ROLE = 'Admin';

    public static function getIdByName($roleName) {
        return DB::table('quyens')->where('ten_quyen', '=', $roleName)->first();
    }
}
