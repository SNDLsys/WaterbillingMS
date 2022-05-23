@extends('layouts.app')

@section('content')
<div class="create-customer">
    Add a new Customer
</div>
<form action="/index" method="POST">
    @csrf
    <label for="name1">Lastname:</label>
    <input type="text" id="lastname" name="lastname">
    <br>

    <label for="name2">Firstname:</label>
    <input type="text" id="firstname" name="firstname">
    <br>

    <label for="name3">Middlename:</label>
    <input type="text" id="middlename" name="middlename">
    <br>

    <label for="nam43">Contact Number:</label>
    <input type="text" id="middlename" name="contact">
    <br>

    <label for="name5">Address:</label>
    <input type="text" id="middlename" name="address">
    <br>

    <label for="name6">Status:</label>
    <select name="status" id="type">
        <option value="active">Active</option>
        <option value="disconnect">Disconnect</option>
    </select>
    <br>

    <input type="Submit" value="Submit">
@endsection