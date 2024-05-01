<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teg extends Model
{
    use HasFactory;
    protected $table = 'teg';
    protected $fillable = [
        'id',
        'teg_name'
    ];
}
