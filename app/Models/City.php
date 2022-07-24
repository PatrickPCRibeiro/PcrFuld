<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
protected $fillable = [
'id',
'name',
'uf_id'

];

protected $table = 'cities';
protected $primaryKey = 'id';
protected $keyType = 'int';
public $incrementing = true;


}
