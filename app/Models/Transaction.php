<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'id_transaction';
    protected $fillable = ['amount', 'id_product', 'count'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}