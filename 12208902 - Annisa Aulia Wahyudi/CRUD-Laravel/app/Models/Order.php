<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medicines',
        'name_customer',
        'total_price',
    ];

    // penegasan tipe data dari migration (hasil property ini ketika diambil atau diinsert/update dibuat dalam bentuk tipe data apa)
    protected $casts = [
        'medicines' => 'array',
    ];

    public function user()
    {
        // menghubungkan ke primary key nya
        // dalam kurung merupakan nama model tempat penyimpanan dari pk nya di fk yng ada id model ini
        return $this->belongsTo(User::class);
    }
}
