<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmesCinemas extends Model
{
    use HasFactory;

    protected $table      = 'dp_filmes_cinemas';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'id_filme',
        'id_cinema',
        'status_filme'
    ];
}