<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Recursos Humanos" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <style>
        .sm-bk-blue {
            background: #003B7A;
        }

        .sm-blue {
            background: #d6e4f3;
        }

        .swiper-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide {
            flex-shrink: 0;
        }

        .close {
            font-size: 24px;
            color: red;
        }

        #modalContainer {
            z-index: 100;
        }

        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            max-width: 80%;
            height: 82%;
            position: relative;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #pdfViewer {
            width: 100%;
            height: 75vh;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-description {
            position: absolute;
            top: 0%;
            left: 0%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 2px 4px;
            font-size: 18px;
            border-radius: 5px;
            opacity: 1;
        }
    
        @media screen and (max-width: 768px) {
            .modal-content {
                max-width: 90%;
                margin: 20% auto;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
        <!--Nav-->
        <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed" style="z-index: 1;">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <!-- Sección izquierda (oculta en dispositivos móviles) -->
                <div class="hidden lg:flex lg:flex-initial lg:gap-x-12">
                    <a href="{{ route('guatemala') }}"> <img width="48" height="48"
                            src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" /></a>
                    <a href="{{ route('salvador') }}"> <img width="48" height="48"
                            src="https://img.icons8.com/color/48/el-salvador-circular.png"
                            alt="el-salvador-circular" /></a>
                    <a href="{{ route('usa') }}"> <img width="48" height="48"
                            src="https://img.icons8.com/color/48/usa-circular.png" alt="usa-circular" /></a>
                </div>
                <div class="pl-4 flex items-center mx-auto">
                    <a href="/" class="py-4 flex justify-center items-center">
                        <!-- Logo del navbar -->
                        <img id="logo" class="mx-auto w-36 md:w-80" src="programa/sm.png" alt="Logo" />
                    </a>
                </div>
                <!-- Sección derecha (oculta en dispositivos móviles) -->
                <div class="hidden lg:flex lg:flex-initial">
                    <a href="{{ route('historia') }}"
                        class="text-lg font-semibold leading-6 text-white underline underline-offset-8">¿Quiénes somos?</a>
                </div>
                <div class="block absolute left-6">
                    <div class="flex lg:hidden">
                        <button id="openMenuButton" type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu open state. -->
                <div class="lg:hidden hidden" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div
                        class="fixed inset-y-0 left-0 z-0 w-1/2  overflow-y-auto sm-bk-blue opacity-90 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <div class="flex justify-center">
                                <a href="/" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto" src="Group 1.svg" alt="">
                                </a>
                            </div>

                            <button id="closeMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-white">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <line x1="9" y1="9" x2="15" y2="15" />
                                    <line x1="15" y1="9" x2="9" y2="15" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="py-6">
                                    <a href="{{ route('historia') }}"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-blue-800">¿Quiénes
                                        somos?</a>
                                </div>
                                <div class="space-y-2 py-6">
                                    <a href="{{ route('guatemala') }}"
                                        class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                        <img class="mr-2" width="36" height="36"
                                            src="https://img.icons8.com/color/48/guatemala-circular.png"
                                            alt="guatemala-circular" /> Guatemala
                                    </a>
                                    <a href="{{ route('salvador') }}"
                                        class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                        <img class="mr-2" width="36" height="36"
                                            src="https://img.icons8.com/color/48/el-salvador-circular.png"
                                            alt="el-salvador-circular" /> El Salvador
                                    </a>
                                    <a href="{{ route('usa') }}"
                                        class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                        <img class="mr-2" width="36" height="36"
                                            src="https://img.icons8.com/color/48/usa-circular.png"
                                            alt="usa-circular" /> USA
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </nav>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openMenuButton = document.getElementById('openMenuButton');
            const mobileMenu = document.querySelector('.lg\\:hidden[role="dialog"]');

            openMenuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('hidden');
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const closeMenuButton = document.getElementById('closeMenuButton');
            const mobileMenu = document.querySelector('.lg\\:hidden[role="dialog"]');

            closeMenuButton.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
    {{-- Promos --}}
    <div class="container mx-auto p-10 lg:p-48 lg:-my-36" data-aos="flip-left" data-aos-duration="1500">
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-8 mt-36">
            <div class="relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full shadow-xl rounded-3xl" aos-init aos-animate data-aos="fade-left" src="temporada/Cover_WEB.jpg" alt="i4">
                        </div>
                        {{-- <div class="swiper-slide">
                            <img class="w-full shadow-xl rounded-3xl" aos-init aos-animate data-aos="fade-left" src="temporada/bmay2.png" alt="i5">
                        </div> --}}
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="relative">
                <div class="group aspect-h-20 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/sandwiches.jpg"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
                </div>
            </div>
            <div class="relative">
                <div class="group aspect-h-20 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/24-melocotones.gif"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
                </div>
            </div> --}}

        </div>
    </div>

    <div class="relative flex justify-center items-center py-8">
        <div class="w-5/6 md:w-5/6 lg:w-5/6 border-2 bg-black"></div>
    </div>

    {{-- Cards --}}
    <div class="container mx-auto p-4">
        <ul role="list"
            class="grid grid-cols-1 gap-x-2 gap-y-8 sm:grid-cols-3 xs:grid-cols-1 sm:gap-x-4 lg:grid-cols-4 xl:gap-x-8">

            <!-- Contenido del modal -->
            <div id="modalContainer12" class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50">
                <div class="relative w-4/5 mx-auto mt-20">
                    <div class="bg-white rounded-lg shadow-lg">
                        <!-- Contenido del modal -->
                        <div class="p-4">
                            <!-- Botón para cerrar el modal -->
                            <button id="closeModalBtn12"
                                class="absolute top-0 right-0 p-2 text-xl text-gray-600 hover:text-gray-800 focus:outline-none">
                                &times;
                            </button>
                            <!-- Contenedor del PDF -->
                            <div class="w-full h-screen overflow-auto">
                                <iframe id="pdfIframe" class="lg:w-11/12 h-5/6 sm:w-full"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boletin -->
            <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button id="activateModalBtn"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="w-1/2 h-1/2 mx-auto my-8" src="iconos/Icono de boletin.svg" alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-10 font-semibold text-white">
                        Boletín</p>
                </button>
                <div>
                    <!-- Contenido del modal -->
                    <div id="modalContainer" class="hidden relative z-50" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                        <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                            <div
                                class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all lg:w-2/5 md:w-3/5 sm:w-5/6 mx-auto">
                                <!-- Contenido del swiper -->
                                <div class="swiper-container-1 px-8">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="boletin/Sept1.jpeg" class="rounded-lg w-full mb-6 mt-4" alt="boletin1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="boletin/Sept2.jpeg" class="rounded-lg w-full mb-6 mt-4" alt="boletin2">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="boletin/Sept3.jpeg" class="rounded-lg w-full mb-6 mt-4" alt="boletin3">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="boletin/Sept4.jpeg" class="rounded-lg w-full mb-6 mt-4" alt="boletin4">
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev" style="padding-right: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-button-next" style="padding-left: 3rem; color: white;">
                                    </div>

                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- Fin del contenido del swiper -->

                                <!-- Botón para cerrar el modal -->
                                <button id="closeModalBtn"
                                    class="absolute mx-8 -top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- USM -->
            <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button onclick="window.open('http://192.168.111.212/usm/', '_blank')"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="h-28 w-4/5 mx-auto mt-12" src="programa/logotipo USM_001-03.svg" alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-8 font-semibold text-white">
                        Universidad </br> San Martín</p>
                </button>
            </div>

            {{-- Actividades del mes --}}
            <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button id="activateModalBtn3"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="w-1/2 h-1/2 mx-auto my-8" src="iconos/Icono de actividades recreativas.svg" alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-8 font-semibold text-white">
                        Actividades corporativas</p>
                </button>
                <div>
                   <!-- Contenido del modal -->
                <div id="modalContainer3" class="w-48 hidden relative z-50" aria-labelledby="modal-title" role="dialog"
                aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                    <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl lg:w-3/4 sm:w-5/6 transition-all mx-auto">
                        <!-- Contenido del swiper -->
                        <div class="swiper-container-3 px-8 pt-24">
                            <div class="swiper-wrapper">

                                {{-- TALLER DE CULTURA EL SALVADOR --}}

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/TALLER DE CULTURA EL SALVADOR-1.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">TALLER DE CULTURA EL SALVADOR</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/TALLER DE CULTURA EL SALVADOR-2.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">TALLER DE CULTURA EL SALVADOR</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/TALLER DE CULTURA EL SALVADOR-3.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">TALLER DE CULTURA EL SALVADOR</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/TALLER DE CULTURA EL SALVADOR-4.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">TALLER DE CULTURA EL SALVADOR</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/TALLER DE CULTURA EL SALVADOR-5.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">TALLER DE CULTURA EL SALVADOR</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/TALLER DE CULTURA EL SALVADOR-6.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">TALLER DE CULTURA EL SALVADOR</div>
                                    </div>
                                </div>

                                {{-- Apertura La Casona --}}
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso1.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">Apertura La Casona</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso2.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">Apertura La Casona</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso3.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">Apertura La Casona</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso4.PNG"  class="rounded-lg w-5/12 mx-auto -mt-20" alt="actividades12">
                                        <div class="image-description -mt-20 ml-72">Apertura La Casona</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso5.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">Apertura La Casona</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso6.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">Apertura La Casona</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/caso7.PNG" style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12" alt="actividades12">
                                        <div class="image-description -mt-24 ml-10">Apertura La Casona</div>
                                    </div>
                                </div>

                                {{-- Apertura Adisson, Dallas, Texas --}}
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/dt1.jpeg" style="margin-left: 9%; margin-top:-10%" class="rounded-lg w-10/12" alt="actividades12">
                                        <div class="image-description" style="margin-left: 9%; margin-top:-10%">Apertura Adisson, Dallas, Texas</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/dt2.jpeg" style="margin-top:-10%;" class="rounded-lg w-10/12 mx-auto" alt="actividades13">
                                        <div class="image-description" style="margin-left: 10%; margin-top:-10%">Apertura Adisson, Dallas, Texas</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/dt3.jpeg" style="margin-left: 4%; margin-top:-5%" class="rounded-lg w-10/12" alt="actividades14">
                                        <div class="image-description" style="margin-left: 4%; margin-top:-5%">Apertura Adisson, Dallas, Texas</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/dt4.jpeg" style=" margin-top:-7%;  width:38%" class="rounded-lg mx-auto" alt="actividades15">
                                        <div class="image-description" style="margin-left: 32%; margin-top:-7%;">Apertura Adisson, Dallas, Texas</div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img src="actividades/dt5.jpeg" style="margin-left: 10%; margin-top:-7%; width: 80%" class="rounded-lg w-1/2" alt="actividades15">
                                        <div class="image-description" style="margin-left: 10%; margin-top:-7%;">Apertura Adisson, Dallas, Texas</div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-button-prev" style="padding-right: 3rem; color: white;"></div>
                            <div class="swiper-button-next" style="padding-left: 3rem; color: white;"></div>

                            <div class="swiper-pagination" ></div>
                        </div>
                        <!-- Fin del contenido del swiper -->

                        <!-- Botón para cerrar el modal -->
                        <button id="closeModalBtn3"
                            class="absolute mx-8 top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                    </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Aniversario --}}
            <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button id="activateModalBtn4"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="w-1/2 h-1/2 mx-auto my-6" src="iconos/Logo aniversario.svg" alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-10 font-semibold text-white">
                        Aniversario</p>
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-10 font-semibold text-white">50 años
                    </p>
                </button>
                <div>
                    <!-- Contenido del modal -->
                    <div id="modalContainer4" class="hidden relative z-10" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                        <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                            <div
                                class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all lg:w-2/5 md:w-3/5 sm:w-5/6 mx-auto">
                                <!-- Contenido del swiper -->
                                <div class="swiper-container-4 px-8">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani1.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani2.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani3.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani4.jpg" class="rounded-lg w-4/5" style="margin-left: 12%;"  alt="i2">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani5.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev" style="padding-right: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-button-next" style="padding-left: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- Fin del contenido del swiper -->

                                <!-- Botón para cerrar el modal -->
                                <button id="closeModalBtn4"
                                    class="absolute mx-8 -top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Reconocimientos --}}
            <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button id="activateModalBtn5"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="w-1/2 h-1/2 mx-auto my-8" src="iconos/Icono de reconocimiento.svg" alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-8 font-semibold text-white">
                        Reconocimientos</p>
                </button>
                <div>
                    <!-- Contenido del modal -->
                    <div id="modalContainer5" class="hidden relative z-10" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                        <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                            <div
                                class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all lg:w-2/5 md:w-3/5 sm:w-5/6 mx-auto">
                                <!-- Contenido del swiper -->
                                <div class="swiper-container-5 px-8">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="reconocimientos/reco1.png" class="rounded-lg w-full" alt="i1">
                                            <div class="image-description">Lealtad San Martín</div>
                                        </div>
                                        <div class="swiper-slide my-24">
                                            <img src="reconocimientos/reco2.png" class="rounded-lg w-full" alt="i2">
                                            <div class="image-description">Lealtad San Martín</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="reconocimientos/reco3.png" class="rounded-lg w-full" alt="i1">
                                            <div class="image-description">Lealtad San Martín</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="reconocimientos/reco4.png" class="rounded-lg w-full" alt="i1">
                                            <div class="image-description">Lealtad San Martín</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="reconocimientos/reco5.png" class="rounded-lg w-full" alt="i1">
                                            <div class="image-description">Lealtad San Martín</div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev" style="padding-right: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-button-next" style="padding-left: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- Fin del contenido del swiper -->

                                <!-- Botón para cerrar el modal -->
                                <button id="closeModalBtn5"
                                    class="absolute mx-8 -top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Política de comunicación -->
            <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button id="downloadPdf16"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="w-1/2 h-1/2 mx-auto my-6" src="iconos/Icono de politica de comunicación.svg"
                        alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-xl sm:text-sm px-2 lg:px-8 font-semibold text-white"> Política
                        de comunicación</p>
                </button>
            </div>


             {{-- Certificaciones --}}
             <div class="flex justify-center items-center">
                <!-- Botón para activar el modal -->
                <button id="activateModalBtn2"
                    class="h-64 w-64 sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                    <img class="w-1/2 h-1/2 mx-auto my-6" src="iconos/Icono de cursos y certificaciones.svg" alt="Ícono PDF">
                    <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-10 font-semibold text-white">
                        Cursos y certificaciones
                    </p>
                </button>
                <div>
                    <!-- Contenido del modal -->
                    <div id="modalContainer2" class="hidden relative z-10" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                        <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                            <div
                                class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all lg:w-2/5 md:w-3/5 sm:w-5/6 mx-auto">
                                <!-- Contenido del swiper -->
                                <div class="swiper-container-2 px-8">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani1.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani2.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani3.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani4.jpg" class="rounded-lg w-4/5" style="margin-left: 12%;"  alt="i2">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="aniversario/ani5.jpg" class="rounded-lg w-full" style="margin-left: 1%; margin-top:16%;" alt="i1">
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev" style="padding-right: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-button-next" style="padding-left: 3rem; color: white;">
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <!-- Fin del contenido del swiper -->

                                <!-- Botón para cerrar el modal -->
                                <button id="closeModalBtn2"
                                    class="absolute mx-8 -top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </ul>
    </div>

    <div class="relative flex justify-center items-center px-8">
        <div class="w-5/6 md:w-5/6 lg:w-5/6 border-2 bg-black"></div>
    </div>

    {{-- Promos --}}
    <div class="container mx-auto p-10 lg:p-48 lg:-my-36">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 mt-12">
            <div class="relative">
                <div class="group aspect-h-12 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/jalea.gif"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
                </div>
            </div>

            <div class="relative">
                <div class="group aspect-h-12 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/roscas.jpg"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    {{-- Scripts --}}
    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById | ("nav-toggle");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("");
                navaction.classList.remove("");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("");
            } else {
                header.classList.remove("");
                navaction.classList.remove("gradient");
                navaction.classList.add("");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos de activación de modal
            var activateModalBtn = document.getElementById("activateModalBtn");
            var activateModalBtn2 = document.getElementById("activateModalBtn2");
            var activateModalBtn3 = document.getElementById("activateModalBtn3");
            var activateModalBtn4 = document.getElementById("activateModalBtn4");
            var activateModalBtn5 = document.getElementById("activateModalBtn5");

            // Obtener elementos de cierre de modal
            var closeModalBtn = document.getElementById("closeModalBtn");
            var closeModalBtn2 = document.getElementById("closeModalBtn2");
            var closeModalBtn3 = document.getElementById("closeModalBtn3");
            var closeModalBtn4 = document.getElementById("closeModalBtn4");
            var closeModalBtn5 = document.getElementById("closeModalBtn5");

            // Obtener contenedores de modal
            var modalContainer = document.getElementById("modalContainer");
            var modalContainer2 = document.getElementById("modalContainer2");
            var modalContainer3 = document.getElementById("modalContainer3");
            var modalContainer4 = document.getElementById("modalContainer4");
            var modalContainer5 = document.getElementById("modalContainer5");

            // Función para mostrar el modal y activar el Swiper correspondiente
            function showModalAndInitSwiper(modal, swiperContainer) {
                modal.classList.remove("hidden");
                var swiper = new Swiper(swiperContainer, {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    loop: true,
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            }

            // Funciones de escucha de eventos para mostrar y ocultar los modales
            activateModalBtn.addEventListener("click", function() {
                showModalAndInitSwiper(modalContainer, '.swiper-container-1');
            });

            // activateModalBtn2.addEventListener("click", function() {
            //     showModalAndInitSwiper(modalContainer2, '.swiper-container-2');
            // });

            activateModalBtn3.addEventListener("click", function() {
                showModalAndInitSwiper(modalContainer3, '.swiper-container-3');
            });

            activateModalBtn4.addEventListener("click", function() {
                showModalAndInitSwiper(modalContainer4, '.swiper-container-4');
            });

            activateModalBtn5.addEventListener("click", function() {
                showModalAndInitSwiper(modalContainer5, '.swiper-container-5');
            });

            closeModalBtn.addEventListener("click", function() {
                modalContainer.classList.add("hidden");
            });

            closeModalBtn2.addEventListener("click", function() {
                modalContainer2.classList.add("hidden");
            });

            closeModalBtn3.addEventListener("click", function() {
                modalContainer3.classList.add("hidden");
            });

            closeModalBtn4.addEventListener("click", function() {
                modalContainer4.classList.add("hidden");
            });

            closeModalBtn5.addEventListener("click", function() {
                modalContainer5.classList.add("hidden");
            });
        });
    </script>

    <script>
        // Función para detectar si el dispositivo es móvil
        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
        }

        // Función para mostrar el modal
        function showModal(modal) {
            modal.classList.remove("hidden");
        }

        // Función para cerrar el modal
        function closeModal(modal) {
            modal.classList.add("hidden");
        }

        // Agregar evento clic al botón
        document.getElementById("downloadPdf16").addEventListener("click", function() {
            // Verificar si el dispositivo es móvil
            if (isMobileDevice()) {
                // Abrir enlace en una nueva pestaña
                window.open("Politica de comunicación_2024 FINAL.pdf", "_blank");
            } else {
                // Obtener contenedor de modal
                var modalContainer12 = document.getElementById("modalContainer12");

                // Mostrar el modal
                showModal(modalContainer12);

                // Actualizar el iframe con la URL del PDF
                var pdfIframe = document.getElementById("pdfIframe");
                pdfIframe.src = "Politica de comunicación_2024 FINAL.pdf";

                // Agrega el evento clic al botón de cerrar modal
                document.getElementById("closeModalBtn12").addEventListener("click", function() {
                    closeModal(modalContainer12);
                    // Limpiar la URL del iframe al cerrar el modal
                    pdfIframe.src = "";
                });
            }
        });
    </script>

    <!-- Footer -->
    <div class="sm-bk-blue mx-auto mt-32 px-6 lg:px-8">
        <footer aria-labelledby="footer-heading" class="relative border-t border-gray-900/10 py-10">
            <section class="flex justify-center items-center">
                <p class=" text-xs leading-5 text-white">&copy; San Martín 2024</p>
            </section>

    </div>
    </footer>
    </div>
    </div>


</body>

</html>