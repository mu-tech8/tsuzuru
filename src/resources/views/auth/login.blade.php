@extends('layouts.app')

@section('content')
<div class="flex flex-wrap container mx-auto">
    <div class="w-full lg:w-1/2">
        <h1 class="text-3xl py-3">ひとことでは表せない</h1>
        <p class="pb-1">日々の気持ちや音楽に対する想いを</p>
        <p class="pb-1">あえて、いま、ここで手紙のようにつづりませんか</p>
        <p class="pb-1">音楽と日常、ゆるやかにつながるSNS</p>
    </div>
    <div class="h-40 w-full lg:w-1/2 pt-4">
        <div class="max-w-sm rounded overflow-hidden shadow-xl border border-gray-400 p-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="p-4">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input id="email" type="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>

                        @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="p-4">
                    <label for="password">{{ __('Password') }}</label>
                    <div>
                        <input id="password" type="password" @error('password') is-invalid @enderror" name="password"
                            class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="******************" required autocomplete="current-password">

                        @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div>
                    <div class="pl-4 pb-4 text-sm">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>


                <div>
                    <div class="p-4">
                        <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="p-4 text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        <button type="submit"
            class="bg-orange hover:bg-yellow-500 text-white font-bold py-2 px-4 mt-10 ml-8 w-80 rounded-full">
            かんたん{{ __('Login') }}
        </button>
    </div>
    <img class="opacity-40 rounded-lg shadow-xl h-1/3 w-1/3 p-16" src="/hannah-olinger-8eSrC43qdro-unsplash.jpg"
        alt="手紙を綴る" />
</div>
@endsection
