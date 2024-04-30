<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stat extends Model
{
    use HasFactory;

    public function game() {
        return $this->belongsTo(game::class);
    }

    public function player() {
        return $this->belongsTo(player::class);
    }
}
