<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quyen extends Model
{
    use HasFactory;

    public function getIdByName($roleName) {
        return DB::table('quyens')->where('ten_quyen', '=', $roleName)->first();
    }
}
