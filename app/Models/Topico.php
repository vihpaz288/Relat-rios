<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'titulo'
    ];


    public function relatorio()
    {
        return $this->hasMany(relatorio::class, 'topico_id', 'id');
    }
    public function topico()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
