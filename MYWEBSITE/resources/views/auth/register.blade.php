@include('components.layout')
<section class="flex justify-center py-20">
    <div class="flex flex-col p-2 bg-teal-400 rounded-lg shadow-lg shadow-teal-800 text-slate-300">
        <div class=" px-32 py-4 text-center text-4xl font-semibold text-slate-700 border-b-2 border-teal-700">
           {{ __('Register') }}
        </div>
        <form class="flex flex-col py-4 px-14 text-lg font-semibold mt-4" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden">
                <label class="bg-inherit px-3" for="">Username</label>
                <input name="name" class="bg-inherit focus:outline-none border-b-4 border-gray-800 px-3" type="text" value="{{ old('name') }}" required autocomplete="name" >
            @error('name')
                <p class="text-sm text-red-300">{{$message}}</p>
            @enderror
            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden mt-4">
                <label  class="bg-inherit px-3" for="">Email</label>
                <input name="email" class="bg-inherit focus:outline-none border-b-4 border-gray-800 px-3" type="email" value="{{ old('email') }}" required autocomplete="email" >
             @error('email')
                <p class="text-sm text-red-300">{{$message}}</p>
            @enderror
            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden mt-4">
                <label class="bg-inherit px-3" for="">Password</label>
                <input name="password" class="bg-inherit focus:outline-none border-b-4 border-gray-800 px-3" type="password" value="{{ old('password') }}" required autocomplete="new password" >
             @error('password')
                <p class="text-sm text-red-300">{{$message}}</p>
            @enderror
            </div>
            <div class="flex flex-col bg-slate-500 rounded-lg overflow-hidden mt-4">
                <label class="bg-inherit px-3" for="">Confirm Password</label>
                <input name="password_confirmation" class="bg-inherit focus:outline-none border-b-4 border-gray-800 px-3" type="password" required autocomplete="new-password">
            
            </div>
            
            <div class="flex flex-row mt-4">
                <button class="mr-2 text-center px-14 py-2 bg-emerald-700 rounded-lg" type="submit">{{ __('Register') }}</button>
                <button class=" text-center px-14 py-2 bg-emerald-700 rounded-lg">Login</button>
            </div>
        </form>

        
    </div>
</section>



{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

