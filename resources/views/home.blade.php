@extends('layouts.app')



@section('content')

{{-- Sekcja z bakancem i numerem konta --}}

    <div class="card">
        <div class="card-body">

        <h3> Balance:  <span style="color: rgb(0, 255, 38)"> {{ $balance }}  </span> zł </h3>
        <h2>Bank account number: </h2> <h3> {{ $acc_number }} </h3>
        </div>
    </div>
      

{{-- Sekcja wysłania --}}

<div class="container" class="position-relative" style="margin-top: 2%">
    <div class="card">
        <div class="card-header">{{ __('Send money') }}</div>

        <div class="card-body">
          

            <form action = "/transfer/confirm" method="get">
                {{csrf_field()}}
                Bank Account Number: <input type = "text" class = "form-control" name = "accountNumber" placeholder="00000000000000000000000000"><br>
                @error('accountNumber')
                     <span>{{$message}}</span><br>
                @enderror
                <input type = "submit" class = "btn btn-success" value = "Accept"><br><br>
            </form>
        </div>    
    </div> 
</div>  

@endsection


{{-- Redirect dla adminów --}}

@section('adminContent')
<script>
window.location.replace("/admin");
</script>
@endsection