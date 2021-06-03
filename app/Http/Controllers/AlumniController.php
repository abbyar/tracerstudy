<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;
use App\Models\Jurusan;
use App\Models\User;



class AlumniController extends Controller
{
    
    public function index()
    {
        //$alumni = DB::table('alumni')->get();
        //dd($alumni);
        $alumni = Alumni::with('jurusan')->paginate(10);
        return view('alumni/index', ['alumni' => $alumni]);
    }

  
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('alumni/create',compact('jurusan'));
    }

    
    public function store(Request $request)
    {
                
        $request->validate([
            'status'=>'required',
            'nama'=>'required|regex:/^[\pL\s\-\.\,\']+$/u',
            'nim'=>'required|numeric|unique:users,nim|digits:10',
            'jurusan_id'=>'required',
            'perguruan_tinggi'=>'required',
            'tgl'=>'required|alpha_dash'
        ]);
        
        // $password = Hash::make($request->input('password'));

        Alumni::create([
            'status' => $request->input('status'),
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'jurusan_id' => $request->input('jurusan_id'),
            'perguruan_tinggi' => $request->input('perguruan_tinggi'),
            'tgl' => $request->input('tgl'),
            // 'password' => $password,
        ]);
        return redirect('alumni')->with('status','Data Alumni Berhasil Ditambahkan!');
    }

    
    public function show(Alumni $alumni)
    {
        //$password = Hash::make($alumni->password);
        return view('alumni/show', compact('alumni'));
        
    }

    
    public function edit(Alumni $alumni)
    {

        $jurusan = Jurusan::pluck('nama_jurusan','id');
        return view('alumni/edit', compact('alumni','jurusan',['jurusan'=>$jurusan]));
        
    }

    
    public function update(Request $request, Alumni $alumni)
    {

        $request->validate([
            'status'=>'required',
            'nama'=>'required|regex:/^[\pL\s\-\.\,\']+$/u',
            'nim'=>'required|numeric|digits:10',
            'jurusan_id'=>'required',
            'perguruan_tinggi'=>'required',
            'tgl'=>'required|alpha_dash'
        ]);

        Alumni::where('id', $alumni->id)
              -> update([
                    'status'=> $request->status,
                    'nama'=> $request->nama,
                    'nim'=> $request->nim,
                    'jurusan_id'=> $request->jurusan_id,
                    'perguruan_tinggi'=> $request->perguruan_tinggi,
                    'tgl'=> $request->tgl
              ]);
        return redirect('alumni')->with('status','Data Alumni Berhasil Diubah!');
    }

    
    public function destroy(Alumni $alumni)
    {
        // $alumni->delete();
        Alumni::destroy($alumni->id);
        return redirect('alumni')->with('status','Data Alumni Berhasil Dihapus!');
    }
}
