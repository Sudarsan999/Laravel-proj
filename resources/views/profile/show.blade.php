<!-- resources/views/profile/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, {{ $user->name }}!</h1>
        <p>Email: {{ $user->email }}</p>
        
    </div>
@endsection
