<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
        'abreviation'
    ];

protected $table = 'countries';
protected $primaryKey = 'id';
protected $keyType = 'int';
protected $incrementing = true;
}
