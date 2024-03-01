<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Relatorio extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'topico_id',
        'titulo',
        'tempo',
        'descrição'
    ];


    public function topico()
    {
        return $this->belongsTo(Topico::class, 'topico_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
