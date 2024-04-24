<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\TuyenXe;
use Session;
use Illuminate\Support\Facades\Redirect;

class CalendarController extends Controller
{
    public function KiemTraXacThuc(){
        $uid = Session::get('id');
        if(!$uid || $uid == ''){
            return Redirect::to('/dangnhap')->send();
        }
    }

    public function LichDatXe(){
        $this->KiemTraXacThuc();

        //$query = TuyenXe::all();
        return view('LichDatXe');
    }

    public function GetData(Request $req){ // form POST
        $ngaydat = $req->ngaydat;  // 1
        $mangDuLieu = array();
        $query = TuyenXe::find($ngaydat);
        // $query =  TuyenXe::where('ngaydat', $ngaydat)->get();

        if($query){
            // $DDQuery = $query->DiemDau;
            // $DCQuery = $query->DiemCuoi;
            // $KHQuery = $query->KhuHoi;
            // $GVQuery = $query->GiaVe;
            $mangDuLieu = [
                'DDQuery' =>  $query->DiemDau,
                'DCQuery' =>  $query->DiemCuoi,
                'KHQuery' =>  $query->KhuHoi,
                'GVQuery' => $query->GiaVe,
                ];
        }
        return Redirect::to('/lichdatxe')->with($mangDuLieu);
    }
}
