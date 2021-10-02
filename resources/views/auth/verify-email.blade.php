@extends('layout')
@section('main')

<div class="bg-danger">
    <h3>please, verify your email</h3>
</div>
    <form action="{{ url('/email/verification-notification') }}" method="Post">
        @csrf
    <button type="submit">config email</button>
    </form>
@endsection