<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ["name", "tanggal_kunjungan", "start", "end", "user_id", "maps"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
