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
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @guest
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @else
                            <div> {{ Auth::user()->name }} <span class="caret"></span> </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                       </form>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            </div>
                    @endguest
                </div>
            @endif --}}
        <section class="chapter">
            <p class="chapter__number">{{$user->chapter->id}} rozdział</p>
            <div class="chapter__image">
                <img src="{{asset('img/chapters/'.$user->chapter->image)}}" alt="">
            </div>
            <div class="chapter__content">
                <h1 class="title">{{$user->chapter->name}}</h1>
                <p class="description">{{$user->chapter->description}}</p>
                <div class="tip-action" data-target="modal" data-name="tip">zobacz podpowiedź</div>
            </div>
            <div class="chapter__action">
                <div class="action__unlock" data-target="modal" data-name="password" >ODBLOKUJ ROZDZIAŁ</div>
            </div>
            <section class="help-modal tip">
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
            <section class="help-modal password">
                <div class="modal__close">zamknij instrukcję test</div>
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
