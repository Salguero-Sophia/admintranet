<x-app-layout>
    {{-- Inicio contenido --}}
    <form method="POST" action="{{ route('familyUpdate', $family->id) }}">
        @csrf

        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Datos de la Familia</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Modificar familia.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="nameFamily" class="block text-sm font-medium leading-6 text-gray-900">
                            Nombre Familia
                        </label>
                        <div class="mt-2">
                            <input value="{{ $family->name }}" type="text" name="nameFamily" id="nameFamily"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="orderFamily" class="block text-sm font-medium leading-6 text-gray-900">
                            Orden
                        </label>
                        <div class="mt-2">
                            <input value="{{ $family->order }}" type="number" name="orderFamily" id="orderFamily"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="descriptionFamily" class="block text-sm font-medium leading-6 text-gray-900">
                            Descripción
                        </label>
                        <div class="mt-2">
                            <textarea id="descriptionFamily" name="descriptionFamily" rows="2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $family->description }}</textarea>
                        </div>
                    </div>

                    <div class="pt-2">
                        <label for="statusRegisterFamily"
                            class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                        <select id="statusRegisterFamily" name="statusRegisterFamily"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-blue-800 sm:text-sm sm:leading-6">
                            <option @if ($family->statusRegister == 1) selected @endif value="1">Activo</option>
                            <option @if ($family->statusRegister == 0) selected @endif value="0">Inactivo</option>
                        </select>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('familiesList') }}" type="button"
                class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
    </form>


    {{-- Fin Contenido --}}
</x-app-layout>