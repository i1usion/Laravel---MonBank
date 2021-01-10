<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {

        $data = Auth::user();

        if ($data->nrb == "0") 
        {
            if($data->id%2 == 1)
            {
            $new_nrb = "275001101".("1850375960265049" - $data->id);
            }
            else
            {
            $new_nrb = "275001101".("1850375960265049" + $data->id);
            }

            DB::update('update users set nrb = ? where email = ?', [$new_nrb, $data->email]);

            return view('home', ['balance' => $data->balance], ['acc_number' => $new_nrb]);
        }


        return view('home', ['balance' => $data->balance], ['acc_number' => $data->nrb]);
    }
}
