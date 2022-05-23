@extends('layouts.app')

@section('content')

@csrf
@method('DELETE')
    <tr>    
        
        <th>{{$select->cusLastname}}</th>
        <th>{{$select->cusFirstname}}</th>
        <th>{{$select->cusMiddlename}}</th>
        <th>{{$select->contact}}</th>
        <th>{{$select->address}}</th>
        <th>{{$select->connection_status}}</th>                 
    </tr>

@endsection