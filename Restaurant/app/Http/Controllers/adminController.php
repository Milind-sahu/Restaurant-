<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Userdetail;
use App\Models\employee;
use App\Models\Req;
use App\Models\Feedback;
use App\Models\Stats;
use App\Models\menu;

class adminController extends Controller
{
    public function Admin_dashboard()
    {
        $list2 = implode(",", array_column(Stats::all(["SALES"])->toArray(), 'SALES'));
        $list3 = implode(",", array_column(Stats::all(["REVENUE"])->toArray(), 'REVENUE'));
        $list4 = implode(",", array_column(Stats::all(["CUSTOMERS"])->toArray(), 'CUSTOMERS'));
        $list5 = implode(",", array_column(Stats::all(["DATE"])->toArray(), 'DATE'));
        // $list3 = Stats::all(["REVENUE"]);
        // $list4 = Stats::all(["CUSTOMERS"]);

    
        return view('admin/index', ['list2' => $list2, 'list3' => $list3, 'list4' => $list4,'list5'=>$list5]);
        // return view('admin/index');
    }
    public function employee()
    {
        $list2 = employee::all();
        return view('admin/employee', ['list' => $list2]);
    }
    public function user()
    {
        $list = Userdetail::all();
        return view('admin/user', ['list' => $list]);
    }
    public function profile()
    {
        return view('admin/profile');
    }
    public function add()
    {
        return view('admin/addemployee');
    }
    public function request()
    {
        $list = Req::all();
        return view('admin/request', ['list' => $list]);
    }
    public function dbcheck()
    {
        
        $list = Userdetail::all();
        return view('admin/dbcheck', ['list' => $list]);
    }
    public function Feed_backs()
    {
        $list = Feedback::all();
        return view('admin/feedback', ['list' => $list]);
    }
    public function stats()
    {
        $list = Stats::all();
        
        return view('admin/stats', ['list' => $list ]);
    }
    public function updatemenu()
    {
        $list = menu::all();
        return view('admin/updatemenu', ['list' => $list]);
    }
    public function storemenu(Request $request)
    {
        // Validate form input
        

        // Create a new employee record and save it to the database
        menu::create([
            'NAME' => $request->NAME,
            'PRICE' => $request->PRICE,
            'CATEGORY' => $request->CATEGORY,
            'DESCRIPTION' => $request->DESCRIPTION,
            // 'MOBNUM' => $request->MOBNUM,
            // 'JOIN_DATE' => $request->JOINDT,  // Note: column name in database is `JOIN_DATE`
        ]);

        // Redirect back to the form with a success message
        return redirect('/updatemenu')->with('success', 'Menu updated successfully!');
    }

    public function storestats(Request $request)
    {
        // Validate form input
        

        // Create a new employee record and save it to the database
        Stats::create([
            'DATE' => $request->DATE,
            'SALES' => $request->SALES,
            'REVENUE' => $request->REVENUE,
            'CUSTOMERS' => $request->CUSTOMERS,
            // 'MOBNUM' => $request->MOBNUM,
            // 'JOIN_DATE' => $request->JOINDT,  // Note: column name in database is `JOIN_DATE`
        ]);

        // Redirect back to the form with a success message
        return redirect('/Stats')->with('success', 'Stats added successfully!');
    }



    public function store(Request $request)
    {
        // Validate form input
        

        // Create a new employee record and save it to the database
        employee::create([
            'NAME' => $request->NAME,
            'POSITION' => $request->POSITION,
            'AGE' => $request->AGE,
            'GENDER' => $request->GENDER,
            'SALARY' => $request->SALARY,
            'MOBNUM' => $request->MOBNUM,
            'JOIN_DATE' => $request->JOINDT,  // Note: column name in database is `JOIN_DATE`
        ]);

        // Redirect back to the form with a success message
        return redirect('/addemp')->with('success', 'Employee added successfully!');
    }

    





}