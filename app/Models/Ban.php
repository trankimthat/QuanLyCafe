<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    use HasFactory;
    protected $table = 'bans';

    protected $fillable = [
        'ma_ban',
        'id_don_hang',
        'is_open',
    ];
}
