<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function XemTaiKhoan(){
        return view('XemTaiKhoan');
    }
    public function ViewSuaTaiKhoan(){
        return view('SuaTaiKhoan');
    }
    public function SuaTaiKhoan(Request $request){

        // form sua
        return Redirect('/taikhoan');
    }
}
