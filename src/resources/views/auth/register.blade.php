@extends('layouts.app')

@section('content')
<div class="flex justify-center flex-wrap">
    <div class="w-full text-center text-3xl p-4">アカウント作成</div>
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">{{ __('Name') }}</label>

                <div>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name"
                        autofocus
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('name')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email">{{ __('E-Mail Address') }}</label>

                <div>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password">{{ __('Password') }}</label>

                <div>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <div>
                    <input id="password-confirm" type="password" name="password_confirmation" required
                        autocomplete="new-password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div>
                <div class="py-4 text-sm">
                    <input type="checkbox" name="artist" id="artist" {{ old('artist') ? 'checked' : '' }}>

                    <label for="remember">
                        アーティストとして登録する
                    </label>
                </div>
            </div>

            <div>
                <div class="py-4 pl-24">
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
