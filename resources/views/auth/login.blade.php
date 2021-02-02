@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg w-4/12">
            <div class="flex items-center justify-between h-16 px-4">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="flex items-baseline space-x-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Login
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                <div class="bg-gray-50">
                    <div class="flex w-full bg-teal-lighter">
                        <div class="w-full bg-white rounded shadow-lg p-8 m-4">
                            @if(session('status'))
                                <div class="bg-red-500 p-4 text-white text-sm rounded-sm mb-4">{{session('status')}}</div>
                            @endif
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="email">Email</label>
                                    <input class="border py-2 px-3 text-grey-darkest @error('email') border-red-300 rounded-sm @enderror" type="text" name="email" id="email">
                                </div>
                                @error('email')
                                    <div class="text-red-500 text-sm mb-1">
                                        {{$message}}
                                    </div>
                                @enderror
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="password">Password</label>
                                    <input class="border py-2 px-3 text-grey-darkest @error('password') border-red-300 rounded-sm @enderror" type="password" name="password" id="password">
                                </div>
                                @error('password')
                                    <div class="text-red-500 text-sm mb-1">
                                        {{$message}}
                                    </div>
                                @enderror
                                <div class="flex justify-center">
                                    <button class="bg-gray-500 border-gray-500 text-white text-sm p-3 rounded-md" name="submit" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection