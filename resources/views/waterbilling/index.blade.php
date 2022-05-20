@extends('layouts.app')

@section('content')
<div class="">

    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Create new user</a>
    <a href="index/addbilling" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Add Bill</a>
    <a href="index/create" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Add Customer</a>
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Invoice</a>
</div>

@endsection
