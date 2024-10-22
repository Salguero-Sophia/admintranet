<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8 mt-10">

        <div class="pb-5">
            <input type="text" wire:keydown="search" wire:model.live="producto" placeholder="Search product"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        @include('messages.success')

        @include('messages.error')

        <div class="pb-5">
            @foreach ($familias as $familia)
                @if ($familia->id == 19)
                    <span
                        class="mb-1 cursor-pointer inline-flex items-center gap-x-0.5 rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700
                        @if ($familia->id == $familiaSeleccionada) ring-1 ring-red-700 @endif"
                        wire:click="searchFamilia({{ $familia->id }})" wire:model.live="familia">
                        {{ $familia->name }} <x-heroicon-s-heart class="h-3 w-3 text-red-600" />
                        @if ($familia->id == $familiaSeleccionada)
                            <button type="button"
                                class="cursor-pointer group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-red-600/20"
                                wire:click.stop="searchFamilia({{ 0 }})" wire:model.live="familia">
                                <x-heroicon-o-x-mark
                                    class="h-3.5 w-3.5 stroke-red-700/50 group-hover:stroke-red-700/75" />
                            </button>
                        @endif
                    </span>
                @else
                    <span
                        class="mb-1 cursor-pointer inline-flex items-center gap-x-0.5 rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700
                        @if ($familia->id == $familiaSeleccionada) ring-1 ring-blue-700 @endif"
                        wire:click="searchFamilia({{ $familia->id }})" wire:model.live="familia">
                        {{ $familia->name }}
                        @if ($familia->id == $familiaSeleccionada)
                            <button type="button"
                                class="cursor-pointer group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-blue-600/20"
                                wire:click.stop="searchFamilia({{ 0 }})" wire:model.live="familia">
                                <x-heroicon-o-x-mark
                                    class="h-3.5 w-3.5 stroke-blue-700/50 group-hover:stroke-blue-700/75" />
                            </button>
                        @endif
                    </span>
                @endif
            @endforeach
        </div>
    </div>

    <div class="mx-auto container px-4 sm:px-6 lg:px-8 border-gray-200 border-t-2 pt-10">
        @if ($familiaSeleccionada !== 0)
            <h2 class="text-xl font-bold text-gray-900">
                Categories
            </h2>

            <div class="pt-2 pb-5">
                @foreach ($categorias as $categoria)
                    <span
                        class="mb-1 cursor-pointer inline-flex items-center gap-x-0.5 rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700
                      @if ($categoria->id == $categoriaSeleccionada) ring-1 ring-blue-700 @endif"
                        wire:click="searchCategoria({{ $categoria->id }})" wire:model.live="categoria">
                        {{ $categoria->name }}
                        @if ($categoria->id == $categoriaSeleccionada)
                            <button type="button"
                                class="cursor-pointer group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-blue-600/20"
                                wire:click.stop="searchCategoria({{ 0 }})" wire:model.live="categoria">
                                <x-heroicon-o-x-mark
                                    class="h-3.5 w-3.5 stroke-blue-700/50 group-hover:stroke-blue-700/75" />
                            </button>
                        @endif
                    </span>
                @endforeach
            </div>
        @endif

        <h2 class="text-xl font-bold text-gray-900">
            Products
        </h2>

        <div class="mt-8 grid grid-cols-2 gap-6 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            {{-- Product --}}

            @foreach ($data->data as $producto)
                <div x-data="{ open: false }">
                    <div @click="open = ! open" class="group relative cursor-pointer animate__animated animate__fadeIn">

                        <div class="relative h-72 w-full overflow-hidden rounded-lg  group-hover:opacity-75 p-5">
                            <img src="{{ $producto->image }}" alt=""
                                class="h-full w-full object-cover object-center">
                        </div>

                        <div class="relative mt-4">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">
                                    {{ $producto->name }} </h3>
                                <span class="text-xs text-gray-400">
                                    SKU: {{ $producto->sku }}
                                </span>
                            </div>

                        </div>
                        <div
                            class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">

                            <p class="relative text-lg font-semibold text-white" style="color:#003B7A;">
                                ${{ number_format($producto->price, 2) }}
                            </p>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div>
                        @teleport('body')
                            <div x-show="open" class="fixed inset-0 overflow-y-auto">

                                <!-- Your modal contents here -->
                                <div class="relative z-10" role="dialog" aria-modal="true">

                                    <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block">
                                    </div>

                                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                                            <div
                                                class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                                                <div
                                                    class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                                    <button @click="open = false" type="button"
                                                        class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>

                                                    <div
                                                        class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                                                        <div class="sm:col-span-4 lg:col-span-5">
                                                            <div
                                                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100">
                                                                <img src="{{ $producto->image }}"
                                                                    alt="Back angled view with bag open and handles to the side."
                                                                    class="object-cover object-center">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-8 lg:col-span-7">
                                                            <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">
                                                                {{ $producto->name }}</h2>

                                                            <section aria-labelledby="information-heading" class="mt-3">
                                                                <h3 id="information-heading" class="sr-only">Product
                                                                    information</h3>

                                                                <p class="text-2xl text-gray-900">
                                                                    ${{ number_format($producto->price, 2) }}
                                                                </p>

                                                                <div class="mt-6">
                                                                    <h4 class="sr-only">Description</h4>

                                                                    <p class="text-sm text-gray-700">
                                                                        {{ $producto->description }}</p>
                                                                </div>
                                                                <div class="relative mt-4">
                                                                    <div>
                                                                        <span class="text-gray-400">
                                                                            SKU: {{ $producto->sku }}
                                                                        </span>
                                                                    </div>
                                                                    <div class="pt-5 flex-auto">
                                                                        <a href="{{ route('showProduct', $producto->id) }}"
                                                                            class="relative inline-flex items-center justify-center rounded-md border border-transparent bg-blue-100 px-8 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200">
                                                                            View product
                                                                        </a>
                                                                        <span wire:click="agregarProducto()"
                                                                              class="cursor-pointer relative inline-flex items-center justify-center rounded-md border border-transparent sm-bk-blue px-8 py-2 text-sm font-medium text-white hover:bg-blue-700">
                                                                              Add to cart
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endteleport
                    </div>
                    <!-- End Modal -->

                    {{-- <div class="mt-6 grid sm:grid-cols-2 gap-2">

                        <div class="grid grid-cols-3 gap-4">
                            <div
                                class="cursor-pointer rounded-md bg-sm-color text-white  flex items-center justify-center">
                                +</div>
                            <div class="flex items-center justify-center text-center">1</div>
                            <div
                                class="cursor-pointer rounded-md bg-sm-color text-white  flex items-center justify-center">
                                -</div>
                        </div>

                        <a href="#"
                            class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">
                            Add to bag
                        </a>
                    </div> --}}

                </div>
            @endforeach
        </div>

        <div class="pt-20">

            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                  <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                  <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                  <div>
                    <p class="text-sm text-gray-700">
                      Showing
                      <span class="font-medium">{{ $data->currentPage }}</span>
                      to
                      <span class="font-medium">{{ $data->itemsPerPage }}</span>
                      of
                      <span class="font-medium">{{ $data->totalRecords }}</span>
                      results
                    </p>
                  </div>
                  <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <span wire:click="paginaAnterior()" wire:model.live="paginaActual" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 
                              {{ $paginaActual == 1 ? 'bg-gray-200 disable' : 'hover:bg-gray-50 focus:z-20 focus:outline-offset-0' }}">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    
                        @for ($page = 1; $page <= min(3, $data->totalPages); $page++)
                            <span wire:click="seleccionarPagina({{ $page }})" class="cursor-pointer relative inline-flex items-center px-4 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 focus:z-20 focus:outline-offset-0 
                            {{ $paginaActual == $page ? 'bg-blue-900 text-white' : 'bg-white text-black hover:bg-gray-100 focus:z-20 focus:outline-offset-0' }}" wire:disabled="$paginaActual == 1">{{ $page }}</span>
                        @endfor
                    
                        @if ($data->totalPages > 3)
                            <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                        @endif
                    
                        @for ($page = max(1, $data->totalPages - 2); $page <= $data->totalPages; $page++)
                            <span wire:click="seleccionarPagina({{ $page }})" class="cursor-pointer relative inline-flex items-center px-4 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 focus:z-20 focus:outline-offset-0
                            {{ $paginaActual == $page ? 'bg-blue-900 text-white' : 'bg-white text-black hover:bg-gray-100 focus:z-20 focus:outline-offset-0' }}">{{ $page }}</span>
                        @endfor
                    
                        <span wire:click="paginaSiguiente()" wire:model.live="paginaActual" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 
                              {{ $paginaActual == $data->totalPages ? 'bg-gray-200 disable' : 'hover:bg-gray-50 focus:z-20 focus:outline-offset-0' }}">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </nav>
                  </div>
                </div>
              </div>

        </div>

    </div>
</div>
