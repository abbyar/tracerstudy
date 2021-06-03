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
use Auth;

class LoginController extends Controller
{
    public function login (Request $request){

        $request->validate([
            'nim'=>'required|numeric|digits:10|exists:users,nim',
            'tgl'=>'required|alpha_dash|exists:users,tgl'
        ]);

        // if(Auth::attempt($request->only('nim','password')) ){
        // return redirect('/kuesioner');
        //  }
    
        // return redirect('login');

        $user = User::where([
            'nim' => $request->nim, 
            'tgl' => $request->tgl
        ])->first();
        
        if($user)
        {
            Auth::login($user);
            return redirect('/kuesioner');
            // return redirect()->route('account');
        }
        return redirect('login');

    }

    public function nim(){
        return 'nim';
      }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
        
    }

}
