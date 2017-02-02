<?php

use Illuminate\Database\Seeder;
use App\Hobi;
class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobi = new Hobi();
        $hobi->nama_hobi = "Coding";
        $hobi->save();

        $hobi = new Hobi();
        $hobi->nama_hobi = "Mendaki";
        $hobi->save();

        $hobi = new Hobi();
        $hobi->nama_hobi = "Membaca";
        $hobi->save();

        $hobi = new Hobi();
        $hobi->nama_hobi = "Gaming";
        $hobi->save();
    }
}
