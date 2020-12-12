<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\NameProduct;
use App\Models\MeasureProduct;
use App\Models\DamperProduct;
use App\Models\MaterialProduct;
use Livewire\WithPagination;

class ProductosHcs extends Component
{
    use WithPagination;

    public

        $contador,
        $nam_id,
        $nam_product,
        $meas_id,
        $damp_id,
        $mat_id,
        $prod_id,
        $prod_stock;

    public $accion = "registrarProducto";

    public $search = '';

    public function render()
    {
        $products = Product::orderBy('prod_id', 'DESC')
            ->where('prod_stock', 'LIKE', "%{$this->search}%")
            ->paginate(10);

        $contador = Product::all();

        $names = NameProduct::all();

        $measures = MeasureProduct::all();

        $dampers = DamperProduct::all();

        $materials = MaterialProduct::all();

        return view('livewire.productos-hcs', compact('products', 'names', 'measures', 'dampers', 'materials', 'contador'));
    }

    public function registrarProducto()
    {
        Product::create([
            'nam_id' => $this->nam_id,
            'meas_id' => $this->meas_id,
            'damp_id' => $this->damp_id,
            'mat_id' => $this->mat_id,
            'prod_stock' => $this->prod_stock,
        ]);

        $this->reset([
            'nam_id',
            'meas_id',
            'damp_id',
            'mat_id',
            'prod_stock',
            'prod_id',
            'accion',
        ]);
    }

    public function editarProducto(Product $productos)
    {
        $this->nam_id = $productos->nam_id;
        $this->meas_id = $productos->meas_id;
        $this->damp_id = $productos->damp_id;
        $this->mat_id = $productos->mat_id;
        $this->prod_stock = $productos->prod_stock;

        $this->prod_id = $productos->prod_id;

        $this->accion = "actualizarProducto";
    }

    public function actualizarProducto()
    {
        $productos = Product::find($this->prod_id);

        $productos->update([
            'nam_id' => $this->nam_id,
            'meas_id' => $this->meas_id,
            'damp_id' => $this->damp_id,
            'mat_id' => $this->mat_id,
            'prod_stock' => $this->prod_stock
        ]);

        $this->reset([
            'nam_id',
            'meas_id',
            'damp_id',
            'mat_id',
            'prod_stock',
            'accion',
            'prod_id',
        ]);
    }

    public function limpiarProducto()
    {
        $this->reset([
            'nam_id',
            'meas_id',
            'damp_id',
            'mat_id',
            'prod_stock',
            'accion',
            'prod_id',
        ]);
    }

    public function eliminarProducto($prod_id)
    {
        Product::destroy($prod_id);
    }

    public function equis()
    {
        $this->search = '';
    }
}
