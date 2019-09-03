<?php

// use UserTableSeeder;
// use ProductoTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        // $this->call(ProductoTableSeeder::class);
        factory('App\Producto', 5)->create();
        factory('App\Proveedor', 5)->create();
        factory('App\Client', 5)->create();
    }
}
