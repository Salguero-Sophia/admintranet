<x-frontEndLayout title="Home" x-data={}>
    {{-- Inicio Contenido --}}
<head>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
    <header class="relative overflow-hidden">
                <!-- Category section -->

        <section aria-labelledby="category-heading" class="bg-gray-100">

            <div class="mx-auto max-w-7xl px-4  sm:px-6 sm:py-32 lg:px-8">
                <div class="container my-8" data-aos="flip-left" data-aos-duration="1500">
                    <div class="w-8/12 mx-auto overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2 group-hover:opacity-75 sm:h-auto">
                        <div class="relative">
                            <div class="swiper-container">
                                <div class="swiper-wrapper flex items-center">
                                    
                                    @foreach($categoriesImages as $categoryImage)
                                    @if(isset($categoryImage->image_path) && !empty($categoryImage->image_path))
                                        <div class="swiper-slide">
                                            <img src="{{ $categoryImage->image_path }}" alt="banners" class="mx-auto shadow-xl flex items-center rounded-3xl">
                                        </div>
                                    @endif
                                
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <script>
                            var swiper = new Swiper('.swiper-container', {
                                loop: true,
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                },
                                autoplay: {
                                    delay: 3000,
                                },
                            });
                        </script>
                    </div>
                </div>

            </div>
        </section>
    </header>

    <main>

        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8" x-data="{ openModal: false, modalImage: '' }">
            <div class="sm:flex sm:items-baseline sm:justify-between">
                <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Información</h2>
            </div>
        
            <div x-data="{ openModal: false, modalImage: '' }">
                <div class="mt-6">
                    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-4 lg:gap-x-8">
                        <!-- Banners with modal click -->
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/boletin.png" alt="Banner1" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/usm.png" alt="Banner2" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/corporativas.png" alt="Banner3" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/50años.png" alt="Banner4" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/recono.png" alt="Banner5" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/politic.png" alt="Banner6" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                        <img @click="openModal = true; modalImage = '{{ $bannerImages[0]->image_path }}'" src="modals/cursos.png" alt="Banner7" class="w-full h-auto object-cover rounded-lg cursor-pointer">
                    </div>
                </div>
            
                <!-- Modal -->
                <div x-show="openModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" x-cloak>
                    <div class="relative bg-white rounded-lg shadow-xl overflow-hidden max-w-3xl w-1/3">
                        <!-- Close button -->
                        <button @click="openModal = false" class="absolute top-3 right-3 text-gray-400 hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <!-- Dynamic image in modal -->
                        <img :src="modalImage" alt="Banner Preview" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
            

        <!-- Favorites section -->

        <section aria-labelledby="favorites-heading">
            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                {{-- <div class="sm:flex sm:items-baseline sm:justify-between">
                    <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">To share love
                    </h2>
                </div> --}}

                <div class="mt-2 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 lg:gap-x-8">
                    
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
                                <a href="{{ $favoriteImage->href }}">
                                    <img data-aos="fade-up" data-aos-duration="500"
                                    src="{{ $image_path }}" alt="first-favorite-banner"
                                    class="h-full w-full object-cover object-center">
                                </a>
                            </div>
                        </div>
                        
                    @endforeach
                    
                </div>

            </div>
        </section>

    </main>

    {{-- Fin Contenido --}}

</x-frontEndLayout>
