<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <form action="" method="post">
                <div class="flex justify-center">
                    <input class="w-full bg-gray-100 text-gray-700 rounded h-14 border-double border-4 border-black" type="text" value="" placeholder="Type your task here.">
                </div>
                <div class="flex justify-center m-4">
                    <button class="bg-amber-300 px-4 py-2 rounded font-bold text-green-900">Add</button>
                </div>
            </form>
        </div>
    </x-slot>
    <div class="container mx-auto">
        <div class="flex flex-row m-4">
            <div class="flex gap-2 w-full">
                <div class="flex justify-center items-center mx-2" >
                    <input class="justify-center w-6 h-6" type="checkbox">
                </div>
                <div class="container text-gray-900 mx-auto">
                    <div class="flex w-full rounded bg-gray-100 ">
                        <p class="p-2">kjnkjn kjsndkjn kjnkjncks lsdnlkdcn</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-1 mb-2 mx-2">
                <x-update-logo/>
            </div>
            <div class="flex mt-1 mb-2 mx-2">
                <x-delete-logo/>
            </div>
        </div>
        <div class="flex flex-row m-4">
            <div class="flex gap-2 w-full">
                <div class="flex justify-center items-center mx-2" >
                    <input class="justify-center w-6 h-6" type="checkbox">
                </div>
                <div class="container text-gray-900 mx-auto">
                    <div class="flex w-full rounded bg-gray-100 ">
                        <p class="p-2">kjnkjn kjsndkjn kjnkjncks lsdnlkdcn</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-1 mb-2 mx-2">
                <x-update-logo/>
            </div>
            <div class="flex mt-1 mb-2 mx-2">
                <x-delete-logo/>
            </div>
        </div>
        <div class="flex flex-row m-4">
            <div class="flex gap-2 w-full">
                <div class="flex justify-center items-center mx-2" >
                    <input class="justify-center w-6 h-6" type="checkbox" checked>
                </div>
                <div class="container text-gray-500 mx-auto line-through">
                    <div class="flex w-full rounded bg-gray-100 ">
                        <p class="p-2 ">kjnkjn kjsndkjn kjnkjncks lsdnlkdcn</p>
                    </div>
                </div>
            </div>
            <div class="flex mt-1 mb-2 mx-2">
                <x-update-logo/>
            </div>
            <div class="flex mt-1 mb-2 mx-2">
                <x-delete-logo/>
            </div>
        </div>
    </div>
</x-app-layout>
