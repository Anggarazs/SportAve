<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::orderBy('id','asc')->simplePaginate(10);
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
 
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
 
    public function edit()
    {
       if(Auth::user())
       {
           $user = User::find(Auth::user()->id);
           if($user)
           {
               return view('users.edit')->withUser($user);
           }
            else
           {
               return redirect()->back();
           }
       } 
       else
       {
        return redirect()->back();
       } 
    }
 
    public function update(Request $request)
    {
        $user  = User::find(Auth::user()->id);
        if ($user)
        {
            $validate = $request->validate([
                'name'=>'required',
                'email'=>'required',
                'alamat'=>'required' 
            ]);

            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->alamat = $request['alamat'];

            $user->save();
            return redirect()->back()->with('success','user Edited successfully.');
            

        }
        else
        {
            return redirect()->back();
        }

        
 
    }
 
    public function destroy(User $user)
    {
        $user->delete();
 
        return redirect()->route('users.index')
                        ->with('success','Users deleted successfully');
    }
}