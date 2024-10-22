<x-app-layout>
    {{-- Inicio contenido --}}
    <form method="POST" action="{{ route('levelAddProductRelation') }}">
        @csrf

        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Nivel: {{ $level->nameLevel }}</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <input type="hidden" name="indexProduct_id" id="product_id" value="{{ $level->getProduct->id }}">
                    <input type="hidden" name="level_id" id="product_id" value="{{ $level->id }}">


                    <div class="sm:col-span-2">
                        <label for="product_id"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            Seleccionar producto
                        </label>
                        <div class="mt-2">
                            <select id="product_id" name="product_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                <option value="">Seleccionar</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }} - {{ $product->postItem_id }}</option>
                                @endforeach
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
