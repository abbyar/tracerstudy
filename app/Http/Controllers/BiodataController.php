<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Alumni;
use App\Models\Biodata;
use App\Models\User;


class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('alumni/biodata');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun_masuk'=>'required|numeric|digits:4',
            'tahun_lulus'=>'required|numeric|digits:4',
            'email'=>'required|email',
            'hp'=>'required|numeric|digits_between:10,13',
            'alamat'=>'required',
            'pekerjaan'=>'required',
            'tempat_bekerja'=>'required'
        ]);

        Biodata::create([
            'tahun_masuk' => $request->input('tahun_masuk'),
            'tahun_lulus' => $request->input('tahun_lulus'),
            'email' => $request->input('email'),
            'hp' => $request->input('hp'),
            'alamat' => $request->input('alamat'),
            'pekerjaan' => $request->input('pekerjaan'),
            'tempat_bekerja' => $request->input('tempat_bekerja'),
            
        ]);
        return redirect('alumni')->with('status','Data Alumni Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
