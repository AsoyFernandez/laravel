<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(SiswasSeeder::class);
        //$this->call(TeleponsSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(HobiSeeder::class);
    }
}
