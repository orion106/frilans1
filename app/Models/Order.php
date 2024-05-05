<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'id',
        'name_order',
        'requirements',
        'description_order',
        'FK_Customer',
        'FK_Executor',
        'status'
    ];
    public function tagsist()
    {
        return $this ->belongsToMany(TegList::class, 'teg_list','FK_order','FK_teg');
    }
}
