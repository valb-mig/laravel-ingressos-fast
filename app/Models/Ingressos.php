<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingressos extends Model
{
    use HasFactory;

    protected $table      = 'tb_ingressos';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'id_filme',
        'id_assento',
        'id_sala',
        'id_cinema',
        'validade_ingresso',
        'hora_entrada',
    ];
}