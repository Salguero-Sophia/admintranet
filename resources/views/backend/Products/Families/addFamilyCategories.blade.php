<x-app-layout>
    {{-- Inicio contenido --}}

    @if (session('success'))
    <div class="pt-3 pb-5">
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        {{-- <button type="button"
                            class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                            </svg>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="px-4 sm:px-6 lg:px-8">

        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold leading-6 text-gray-900 pb-5">{{ $family->name }}</h1>
            <h1 class="text-base font-semibold leading-6 text-gray-900">Categorias</h1>
            <p class="mt-2 text-sm text-gray-700">Lista de categorias asignadas.</p>
          </div>
          <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            
            <form method="POST" action="{{ route('addCategory') }}" class="mt-4">
                
                @csrf

                <input type="hidden" name="familyId" value="{{ $family->id }}">

                <div class="flex items-center">
                    <select name="categoryId" id="categoryId"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option  disabled selected>Seleccione...</option>
                        @foreach($selectCategories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="flex ml-3">
                        <button type="submit">
                            <x-heroicon-o-plus-circle class="w-6 h-6 text-blue-800 hover:text-blue-600 cursor-pointer" />
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>


        <div class="mt-8 flow-root">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            @if ($categories)
              <table class="min-w-full divide-y divide-gray-300">
                <thead>
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Detalle</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Estado</th>
                    <th scope="col" class="text-sm relative py-3.5 pl-3 pr-4 sm:pr-0">
                      <span class="sr-only">Acciones</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                     @foreach($categories as $category)
                     <tr>
                         <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                             <div class="font-medium text-gray-900">{{ $category->name }}</div>
                             <div class="mt-1 text-gray-500">Descripción: <strong>{{ $category->description }}</strong></div>
                         </td>
                         <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                             @if($category->statusRegister == 1)
                             <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                 Activo
                             </span>
                             @else
                             <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">
                                 Inactivo
                             </span>
                             @endif
                         </td>
                         <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                             <div class="flex gap-2 justify-center">
                                <a href="{{ route('familyCategoryDelete', [$family->id, $category->id], ) }}" class="text-red-600 hover:text-red-900" title="Borrar">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                 </a>
                             </div>
                         </td>
                     </tr>
                     @endforeach
            @else
                <h3>Sin Categorias</h3>    
            @endif   
                  <!-- More people... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    {{-- Fin Contenido --}}
    </x-app-layout>
