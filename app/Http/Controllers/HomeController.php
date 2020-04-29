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
        DB::table('umkm')->insert([
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
        ]);
        return redirect('/tambah');

    }
}
