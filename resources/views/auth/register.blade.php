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
                                Register
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
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="first_name">Name</label>
                                    <input id="name" class="border py-2 px-3 text-grey-darkest @error('name') border-red-300 rounded-sm @enderror" type="text" name="name" value="{{old('name')}}">
                                </div>
                                @error('name')
                                    <div class="text-red-500 text-sm mb-1">
                                        {{$message}}
                                    </div>
                                @enderror
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="first_name">Username</label>
                                    <input id="username" class="border py-2 px-3 text-grey-darkest @error('username') border-red-300 rounded-sm @enderror" type="text" name="username" value="{{old('username')}}">
                                </div>
                                @error('username')
                                    <div class="text-red-500 text-sm mb-1">
                                        {{$message}}
                                    </div>
                                @enderror
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="first_name">Email</label>
                                    <input id="email" class="border py-2 px-3 text-grey-darkest @error('email') border-red-300 rounded-sm @enderror" type="text" name="email" value="{{old('email')}}">
                                </div>
                                @error('email')
                                    <div class="text-red-500 text-sm mb-1">
                                        {{$message}}
                                    </div>
                                @enderror
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="first_name">Password</label>
                                    <input id="password" class="border py-2 px-3 text-grey-darkest @error('password') border-red-300 rounded-sm @enderror" type="password" name="password">
                                </div>
                                @error('password')
                                    <div class="text-red-500 text-sm mb-1">
                                        {{$message}}
                                    </div>
                                @enderror
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="first_name">Password again</label>
                                    <input id="password_confirmation" class="border py-2 px-3 text-grey-darkest" type="password" name="password_confirmation">
                                </div>
                                <div class="flex justify-center">
                                    <button class="bg-gray-500 border-gray-500 text-white text-sm p-3 rounded-md" name="submit" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection