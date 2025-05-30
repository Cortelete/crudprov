<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acompanhamento extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function pasteis()
    {
        return $this->hasMany(Pastel::class);
    }
}
