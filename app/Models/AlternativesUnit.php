<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativesUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'bulk_slug',
        'quantity',
        'divide_or_multiply'

    ];

    protected $table = 'alternatives_units';
    protected $keyType = 'int';
    public $incrementing = true;

    public function bulk() {
        return $this->belongsTo(Bulk::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
