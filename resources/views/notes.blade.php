@extends('layouts.app')

@section('content')

        <form action="{{ url('/')}}/notes{{isset($notes) ? '/'. $notes->id : '' }}" method="POST">
            {{ csrf_field() }}
            {{ isset($notes) ? method_field('PUT') : '' }}
        
            <input type="hidden" readonly name="user_id" value="{{Auth::user()->id}}">
            
            <div class="o-input">
                <input type="text" name="title" class="o-input--nostyle o-input--title" placeholder="Title" 
                value="{{ isset($notes) ? $notes->title : ''}}">
            </div>
            
            <div class="o-input">
                <textarea id="textarea" name="description" class="o-input--nostyle o-textarea-description" style="height:300px;resize:none" placeholder="Description">{{ isset($notes) ? $notes->description : ''}}</textarea>
            </div>
            <div class="o-input">
                <select name="tag_id" id="">
                    
                     <option value="0">- Select Tag -</option>
                    @foreach ($tags as $tag) 
                       
                        @if(Auth::user()->id == $tag->user_id)
                           
                            <option value="{{$tag->id}}">{{$tag->tag}}</option>
                        @endif
                    @endforeach
                
                </select>
            </div>


            <div class="c-wrapper-cat">
                <button class="o-btn--primary o-btn--circle">DONE</button>  
                <p style="font-size:12px">{{isset($notes) ? 'Edited: ' . date('M d,Y', strtotime($notes->updated_at)) : ''}}</p>
            </div>
            
        </form>

@endsection
