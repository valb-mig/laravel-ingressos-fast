<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    use HasFactory;

    protected $table      = 'tb_filmes';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'nome_filme',
        'status_filme'
    ];
}