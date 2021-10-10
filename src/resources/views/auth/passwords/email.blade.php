@extends('layouts.app')

@section('content')
<div class="flex justify-center flex-wrap">
    <div class="w-full text-center text-3xl p-4">{{ __('Reset Password') }}</div>

    <div class="py-2">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label for="email">{{ __('E-Mail Address') }}</label>

                <div>
                    <input id="email" type="email"
                        class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="py-4">
                <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
