<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Transaksi;
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
        
        $Booking = Booking::where('user_id', auth()->id())->get();
        // $lapangan = dataLapangan::orderBy('id','asc')->get();
        $transaksi= Transaksi::where('user_id', auth()->id())->get();

        // dd($Booking, $lapangan, $total, auth()->id(), substr($akhir,0,2));
        return view('boking.index',compact('Booking', 'transaksi'))
                ->with('i',(request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lapangan = dataLapangan::orderBy('id','asc')->simplePaginate(10);
        $jadwal = Booking::orderBy('id','asc')->simplePaginate(10);
        return view('boking.create',compact('lapangan','jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $awal = substr($request->awal, 0, 2);
        $akhir = substr($request->akhir, 0, 2);
        if($awal >= $akhir)
        {
            return redirect()->route('boking.create')->with('danger', 'ISI DATA YANG SESUAI!!!!!!');
        }
        // dd($request);
        $Booking = Booking::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'tanggal_booking' =>$request->tanggal_booking,
            'awal' => $request->awal,
            'akhir' => $request->akhir,
            'data_lapangan_id' => $request->data_lapangan_id,
            'pembayaran' => $request->pembayaran,
            'user_id' => auth()->id(),

        ]); 
        $awal = substr($Booking->awal, 0, 2);
        $akhir = substr($Booking->akhir, 0, 2);
        // dd($Booking->Lapangan);
        $total = ($akhir-$awal)*$Booking->Lapangan->harga;
        Transaksi::create([
            'user_id' => auth()->id(),
            'total' => $total,
            'booking_id'=>$Booking->id
        ]);
        return redirect()->route('boking.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        return view('boking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->back()
                         ->with('success', 'Booking Delete');
    }
}
