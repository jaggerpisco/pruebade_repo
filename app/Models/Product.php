<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'prod_id';

    protected $table = 'products';

    protected $fillable = [
        'prod_id',
        'nam_id',
        'meas_id',
        'damp_id',
        'mat_id',
        'prod_stock',
    ];

    public function NameProduct()
    {
        return $this->belongsTo('App\Models\NameProduct', 'nam_id', 'nam_id');
    }

    public function MeasureProduct()
    {
        return $this->belongsTo('App\Models\MeasureProduct', 'meas_id', 'meas_id');
    }

    public function DamperProduct()
    {
        return $this->belongsTo('App\Models\DamperProduct', 'damp_id', 'damp_id');
    }

    public function MaterialProduct()
    {
        return $this->belongsTo('App\Models\MaterialProduct', 'mat_id', 'mat_id');
    }
}
