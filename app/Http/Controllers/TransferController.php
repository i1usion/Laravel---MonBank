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

      $req->validate([
         'accountNumber' => 'required | numeric | digits_between: 26, 26',
      ],
      [
         'accountNumber.required' => 'Account number is empty.',
         'accountNumber.numeric' => 'Account number is incorrect.',
         'accountNumber.digits_between' => 'Account number is incorrect.',
      ]
   );

    $account = $req->accountNumber;
    //TODO: add bank checker
    return view('transferConfirmation', ['accountNumber' => $account]);
   }

   public function send(Request $req){

      
      $req->validate([
         'sum' => "required | numeric | min:1 | max:100000 | lte:$data->balance",
         'password' => 'required',
      ],
      [
         'sum.required' => 'Summary is empty.',
         'sum.numeric' => 'Summary value is incorrect.',
         'sum.min' => 'Minimal transaction value is 1.',
         'sum.max' => 'Maximum transaction value is 100000.',

      ]
   );


      $account = $req->account;
      $sum = $req->amount;
      $pass = $req->password;
      $data = Auth::user();

      

      if (Hash::check($pass, Auth::user()->password))
      {

      if ($data->balance >= $sum) 
      {
         //Odejmowanie od nadawcy przelewu
         DB::update('update users set balance = balance - ? where email = ?', [$sum, $data->email]);


         //Dodawanie do odbiorcy przelewu
         DB::update('update users set balance = balance + ? where nrb = ?', [$sum, $account]);

         DB::insert('insert into transfers (sender, receiver, sum) values (?, ?, ?)', [Auth::user()->nrb, $account, $sum]);

         return redirect('/history');
         

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



     public function history(){
      
      $transfers = DB::select('select * from transfers where sender = ? OR receiver = ? ORDER BY created_at DESC', [Auth::user()->nrb, Auth::user()->nrb]);

      return view('transferHistory', ['transfers' => $transfers], ['nrb' => Auth::user()->nrb]);
     }
}
