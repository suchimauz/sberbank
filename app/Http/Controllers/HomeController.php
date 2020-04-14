<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Operation;
use App\User;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = Operation::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc');

        return view('home', [
            'operations' => $operations->get(), 
            'user_count' => User::count(), 
            'operations_count' => Operation::where('user_id', auth()->user()->id)->count()
        ]);
    }

    public function transfer()
    {
        return view('operations.transfer', ['users' => User::get()]);
    }

    public function refill()
    {
        return view('operations.refill');
    }

    public function withdraw()
    {
        return view('operations.withdraw');
    }
}
