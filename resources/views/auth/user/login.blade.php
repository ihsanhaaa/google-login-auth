@extends('layouts.app')

@section('title')
Judul
@endsection

@section('content')

<h1>Halaman Login User</h1>
<a href="{{ route('user.login.google') }}">
    Sign In with Google
</a>

@endsection