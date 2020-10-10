<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Artikel::class, 5)->create();
         $this->call (ArtikelTableSeeder::class);
    }
}
