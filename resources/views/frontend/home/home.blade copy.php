<x-frontEndLayout title="Home" x-data={}>
    {{-- Inicio Contenido --}}

    <header class="relative overflow-hidden">
        <!-- Hero section -->
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <img class="h-25 w-auto" src="{{ asset('Logo-SM.svg') }}" alt="Logo Azul">
                    <p class="mt-4 text-xl text-center text-gray-500">
                        In everything we do, we put our heart into it. <br />
                        We have the perfect experience for you! <br />
                        <br />
                        <span class="text-sm">
                            *The best place to celebrate.
                        </span>
                    </p>

                    <div class="pt-10 text-center">
                        <a href="{{ route('menu') }}" class="inline-block rounded-md border border-transparent bg-blue-600 px-8 py-3 text-center font-medium text-white hover:bg-blue-700">
                            Order now!
                        </a>
                    </div>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div aria-hidden="true"
                            class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img src="{{ $bannerImages[0]->image_path }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ $bannerImages[1]->image_path  }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ $bannerImages[2]->image_path  }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ $bannerImages[3]->image_path  }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ $bannerImages[4]->image_path  }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ $bannerImages[5]->image_path  }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ $bannerImages[6]->image_path  }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>

        <!-- Category section -->

        <section aria-labelledby="category-heading" class="bg-gray-100">
            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="sm:flex sm:items-baseline sm:justify-between">
                    <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Categories</h2>
                </div>
 
                <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 lg:gap-x-8">

                    @foreach ($categoriesImages as $categoryImage)

                        <?php
                            $image_path = Storage::disk('s3')->temporaryUrl(
                                $categoryImage->image_path, 
                                now()->addMinutes(1)
                            );
                        ?>

                        <div class="group relative">
                            <div data-aos="fade-up" data-aos-duration="500"
                                class="h-96 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2 group-hover:opacity-75 sm:h-auto">
                                <img src="{{ $image_path }}" alt="first-banner"
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">
                                <a href="{{ $categoryImage->href }}">
                                    <span class="absolute inset-0"></span>
                                    {{$categoryImage->name}}
                                </a>
                            </h3>
                        </div>
                        
                    @endforeach
                    
                </div>

            </div>
        </section>

        <!-- Featured section -->

        <section aria-labelledby="cause-heading">
            <div class="relative bg-gray-800 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                <div class="absolute inset-0 overflow-hidden">
                    
                    <?php
                        $reserve_image_path = Storage::disk('s3')->temporaryUrl(
                            $reserveImage->image_path, 
                            now()->addMinutes(1)
                        );
                    ?>

                    <img src="{{ $reserve_image_path }}" alt="reserve-now"
                        class="h-full w-full object-cover object-center">
                </div>
                <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
                <div data-aos="zoom-in-down" data-aos-duration="1000"
                    class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Reserve now!</h2>
                    <div class="mt-6">
                        <script type='text/javascript'
                            src='//www.opentable.com/widget/reservation/loader?rid=1085668&type=standard&theme=standard&color=5&dark=false&iframe=true&domain=com&lang=en-US&newtab=true&ot_source=Restaurant%20website&cfe=true'>
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <!-- Favorites section -->

        <section aria-labelledby="favorites-heading">
            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="sm:flex sm:items-baseline sm:justify-between">
                    <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">To share love
                    </h2>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 lg:gap-x-8">
                    
                    @foreach ($favoritesImages as $favoriteImage)

                    <?php
                        $image_path = Storage::disk('s3')->temporaryUrl(
                            $favoriteImage->image_path, 
                            now()->addMinutes(1)
                        );
                    ?>

                        <div class="group relative">
                            <div
                                class="h-96 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2 group-hover:opacity-75 sm:h-auto">
                                <img data-aos="fade-up" data-aos-duration="500"
                                    src="{{ $image_path }}" alt="first-favorite-banner"
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">
                                <a href="{{ $favoriteImage->href }}">
                                    <span class="absolute inset-0"></span>
                                    {{$favoriteImage->name}}
                                </a>
                            </h3>
                        </div>
                        
                    @endforeach
                    
                </div>

            </div>
        </section>

        <!-- CTA section -->
        <section aria-labelledby="sale-heading">
            <div class="overflow-hidden pt-32 sm:pt-14">
                <div class="bg-sm-color">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="relative pb-16 pt-48 sm:pb-24">
                            <div>
                                <h2 id="sale-heading"
                                    class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                                    Get to know
                                    <br>
                                    a little more...
                                </h2>
                                <div class="mt-6 text-base">
                                    <a href="{{ route('careers') }}" class="font-semibold text-white">
                                        Show me
                                        <span aria-hidden="true"> &rarr;</span>
                                    </a>
                                </div>
                            </div>

                            <div
                                class="absolute -top-32 left-1/2 -translate-x-1/2 transform sm:top-6 sm:translate-x-0">
                                <div class="ml-24 flex min-w-max space-x-6 sm:ml-3 lg:space-x-8">
                                    <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                        <div class="flex-shrink-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('get-to-know-me/SAN_39.jpg') }}" alt="">
                                        </div>

                                        <div class="mt-6 flex-shrink-0 sm:mt-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('get-to-know-me/SAN_44.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div
                                        class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                        <div class="flex-shrink-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('get-to-know-me/SAN_19.jpg') }}" alt="">
                                        </div>

                                        <div class="mt-6 flex-shrink-0 sm:mt-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('get-to-know-me/SAN_9.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                        <div class="flex-shrink-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('get-to-know-me/SAN_2.jpg') }}" alt="">
                                        </div>

                                        <div class="mt-6 flex-shrink-0 sm:mt-0">
                                            <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72"
                                                src="{{ asset('get-to-know-me/IMG_5877.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Fin Contenido --}}

</x-frontEndLayout>
