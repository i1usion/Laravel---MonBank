<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function addUser(Request $req)
    {
        $email = $req->email;
        $name = $req->name;
        $pass = $req->password;
        $pass_conf = $req->password_confirmation;

        if($pass == $pass_conf)
        {
            DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, Hash::make($pass)]);

            $query = DB::select('select id from users where email = ?', [$email]);
            $id = $query[0]->id;

            if($id%2 == 1)
            {
            $new_nrb = "2751001101".("1850375960265049" - $id);
            }
            else
            {
            $new_nrb = "2751001101".("1850375960265049" + $id);
            }

            DB::update('update users set nrb = ? where email = ?', [$new_nrb, $email]);

            return redirect('/admin/users');
        }

        else
        {
            return 'incorrect password conf';
        }
        
        
    }

}
