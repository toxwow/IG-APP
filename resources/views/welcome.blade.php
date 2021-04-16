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

        </div>
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@guest--}}
                        {{--<a href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                    {{--@else--}}
                            {{--<div> {{ Auth::user()->name }} <span class="caret"></span> </div>--}}


                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                   {{--onclick="event.preventDefault();--}}
                                             {{--document.getElementById('logout-form').submit();">--}}
                                    {{--{{ __('Logout') }}--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                    {{--@endguest--}}
                {{--</div>--}}
            {{--@endif--}}
    <section class="login">
        <div>
            <div class="login__image">
                <img class="cloud" src="{{asset('img/clouds.svg')}}" alt="">
                <img class="woman" src="{{asset('img/woman.svg')}}" alt="">
            </div>
            <div class="login__content">
                <div class="text">
                    <h1>Cześć <span id="changer">ziomuś</span></h1>
                    <h2>Gotowa na przygodę?</h2>
                </div>
            </div>
            <div class="login__form">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Twój login" value="{{ old('username') }}" required  autofocus>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="******" required autocomplete="current-password">
                    <button type="submit" class="btn ">
                        {{ __('ZALOGUJ SIĘ') }}
                    </button>
                </form>
            </div>
            <div class="login__help">
                <p data-target="modal">👉 Co to jest? <span>Przeczytaj instrukcję</span></p>
            </div>
        </div>
        <section class="help-modal">
            <div class="modal__close">zamknij instrukcję</div>
            <div class="modal__img"><img src="{{asset('img/modal_img.svg')}}" alt=""></div>
            <div class="modal__content">
                <h2>Co to jest? 🤔</h2>
                <p>To po prostu Twój <b>prezent urodzinowy</b>. Dzień przed tym wydarzeniem otrzymasz ode mnie login i hasło, aby rozpocząć zabawę. Dzięki tej aplikacji przeżyjesz wyjątkowy dzień, pełny niespodzianek i atrakcji.</p>
                <p class="list"><b>Przygotuj się:</b></p>
                <ul>
                    <li>👟 weź wygodne buty i ubranie</li>
                    <li>🛏 wyśpij się</li>
                    <li>🍞 zjedz solidne śniadanie</li>
                    <li>⌚ zarezerwuj sobie cały dzień</li>
                    <li>🔋 naładuj baterie w telefonie</li>
                </ul>
            </div>
        </section>
    </section>


    </body>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/aplication.js')}}" defer></script>
</html>
