<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    use HasFactory;
    protected $fillable = [
        'Ttulo'
    ];


    public function relatorio()
    {
        return $this->hasMany(relatorio::class, 'topico_id', 'id');
    }
}
