<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\dataLapangan;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Booking= Booking::orderBy('id','asc')->simplePaginate(10);
        return view('adminboking.index',compact('Booking'))
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'total' => ['required'],
            'bukti'=> ['required'],
        ]);
        $nm = $request->bukti;
        $namafile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $data = new Transaksi;
            $data->bukti = $namafile;

            $nm->move(public_path().'/bukti', $namafile);
            $data->save();

          
    }
    

    /**
     * Display the specified resource.
     *  return redirect('/boking')->with('success','Bukti Berhasil silahkan tunggu konfirmasi.');
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bukti'=> ['required'],
        ]);
        $nm = $request->bukti;
        // dd($request->bukti);
        $namafile = \Carbon\Carbon::now()->setTimezone('GMT+8')->format('ymdHis').'.'.$nm->extension();
        $nm->move(public_path().'/bukti/', $namafile);

        Transaksi::find($id)->update([
            'bukti'=>$namafile
        ]);
        return redirect('/boking')->with('success','Bukti Berhasil silahkan tunggu konfirmasi.');
    }
    public function konfirmasi(Request $request, $id)
    {
        $request->validate([
            'konfirmasi'=> ['required'],
        ]);
        $t = Transaksi::find($id);
        $t->konfirmasi = $request->konfirmasi;
        $t->save();
       
        return redirect('admin/boking')->with('success','Bukti Berhasil silahkan tunggu konfirmasi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $Booking)
    {
        $Booking->delete();
 
        return redirect()->route('/admin/boking')
                        ->with('success','Booking deleted successfully');
    }
}
