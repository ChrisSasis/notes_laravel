@extends('layouts.app')

@section('content')

	<h1>{{$users->username}}</h1>
	<h3>{{$users->email}}</h3>
	<a href="{{url('/')}}/settings/update/{{$users->id}}">Edit Account</a>
	<a href="javascript:void(0);">Change Password</a>
@endsection