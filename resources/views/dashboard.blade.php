<x-app-layout>

    <x-slot name="header">
        <div class="container mx-auto">
            <form action="" method="post">
                <div class="flex justify-center">
                    <input name="new_task" class="w-full bg-gray-100 text-gray-700 rounded h-14 border-double border-4 border-black" type="text" value="" placeholder="Type your task here.">
                    {{-- datepicker start --}}
                    <input id="date-input" class="flex rounded m-2 w-28 text-center" name="date" placeholder="DATE"/>
                    {{-- datepicker end --}}
                </div>
                <div class="flex justify-center m-4">
                    <button class="bg-amber-300 px-4 py-2 rounded font-bold text-green-900">Add</button>
                </div>
            </form>
        </div>
    </x-slot>
        <x-task task="Birinchi jumush" check="" details="1 jumush"/>
        <x-task task="Ekinchi jumush" check="" details="1 jumush"/>
        <x-task task="Uchunchu jumush" check="" details="1 jumush"/>
        <x-task task="dfdf jumush" check="" details="1 jumush"/>
        <x-task task="dfvdfv jumush" check="" details="1 jumush"/>
        <x-task task="ghnghn jumush" check="" details="1 jumush"/>
        <x-task task="hj,jk, jumush" check="checked" details="1 jumush"/>
        <x-task task="ghjumy jumush" check="checked" details="1 jumush"/>
        <x-task task="ghjumy jumush" check="checked" details="1 jumush"/>
        <x-task task="ghjumy jumush" check="checked" details="1 jumush"/>
        <x-task task="o;io jumush" check="checked" details="1 jumush"/>
        <x-task task="Tortyujuyujunchu jumush" check="checked" details="1 jumush"/>
        
    </div>
</x-app-layout>
