<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class respuesta extends Model
{
    use HasFactory;

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function correo()
    {
        return $this->belongsTo('App\Models\correo');
    }

    public function pregunta()
    {
        return $this->belongsTo('App\Models\pregunta');
    }
}
