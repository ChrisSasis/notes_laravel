@extends('layouts.app')

@section('content')
    
    <div class="c-wrap-list">
        <div class="c-cta">
            <h2 class="o-title">Label</h2>
            <a href="{{ url ('/') }}/tags" class="o-btn--primary o-btn--circle o-btn--s o-btn--i-s">
                <i class="material-icons">add</i>
            </a>
        </div>
        <div class="c-wrap--label">
            @foreach ($tags as $tag)
                @if($activeuser->id == $tag->user_id)
                    <div class="o-label--default o-btn--circle o-label--m" style="margin-top:5px;">{{ $tag->tag }}</div>
                @endif
            @endforeach
        </div>

        <div class="c-cta">
            <h2 class="o-title">All Notes</h2>
            <a href="{{ url ('/') }}/notes" class="o-btn--primary o-btn--circle o-btn--s o-btn--i-s">
                <i class="material-icons">add</i>
            </a>
        </div>
        
        <div class="c-wrapper--columns">
            @foreach ($notes as $note)
                @if($activeuser->id == $note->user_id)
                <div class="c-note-wrap c-note-grid c-column-half">
                    
                    <form action="{{action('NotesController@destroy', $note['id'])}}" method="post">
                        {{csrf_field()}} 

                        <input type="hidden" name="_method" value="DELETE">
                         <button class="o-btn--warning o-btn--circle o-btn--xs o-btn--i-xs c-position-right" id="delete-alert" style="color:white">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>

                    <a href="{{ url('/') }}/notes/update/{{$note->id}}">
                        

                        <div class="c-note--description">
                            <h4>{{ $note->title }}</h4>   
                        </div>
                        
                        <div class="c-wrap--label">
                            <div class="o-label--default o-btn--circle o-label--m" style="margin-top:5px;">{{ $note->tag['tag']}}</div>
                        </div>
                    </a>

                </div>
                @endif
            @endforeach
        </div>

    </div>

@endsection
