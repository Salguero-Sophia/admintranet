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

            {{-- SECCION 5 --}}
            <div id="apply-now-section" class="container mx-auto p-12">
                
                <div class="mx-auto max-w-10xl text-center">

                    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                    <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                       
                        <div class="relative">
                        {{-- Promos --}}
                        <div class="swiper-container ">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <image class="rounded-2xl" src="dallas-mothers-day/Banner_500px_01.jpg" />
                                </div>

                                <div class="swiper-slide">
                                    <image class="rounded-2xl" src="dallas-mothers-day/Banner_500px_02.jpg" />
                                </div>

                                <div class="swiper-slide">
                                    <image class="rounded-2xl" src="dallas-mothers-day/Banner_500px_03.jpg" />
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
        
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
                            slidesPerView: 1,  
                            spaceBetween: 0,  
                        });
                    </script>

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

                        <li class="rounded-2xl bg-[#003B7A] opacity-90 px-8 py-10 cursor-pointer" onclick="openModal()">
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

                        <li class="rounded-2xl bg-[#003B7A] opacity-90 px-8 py-10 cursor-pointer" onclick="openMod()">
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
            <div class="overflow-hidden bg-[#003B7A] opacity-90 py-8">

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

            </div>
        </div>
        </div>

        <div class="overflow-hidden py-1">
        </div>
        
        {{-- Fin Productos --}}
        
    </main>

    {{-- Fin Contenido --}}
</x-gtfrontEndLayout>