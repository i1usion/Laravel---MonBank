<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
class TransferController extends Controller
{
   public function confirm(Request $req){
    $account = $req->accountNumber;
    //TODO: add bank checker
    return view('transferConfirmation', ['accountNumber' => $account]);
   }

   public function send(Request $req){
      $account = $req->account;
      $sum = $req->amount;
      $pass = $req->password;
      $data = Auth::user();

      if (Hash::check($pass, Auth::user()->password))
      {
         //TODO: validation (with minus)
      if ($data->balance >= $sum) 
      {
         //Odejmowanie od nadawcy przelewu
         DB::update('update users set balance = balance - ? where email = ?', [$sum, $data->email]);


         //Dodawanie do odbiorcy przelewu
         DB::update('update users set balance = balance + ? where nrb = ?', [$sum, $account]);

         return  redirect('/home');
         

      }
      else
      {
         return 'failed summ';
      }
   }
      else
      {


      return 'failed password';

      }
     }
}
