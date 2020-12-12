<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_name',
        'work_ape_paterno',
        'work_ape_materno',
        'work_doc_identidad',
        'job_id',
        'work_celular',
        'work_correo',
        'work_direccion'
    ];

    public function job()
    {
        return $this->belongsTo(jobs::class);

    }
  
  
}
