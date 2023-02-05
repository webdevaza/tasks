<div class="task-div flex flex-row m-4">
    
    {{-- ALL PHP THE LOGIC --}}
        @php
            //TO FULFIL
            $do = "";
            $today = date("Y-m-d");

            if ($toDoDate && $toDoDate == $today) {
                $do = "today";
            }
            elseif (!$toDoDate) {
                $do = "anytime";
            } 
            else {
                $do = $toDoDate;
            }
            
            //FULFILLED
            $done = $doneDate ? ($doneDate == $today ? "today" : $doneDate) : "not yet";

            //ADDED: trimming createDate, getting rid of hours-minutes-seconds   
            $arr = explode(' ', $createDate);
            $added = $arr[0];

            //STATUS
            $status = ""; $statusColor = "";

            if (($doneDate && $toDoDate) && $doneDate == $toDoDate) {
                $status = "done on time";
                $statusColor = "text-green-700 font-bold";
            }
            elseif ($doneDate && !$toDoDate) {
                $status = "done";
                $statusColor = "text-green-700 font-bold";
            }
            elseif ($doneDate && $doneDate > $toDoDate) {
                $status = "done late";
                $statusColor = "text-orange-700 font-bold";
            }
            elseif ($doneDate && $doneDate < $toDoDate) {
                $status = "done early";
                $statusColor = "text-cyan-600 font-bold";
            }
            elseif ((!$doneDate && $today <= $toDoDate) || (!$doneDate && !$toDoDate)) {
                $status = "not yet";
                $statusColor = "text-slate-600 font-bold";
            }
            elseif (!$doneDate && $today > $toDoDate) {
                $status = "overdue";
                $statusColor = "text-red-600 font-bold";
            }
        @endphp

    {{-- task-div-start --}}
    <div class="flex gap-2 w-full">
        <div class="flex justify-center items-center mx-2" >
            <input class="justify-center w-6 h-6" 
                   type="checkbox" 
                   {{$doneDate ? "checked" : ""}}
            />
        </div>
        <div class="container mx-auto ">
            <a class="collapse-button cursor-pointer">
                <div class="flex w-full rounded bg-gray-200" title="Click to see details">
                    <p class="p-2 {{!$doneDate ? ($status == "overdue" ? $statusColor : "text-stone-800 font-bold font-sans") : "text-gray-500 line-through"}}">{{$task}}</p>
                </div>
            </a>
            
            {{-- collapse start --}}
            <div class="collapsible-div hidden p-2">
                <div class="flex flex-wrap">
                    <div class="m-2 basis-auto ">
                        <label class="m-2 text-stone-100 font-bold font-sans">TO FULFIL</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700 text-center">{{$do}}</p> 
                    </div>
                    <div class="m-2 basis-auto ">
                        <label class="m-2 text-stone-100 font-bold font-sans">FULFILLED</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700 text-center">{{$done}}</p> 
                    </div>
                    <div class="m-2 basis-auto">
                        <label class="m-2 text-stone-100 font-bold font-sans">ADDED</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700 text-center">{{$added}}</p> 
                    </div>
                    <div class="m-2 basis-auto {{$editDate ? "" : "hidden"}}">
                        <label class="m-2 text-stone-100 font-bold font-sans">EDITED</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700 text-center">{{$editDate}}</p> 
                    </div>
                    <div class="m-2 basis-auto">
                        <label class="m-2 text-stone-100 font-bold font-sans">STATUS</label><p class="bg-lime-200 p-2 rounded w-auto {{$statusColor}} text-center">{{$status}}</p> 
                    </div>
                </div>
            </div>
            {{-- collapse end --}}
        
        </div>
    </div>
    {{-- task-div-end --}}
    
    <div class="flex mt-1 mb-2 mx-2 " >
        <a class="edit-button cursor-pointer" title="Click to edit this task"><x-task-components.update-logo/></a>
    </div>

    <form action="{{route('tasks.destroy',$id)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="flex mt-1 mb-2 mx-2" title="Delete this task">
            <button type="submit"><x-task-components.delete-logo/></button>
        </div>
    </form>
</div>

{{-- edit form start --}}
<div class="edit-div gap-2 w-full hidden" >
    <form class=" flex flex-row m-4" action="{{route('tasks.update', $id)}}" method="POST">
        {{ method_field('PUT') }}
        @csrf
        <div class="flex m-2 w-full">
            <div class="container text-gray-900 mx-auto">
                <input class="border-2  border-orange-400 border-solid flex w-full rounded bg-gray-100 " type="text" name="task" value="{{$task}}">
            </div>
            {{-- <div class="date-input w-6 h-6 m-2 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <input name="toDoDate" class="date-input hidden"/>
            </div> --}}
            <div class="update-date"></div>
        </div>
        <button class="m-2 p-2 bg-orange-400 rounded">Update</button>
        <a class="cancel-button m-2 p-2 cursor-pointer"><x-close-button/></a>
    </form>
</div>
{{-- edit form end --}}