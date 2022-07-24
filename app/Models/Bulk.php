<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name'
    ];

    /**
     * @param array $with
     */
    public function setWith(array $with): void
    {
        $this->with = $with;
    }

    // para proteger a tabela//
    protected $table = 'bulks';

    // definindo que a chave primária é o campo slug
    protected $primaryKey = 'slug';

    // definindo que o tipo da chave primária é uma string
    protected $keyType = 'string';

    // definindo que o laravel não deve incrementar automaticamente
    public $incrementing = false;

}
