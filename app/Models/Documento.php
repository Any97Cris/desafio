<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documento';
    protected $primaryKey = 'Id';
    protected $fillable = ['NroDocumento','Titulo','DescDocumento','DataDocumento','PathArquivoPDF','TipoDocumento_Id'];

    public $timestamps = false;

}
