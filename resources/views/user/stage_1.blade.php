<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zacznij przygodę</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">




    </head>
    <body>
        <div id="app">
            {{--{{$user}}--}}
            {{--{{$user->chapter}}--}}
        </div>
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@guest--}}
                        {{--<a href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                    {{--@else--}}
                            {{--<div> {{ Auth::user()->name }} <span class="caret"></span> </div>--}}
                        {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                           {{--onclick="event.preventDefault();--}}
                                             {{--document.getElementById('logout-form').submit();">--}}
                            {{--{{ __('Logout') }}--}}
                        {{--</a>--}}

                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--@csrf--}}
                        {{--</form>--}}

                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}

                            {{--</div>--}}
                    {{--@endguest--}}
                {{--</div>--}}
            {{--@endif--}}
        <section class="chapter">
            <p class="chapter__number">{{$user->chapter->id}} rozdział</p>
            <div class="chapter__image">
                <img src="{{asset('img/chapters/'.$user->chapter->image)}}" alt="">
            </div>
            <div class="chapter__content">
                <h1 class="title">{{$user->chapter->name}}</h1>
                <p class="description">{{$user->chapter->description}}</p>
                <div class="tip-action">zobacz podpowiedź</div>
            </div>
            <div class="chapter__action">
                <div class="action__unlock">ODBLOKUJ ROZDZIAŁ</div>
            </div>
        </section>

    </body>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/aplication.js')}}" defer></script>
</html>
