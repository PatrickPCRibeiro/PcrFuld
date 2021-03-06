<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'seq',
        'order_id',
        'product_id',
        'quantity',
        'value',
        'discount',
        'perc_discount'

    ];

    protected $table = 'orders_items';
    protected $primaryKey = 'seq';
    protected $keyType = 'int';    
    public $incrementing = true;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }



}
