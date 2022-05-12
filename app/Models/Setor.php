<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setor';
    protected $primaryKey = 'Id';
    protected $fillable = ['Sigla', 'DescSetor'];

    public $timestamps = false;

}
