<div class="py-12" x-data="{ add_modal: false}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Listando -->
                    <div class="grid grid-cols-4">
                        <div class="p-3 m-0.5 border rounded-lg bg-green-100 hover:bg-green-300 cursor-pointer" @click="add_modal = true">
                         Add
                     </div>



                     @foreach(Auth::user()-> Communities as $community)
                     <div class="p-3 border">
                         <div class="mt-3 px-2 border-b">{{ $community->name}} {{ $community->gamename}} {{ $community->description}}</div>
                          <div class="grid grid-cols-2 text-center">
                          <a class="bg-indigo-200 rounded-bl-lg hover:bg-indigo-300" href="">Edit</a>
                          <a class="bg-red-200 rounded-br-lg hover:bg-red-300" href="{{ route('rm-community', $community)}}">Delete</a>

                        </div>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
     <div class="fixed z-10 inset-0 overflow-y-auto" x-show="add_modal">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" >
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
  </div>

  <!-- This element is to trick the browser into centering the modal contents. -->
  <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                
                    <div class="p-3">
                        <h1>Add Community</h1>
                        <form action="{{ route('add-community') }}">
                            @csrf
                        
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            
            <div class="mt-4">
                <x-label for="gamename" :value="__('GameName')" />

                <x-input id="gamename" class="block mt-1 w-full" type="text" name="gamename" :value="old('gamename')" required />
            </div>

            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full" type="Text" name="description" :value="old('description')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-red-600 hover:text-red-900" @click="add_modal = false">
                    {{ __('Cancel') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Add') }}
                </x-button>
            </div>








                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>