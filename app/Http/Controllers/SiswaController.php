<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\siswa;
use Illuminate\Support\Facades\Session;
//use Validator;
use App\Telepon;
use App\Kelas;
use App\Hobi;
use App\Http\Requests\SiswaRequest;
use storage;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa_list = siswa::orderBy('nisn', 'asc')->Paginate(8);
        $siswa_all = siswa::all()->count();
        $jumlah_siswa = $siswa_list->lastItem('nama_siswa');
        return view('siswa.index', compact('siswa_list','jumlah_siswa', 'siswa_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected $request;

    public function __construct(Request $req)
    {
        $this->request = $req;
    }
    
    public function store(SiswaRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        $siswa = siswa::create($input);

        //Insert data telepon
        $telepon = new Telepon;

        $telepon->nomor_telepon = $request->input('nomor_telepon');
        
        if($request->nomor_telepon !=null) {
            $siswa->telepon()->save($telepon);
        }

        $siswa->hobi()->attach($request->input('hobi_siswa'));

        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dateMutator(){
        $siswa = siswa::findOrFail(1);
        $str = 'Tanggal Lahir : ' . 
        $siswa->tanggal_lahir->format('d-M-Y');

        return $str; 
    }

    public function show(siswa $siswa)
    {
        return view('siswa.show', compact('halaman' ,'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        if ($siswa->nomor_telepon == null){
            $siswa->nomor_telepon == "Tidak ada";
        return view('siswa.edit', compact('siswa'));
        }else{
            return view('siswa.edit', compact('siswa'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(siswa $siswa, SiswaRequest $request)
    {
        $input = $request->all();

        //Cek apakah ada foto Baru
        if ($request->hasFile('foto')) {
            //Hapus Foto lama jika ada foto baru
            $this->hapusFoto($siswa);
            
            //Upload foto baru
            $input['foto'] = $this->uploadFoto($request);
            }



        $siswa->update($input);

        $telepon = $siswa->telepon;
        $telepon->nomor_telepon = $input('nomor_telepon');
        $siswa->telepon()->save($telepon);

        $siswa->hobi()->sync($request->input('hobi_siswa'));
        
        return redirect('siswa');
    }

    private function uploadFoto(SiswaRequest $request) {
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid) {
            $foto_name = date('YmdHis'). ".$ext";
            $upload_path = 'fotoupload';
            $request->file('foto')->move($upload_path, $foto_name);

            return $foto_name;
        }

        return false;
    }

    private function hapusFoto(siswa $siswa){
        $exist = Storage::disks('foto')->exists($siswa->foto);

        if (isset($siswa->foto) && $exist) {
            $delete = Storage::disks('foto')->delete($siswa->foto);
            if ($delete) {
                return true;
            }
            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $this->hapusFoto($siswa);
        $siswa->delete();
        return redirect('siswa');
    }

    public function tesCollection(){
        $data = [
            ['nisn' => '1001', 'nama_siswa' => 'Agus Yulianto'],
            ['nisn' => '1002', 'nama_siswa' => 'Agus Hidayat'],
            ['nisn' => '1003', 'nama_siswa' => 'Agus Hayat'],
        ];
        $koleksi = collect($data);
        $koleksi->toJson();
        return $koleksi;
    }
}
