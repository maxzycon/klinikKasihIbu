<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $fillable = ['alamat_rs','descriptiton_rs','nama_rs','thumbnail_rs'];

    public function categoryRs()
    {
        return $this->hasMany(CategoryRs::class, 'rumah_sakit_id');
    }
}
