<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <style>
          .enable {
            display: block; 
          }

          .disable {
            display: none;
          }
      </style>
</head>
<body>
    <div id="app" class="mainwrap c-main--wrapper">
        <!--  -->
        <div class="c-wrap--center">
            @if (Auth::guest())
            
            @else
                <header class="c-wrap--center" style="position:relative">
                    <div class="c-avatar o-imgwrap c-avatar--xxs" style="display: inline-block;vertical-align: middle">
                        <a href="{{ url('/') }}/home">
                            <!-- <img src="https://pbs.twimg.com/profile_images/929933611754708992/ioSgz49P_400x400.jpg" alt=""> -->
                            <i class="material-icons" style="font-size:30px">account_circle</i>
                        </a>
                    </div>
                    <div style="display: inline-block;vertical-align: middle;padding-left:5px;font-size:12px;font-weight:700">
                        {{ '@'.Auth::user()->username}}
                    </div>
                    <div class="c-position-right">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">settings</i>
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                </header>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // var textarea = document.querySelector('textarea');

        // textarea.addEventListener('keydown', autosize);
                     
        // function autosize(){
        //   var el = this;
        //   setTimeout(function(){
        //     el.style.cssText = 'height:auto; padding:0';
        //     // for box-sizing other than "content-box" use:
        //     // el.style.cssText = '-moz-box-sizing:content-box';
        //     el.style.cssText = 'height:' + el.scrollHeight + 'px';
        //   },0);
        // }


        // delete alert
        var create = document.getElementById('delete-alert');
        create.addEventListener('click',function() {

            var modal = document.getElementById('alert-modal');
            modal.color = "red";

        })
    </script>
</body>
</html>
