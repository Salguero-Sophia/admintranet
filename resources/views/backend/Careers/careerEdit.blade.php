<x-app-layout>
    {{-- Inicio contenido --}}
    <form method="POST" action="{{ route('careerUpdate', $career->id) }}">
        @csrf

        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Datos del puesto</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Modificar vacante.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">
                            Título del puesto
                        </label>
                        <div class="mt-2">
                            <input value="{{ $career->title }}" type="text" name="title" id="title"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('title')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">
                            Descripción
                        </label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="2"
                                class="ckeditor block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $career->description }}</textarea>
                        </div>
                        @error('description')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-span-full">
                        <label for="we_offer" class="block text-sm font-medium leading-6 text-gray-900">
                            Ofrecemos
                        </label>
                        <div class="mt-2">
                            <textarea id="we_offer" name="we_offer" rows="2"
                                class="ckeditor block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $career->we_offer }}</textarea>
                        </div>
                        @error('we_offer')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-span-full">
                        <label for="requirements" class="block text-sm font-medium leading-6 text-gray-900">
                            Requerimos
                        </label>
                        <div class="mt-2">
                            <textarea id="requirements" name="requirements" rows="2"
                                class="ckeditor block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $career->requirements }}</textarea>
                        </div>
                        @error('requirements')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="salary_range" class="block text-sm font-medium leading-6 text-gray-900">
                            Rango salarial
                        </label>
                        <div class="mt-2">
                            <input type="text" name="salary_range" id="salary_range" autocomplete="given-name" value="{{ $career->salary_range }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('salary_range')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1">
                        <label for="type_id" class="block text-sm font-medium leading-6 text-gray-900">
                            Tipo
                        </label>
                        <select name="type_id" id="type_id"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="{{ $career->type_id }}" selected>
                                {{ $career->getTypeCareer->title }}
                            </option>
                            @foreach($typeOfCareers as $type)
                                @if($type->id !== $career->getTypeCareer->id)
                                    <option value="{{ $type->id }}">
                                        {{ $type->title }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('type_id')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-span-1">
                        <label for="store_id" class="block text-sm font-medium leading-6 text-gray-900">
                            Tienda
                        </label>
                        <select name="store_id" id="store_id"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="{{ $career->store_id }}" selected>
                                {{ $career->getStore->name }}
                            </option>
                            @foreach($stores as $store)
                                @if($store->id !== $career->getStore->id)
                                    <option value="{{ $store->id }}">
                                        {{ $store->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('store_id')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-2">
                        <label for="is_active"
                            class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                        <select id="is_active" name="is_active"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-blue-800 sm:text-sm sm:leading-6">
                            <option @if ($career->is_active == 1) selected @endif value="1">Activo</option>
                            <option @if ($career->is_active == 0) selected @endif value="0">Inactivo</option>
                        </select>
                    </div>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('showCareers') }}" type="button"
                class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
    </form>

    @push('customScripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    @endpush


    {{-- Fin Contenido --}}
</x-app-layout>
