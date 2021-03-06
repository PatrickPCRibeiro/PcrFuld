<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'id',
    'name',
    'category_id'
];

    protected $table = 'categories';

    protected $keyType = 'int';
    protected $primaryKey = 'id';
    public $incrementing = true;


    public function product() {
        return $this->hasMany(Product::class);
    }

    public function children() {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function father() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


}
