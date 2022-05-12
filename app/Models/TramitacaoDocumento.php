<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TramitacaoDocumento extends Model
{
    use HasFactory;

    protected $table = 'TramitacaoDocumento';
    protected $primaryKey = 'Id';
    protected $fillable = ['Documento_Id','Setor_Envio_Id','DataHoraEnvio','DataHoraRecebido','Setor_Recebe_Id'];

    public $timestamps = false;
}
