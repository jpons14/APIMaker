<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\ViewModels\TablesViewModel;

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
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $users = DB::select(DB::raw('DESCRIBE users'));

        $users2 = new TablesViewModel();
        $users2 = $users2->create('users');
        // $users = $users->create();
        dd($users2);

        return view('home', ['users' => $users]);
    }
}
