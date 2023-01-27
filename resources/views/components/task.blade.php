<div class="task-div flex flex-row m-4">
    {{-- task-div-start --}}
    <div class="flex gap-2 w-full">
        <div class="flex justify-center items-center mx-2" >
            <input class="justify-center w-6 h-6" type="checkbox" {{$check}}>
        </div>
        <div class="container {{!$check ? "text-stone-800 font-bold font-sans" : "text-gray-500 line-through"}} mx-auto">
            <a class="collapse-button">
                <div class="flex w-full rounded bg-gray-200 ">
                    <p class="p-2">{{$task}}</p>
                </div>
            </a>
            {{-- collapse start --}}
            <div class="collapsible-div hidden ">
                <p>{{$details}}</p>
            </div>
            {{-- collapse end --}}
        </div>
    </div>
    {{-- task-div-end --}}
    <div class="flex mt-1 mb-2 mx-2 " >
        <a class="edit-button "><x-update-logo/></a>
    </div>
    <div class="flex mt-1 mb-2 mx-2">
        <x-delete-logo/>
    </div>
</div>
{{-- edit form start --}}
<div class="edit-div gap-2 w-full hidden" >
    <form class=" flex flex-row m-4" action="">
        <div class="flex m-2 w-full">
            <div class="container text-gray-900 mx-auto">
                <input class="border-2  border-orange-400 border-solid flex w-full rounded bg-gray-100 " type="text" name="task" value="{{$task}}">
            </div>
        </div>
        <button class=" m-2 p-2 bg-orange-400 rounded">Update</button>
    </form>
</div>
{{-- edit form end --}}