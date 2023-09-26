<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KapalModel extends Model
{
    use HasFactory;

    protected $table = 'kapal';
    protected $guarded = ['id'];
    
    public function keperluan()
    {
        return $this->hasOne(Details::class, 'id_kapal');
    }

    public function penjadwalan()
    {
        return $this->hasOne(Schedule::class, 'id_kapal');
    }
}
