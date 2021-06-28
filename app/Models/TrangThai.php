<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TrangThai extends Model
{
    use HasFactory;

    public function getIdByName($statusName) {
        return DB::table('trang_thais')->where('ten_trang_thai', '=', $statusName)->first();
    }
}
