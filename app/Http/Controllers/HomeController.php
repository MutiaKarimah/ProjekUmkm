<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function coba()
    {
        return view('coba');
    }
    public function tambah()
    {
        $res['umkm'] = DB::table('umkm')->get();
        return view('tambah', $res);
    }

    public function store(Request $request)
    {
        
           // 'keterangan' => 'required',
        DB::table('umkm')->insert([
            'id_umkm' => $request->id_umkm,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nama_umkm' => $request->nama_umkm,
            'jenis_umkm' => $request->jenis_umkm,
            'desc' => $request->desc,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'detail' => $request->detail,
          //  'latitude' => $request->lat,
            //'longitude' => $requet->lng
        ]);
        $this->validate($request, [
            'file1' => '',
            'file2' => '',
            'file3' => '',
            'file4' => '',
            'file5' => '',
        ]);

        $file1 = $request->file('file1');
        $file2 = $request->file('file2');
        $file3 = $request->file('file3');
        $file4 = $request->file('file4');
        $file5 = $request->file('file5');

                // nama file
        echo 'File Name: '.$file1->getClientOriginalName();
        echo '<br>';

                // ekstensi file
        echo 'File Extension: '.$file1->getClientOriginalExtension();
        echo '<br>';
        

                // real path
        echo 'File Real Path: '.$file1->getRealPath();
        echo '<br>';
        

                // ukuran file
        echo 'File Size: '.$file1->getSize();
        echo '<br>';
        

                // tipe mime
        echo 'File Mime Type: '.$file1->getMimeType();
        

                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

                // upload file
        $file1->move($tujuan_upload,$file1->getClientOriginalName());
        
        
        return redirect('/verif');

    }
    public function edit()
    {

        $res['data'] = DB::table('umkm')->where('id_umkm')->get();
       
        return view('/edit',$res);
    }
    public function update(Request $request)
    {
        DB::table('umkm')->where('id_umkm',$request->id_umkm)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nama_umkm' => $request->nama_umkm,
            'jenis_umkm' => $request->jenis_umkm,
            'desc' => $request->desc,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'detail' => $request->detail,
            'latitude' => $request->lat,
            'longitude' => $requet->lng
        ]);
        return redirect('/welcome');
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

                // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

                // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

                // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

                // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

                // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
    public function verif()
    {
        return view('verif');
    }
    public function sukses()
    {
        return view('sukses');
    }
}
