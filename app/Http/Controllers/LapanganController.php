<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataLapangan;
use Illuminate\Support\Facades\Crypt;

class LapanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dt = dataLapangan::latest()->paginate(5);
        return view('dlapangan.index',compact('dt'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('dlapangan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'jenis_lapangan'=> ['required'],
            'harga' => ['required'],
            'foto_lapangan' => ['required'],
        ]);
        $nm = $request->foto_lapangan;
        $namafile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dt = new dataLapangan;
            $dt->nama = $request->nama;
            $dt->jenis_lapangan = $request->jenis_lapangan;
            $dt->harga = $request->harga;
            $dt->foto_lapangan = $namafile;

            $nm->move(public_path().'/img', $namafile);
            $dt->save();

            return redirect('/admin/datalapangan')->with('success','Lapangan created successfully.');
    }
    public function edit($id)
    {
        $dt = dataLapangan::findorfail($id);
        return view('dlapangan.edit',compact('dt'));

    }
    public function update(Request $request,$id)
    {
        $ubah = dataLapangan::fidorfail($id); 
    }
    public function destroy(dataLapangan $datalapangan)
    {
        $datalapangan->delete();
 
        return redirect('/admin/datalapangan')
                        ->with('success','Data Lapangan deleted successfully');
    }
    
}
