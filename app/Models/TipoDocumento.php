<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipoDocumento';
    protected $primaryKey = 'Id';
    protected $fillable = ['DescTipoDocumento'];

    public $timestamps = false;

}
