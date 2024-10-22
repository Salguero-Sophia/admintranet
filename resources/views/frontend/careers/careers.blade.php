@php
    session_start();
@endphp

<x-gtfrontEndLayout title="Careers" x-data={}>
    {{-- Inicio Contenido --}}
<style>
    .swiper-slide:not(.swiper-slide-active) {
        visibility: hidden; 
        opacity: 0;
        transition: visibility 0s 0.3s, opacity 0.3s linear;
    }

    .swiper-slide.swiper-slide-active {
        visibility: visible;
        opacity: 1;
        transition: opacity 0.3s linear;
    }

</style>
    <main>
        <div class="bg-gray-50">

            {{-- SECCION 1 --}}
            {{-- <div class="relative isolate overflow-hidden pt-14">
                <img src="https://source.unsplash.com/IS6RwpuEJpY" alt=""
                    class="absolute inset-0 -z-10 h-full w-full object-cover">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#003B7A] to-[#003B7A] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Let's work together</h1> --}}
                        {{-- <p class="mt-6 text-lg leading-8 text-white">No matter where we are from, everyone feels at home
                            here.</p> --}}
                        {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#apply-now-section"
                                class="rounded-md bg-blue-800 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">
                                Apply now!
                            </a> --}}
                            {{-- <a href="#" class="text-sm font-semibold leading-6 text-white">
                                Learn more
                                <span aria-hidden="true">→</span>
                            </a> --}}
                        {{-- </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
            </div> --}}

            {{-- SECCION 2 --}}
            {{-- <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                    <div data-aos="fade-right" data-aos-duration="1500" class="max-w-2xl">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Why work with us?</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-600">In San Martín, we belive that satisfied
                            employees are satisfied customers.
                            That´s why we will do everything possible to make you feel comfortable with us!</p>
                    </div>
                    <ul data-aos="fade-up" data-aos-duration="1500" role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    src="{{ asset('static_files/careers/profile-1.png') }}" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                                        Passion for the Artisanal:</h3>
                                    <p class="text-sm font-semibold leading-6 text-blue-600">All our products are
                                        handmade and fresh..</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    src="{{ asset('static_files/careers/profile-2.png') }}" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">A warm
                                        and family-oriented atmosphere: </h3>
                                    <p class="text-sm font-semibold leading-6 text-blue-600">Mutual respect and direct
                                        relationships are what set us apart from the crowd.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    src="{{ asset('static_files/careers/profile-3.png') }}" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900"> You can
                                        be yourself: </h3>
                                    <p class="text-sm font-semibold leading-6 text-blue-600">We value every employee for
                                        who they are</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full"
                                    src="{{ asset('static_files/careers/profile-4.png') }}" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                                        Development Opportunities: </h3>
                                    <p class="text-sm font-semibold leading-6 text-blue-600"> We provide all employees
                                        with promotion opportunities. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}


            {{-- SECCION 3 --}}
            {{-- <div class="bg-white py-24 sm:py-32 border-2 border-gray-200">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                        <div class="lg:pr-4">
                            <div
                                class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                                <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0"
                                    src="{{ asset('static_files/careers/photo-1.png') }}" alt="">
                                <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                                <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl"
                                    aria-hidden="true">
                                    <div
                                        class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#609dff] to-[#003B7A] opacity-20">
                                    </div>
                                </div>
                                <figure class="relative isolate">
                                    <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                                        class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                                        <path id="0ef284b8-28c2-426e-9442-8655d393522e"
                                            d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                                        <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                                    </svg>
                                    <img src="{{ asset('isotipo-sm.svg') }}" alt="" class="h-12 w-auto">
                                    <blockquote class="mt-6 text-xl font-semibold leading-8 text-white">
                                        <p>“At San Martín, we combine our talents, skills, and knowledge with a positive
                                            mindset, working together to achieve a common goal”</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm leading-6 text-gray-300"><strong
                                            class="font-semibold text-white">Andrés Castillo, </strong> CEO at San
                                        Martin
                                        Bakery
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div data-aos="fade-left" data-aos-duration="1500" class="text-base leading-7 text-gray-700 lg:max-w-lg">
                                <p class="text-base font-semibold leading-7 text-blue-600">Company values</p>
                                <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Are you
                                    looking for a stable job with values ​​and respect?</h1>
                                <div class="max-w-xl">
                                    <p class="mt-6">San Martín is one of the largest employers in Guatemala, currently
                                        employing over 4,800 individuals.</p>
                                    <p class="mt-8">Our workforce includes students, seniors, individuals with
                                        disabilities, and young mothers balancing work with education.</p>
                                    <p class="mt-8">The company is open to diverse candidates, and each employee
                                        enjoys a guaranteed employment contract with equal opportunities
                                        for advancement. San Martín is an attractive employer, offering a flexible work
                                        schedule to accommodate a work-life balance.
                                        Candidates do not need prior experience in the food industry, as the company
                                        provides essential training.</p>
                                </div>
                            </div>
                            <dl class="mt-10 grid grid-cols-3 gap-8 border-t border-gray-900/10 pt-10 sm:grid-cols-3">
                                <div>
                                    <dt class="text-sm font-semibold leading-6 text-gray-600">Founded</dt>
                                    <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">1974
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-semibold leading-6 text-gray-600">Employees</dt>
                                    <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">4,800
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-semibold leading-6 text-gray-600">Countries</dt>
                                    <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">3</dd>
                                </div>
                            </dl>
                            <div class="mt-10 flex">
                                <a href="#" class="text-base font-semibold leading-7 text-blue-600">Learn more
                                    about our company <span aria-hidden="true">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- SECCION 5 --}}
            <div id="apply-now-section" class="container mx-auto p-12">
                {{-- <h1 class="mt-5 text-4xl font-bold text-center tracking-tight text-gray-900 sm:text-6xl">Become part of our
                    family</h1>
                <p class="mt-6 text-lg text-center text-gray-600 sm:max-w-md lg:max-w-none">
                    "You can be the secret ingredient of our best recipe"
                </p> --}}

                {{-- <div class="cards-container py-24">
                    <div class="flex flex-wrap -mx-4">

                    @foreach ($listCareers as $career)
                        
                    @include('frontend.components.career-card', $career)
                    
                    @endforeach

                    </div>
                </div> --}}
                
                <div class="mx-auto max-w-10xl text-center">

                    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                    <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                       
                        <div class="relative">
                        {{-- Promos --}}
                        <div class="swiper-container ">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <image class="rounded-2xl" src="dallas-mothers-day/Banner_500px_01.jpg" />
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <image class="rounded-2xl" src="dallas-mothers-day/Banner_500px_02.jpg" />
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <image class="rounded-2xl" src="dallas-mothers-day/Banner_500px_03.jpg" />
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                    
                            <!-- Navigation Buttons -->
                            {{-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> --}}
                        </div>
                    </div>
                    <script>
                        const swiper = new Swiper('.swiper-container', {
                            loop: true,
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            slidesPerView: 1,  // Mostrar solo 1 slide a la vez
                            spaceBetween: 0,  // No dejar espacio entre los slides
                        });
                    </script>

                    
                     <script>
                    //     const swiper = new Swiper('.swiper-container', {
                    //         loop: true,
                    //         pagination: {
                    //             el: '.swiper-pagination',
                    //             clickable: true,
                    //         },
                    //         navigation: {
                    //             nextEl: '.swiper-button-next',
                    //             prevEl: '.swiper-button-prev',
                    //         },
                    //     });
                     </script>                 
                        {{-- <li class="rounded-2xl bg-[#003B7A] px-8 py-10">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="iconos/Icono de información.svg" alt="">
                            <h3 class="mt-6 text-2xl font-semibold leading-7 tracking-tight text-white">Información</h3>
                        </li> --}}

                        {{-- Actividades --}}
                        {{-- <li class="rounded-2xl bg-[#003B7A]  px-8 py-10">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="iconos/Icono de actividades.svg" alt="">
                            <h3 class="mt-6 text-2xl font-semibold leading-7 tracking-tight text-white">Actividades</h3>
                        </li> --}}

                        {{-- Información --}}
                        <!-- Modal Background -->
                        <div id="modalInfo" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
                            <!-- Modal Content -->
                            <div class="bg-white rounded-lg p-6 max-w-md mx-auto">
                                <h3 class="text-2xl font-semibold text-gray-900">Información</h3>
                                <p class="mt-4 text-gray-700">Aquí puedes agregar la información que desees mostrar en el modal.</p>
                                <!-- Close Button -->
                                <button onclick="closeModal()" class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Cerrar</button>
                            </div>
                        </div>

                        <li class="rounded-2xl bg-[#003B7A] px-8 py-10 cursor-pointer" onclick="openModal()">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="iconos/Icono de información.svg" alt="">
                            <h3 class="mt-6 text-2xl font-semibold leading-7 tracking-tight text-white">Información</h3>
                        </li>

                        <script>
                            function openModal() {
                                document.getElementById('modalInfo').classList.remove('hidden');
                            }
                        
                            function closeModal() {
                                document.getElementById('modalInfo').classList.add('hidden');
                            }
                        </script>   

                        {{-- Actividades --}}
                          <!-- Modal Background -->
                          <div id="modal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
                            <!-- Modal Content -->
                            <div class="bg-white rounded-lg p-6 max-w-md mx-auto">
                                <h3 class="text-2xl font-semibold text-gray-900">Actividades</h3>
                                <p class="mt-4 text-gray-700">Aquí puedes agregar la Actividades que desees mostrar en el modal.</p>
                                <!-- Close Button -->
                                <button onclick="closeMod()" class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Cerrar</button>
                            </div>
                        </div>

                        <li class="rounded-2xl bg-[#003B7A] px-8 py-10 cursor-pointer" onclick="openMod()">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="iconos/Icono de actividades.svg" alt="">
                            <h3 class="mt-6 text-2xl font-semibold leading-7 tracking-tight text-white">Actividades</h3>
                        </li>

                        <script>
                            function openMod() {
                                document.getElementById('modal').classList.remove('hidden');
                            }
                        
                            function closeMod() {
                                document.getElementById('modal').classList.add('hidden');
                            }
                        </script>  

                    </ul>
                </div>

            </div>   
           

            {{-- SECCION 4 --}}
            <div class="overflow-hidden bg-[#003B7A] py-8">
                {{-- <div class="mx-auto max-w-7xl md:px-6 lg:px-8"> --}}
                    {{-- <div class="grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:grid-cols-2 lg:items-center"> --}}
                        
                {{--  --}}
                <div class="">
                    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">

                      <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                        {{-- Evolution --}}
                        <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/logo1.jpeg" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Evolution</h3>
                            <p class="text-sm leading-6 text-white">Sistema de planilla de San Martín</p>
                            <button
                                class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <a onclick="window.open('http://192.168.111.213/Evolution/Account/Login', '_blank')">Acceder</a>
                            </button>
                        </li>
                        {{-- Apps --}}
                        <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/sblanco.png" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Apps</h3>
                            <p class="text-sm leading-6 text-white">Sistema de aplicaciones de San Martín</p>
                                <button
                                    class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <a onclick="window.open('http://192.168.111.227/smb/', '_blank')">Acceder</a>
                                </button>
                        </li>
                        {{-- invgate --}}
                        <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/InvgateLogo.jpeg" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Invgate</h3>
                            <p class="text-sm leading-6 text-white">Sistema de tickets San Martín</p>
                                <button
                                    class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <a onclick="window.open('https://lapaneria.cloud.invgate.net/', '_blank')">Acceder</a>
                                </button>
                        </li>
                        {{-- Auditoria --}}
                          <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/sblanco.png" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Auditoría</h3>
                            <p class="text-sm leading-6 text-white">Sistema de auditoría San Martín</p>
                              <button
                                  class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                  <a onclick="window.open('https://auditoria.sanmartinbakery.com', '_blank')">Acceder</a>
                              </button>
                          </li>
                        {{-- Portal SSO --}}
                          <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/sin-sso.png" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Portal SSO</h3>
                            <p class="text-sm leading-6 text-white">Salud y Seguridad Ocupacional</p>
                              <button
                                  class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                  <a href="/portal-sso">Acceder</a>
                              </button>
                          </li>
                          {{-- USM Admin --}}
                          <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/logotipo USM_001-03.svg" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Aula Virtual Administrativos</h3>
                            <div class="my-6"></div>
                            {{-- <p class="text-sm leading-6 text-white">Sistema de planilla de San Martín</p> --}}
                              <button
                                  class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                  <a onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=384', '_blank')">Acceder</a>
                              </button>
                          </li>
                          {{-- USM Cielito --}}
                          <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/Nuevo Logotipo Cielito LIndo-01.svg" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Aula Virtual Cielito Lindo</h3>
                            {{-- <p class="text-sm leading-6 text-white">Sistema de planilla de San Martín</p> --}}
                            <div class="my-6"></div>
                              <button
                                  class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                  <a onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=176', '_blank')">Acceder</a>
                              </button>
                          </li>
                          {{-- USM Planta --}}
                          <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/logotipo USM_001-03.svg" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Aula Virtual Planta</h3>
                            {{-- <p class="text-sm leading-6 text-white">Sistema de planilla de San Martín</p> --}}
                            <div class="my-6"></div>
                              <button
                                  class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                  <a onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=100', '_blank')">Acceder</a>
                              </button>
                          </li>
                          {{-- USM Tiendas --}}
                          <li class="rounded-2xl border-4 border-gray-300 px-8 py-8">
                            <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56 bg-white" src="programa/logotipo USM_001-03.svg" alt="">
                            <h3 class="mt-6 text-lg font-semibold leading-7 tracking-tight text-white">Aula Virtual Operaciones</h3>
                            {{-- <p class="text-sm leading-6 text-white">Sistema de planilla de San Martín</p> --}}
                            <div class="my-6"></div>
                              <button
                                  class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full mt-4 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                  <a onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=241', '_blank')">Acceder</a>
                              </button>
                          </li>
                      </ul>

                    </div>
                  </div>
                  
                {{--  --}}

                    {{-- </div>
                </div> --}}
            </div>
        </div>
        </div>

        <div class="overflow-hidden py-1">
        </div>
        
        {{-- Fin Productos --}}
        
    </main>

    {{-- Fin Contenido --}}
</x-gtfrontEndLayout>