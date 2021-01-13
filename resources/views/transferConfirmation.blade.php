@extends('layouts.app')



@section('content')

{{-- Numer konta odbiorcy oraz bank --}}

<div class="container">
    <div class="card">
        <div class="card-body">
            <h2>Receiver:</h2> <h3>{{ $accountNumber }}</h3>
        </div>
        <div class="row justify-content-center">
            <h3><b>></b> {{ $bankName }}</h3>
        </div>
    </div>
</div>

{{-- Wysłanie --}}

    <div class="card  class="position-relative" style="margin-top: 2%"">
                <div class="card-header">{{ __('Send money') }}</div>

                <div class="card-body">

    <form action = "/transfer/send" method="post">

                {{csrf_field()}}


        Transfer amount: <input type = "text" class = "form-control" name = "sum" placeholder="0.00 zł"><br>
        @error('sum')
             <span style="color: rgb(247, 0, 0)">{{$message}}</span><br>
        @enderror



        Password: <input type = "password" class = "form-control" name = "password" placeholder=""><br>
        @error('password')
             <span style="color: rgb(247, 0, 0)">{{ $message }}</span><br>
             <br>
        @enderror

       

        <input name = "account" value={{$accountNumber}} hidden>


        
        <input type = "submit" class = "btn btn-success" value = "Accept"><br><br>
    </form>
   </div>
</div>
</div>


@endsection