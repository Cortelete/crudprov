<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    use HasFactory;

    protected $fillable = ['sabor', 'tamanho', 'acompanhamento_id'];

    public function acompanhamento()
    {
        return $this->belongsTo(Acompanhamento::class);
    }
}
