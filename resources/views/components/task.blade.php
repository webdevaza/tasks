<div class="flex flex-row m-4">
    <div class="flex gap-2 w-full">
        <div class="flex justify-center items-center mx-2" >
            <input class="justify-center w-6 h-6" type="checkbox" {{$check}}>
        </div>
        <div class="container {{!$check ? "text-blue-700 font-bold font-sans" : "text-gray-500 line-through"}} mx-auto">
            <div class="flex w-full rounded bg-gray-200 ">
                <p class="p-2">{{$task}}</p>
            </div>
        </div>
    </div>
    <div class="flex mt-1 mb-2 mx-2" >
        <x-update-logo/>
    </div>
    <div class="flex mt-1 mb-2 mx-2">
        <x-delete-logo/>
    </div>
</div>