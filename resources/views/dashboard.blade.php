<x-app-layout>

    <x-slot name="header">
        <div class="container mx-auto">
            <form action="" method="post">
                <div class="flex justify-center">
                    <input name="new_task" class="w-full bg-gray-100 text-gray-700 rounded h-14 border-double border-4 border-black" type="text" value="" placeholder="Type your task here.">
                </div>
                <div class="flex justify-center m-4">
                    <button class="bg-amber-300 px-4 py-2 rounded font-bold text-green-900">Add</button>
                </div>
            </form>
        </div>
    </x-slot>
    <div class="container mx-auto pb-2">
        <x-task-update />
        <x-task task="Birinchi jumush" check=""/>
        <x-task task="Ekinchi jumush" check=""/>
        <x-task task="Uchunchu jumush" check=""/>
        <x-task task="dfdf jumush" check=""/>
        <x-task task="dfvdfv jumush" check=""/>
        <x-task task="ghnghn jumush" check=""/>
        <x-task task="hj,jk, jumush" check="checked" />
        <x-task task="ghjumy jumush" check="checked" />
        <x-task task="o;io jumush" check="checked" />
        <x-task task="Tortyujuyujunchu jumush" check="checked" />
        
    </div>
</x-app-layout>
