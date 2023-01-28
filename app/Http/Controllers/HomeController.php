<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function registerMember(Request $request){
        // dd($request->all());

        if($request->has('photo')) {

            $file = $request->file('photo')->getClientOriginalName();
            $ext = $request->file('photo')->getClientOriginalExtension();
            $photo = time().'.'.$ext;
            $path = $request->file('photo')->storeAs('public/passports', $photo);
        } else {
            
            $photo = 'avatar.png';
        }
        if($request->has('signature')) {

            $file = $request->file('signature')->getClientOriginalName();
            $ext = $request->file('signature')->getClientOriginalExtension();
            $signature = time().'.'.$ext;
            $path = $request->file('signature')->storeAs('public/signatures', $signature);
        } else {
            
            $signature = 'avatar.png';
        }
        
        $member = Member::create(array_merge($request->except('photo', 'signature'), ['photo' => $photo, 'signature' => $signature]));
        return redirect()->route('membership')->with('success', 'Registration Successfull');
    }

}
