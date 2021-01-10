@extends('layouts.app')

@section('adminContent')

<br>

<div style = "float: right; margin-right: 2%" >

<a class="btn btn-success" href = "/admin/users/new">Add new</a>

</div>

<div style="margin-top: 50px">

<table class="table table-striped table-dark">
    <thead>
<tr>
    <th scope="col">Email</th>
    <th scope="col">Name</th>
    <th scope="col">Account Number</th>
    <th scope="col">Balance</th>
    <th scope="col">Created at:</th>
    <th scope="col">Is admin?</th>
    <th scope="col"></th>
    <th scope="col"></th>
</tr>
    </thead>

    <tbody>
    @foreach ($users as $el)

    <tr>
        <td>{{$el->email}}</td>
        <form method="post" action="/admin/users/edit">
            {{csrf_field()}}
        <input name = "email" value={{$el->email}} hidden>
        <td><input style = "background-color: #3d3d3d; color:rgb(255, 255, 255)" name = "name" value={{ $el->name}}></td>
        <td>{{ $el->nrb }}</td>
        <td><input name = "balance" style = "background-color: #3d3d3d; color:rgb(255, 255, 255)" value={{ $el->balance }}> zł</td>
        <td>{{ $el->created_at }}</td>
        <td><input name = "isAdmin" style = "background-color: #3d3d3d; color:rgb(255, 255, 255)" value={{ $el->isAdmin }}></td>

        

        
        <td><button type = "submit" style = "border:none; background: transparent; "><text style="color:rgb(255, 255, 255)"><b> Edit </b></text></button></td>
        </form>

        <form method="post" action="/admin/users/delete">
        {{csrf_field()}}
        <input name = "email" value={{$el->email}} hidden>
        <td><button type = "submit" style = "border:none; background: transparent; "><text style="color:rgb(255, 0, 0)"><b> X </b></text></button></td>
        </form>


    </tr>
        
    @endforeach
    </tbody>

</div>

    





@endsection