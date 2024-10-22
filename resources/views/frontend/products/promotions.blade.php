<x-frontEndLayout title="Promotions">

    <main>
        <div class="bg-gray-50">
            {{-- Productos --}}

            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">

                        @for($i = 1; $i <= 7; $i++ )
                        <a href="#" class="group">
                            <div
                                class="aspect-h-1 h-[500px] aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                                <img src="{{ asset('static_files/promotions/'.$i.'.jpg') }}"
                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                <h3>Focus Paper Refill</h3>
                                <p>$13</p>
                            </div>
                            <p class="mt-1 text-sm italic text-gray-500">
                                3 sizes available <br>
                                <button class="mt-5 flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add to car</button>
                            </p>
                        </a>
                        @endfor
                        <!-- More products... -->
                    </div>
                </div>
            </div>

        </div>
    </main>

</x-frontEndLayout>
