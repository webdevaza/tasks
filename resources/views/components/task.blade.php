<div class="task-div flex flex-row m-4">
    
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
                <div class="flex w-full rounded bg-gray-200 ">
                    <p class="p-2 {{!$doneDate ? "text-stone-800 font-bold font-sans" : "text-gray-500 line-through"}}">{{$task}}</p>
                </div>
            </a>
            
            {{-- collapse start --}}
            <div class="collapsible-div hidden p-2">
                @php
                    //TO FULFIL
                    $do = $toDoDate ? $toDoDate : "anytime";

                    //FULFILLED
                    $done = $doneDate ? $doneDate : "not yet";

                    //ADDED: trimming createDate, getting rid of hours-minutes-seconds   
                    $arr = explode(' ', $createDate);
                    $added = $arr[0];

                    //EDITED
                    $edited = $editDate ? $editDate : "not edited";

                    //STATUS
                    $status = $doneDate && $doneDate == $toDoDate ? "done on time" : "LATE";

                    
                @endphp
                <div class="flex flex-wrap">
                    <div class="m-2 basis-auto ">
                        <label class="m-2 text-stone-100 font-bold font-sans">TO FULFIL</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700">{{$do}}</p> 
                    </div>
                    <div class="m-2 basis-auto ">
                        <label class="m-2 text-stone-100 font-bold font-sans">FULFILLED</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700">{{$done}}</p> 
                    </div>
                    <div class="m-2 basis-auto">
                        <label class="m-2 text-stone-100 font-bold font-sans">ADDED</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700">{{$added}}</p> 
                    </div>
                    <div class="m-2 basis-auto">
                        <label class="m-2 text-stone-100 font-bold font-sans">EDITED</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700">{{$edited}}</p> 
                    </div>
                    <div class="m-2 basis-auto">
                        <label class="m-2 text-stone-100 font-bold font-sans">STATUS</label><p class="bg-lime-200 p-2 rounded w-28 text-blue-700">{{$status}}</p> 
                    </div>
                </div>
                {{-- <div class="mx-2 flex">
                    <p class="m-2 {{!$doneDate ? "text-stone-100 font-bold font-sans" : "text-gray-500"}}">The task was planned on  </p>
                </div> --}}
            </div>
            {{-- collapse end --}}
        
        </div>
    </div>
    {{-- task-div-end --}}
    
    <div class="flex mt-1 mb-2 mx-2 " >
        <a class="edit-button cursor-pointer"><x-update-logo/></a>
    </div>

    <form action="{{route('tasks.destroy',$id)}}" method="post">
        @csrf
        @method('DELETE')
        <div class="flex mt-1 mb-2 mx-2">
            <button type="submit"><x-delete-logo/></button>
        </div>
    </form>
</div>

{{-- edit form start --}}
<div class="edit-div gap-2 w-full hidden" >
    <form class=" flex flex-row m-4" action="">
        <div class="flex m-2 w-full">
            <div class="container text-gray-900 mx-auto">
                <input class="border-2  border-orange-400 border-solid flex w-full rounded bg-gray-100 " type="text" name="task" value="{{$task}}">
            </div>
        </div>
        <a class="cancel-button m-2 p-2 cursor-pointer"><x-close-button/></a>
        <button class=" m-2 p-2 bg-orange-400 rounded">Update</button>
    </form>
</div>
{{-- edit form end --}}