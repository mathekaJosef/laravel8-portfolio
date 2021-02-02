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
                                Edit task
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
                            <form action="{{route('task.edit', $task->id)}}" method="post">
                                @csrf
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="task">Task</label>
                                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="task" id="task" value="{{$task->task}}">
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="mb-2 font-bold text-sm text-grey-darkest" for="description">Description</label>
                                    <textarea class="border py-2 px-3 text-grey-darkest" type="text" rows="4" name="description" id="description">{{$task->description}}</textarea>
                                </div>
                                <div class="flex justify-center">
                                    <button class="bg-gray-500 border-gray-500 text-white text-sm p-3 rounded-md" name="submit" type="submit">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection