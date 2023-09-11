

{{-- <body> --}}
<div id="app">
    <nav class="w-full px-6 bg-slate-300 shadow-sm">
        <div class="container py-3 flex flex-row">
            <a class="text-xl text-teal-700 basis-1/4 text-start ml-4 py-2" href="{{ url('/') }}">
                {{ config('app.name', 'Application') }}
            </a>

            <div class=" basis-3/4 flex justify-end mr-10 py-2">

                <div class=" flex flex-row">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <div class="px-4">
                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        @endif

                        @if (Route::has('register'))
                            <div class="px-4">
                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        @endif
                    @else
                        <div class="flex flex-col">
                            <a>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="">
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    {{-- <main class="py-4">
        @yield('content')
    </main> --}}
</div>
{{-- </body>
</html> --}}
