@props(['task' => $task])
<div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
    @if(!$task->markedBy(auth()->user()))
    <form action="{{route('task.mark', $task->id)}}" method="post">
        @csrf
        <button type="submit" name="submit">
            <dt class="text-sm font-medium text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22px" height="22px">
                    <path fillRule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clipRule="evenodd" />
                </svg>
            </dt>
        </button>
    </form>
    @else
    <form action="{{route('task.unmark', $task)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="submit">
            <dt class="text-sm font-medium text-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22px" height="22px">
                    <path fillRule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clipRule="evenodd" />
                </svg>
            </dt>
        </button>
    </form>

    @endif
    <dd class="mt-1 text-sm text-gray-900">
        <a href= "{{route('task.show',$task->id)}}" >{{$task->task}}</a>
    </dd>
    <dd class="mt-1 text-sm text-gray-500 flex flex-wrap text-right ml-12">
        <a href="{{route('task.edit', $task->id)}}">
            <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17px" height="17px">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
        </a>
        <form action="{{route('task.delete', $task->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" name="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="19px" height="19px">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </form>
    </dd>
</div>
