<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function KiemTraXacThuc(){
        $uid = Session::get('id');
        if(!$uid || $uid == ''){
            return Redirect::to('/dangnhap')->send();
        }
    }

    public function XemTaiKhoan(){
        $this->KiemTraXacThuc();
        return view('XemTaiKhoan');
    }

    public function ViewSuaTaiKhoan(){
        $this->KiemTraXacThuc();
        return view('SuaTaiKhoan');
    }

    public function SuaTaiKhoan(Request $req){
        $this->KiemTraXacThuc();
        $uid = Session::get('id');
        $data = array();
        $data['email'] = $req->email; 
        $data['password'] = $req->password; 

        DB::table('users')->where('id', $uid)->update($data);
        return Redirect('/taikhoan');
    }
}
