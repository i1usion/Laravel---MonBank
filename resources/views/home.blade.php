@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1> Balance: {{ $balance }} zł </h1>
    </div>
        <br>

        <div class="row justify-content-center">
        <h1>Bank account number: {{ $acc_number }}</h1>
            <br>
</div>

<br>

<div class="container">
            <div class="card">
                <div class="card-header">{{ __('Send money') }}</div>

                <div class="card-body">
                    <form method="POST" action = "/transfer/confirm">

        <form action = "send" method="post">
                {{csrf_field()}}
        Bank Account Number: <input type = "text" class = "form-control" name = "accountNumber" placeholder="0000000000000000000000000"><br>
        @error('accountNumber')
             <span>{{$message}}</span><br>
        @enderror
        <input type = "submit" class = "btn btn-success" value = "Accept"><br><br>
    </form>


</div>     

@endsection
