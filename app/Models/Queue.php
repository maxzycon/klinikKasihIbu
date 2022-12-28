<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = ['user_id','alasan','category_rs_id','isFinish','nomor_antrian','priority', 'tanggal_antrian'];

    protected static function  booted()
    {
        parent::boot();
        static::creating(function ($model){
            $model->nomor_antrian = Queue::where("tanggal_antrian", $model->tanggal_antrian)->where("category_rs_id", $model->category_rs_id)->max("nomor_antrian") + 1;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category_rs()
    {
        return $this->belongsTo(CategoryRs::class);
    }
}
