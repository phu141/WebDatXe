<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        // Feedback::all();
        $getFeedback = DB::table('feedback')->limit(4)->get(); // chỉ lấy 4 item
        return view('TrangChu')->with('getFeedback', $getFeedback);
    }    
}
