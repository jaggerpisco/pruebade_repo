<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'nombre'
    ];

    public function workers()
    {
        return $this-> hasMany(worker::class);

    }



}
