<?php

namespace App\Models;

use Carbon\Carbon;
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
        'descrição',
        'situacao'
    ];


    public function topico()
    {
        return $this->belongsTo(Topico::class, 'topico_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function verificaPrazo()
    {
        // 1 = concluido
        // 2 = atrazo
        // 3 = no prazo
        if($this->situacao != null){
            return 1;
        }elseif($this->tempo <= Carbon::yesterday()->format('Y-m-d')){
            return 2;
        }elseif($this->tempo >= Date('Y-m-d')){
            return 3;
        }
    }
}
