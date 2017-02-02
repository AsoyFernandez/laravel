<?php

use Illuminate\Database\Seeder;
use App\Telepon;
class TeleponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepon = new Telepon();
        $telepon->id_siswa = "1";
        $telepon->nomor_telepon = "089977654345";
        $telepon->save();

        $telepon = new Telepon();
        $telepon->id_siswa = "4";
        $telepon->nomor_telepon = "089867654345";
        $telepon->save();

        $telepon = new Telepon();
        $telepon->id_siswa = "5";
        $telepon->nomor_telepon = "081288654345";
        $telepon->save();

        $telepon = new Telepon();
        $telepon->id_siswa = "7";
        $telepon->nomor_telepon = "083875554345";
        $telepon->save();
    }
}
