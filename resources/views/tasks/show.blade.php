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
                                Todo "{{ $task->task }}"
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="{{route('tasks')}}" class="mt-1 max-w-2xl text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="26px" height="26px">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                <div class="bg-gray-50">
                    <div class="flex w-full bg-teal-lighter">
                        <div class="w-full bg-white rounded shadow-lg p-8 m-4">
                            <p>{{ $task->description }}</p>
                            <small>{{ $task->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
