<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{
    use HasFactory;

    protected $table      = 'cinemas';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'nome_cinema',
        'uf_cinema',
        'rua_cinema',
        'status_cinema',
    ];
}
