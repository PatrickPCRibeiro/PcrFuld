<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'

    ];

    protected $table = 'districts';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
}
