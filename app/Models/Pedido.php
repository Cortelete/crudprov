<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['pastel_id', 'acompanhamento_id'];

    public function pastel()
    {
        return $this->belongsTo(Pastel::class);
    }
    
    public function acompanhamento()
    {
        return $this->belongsTo(Acompanhamento::class);
    }
    
}
