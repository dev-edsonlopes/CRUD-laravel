<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable=[
        'title',
        'id_user',
        'pages',
        'price',
        'id_user'
    ];

    // Criando relação de 1:1
    public function relUsers() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
