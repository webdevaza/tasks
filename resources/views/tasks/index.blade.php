<x-app-layout>

    <x-slot name="header">
        <div class="container mx-auto">
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                <div class="flex justify-center">
                    <input name="task" class="w-full bg-gray-100 text-gray-700 rounded h-14 border-double border-4 border-black" type="text" value="{{old('task')}}" placeholder="Type your task here." autocomplete="off">
                    
                    {{-- datepicker start --}}
                    <input name="toDoDate" id="date-input" class="flex rounded m-2 w-28 text-center" placeholder="DATE" value="{{old('toDoDate')}}" />
                    {{-- datepicker end --}}
                </div>
                <div class="flex justify-center m-4">
                    <button class="bg-amber-300 px-4 py-2 rounded font-bold text-green-900" type="submit" onclick="formatDate()">Add</button>
                </div>
            </form>
        </div>
    </x-slot>
    
    <div>
        @foreach ($tasks as $task)
            <x-task task="{!!$task->task!!}" 
                    toDoDate="{!!$task->toDoDate!!}" 
                    doneDate="{!!$task->doneDate!!}"
                    createDate="{!!$task->created_at!!}"
                    editDate="{!!$task->editDate!!}"
                    id="{!!$task->id!!}"/>
        @endforeach
    </div>
</x-app-layout>
