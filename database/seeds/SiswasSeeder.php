<?php

use Illuminate\Database\Seeder;
use App\siswa;
class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$siswa = new siswa();
        	$siswa->nisn = "1001";
        	$siswa->nama_siswa = "Agus Yulianto";
        	$siswa->tanggal_lahir = "1997-02-09";
        	$siswa->jenis_kelamin = "L";
        	$siswa->save();

        	$siswa = new siswa();
        	$siswa->nisn = "1002";
        	$siswa->nama_siswa = "Agus Hidayat";
        	$siswa->tanggal_lahir = "1997-01-11";
        	$siswa->jenis_kelamin = "L";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1003";
        	$siswa->nama_siswa = "Agus Hayat";
        	$siswa->tanggal_lahir = "1997-03-01";
        	$siswa->jenis_kelamin = "L";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1004";
        	$siswa->nama_siswa = "Rosmayanti";
        	$siswa->tanggal_lahir = "1997-02-05";
        	$siswa->jenis_kelamin = "P";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1005";
        	$siswa->nama_siswa = "Rosdiyanti";
        	$siswa->tanggal_lahir = "1997-02-10";
        	$siswa->jenis_kelamin = "P";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1006";
        	$siswa->nama_siswa = "Rosalia";
        	$siswa->tanggal_lahir = "1997-03-01";
        	$siswa->jenis_kelamin = "P";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1007";
        	$siswa->nama_siswa = "Ramdiyah";
        	$siswa->tanggal_lahir = "1997-02-05";
        	$siswa->jenis_kelamin = "P";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1008";
        	$siswa->nama_siswa = "Asoy";
        	$siswa->tanggal_lahir = "1997-04-25";
        	$siswa->jenis_kelamin = "L";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1009";
        	$siswa->nama_siswa = "Fernandez";
        	$siswa->tanggal_lahir = "1997-01-05";
        	$siswa->jenis_kelamin = "L";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1010";
        	$siswa->nama_siswa = "Gray";
        	$siswa->tanggal_lahir = "1997-02-15";
        	$siswa->jenis_kelamin = "L";
        	$siswa->save();
        	
        	$siswa = new siswa();
        	$siswa->nisn = "1011";
        	$siswa->nama_siswa = "Scarlet";
        	$siswa->tanggal_lahir = "1997-10-05";
        	$siswa->jenis_kelamin = "P";
        	$siswa->save();
        	
    }
}
