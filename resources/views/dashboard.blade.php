<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ add_modal: false}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div  class="block text-center textx1 pb-3">
                <h1> Games </h1>
              @include('games')

               </div>
               
              <div class="block text-center textx1 pb-3">
                <h1> Community </h1>
                @include('community')
              
              </div>

<div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="add_modal"></div>
          </div>
    </div>
</x-app-layout>
