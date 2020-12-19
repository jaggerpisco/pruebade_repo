<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Jobs;
use \App\Models\MaterialProduct;
use \App\Models\MeasureProduct;
use \App\Models\NameProduct;
use \App\Models\Product;
use \App\Models\Worker;
use \App\Models\DamperProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        //Jobs::factory(5)->create();
        Worker::factory(50)->create();
        /*NameProduct::factory(7)->create();
        MeasureProduct::factory(5)->create();
        DamperProduct::factory(2)->create();
        MaterialProduct::factory(3)->create();
        Product::factory(10)->create(); */
    }
}
