@extends('layouts.admin')

@section('header')

    @include('admin.header')

@endsection
@section('content')

    @include('admin.users.content_user_add')

@endsection