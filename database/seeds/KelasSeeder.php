<?php

use Illuminate\Database\Seeder;
use App\Kelas;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = "X-1";
        $kelas->save();

        $kelas = new Kelas();
        $kelas->nama_kelas = "X-2";
        $kelas->save();    

        $kelas = new Kelas();
        $kelas->nama_kelas = "X-3";
        $kelas->save();
    }
}
