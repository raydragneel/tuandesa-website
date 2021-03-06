<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZakatPembagian extends Model
{
    protected $fillable = [
        'zakat_id',
        'user_id',
        'beras',
        'uang',
        'tipe'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function zakat()
    {
        return $this->belongsTo('App\Models\Zakat');
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
        ->diffForHumans();
    }
}
