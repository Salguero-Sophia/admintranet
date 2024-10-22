@php
    $cantidadProductos = 12;

    $categorias = (object) [
        (object) [
            'nombre' => 'Bread',
            'cantidad' => 21,
        ],
        (object) [
            'nombre' => 'Homemade Cookies',
            'cantidad' => 7,
        ],
        (object) [
            'nombre' => 'Ready to Bake Bread',
            'cantidad' => 2,
        ],
        (object) [
            'nombre' => 'Snacks',
            'cantidad' => 5,
        ],
        (object) [
            'nombre' => 'Ready to Bake Bread',
            'cantidad' => 25,
        ],
    ];
@endphp
<x-frontEndLayout title="Promotions">

    <main>
        <div>
            {{-- Productos --}}

            <div class="bg-white">

                <div class="mx-auto max-w-2xl px-4 py-10 sm:px-6 lg:max-w-7xl lg:px-8">

                    <div class="pt-5 pb-10">
                        @foreach ($categorias as $categoria)
                            <a href="#">
                                <span
                                    class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                    {{ $categoria->nombre }} ({{ $categoria->cantidad }})
                                </span>
                            </a>
                        @endforeach

                    </div>

                    <div
                        class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">

                        @for($i=1; $i <= 8; $i++)
                        <div
                            class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                            <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                                <img src="{{ asset('static_files/catering/'.$i.'.jpg') }}"
                                    alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green."
                                    class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                            </div>
                            <div class="flex flex-1 flex-col space-y-2 p-4">
                                <h3 class="text-sm font-medium text-gray-900">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee 8-Pack
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh
                                    shirt all week, and an extra for laundry day.</p>
                                <div class="flex flex-1 flex-col justify-end">
                                    <p class="text-sm italic text-gray-500">8 colors</p>
                                    <p class="text-base font-medium text-gray-900">$256</p>
                                    <button class="mt-5 flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add to car</button>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <!-- More products... -->
                    </div>
                </div>
            </div>
            {{-- Fin Productos --}}
        </div>
    </main>

</x-frontEndLayout>
