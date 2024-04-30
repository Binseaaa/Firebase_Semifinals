<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;

    public function team() {
        return $this->belongsTo(team::class);
    }

    public function stats() {
        return $this->hasMany(stat::class);
    }
}
