<x-app-layout>
    {{-- Inicio contenido --}}
    <form method="POST" action="{{ route('productAdd') }}">
        @csrf

        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Datos del producto</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="nameProduct" class="block text-sm font-medium leading-6 text-gray-900">
                            Nombre del Producto
                        </label>
                        <div class="mt-2">
                            <input type="text" name="nameProduct" id="nameProduct" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="postItemId" class="block text-sm font-medium leading-6 text-gray-900">
                            SKU (unico)
                        </label>
                        <div class="mt-2">
                            <input type="number" name="postItemId" id="postItemId" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="descriptionProduct" class="block text-sm font-medium leading-6 text-gray-900">
                            Descripción
                        </label>
                        <div class="mt-2">
                            <textarea id="descriptionProduct" name="descriptionProduct" rows="2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Descripcion larga del producto</p>
                    </div>

                    <div class="sm:col-1">
                        <label for="priceProduct" class="block text-sm font-medium leading-6 text-gray-900">
                            Precio ({{ env('CURRENCY') }})
                        </label>
                        <div class="mt-2">
                            <input type="number" name="priceProduct" id="priceProduct" step="any"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="productCommet" class="block text-sm font-medium leading-6 text-gray-900">
                            Comment
                        </label>
                        <div class="mt-2">
                            <textarea id="productCommet" name="productCommet" rows="2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Detalles adicionales del producto</p>
                    </div>

                    <div class="col-span-full">
                        <label for="productImage" class="block text-sm font-medium leading-6 text-gray-900">
                            Imagen de producto
                        </label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                    <label for="productImage"
                                        class="cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Subir imagen</span>
                                        <input id="productImage" name="productImage" type="file" class="sr-only">
                                    </label>

                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, up to 2MB</p>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="useTakeOutPriceProduct"
                            class="block text-sm font-medium leading-6 text-gray-900">Use Take Out Price</label>
                        <div class="mt-2">
                            <select id="useTakeOutPriceProduct" name="useTakeOutPriceProduct"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                <option value="true">True (Default)</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="quantityProduct" class="block text-sm font-medium leading-6 text-gray-900">
                            Quantity
                        </label>
                        <div class="mt-2">
                            <input type="number" name="quantity" id="quantity" placeholder="default 1"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="isDefaultProduct" class="block text-sm font-medium leading-6 text-gray-900">Is
                            Default </label>
                        <div class="mt-2">
                            <select id="isDefaultProduct" name="isDefaultProduct"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                <option value="true">True (Default)</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear</button>
        </div>
    </form>


    {{-- Fin Contenido --}}
</x-app-layout>
