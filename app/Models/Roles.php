<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table      = 'tb_roles';
    protected $primaryKey = 'id';
    public    $timestamps = true;

    protected $fillable = [
        'role'
    ];
}
