<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'number',
        'user_id',
        'date',
        'type',
        'status',
        'customer_id',
        'observation',
        'type_payments_id'

    ];

    protected $table = 'orders';

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function payment()
    {
        return $this->belongsTo(TypePayment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
