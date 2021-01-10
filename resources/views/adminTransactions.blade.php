@extends('layouts.app')

@section('adminContent')

<br>
<table class="table table-striped table-dark">
    <thead>
<tr>
    <th scope="col">Sender</th>
    <th scope="col">Receiver</th>
    <th scope="col">Summary</th>
    <th scope="col">Date</th>
</tr>
    </thead>

    <tbody>
    @foreach ($transfers as $el)

    <tr>
        <td>{{ $el->sender}}</td>
        <td>{{ $el->receiver}}</td>
        <td>{{ $el->sum }} zł</td>
        <td>{{ $el->created_at }}</td>
    </tr>
        
    @endforeach
    </tbody>

@endsection

@section('content')
<script>
window.location.replace("/home");
</script>
@endsection
