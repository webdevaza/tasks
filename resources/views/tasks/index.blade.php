<x-app-layout>

    <x-slot name="header">
        <x-task-components.add-task />
    </x-slot>
    
    <div>
        @foreach ($tasks as $task)
            <x-task-components.task 
                task="{!!$task->task!!}" 
                toDoDate="{!!$task->toDoDate!!}" 
                doneDate="{!!$task->doneDate!!}"
                createDate="{!!$task->created_at!!}"
                editDate="{!!$task->editDate!!}"
                id="{!!$task->id!!}"
            />
        @endforeach
    </div>
</x-app-layout>
