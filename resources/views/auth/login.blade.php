@extends('layouts.app')

@section('content')
    <login-component token_csrf="{{ @csrf_token() }}"></login-component>
@endsection
