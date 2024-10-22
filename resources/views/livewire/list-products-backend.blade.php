<div>
    <div class="pt-2 pb-2" colspan="5">
        <input wire:model.live="query" wire:keydown="search" type="text" name="nameProduct" id="nameProduct"
            placeholder="SKU"
            class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <table class="min-w-full divide-y divide-gray-300">
        <thead>
            <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">IMG
                </th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Categoria</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Estado</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Precio</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                    <span class="sr-only">Acciones</span>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
            @foreach ($products as $product)
                <tr>
                    <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                        <div class="flex items-center">
                            <div class="h-11 w-11 flex-shrink-0">
                                <img class="h-11 w-11 rounded-full" src="{{ $product->image }}" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="font-medium text-gray-900">{{ $product->name }}</div>
                                <div class="mt-1 text-gray-500">
                                    SKU:<strong>{{ $product->postItem_id }}</strong></div>
                            </div>
                        </div>
                    </td>
                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                        <div class="text-gray-900">Comentarios</div>
                        <div class="mt-1 text-gray-500">
                            @if ($product->comment == null)
                                <span class="text-gray-400">Sin comentario</span>
                            @else
                                <span class="text-red-500">{{ $product->comment }}</span>
                            @endif
                        </div>
                    </td>
                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                        @if ($product->statusRegister == 1)
                            <span
                                class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                Activo
                            </span>
                        @else
                            <span
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">
                                Inactivo
                            </span>
                        @endif
                    </td>
                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                        {{ env('CURRENCY') . ' ' . number_format($product->price, 2) }}
                    </td>
                    <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">

                        <div class="flex gap-2 justify-center">

                            <a href="{{ route('levelsIndex', $product->id) }}"
                                class="text-green-600 hover:text-green-900" title="Complementos">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                </svg>
                            </a>

                            <a href="{{ route('addCategoriesList', $product->id) }}" title="Categorias">
                                <x-heroicon-o-tag
                                    class="w-6 h-6 text-purple-600 hover:text-purple-900 cursor-pointer" />
                            </a>

                            <a href="{{ route('productEdit', $product->id) }}" class="text-blue-600 hover:text-blue-900"
                                title="Editar">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>

                            <a href="{{ route('productDelete', $product->id) }}" class="text-red-600 hover:text-red-900"
                                title="Borrar">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            <!-- More people... -->
        </tbody>
    </table>
    <div class="pt-5">
        {{ $products->links() }}
    </div>
</div>
