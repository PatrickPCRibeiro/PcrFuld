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
    //protected $primaryKey = 'id';
    public $incrementing = true;

    public function alternativeunit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AlternativeUnit::class);
    }

    public function bulk(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bulk::class);
    }
}
