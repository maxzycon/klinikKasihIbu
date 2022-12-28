<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryRs extends Model
{
    protected $fillable = ['end_time','start_time','jumlah_hari','max_queue','nama_kategori','rumah_sakit_id'];

    public function rumah_sakit()
    {
        return $this->belongsTo(RumahSakit::class);
    }
}
