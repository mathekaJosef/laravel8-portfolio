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
                            Todos
                        </h3>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <a href="{{route('create.task')}}" class="mt-1 max-w-2xl text-sm text-gray-500">
                        <svg class="object-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="26px" height="26px">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @if(session('success'))
            <div class="bg-green-600 p-4 text-sm text-white">
                {{session('success')}}
            </div>
        @endif
        <div class="border-t border-gray-200">
            <dl>
            @if($tasks->count())
                @foreach($tasks as $task)
                    <x-task :task="$task"/>
                @endforeach
                <div class="p-2">{{$tasks->links()}}</div>
            @else
            <div class="bg-gray-50 px-4 py-5 flex justify-center">No tasks available, create one</div>
            @endif
        </div>
        </div>

    </div>
@endsection