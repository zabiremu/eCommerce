@extends('layouts.admin.app')

@section('content')
    {{ Auth::user()->email }}
@endsection
