@extends('layouts.app')

@section('content')

        <form action="{{ url('/')}}/tags" method="POST">
            {{ csrf_field() }}
            {{ isset($tags) ? method_field('PUT') : '' }}
        
        <input type="hidden" readonly name="user_id" value="{{Auth::user()->id}}">
        
        <div class="o-input">
            <input type="text" name="tag" class="o-input--nostyle o-input--title" placeholder="Name your Tag" 
            >
        </div>
        
        <div class="c-wrapper-cat">
            <button class="o-btn--primary o-btn--circle">DONE</button>  
            <p style="font-size:12px">{{isset($tags) ? 'Edited: ' . date('M d,Y', strtotime($tags->updated_at)) : ''}}</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    </form>



@endsection
