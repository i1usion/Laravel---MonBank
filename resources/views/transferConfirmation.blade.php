@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2>You wanna send money to the {{ $accountNumber }}</h2>
    </div>

    <br>

    <div class="row justify-content-center">
        <h3>Santander Polska</h3>
    </div>
    <br>


    <div class="card">
                <div class="card-header">{{ __('Send money') }}</div>

                <div class="card-body">

    <form action = "/transfer/send" method="post">

                {{csrf_field()}}


        Transfer amount: <input type = "text" class = "form-control" name = "sum" placeholder="0.00 zł"><br>
        @error('sum')
             <span>{{$message}}</span><br>
        @enderror



        Password: <input type = "password" class = "form-control" name = "password" placeholder=""><br>
        @error('password')
             <span>{{$message}}</span><br>
        @enderror



        <input name = "account" value={{$accountNumber}} hidden>


        
        <input type = "submit" class = "btn btn-success" value = "Accept"><br><br>
    </form>
   </div>
</div>
</div>


@endsection