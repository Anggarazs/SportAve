<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\dataLapangan;
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
        $datalapangans = dataLapangan::orderBy('id','asc')->simplePaginate(3);
        return view('home',compact('datalapangans'))
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