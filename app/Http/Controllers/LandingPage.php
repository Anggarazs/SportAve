<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\dataLapangan;
 
class LandingPage extends Controller
{
    
    public function index()
    {
        $datalapangans = dataLapangan::latest()->simplePaginate(1);
        return view('welcome',compact('datalapangans'))
            ->with('i', (request()->input('page', 1) - 1) * 1);
    }

    public function show(dataLapangan $datalapangan)
    {
        return view('welcome',compact('datalapangan'));
    }
}