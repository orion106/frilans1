<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TegList extends Model
{
    use HasFactory;
    protected $table = 'teg_list';
    protected $fillable = [
        'id',
        'FK_order',
        'FK_teg',
    ];
}
