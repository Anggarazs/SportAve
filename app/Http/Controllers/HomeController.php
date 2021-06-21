<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\dataLapangan;
use App\Models\Booking;
use DB;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datalapangans = dataLapangan::orderBy('id','asc')->simplePaginate(3);
        $jadwal = Booking::orderBy('id','asc')->simplePaginate(10);
        return view('home',compact('datalapangans','jadwal'))
            ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function show(dataLapangan $datalapangan)
    {
        return view('home',compact('datalapangan'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function adminHome()
     {
        $count = DB::table('users')->count();
        $lapangan = DB::table('data_lapangans')->count();
        $boking = DB::table('bookings')->count();
        return view('adminHome',compact('count','lapangan','boking'));
     }
     
 }