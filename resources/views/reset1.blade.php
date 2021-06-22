<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\dataLapangan;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class BokingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $lapangan = dataLapangan::with('users','data_lapangans')->simplePaginate(10);
        return view('boking.index',compact('lapangan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('boking.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'nama_akomodasi'=> ['required'],
            'alamat_akomodasi' => ['required'],
            'kontak_akomodasi' => ['required'],
        ]);
 
        Akomodasi::create($request->all());
 
        return redirect()->route('akomodasis.index')
                        ->with('success','Akomodasi created successfully.');
    }
    
}
