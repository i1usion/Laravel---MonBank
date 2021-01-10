@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
<tr>
    <th scope="col">Type</th>
    <th scope="col">Address</th>
    <th scope="col">Summary</th>
    <th scope="col">Date</th>
</tr>
    </thead>

    <tbody>
    @foreach ($transfers as $el)

    <tr>
        @if ($el->sender == $nrb)

        <td><text style="color:rgb(0, 208, 255)"><b> Sent </b></text></td>
        <td>{{ $el->receiver }}</td>

        @else
        <td><text style="color:rgb(34, 255, 0)"><b> Received </b></text></td>
        <td>{{ $el->sender }}</td>

        @endif

        <td>{{ $el->sum }} zł</td>
        <td>{{ $el->created_at }}</td>
    </tr>
        
    @endforeach
    </tbody>
@endsection