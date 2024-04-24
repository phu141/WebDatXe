<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function KiemTraXacThuc(){
        $uid = Session::get('id');
        if(!$uid || $uid == ''){
            return Redirect::to('/dangnhap')->send();
        }
    }

    public function ViewPhanHoi(){
        $this->KiemTraXacThuc();
        return view('FormGuiMailPhanHoi');
    }

    public function PhanHoi(){
        $this->KiemTraXacThuc();

        $umail = Session::get('email');
        $content = $req->content; 
       
        // DB::table('users')->where('id', $uid)->update($data);
        
        return Redirect::to('/');
    }
}
