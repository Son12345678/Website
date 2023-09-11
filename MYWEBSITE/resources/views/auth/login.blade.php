@include('components.layout')
<section class="flex justify-center py-20">
    <div class="flex flex-col p-2 bg-teal-400 rounded-lg shadow-lg shadow-teal-800 text-slate-300">
        <div class=" px-32 py-4 text-center text-4xl font-semibold text-slate-700 border-b-2 border-teal-700">
            <p>Login Here</p>
        </div>
        {{-- {{ route('login') }} --}}
        <form class="flex flex-col py-4 px-14 text-lg font-semibold mt-4" action="{{ route('login') }}" method="post">
            @csrf
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden">
                <label class="bg-inherit px-3" for="">Email</label>
                <input class="bg-inherit focus:outline-none border-b-4 border-gray-800 px-3" type="email"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <p class="text-sm text-red-300">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden mt-4">
                <label class="bg-inherit px-3" for="">Password</label>
                <input class="bg-inherit focus:outline-none border-b-4 border-gray-800 px-3" type="password" name="password" value="{{ old('password') }}" required autocomplete="current-password">
                @error('password')
                    <p class="text-sm text-red-300">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row mt-2 ">
                <input class="text-2xl mx-2" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="flex flex-row mt-2">

                <button class=" text-center px-14 py-2 bg-emerald-700 rounded-lg"
                    type="submit">Login</button>
                <a
                    href="/postregister"class="ml-2 text-center px-14 py-2 bg-emerald-700 rounded-lg">Register</a>

            </div>
            @if (Route::has('password.request'))
                <a class="text-blue-600 mt-2" href="">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>


    </div>
</section>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
