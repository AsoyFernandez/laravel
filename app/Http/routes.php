<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@homepage');

Route::get('about', 'PagesController@about');

Route::get('halaman-rahasia', [
	'as' => 'secret',
	'uses' => 'RahasiaController@halamanRahasia'
]);

Route::get('showmesecret', 'RahasiaController@showMeSecret');


	Route::get('siswa', 'SiswaController@index');

	Route::get('siswa/create', 'SiswaController@create');

	Route::get('siswa/{siswa}', 'SiswaController@show');

	Route::post('siswa', 'SiswaController@store');

	Route::get('siswa/{siswa}/edit', 'SiswaController@edit');

	Route::patch('siswa/{siswa}', 'SiswaController@update');

	Route::delete('siswa/{siswa}', 'SiswaController@destroy');


Route::get('sampledata', function(){
	DB::table('siswa')->insert([
		[
			'nisn'=> '1001',
			'nama_siswa' => 'Agus Yulianto',
			'tanggal_lahir' => '1997-02-09',
			'jenis_kelamin' => 'L',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1002',
			'nama_siswa' => 'Agus Hidayat',
			'tanggal_lahir' => '1997-01-11',
			'jenis_kelamin' => 'L',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1003',
			'nama_siswa' => 'Agus Hayat',
			'tanggal_lahir' => '1997-03-01',
			'jenis_kelamin' => 'L',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1004',
			'nama_siswa' => 'Rosmayanti',
			'tanggal_lahir' => '1997-02-05',
			'jenis_kelamin' => 'P',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1005',
			'nama_siswa' => 'Rosdiyanti',
			'tanggal_lahir' => '1997-02-10',
			'jenis_kelamin' => 'P',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1006',
			'nama_siswa' => 'Rosalia',
			'tanggal_lahir' => '1997-03-01',
			'jenis_kelamin' => 'P',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1007',
			'nama_siswa' => 'Ramdiyah',
			'tanggal_lahir' => '1997-02-05',
			'jenis_kelamin' => 'P',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1008',
			'nama_siswa' => 'Asoy',
			'tanggal_lahir' => '1997-04-25',
			'jenis_kelamin' => 'L',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1009',
			'nama_siswa' => 'Fernandez',
			'tanggal_lahir' => '1997-01-05',
			'jenis_kelamin' => 'L',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1010',
			'nama_siswa' => 'Gray',
			'tanggal_lahir' => '1997-02-15',
			'jenis_kelamin' => 'L',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
		[
			'nisn'=> '1011',
			'nama_siswa' => 'Scarlet',
			'tanggal_lahir' => '1997-10-05',
			'jenis_kelamin' => 'P',
			'created_at' => '2016-03-10 19:10:15',
			'updated_at' => '2016-03-10 19:10:15'
		],
	]);
});

Route::get('tes-collection', 'SiswaController@tesCollection');
Route::get('date-mutator', 'SiswaController@dateMutator');