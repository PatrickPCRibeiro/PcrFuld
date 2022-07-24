<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',


    ];

    protected $table = 'stock_locations';
    protected $primaryKey = 'id';
    protected $keyType = 'int';    
    public $incrementing = true;


    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

}
