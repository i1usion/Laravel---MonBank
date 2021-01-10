<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function main()
    {
        return view('admin');
    }


    public function transactions()
    {

        $transfers = DB::select('select * from transfers ORDER BY created_at DESC');
        return view('adminTransactions', ['transfers' => $transfers]);
    }

    public function users()
    {

        $users = DB::select('select * from users ORDER BY id DESC');
        return view('adminUsers', ['users' => $users]);
    }

    public function deleteUser(Request $req)
    {

        DB::delete('delete from users where email = ?', [$req->email]);
        return redirect('/admin/users');
    }

    public function editUser(Request $req)
    {

        DB::update('update users set name = ?, balance = ?, isAdmin = ? where email = ?', [$req->name, $req->balance, $req->isAdmin, $req->email]);
        return redirect('/admin/users');
    }

    public function newUser()
    {
        return view('adminUsersAdd');
        
    }

}
