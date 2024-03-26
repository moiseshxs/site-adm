<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    protected $table = 'admin';
    protected $fillable = ['email', 'senha'];
}
