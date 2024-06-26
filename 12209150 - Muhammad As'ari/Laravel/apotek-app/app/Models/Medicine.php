<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    // properti untuk menyimpan nama2 column yg bs diisi valuenya
    protected $fillable = [
     'type',
     'name',
     'price',
     'stock'
    ];
}
