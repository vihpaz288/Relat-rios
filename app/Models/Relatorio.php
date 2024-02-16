<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Relatorio extends Model
{
    use HasFactory;
    protected $fillable = [
        'topico_id',
        'titulo',
        'descrição'
    ];


    public function topico()
    {
        return $this->belongsTo(Topico::class, 'topico_id', 'id');
    }
}
