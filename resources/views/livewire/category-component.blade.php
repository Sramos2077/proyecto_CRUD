<div>
<h1 class="text-white font-mono">ALL CATEGORIES</h1>
<div class="bg-white dark:bg-blue-800">
    <x-button wire:click="$set('modalC', true)">crear</x-button>
    <x-dialog-modal wire:model="modalC">
        <x-slot name="title"></x-slot>
        <x-slot name="content"></x-slot>
        <x-slot name="footer"></x-slot>
    </x-dialog-modal>
  <table class="table-auto w-full">
    <thead>
    <tr class="bg-primary text-center">
        <th class="
        w-1/6       
        min-w-[160px]
        text-lg
        font-semibold
        text-white
        py-4
        lg:py-7
        px-3
        lg:px-4
        ">id</th>
        <th class="
        w-1/6
        min-w-[160px]
        text-lg
        font-semibold
        text-white
        py-4
        lg:py-7
        px-3
        lg:px-4
        ">name</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($category as $c)
        <tr>
            <td class="
            text-center text-dark
            font-medium
            text-base
            py-5
            px-2
            bg-[#F3F6FF]
            border-b border-l border-[#E8E8E8]
            ">{{$c -> id}}</td>
            <td class="
            text-center text-dark
            font-medium
            text-base
            py-5
            px-2
            bg-[#F3F6FF]
            border-b border-l border-[#E8E8E8]
            ">{{$c -> name}}</td>
        </tr>
        @endforeach
    </tbody>
   </table>
</div>
<x-button>regresar</x-button>
</div>
