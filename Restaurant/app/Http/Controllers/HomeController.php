<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Userdetail;
use App\Models\Req;
use App\Models\Feedback;
use App\Models\admin;
use App\Models\menu;


class HomeController extends Controller
{
    //
    public function home()
    {
        return view('user/index');
    }
    public function login(Request $request)
    {
        $user = Userdetail::where("EMAIL", $request->input('EMAIL'))
        ->where("PASSWORD", $request->input('PASSWORD'))
        ->first();
        // dd($user);
        if($user){
                $request->session()->put('username', 'admin');
                $request->session()->put('isLoggedIn', true);

            return \redirect('/home');
        }
        return view('user/login');
    }


    public function Adminlogin(Request $request)
    {
        
        return view('user/Adminlogin');
    }


    public function signup()
    {
        return view('user/signup');
    }
    public function Menu()
    {
        return view('user/Menu');
    }

    public function Menulist()
    {
        $list = menu::all();
        return view('user/menulist',['list' => $list]);


    }


    public function storeuser(Request $request)
    {
        // Validate form input
        

        // Create a new employee record and save it to the database
        Userdetail::create([
            'NAME' => $request->NAME,
            'EMAIL' => $request->EMAIL,
            'NUMBER' => $request->NUMBER,
            'PASSWORD' => $request->PASSWORD,
            // 'SALARY' => $request->SALARY,
            // 'MOBNUM' => $request->MOBNUM,
            // 'JOIN_DATE' => $request->JOINDT,  // Note: column name in database is `JOIN_DATE`
        ]);

        // Redirect back to the form with a success message
        return redirect('/')->with('success', 'Rgistration Successfull!');
    }

    public function reservation(Request $request)
    {
        // Validate form input
        

        // Create a new employee record and save it to the database
        Req::create([
            'NAME' => $request->NAME,
            'EMAIL' => $request->EMAIL,
            'NUMBER' => $request->NUMBER,
            'DATEOF' => $request->DATEOF,
            'TIME' => $request->TIME,
            'PERSON' => $request->PERSON,
            'MESSAGE' => $request->MESSAGE,  
        ]);

        // Redirect back to the form with a success message
        return redirect('/home')->with('success', 'Rgistration Successfull!');
    }

    public function feedback(Request $request)
    {
        // Validate form input
        

        // Create a new employee record and save it to the database
        feedback::create([
            'NAME' => $request->NAME,
            'EMAIL' => $request->EMAIL,
            'SUBJECT' => $request->SUBJECT,
            'MESSAGE' => $request->MESSAGE,  
        ]);

        // Redirect back to the form with a success message
        return redirect('/home')->with('success', 'Rgistration Successfull!');
    }


    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }



}
