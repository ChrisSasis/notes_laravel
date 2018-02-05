@extends('layouts.app')

@section('content')
	<form action="{{ url('/')}}/settings" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT')}}
		<label for="username">Change Username:</label>
		<input type="text" id="username" placeholder="{{$users->username}}" name="username">
		<button class="o-btn--primary o-btn--circle">DONE</button>  	
	</form>
@endsection