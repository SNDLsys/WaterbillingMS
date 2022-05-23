@extends('layouts.app')

@section('content')
<div class="create-billing">
Add a new Bill
</div>
<form action="/indexbill" method="POST">
@csrf
<label for="sec2">Period from:</label>
<input type="texsect" id="firstname" name="periodFrom">
<br>
<label for="sec3">Period to:</label>
<input type="text" id="middlename" name="periodTo">
<br>
<label for="sec4">Previous reading:</label>
<input type="text" id="middlename" name="preReading">
<br>
<label for="sec5">Present reading:</label>
<input type="text" id="middlename" name="presentReading">
<br>
<label for="sec6">Bill amount:</label>
<input type="text" id="middlename" name="billAmount">
<br>
<label for="sec6">Bill date:</label>
<input type="text" id="middlename" name="billDate">
<br>
<label for="sec8">Due date:</label>
<input type="text" id="middlename" name="dueDate">
<br>
<label for="name6">Status:</label>
    <select name="status" id="type">
        <option value="active">Active</option>
        <option value="disconnect">Disconnect</option>
    </select>
<br>
<input type="Submit" value="Submit">
@endsection
