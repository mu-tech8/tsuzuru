@extends('layouts.app')

@section('content')
<div class="flex justify-center flex-wrap">
    <div class="w-full text-center text-3xl p-4">{{ __('Verify Your Email Address') }}</div>

    <div>
        @if (session('resent'))
        <div role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif

        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form
            class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-full"
                type="submit">{{ __('click here to request another') }}</button>.
        </form>
    </div>
</div>

@endsection
