<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'supplier',
        'quantity',
        'weight',
        'value',
    ];
}
