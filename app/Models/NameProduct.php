<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameProduct extends Model
{
    use HasFactory;

    protected $primaryKey = 'nam_id';

    protected $table = 'name_products';

    protected $fillable = [
        'nam_id',
        'nam_product',
        'nam_codigo'
    ];

   /*  public function Product()
    {
        return $this->hasMany('App\Models\Product','prod_id','prod_id');
    } */

    public function Product()
    {
        return $this->belongsTo('App\Models\Product','prod_id','prod_id');
    }
}
