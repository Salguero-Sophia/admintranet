<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Guatemala</title>
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

        #logo {
            display: block;
            margin: 0 auto;
            max-width: 80%;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: 100%;
        }

        .swiper-container {
            width: auto;
            height: auto;
            border: 4rem
        }

        #nav-content {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 300px;
            background-color: #003B7A;
            opacity: 95%;
            overflow-y: auto;
            z-index: 1000;
            padding-top: 3.5rem;
            flex-direction: column;
        }

        #nav-content a {
            display: block;
            padding: 1rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        #nav-content a:hover {
            background-color: #3949ab;
        }

        #nav-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2rem;
            height: 2rem;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .footer-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
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
            padding: 5px 10px;
            font-size: 18px;
            border-radius: 5px;
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navToggle = document.getElementById("nav-toggle");
            var navContent = document.getElementById("nav-content");
            var navClose = document.getElementById("nav-close");

            navToggle.addEventListener("click", function() {
                toggleNavMenu();
            });

            navClose.addEventListener("click", function() {
                hideNavMenu();
            });

            function toggleNavMenu() {
                if (navContent.style.display === "none" || navContent.style.display === "") {
                    showNavMenu();
                } else {
                    hideNavMenu();
                }
            }

            function showNavMenu() {
                navContent.style.display = "flex";
            }

            function hideNavMenu() {
                navContent.style.display = "none";
            }
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script> --}}
</head>

<body>
    <!--Nav-->
    <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed py-4">
        <!-- Sección izquierda (oculta en dispositivos móviles) -->
        <div class="hidden xl:flex xl:items-center mx-8">
            <a href="/" class="py-4 flex justify-center items-center">
                <!-- Logo del navbar -->
                <img id="logo" class="w-16" src="Group 1.svg" alt="Logo" />
            </a>
            <a href="{{ route('guatemala') }}"> <img width="56" height="56"
                    src="https://img.icons8.com/color/56/guatemala-circular.png" alt="guatemala-circular" /></a>
        </div>

        <!-- Sección derecha (oculta en dispositivos móviles) -->
        <div class="hidden xl:flex xl:flex-initial absolute top-9 -right-4">
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-1 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center" onclick="window.location.href='/'">
                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                        <span class="mx-2 font-medium" onclick="window.location.href='/'">Home</span>
                    </span>
                </button>
            </div>
            <div x-data="{ open: false, showModal: false }">
                <button @click="open = !open"
                    class="w-full flex justify-center items-center py-2 mx-2 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        <span class="mx-2 font-medium">Desarrollo Humano</span>
                    </span>

                    <span>
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" class="ml-1 h-8 w-8">
                            <style>
                                .slide-11 {
                                    animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                                }

                                @keyframes slide-11 {
                                    100% {
                                        transform: translateY(2px)
                                    }
                                }
                            </style>
                            <path class="slide-11" fill="#ffffff"
                                d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="absolute sm-bk-blue opacity-95">
                    <a @click="showModal = true"
                        class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black">Botón de
                        Ética</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('conoce') }}">Conoce a nuestro equipo</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('interna') }}">Comunicación interna</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('planta') }}">Extensiones corporativas</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('tienda') }}">Extensión Tienda</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('nomina') }}">Nómina</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('preguntas') }}">Preguntas frecuentes</a>
                </div>

                <!-- Modal -->
                <div x-show="showModal"
                    class="fixed inset-0 z-50 flex items-center justify-center overflow-auto bg-gray-500 bg-opacity-75">
                    <div class="relative z-50 bg-white rounded-lg w-3/4 h-4/5 p-8 sm:m-0">
                        <button @click="showModal = false"
                            class="absolute top-0 right-0 mt-4 mr-4 text-gray-700 hover:text-gray-900 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-xl pb-8">Botón de Ética</h3>
                            <div class="mt-2">
                                <form method="POST" action="{{ route('sendEtica') }}" enctype="multipart/form-data"
                                    aria-label="Formulario de comentarios sobre ética"
                                    onsubmit="return validateForm()">
                                    @csrf
                                    <input type="hidden" name="country" value="gt">
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="mt-2.5">
                                            <input placeholder="Nombre y apellido" type="text" name="firstname"
                                                id="firstname" autocomplete="given-name"
                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                        <div class="mt-2.5">
                                            <input placeholder="Número de teléfono" type="number" name="phonenumber"
                                                id="phonenumber" autocomplete="number"
                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                required>
                                        </div>
                                    </div>
                                    <div class="border-b border-gray-200 focus-within:border-indigo-600 mt-12">
                                        <label for="comment" class="sr-only">Add your comment</label>
                                        <textarea rows="3" name="comment" id="comment"
                                            class="ckeditor h-48 block w-full resize-none border-0 border-b border-transparent p-0 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="¿Tienes algún caso especial que quieras comentarnos? Escríbenos, pero antes de hacerlo, asegúrate de estar compartiendo información verídica. Es necesario que dejes tus datos para poder darle el seguimiento al caso, no te preocupes que tus datos serán manejados confidencialmente. "
                                            required></textarea>
                                    </div>
                                    <div class="flex justify-between pt-2">
                                        <div class="flex items-center space-x-5">
                                            <button type="submit"
                                                class="inline-flex items-center rounded-md px-3 py-2 text-sm font-semibold text-white"
                                                style="background-color: #003B7A">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-center items-center py-3 mx-2 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                            <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                            <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                            <line x1="9" y1="10" x2="9.01" y2="10" />
                            <line x1="15" y1="10" x2="15.01" y2="10" />
                            <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                        </svg>
                        <span class="mx-2 font-medium"
                            onclick="window.open('http://192.168.111.229/cpa/marcafoto', '_blank')">Registro
                            Facial</span>
                    </span>
                </button>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-center items-center py-3 mx-2 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="mx-2 font-medium"
                            onclick="window.open('https://smordermanager.sanmartinbakery.com/#/login', '_blank')">Orden
                            Manager</span>
                    </span>
                </button>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-center items-center py-2 mx-2 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="7" cy="17" r="2" />
                            <circle cx="17" cy="17" r="2" />
                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                            <path d="M6 10h4m-2 -2v4" />
                        </svg>
                        <span class="mx-2 font-medium">Salud y Seguridad</span>
                        <span>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" class="ml-1 h-8 w-8">
                                <style>
                                    .slide-11 {
                                        animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                                    }

                                    @keyframes slide-11 {
                                        100% {
                                            transform: translateY(2px)
                                        }
                                    }
                                </style>
                                <path class="slide-11" fill="#ffffff"
                                    d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                            </svg>
                </button>
                <div x-show="open" class=" absolute sm-bk-blue opacity-95">
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('sso') }}">Portal SSO</a>
                    {{-- <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                    href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención
                    médica</a> 
                <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                    href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a> --}}
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="https://forms.office.com/r/N9ALmMTXbE">Investigación de accidentes</a>

                </div>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-center items-center py-2 px-5 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                            <line x1="13" y1="7" x2="13" y2="7.01" />
                            <line x1="17" y1="7" x2="17" y2="7.01" />
                            <line x1="17" y1="11" x2="17" y2="11.01" />
                            <line x1="17" y1="15" x2="17" y2="15.01" />
                        </svg>
                        <span class="mx-2 font-medium">Universidad San Martín</span>
                    </span>

                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" class="ml-1 h-8 w-8">
                        <style>
                            .slide-11 {
                                animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                            }

                            @keyframes slide-11 {
                                100% {
                                    transform: translateY(2px)
                                }
                            }
                        </style>
                        <path class="slide-11" fill="#ffffff"
                            d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                    </svg>
                </button>

                <div x-show="open" class="sm-bk-blue opacity-95">
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=241">USM Guatemala</a>
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=384">USM Administrativos</a>
                    {{-- <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                    href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a> --}}
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=176">USM Cielito Lindo</a>
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=100">USM Planta</a>
                </div>
            </div>
            </ul>
        </div>
        {{-- mobile --}}
        <div
            class="xl:hidden w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2 sm-bk-blue">
            <div class="pl-4 flex items-center mx-auto">
                <div class="xl:hidden xs:flex xs:items-center mx-8">
                    <a href="/" class="py-4 flex justify-center items-center">
                        <!-- Logo del navbar -->
                        <img id="logo" class="w-80%" src="programa/sm.png" alt="Logo" />
                    </a>
                </div>
                <div class="block absolute left-6">
                    <div class="xl:hidden">
                        <button id="nav-toggle"
                            class="flex items-center p-1 text-white hover:text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>

                        </button>
                    </div>
                    <ul class="list-reset justify-end flex-1 mt-2 mx-auto ">
                        <div class="w-full flex-grow lg:flex lg:w-auto mt-2 lg:mt-0 lg:bg-transparent text-black lg:p-0 z-20"
                            id="nav-content">
                            <a href="{{ route('guatemala') }}" class="absolute top-1">
                                <img width="48" height="48"
                                    src="https://img.icons8.com/color/48/guatemala-circular.png"
                                    alt="guatemala-circular" />
                            </a>
                            <div x-data="{ open: false }" class="mt-8">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center" onclick="window.location.href='/'">
                                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        <span class="mx-2 font-medium" onclick="window.location.href='/'">Home </span>
                                    </span>
                                </button>
                            </div>
                            <div x-data="{ open: false, showModal: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center">
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        <span class="mx-2 font-medium">Desarrollo Humano</span>
                                    </span>

                                    <span>
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" class="ml-1 h-8 w-8">
                                            <style>
                                                .slide-11 {
                                                    animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                                                }

                                                @keyframes slide-11 {
                                                    100% {
                                                        transform: translateY(2px)
                                                    }
                                                }
                                            </style>
                                            <path class="slide-11" fill="#ffffff"
                                                d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                                        </svg>
                                    </span>
                                </button>

                                <div x-show="open" class="bg-gray-100">
                                    <a @click="showModal = true"
                                        class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white">Botón
                                        de Ética</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('conoce') }}">Conoce a nuestro equipo</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('interna') }}">Comunicación interna</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('nomina') }}">Nómina</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('preguntas') }}">Preguntas frecuentes</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('planta') }}">Extensiones corporativas</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('tienda') }}">Extensión Tienda</a>
                                </div>
                                <!-- Modal (fuera del contenedor principal) -->
                                <div x-show="showModal"
                                    class="fixed inset-0 z-10 flex items-center justify-center overflow-auto bg-gray-500 bg-opacity-75">
                                    <div class="flex items-center justify-center min-h-screen">
                                        <div class="bg-white rounded-lg w-full max-w-lg p-8">
                                            <button @click="showModal = false"
                                                class="absolute top-0 right-0 mt-4 mr-4 text-gray-700 hover:text-gray-900 focus:outline-none">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" color="white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                            <h3 class="text-xl pb-8">Botón de Ética</h3>
                                            <form method="POST" action="{{ route('sendEtica') }}"
                                                enctype="multipart/form-data"
                                                aria-label="Formulario de comentarios sobre ética"
                                                onsubmit="return validateForm()">
                                                @csrf
                                                <input type="hidden" name="country" value="gt">
                                                <div class="grid grid-cols-2 gap-4">
                                                    <div class="mt-2.5">
                                                        <input placeholder="Nombre y apellido" type="text"
                                                            name="firstname" id="firstname" autocomplete="given-name"
                                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            required>
                                                    </div>
                                                    <div class="mt-2.5">
                                                        <input placeholder="Número de teléfono" type="number"
                                                            name="phonenumber" id="phonenumber" autocomplete="number"
                                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            required>
                                                    </div>
                                                </div>
                                                <div
                                                    class="border-b border-gray-200 focus-within:border-indigo-600 mt-4">
                                                    <label for="comment" class="sr-only">Add your comment</label>
                                                    <textarea rows="3" name="comment" id="comment"
                                                        class="ckeditor h-48 block w-full resize-none border-0 border-b border-transparent p-0 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6"
                                                        placeholder="¿Tienes algún caso especial que quieras comentarnos? Escríbenos, pero antes de hacerlo, asegúrate de estar compartiendo información verídica. Es necesario que dejes tus datos para poder darle el seguimiento al caso, no te preocupes que tus datos serán manejados confidencialmente. "
                                                        required></textarea>
                                                </div>
                                                <div class="flex justify-between pt-2">
                                                    <div class="flex items-center space-x-5">
                                                        <button type="submit"
                                                            class="inline-flex items-center rounded-md px-3 py-2 text-sm font-semibold text-white"
                                                            style="background-color: #003B7A">Enviar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center">
                                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                            <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                            <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                            <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                                        </svg>
                                        <span class="mx-2 font-medium"
                                            onclick="window.open('http://192.168.111.229/cpa/marcafoto', '_blank')">Registro
                                            Facial</span>
                                    </span>
                                </button>
                            </div>
                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center">
                                        <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>

                                        <span class="mx-2 font-medium"
                                            onclick="window.open('https://smordermanager.sanmartinbakery.com/#/login', '_blank')">Orden
                                            Manager</span>
                                    </span>
                                </button>
                            </div>
                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center">
                                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="7" cy="17" r="2" />
                                            <circle cx="17" cy="17" r="2" />
                                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                            <path d="M6 10h4m-2 -2v4" />
                                        </svg>
                                        <span class="mx-2 font-medium">Salud y Seguridad</span>
                                        <span>
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="none" class="ml-1 h-8 w-8">
                                                <style>
                                                    .slide-11 {
                                                        animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                                                    }

                                                    @keyframes slide-11 {
                                                        100% {
                                                            transform: translateY(2px)
                                                        }
                                                    }
                                                </style>
                                                <path class="slide-11" fill="#ffffff"
                                                    d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                                            </svg>
                                </button>
                                <div x-show="open" class="bg-gray-100">
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('sso') }}">Portal SSO</a>
                                    {{-- <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención
                                        médica</a> 
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a> --}}
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="https://forms.office.com/r/N9ALmMTXbE">Investigación de accidentes</a>

                                </div>
                            </div>
                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center">
                                        <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                                            <line x1="13" y1="7" x2="13" y2="7.01" />
                                            <line x1="17" y1="7" x2="17" y2="7.01" />
                                            <line x1="17" y1="11" x2="17" y2="11.01" />
                                            <line x1="17" y1="15" x2="17" y2="15.01" />
                                        </svg>
                                        <span class="mx-2 font-medium">Universidad San Martín</span>
                                    </span>

                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" class="ml-1 h-8 w-8">
                                        <style>
                                            .slide-11 {
                                                animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                                            }

                                            @keyframes slide-11 {
                                                100% {
                                                    transform: translateY(2px)
                                                }
                                            }
                                        </style>
                                        <path class="slide-11" fill="#ffffff"
                                            d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                                    </svg>
                                </button>

                                <div x-show="open" class="bg-gray-100">
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=241">USM
                                        Guatemala</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=384">USM
                                        Administrativos</a>
                                    {{-- <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a> --}}
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=176">USM Cielito
                                        Lindo</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=100">USM
                                        Planta</a>
                                </div>
                            </div>

                            <!-- Utilizando "x" en lugar del icono anterior -->
                            <button id="nav-close"
                                class="text-white hover:text-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <span><svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="2"
                                            ry="2" />
                                        <line x1="9" y1="9" x2="15" y2="15" />
                                        <line x1="15" y1="9" x2="9" y2="15" />
                                    </svg></span>
                            </button>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>
    {{-- mensaje de reccibido etica --}}
    @if (session('success'))
        <div aria-live="assertive"
            class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6 z-50">
            <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
                <div
                    class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-gray-900">¡Su mensaje se ha enviado exitosamente!
                                </p>
                                <p class="mt-1 text-sm text-gray-500">{{ session('success') }}</p>
                            </div>
                            <div class="ml-4 flex flex-shrink-0">
                                <button type="button"
                                    onclick="this.parentElement.parentElement.parentElement.parentElement.remove()"
                                    class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    {{-- Promos --}}
    <div class="container mx-auto px-10 mt-36 sm:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

            <div class="relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full shadow-xl rounded-3xl aos-init" src="temporada/tazas.jpg"
                                alt="i4">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full shadow-xl rounded-3xl aos-init" src="temporada/galletass.jpg"
                                alt="i5">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full shadow-xl rounded-3xl aos-init" src="temporada/3-3.png"
                                alt="i5">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full shadow-xl rounded-3xl aos-init" src="temporada/roscas.jpg"
                                alt="i5">
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <!-- Informacion -->
            <div class="px-4 mb-8">
                <div class="divide-y divide-gray-200 rounded-lg opacity-90 text-center shadow">
                    <button id="activateModalBtn6"
                        class="h-80 w-full sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                        <img class="w-1/2 h-1/2 mx-auto my-12" src="iconos/Icono de información.svg" alt="Ícono PDF">
                        <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-8 font-semibold text-white">
                            Información</p>
                    </button>
                </div>
                <!-- Contenido del modal -->
                <div id="modalContainer6" class="hidden relative z-50" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                        <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all lg:w-2/5 md:w-3/5 sm:w-5/6 mx-auto">
                            <!-- Contenido del swiper -->
                            <div class="swiper-container-6 px-8">
                                <div class="swiper-wrapper">
                                    {{-- <div class="swiper-slide">
                                        <img src="gt-certi/EPP.jpeg" class="rounded-lg w-11/12 ml-6" alt="certi1">
                                    </div> --}}
                                    <div class="swiper-slide">
                                        <a href="http://192.168.111.212/usm/course/view.php?id=1527">
                                            <img src="gt-certi/EPP.jpeg" class="rounded-lg mx-auto w-full" alt="certi4">
                                        </a>
                                    </div>
                                    {{-- <div class="swiper-slide">
                                        <div class="swiper-slide">
                                            <img src="certificaciones/mol.png" class="rounded-lg w-full" alt="certi">
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="swiper-button-prev" style="padding-right: 3rem; color: white;"></div>
                                <div class="swiper-button-next" style="padding-left: 3rem; color: white;"></div>

                                <div class="swiper-pagination"></div> --}}
                            </div>
                            <!-- Fin del contenido del swiper -->

                            <!-- Botón para cerrar el modal -->
                            <button id="closeModalBtn6"
                                class="absolute mx-8 -top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actividades -->
            <div class="w-full px-4 mb-8">
                <div class="divide-y divide-gray-200 rounded-lg opacity-90 text-center shadow">
                    <button id="activateModalBtn7"
                        class="h-80 w-full sm-bk-blue card relative overflow-hidden border rounded-lg shadow-lg flex flex-col hover:bg-blue-300">
                        <img class="w-1/2 h-1/2 mx-auto my-12" src="iconos/Icono de actividades.svg" alt="Ícono PDF">
                        <p class="mx-auto rounded-xl lg:text-2xl sm:text-sm px-2 lg:px-8 font-semibold text-white">
                            Actividades</p>
                    </button>
                    <!-- Botón para activar el modal -->
                </div>
                <!-- Contenido del modal -->
                <div id="modalContainer7" class="w-48 hidden relative z-50" aria-labelledby="modal-title"
                    role="dialog" aria-modal="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="fixed inset-0 z-10 w-full flex items-center justify-center">
                        <div
                            class="relative transform overflow-hidden rounded-lg text-left shadow-xl lg:w-3/4 sm:w-5/6 transition-all mx-auto">
                            <!-- Contenido del swiper -->
                            <div class="swiper-container-7 px-8 pt-24">
                                <div class="swiper-wrapper">

                                    {{-- Certificación de Entrenadores de Operaciones --}}
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/certi1.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Certificación de Entrenadores de Operaciones</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/certi2.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Certificación de Entrenadores de Operaciones</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/certi3.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Certificación de Entrenadores de Operaciones</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/certi4.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Certificación de Entrenadores de Operaciones</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/certi5.jpeg" style="margin-top:-10%"
                                                class="rounded-lg w-11/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Certificación de Entrenadores de Operaciones</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/certi6.jpeg" style="margin-top:-10%"
                                                class="rounded-lg w-11/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Certificación de Entrenadores de Operaciones</div>
                                        </div>
                                    </div>

                                    {{-- Celebración 15 de septiembre Guatemala --}}
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/indepen1.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Celebración 15 de septiembre Guatemala</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/indepen2.jpeg" style=" margin-top:-10%"
                                                class="rounded-lg w-9/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-32">Celebración 15 de septiembre Guatemala</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/indepen3.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Celebración 15 de septiembre Guatemala</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/indepen4.jpeg" style="margin-left: 3%; margin-top:-10%"
                                                class="rounded-lg w-11/12" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Celebración 15 de septiembre Guatemala</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/indepen5.jpeg" style="margin-top:-10%"
                                                class="rounded-lg w-11/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Celebración 15 de septiembre Guatemala</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/indepen6.jpeg" style="margin-top:-10%"
                                                class="rounded-lg w-11/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Celebración 15 de septiembre Guatemala</div>
                                        </div>
                                    </div>

                                    {{-- Premiación concurso de inocuidad Planta de producción --}}
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/PREMIACION INOCUIDAD-1.PNG"
                                                style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12"
                                                alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Premiación concurso de inocuidad Planta de producción</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/PREMIACION INOCUIDAD-2.PNG"
                                                style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12"
                                                alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Premiación concurso de inocuidad Planta de producción</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/PREMIACION INOCUIDAD-3.PNG"
                                                style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12"
                                                alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Premiación concurso de inocuidad Planta de producción</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/PREMIACION INOCUIDAD-4.PNG"
                                                style="margin-left: 3%; margin-top:-10%" class="rounded-lg w-11/12"
                                                alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Premiación concurso de inocuidad Planta de producción</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/PREMIACION INOCUIDAD-5.PNG" style="margin-top:-10%"
                                                class="rounded-lg w-11/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description -mt-24 ml-10">Premiación concurso de inocuidad Planta de producción</div>
                                        </div>
                                    </div>

                                    {{-- Taller de Liderazgo de Talla Mundial --}}
                                    {{-- <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/Taller de Liderazgo de Talla Mundial1.jpeg" style="margin-top:-10%" class="rounded-lg w-10/12 mx-auto" alt="gt-acti12">
                                            <div class="image-description" style="margin-top:-10%; margin-left: 10%;">Taller de Liderazgo de Talla Mundial</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/Taller de Liderazgo de Talla Mundial2.jpeg" style="margin-top:-4%;" class="rounded-lg w-full mx-auto" alt="gt-acti13">
                                            <div class="image-description mx-auto" style="margin-left: 2%; margin-top:-4%">Taller de Liderazgo de Talla Mundial</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/Taller de Liderazgo de Talla Mundial3.jpeg" style="margin-top:-7%" class="rounded-lg w-9/12 mx-auto" alt="gt-acti14">
                                            <div class="image-description" style="margin-left:12%; margin-top:-7.5%">Taller de Liderazgo de Talla Mundial</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/Taller de Liderazgo de Talla Mundial4.jpeg" style="margin-top:-15%;" class="rounded-lg w-10/12 mx-auto" alt="gt-acti15">
                                            <div class="image-description" style="margin-left: 8%; margin-top:-7.8%;">Taller de Liderazgo de Talla Mundial</div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="gt-acti/Taller de Liderazgo de Talla Mundial5.jpeg" style="margin-top:-10%;" class="rounded-lg w-6/12 mx-auto" alt="gt-acti15">
                                            <div class="image-description" style="margin-left: 25%; margin-top:-8%;">Taller de Liderazgo de Talla Mundial</div>
                                        </div>
                                    </div> --}}

                                </div>
                                <div class="swiper-button-prev" style="padding-right: 3rem; color: white;"></div>
                                <div class="swiper-button-next" style="padding-left: 3rem; color: white;"></div>

                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- Fin del contenido del swiper -->

                            <!-- Botón para cerrar el modal -->
                            <button id="closeModalBtn7"
                                class="absolute mx-8 top-1 right-0 z-10 inline-flex justify-center rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-whit shadow-sm hover:bg-red-300">X</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
    </div>

    {{-- <div class="container mt-20 mx-auto px-8 lg:px-10 pt-16 lg:pt-20 ">
<div class="swiper-container">
<div class="swiper-wrapper ">
<div class="swiper-slide">
<img class="w-2/5 mx-auto" src="temp-feb/feb1.jpg" alt="i4">
</div>
<div class="swiper-slide">
<img class="w-2/5 mx-auto" src="temp-feb/feb2.jpg" alt="i5">
</div>
<div class="swiper-pagination"></div>
</div>
</div>
</div> --}}

    <div class="relative flex justify-center items-center py-8">
        <div class="w-5/6 md:w-5/6 lg:w-5/6 border-2 bg-black"></div>
    </div>

    {{-- Programas --}}
    <div class="container mx-auto p-4" data-aos="zoom-in-right" data-aos-duration="1500">
        <ul role="list"
            class="m-8 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 xs:grid-cols-1 sm:gap-x-4 lg:grid-cols-3 xl:gap-x-8">
            {{-- Evolution --}}
            <li class=" relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full" src="programa/logo1.jpeg"
                        alt="">
                    <h3 class="mt-6 text-2xl font-medium text-white">Evolution</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dd class="text-md text-white">Sistema de planilla de San Martín</dd>
                    </dl>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a
                                onclick="window.open('http://192.168.111.213/Evolution/Account/Login', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>
            {{-- Apps --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full" src="programa/sblanco.png"
                        alt="">
                    <h3 class="mt-6 text-2xl font-medium text-white">Apps</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dd class="text-md text-white">Sistema de aplicaciones de San Martín</dd>
                    </dl>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a onclick="window.open('http://192.168.111.227/smb/', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>
            {{-- invgate --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-30 w-32 flex-shrink-0 rounded-full" src="programa/InvgateLogo.jpeg"
                        alt="">
                    <h3 class="mt-6 text-2xl font-medium text-white">Invgate</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dd class="text-md text-white">Sistema de tickets San Martín</dd>
                    </dl>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a onclick="window.open('https://lapaneria.cloud.invgate.net/', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>

            {{-- Auditoria --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-30 w-32 flex-shrink-0 rounded-full" src="programa/sblanco.png"
                        alt="">
                    <h3 class="mt-6 text-2xl font-medium text-white">Auditoría</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dd class="text-md text-white">Sistema de auditoría San Martín</dd>
                    </dl>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a onclick="window.open('https://auditoria.sanmartinbakery.com', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>

            {{-- Portal SSO --}}
            <li class="relative divide-y divide-gray-200 rounded-lg bg-white opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col mt-4 xl:py-9">
                    <img class=" mx-auto h-3/4 w-11/12 flex-shrink-0 rounded-full xl:-my-20 xl:w-3/4"
                        src="sin-sso.png" alt="">
                    <h3 class="lg:mt-10 text-2xl font-medium text-blue-900">Portal SSO</h3>
                </div>

                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a href="/portal-sso">Acceder</a>
                        </button>
                    </div>
                </div>
                {{-- USM Admin --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-4/5 flex-shrink-0 rounded-full lg:mt-2 xl:mt-10"
                        src="programa/logotipo USM_001-03.svg" alt="">
                    <h3 class="lg:mt-4 text-2xl font-medium text-white">Aula Virtual Administrativos</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a
                                onclick="window.open(' http://192.168.111.212/usm/course/index.php?categoryid=384', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>

            {{-- USM Cielito --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-28 w-11/12 flex-shrink-0 rounded-full lg:mt-2"
                        src="Nuevo Logotipo Cielito LIndo-01.svg" alt="">
                    <h3 class="lg:mt-8 text-2xl font-medium text-white">Aula Virtual </br> Cielito Lindo</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a
                                onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=176', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>

            {{-- USM Planta --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-4/5 flex-shrink-0 rounded-full lg:mt-2 xl:mt-10"
                        src="programa/logotipo USM_001-03.svg" alt="">
                    <h3 class="lg:mt-4 text-2xl font-medium text-white">Aula Virtual Planta</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a
                                onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=100', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>

            {{-- USM Tiendas --}}
            <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-4/5 flex-shrink-0 rounded-full lg:mt-2 xl:mt-10"
                        src="programa/logotipo USM_001-03.svg" alt="">
                    <h3 class="lg:mt-4 text-2xl font-medium text-white">Aula Virtual Operaciones</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a
                                onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=241', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    {{-- Scripts --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var images = document.querySelectorAll("img");
        
            images.forEach(function(image) {
                image.addEventListener("mouseover", function() {
                    var description = this.getAttribute("title");
                    if (description) {
                        alert(description);
                    }
                });
            });
        });
    </script> --}}

    <script>
        function validateForm() {
            var firstName = document.getElementById('first-name').value;
            var phoneNumber = document.getElementById('phone-number').value;

            if (firstName.trim() == '' || phoneNumber.trim() == '') {
                alert('Por favor, complete todos los campos obligatorios.');
                return false;
            }
            return true;
        }
    </script>

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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener elementos de activación de modal
            var activateModalBtn6 = document.getElementById("activateModalBtn6");
            var activateModalBtn7 = document.getElementById("activateModalBtn7");

            // Obtener elementos de cierre de modal
            var closeModalBtn6 = document.getElementById("closeModalBtn6");
            var closeModalBtn7 = document.getElementById("closeModalBtn7");
            // Obtener contenedores de modal
            var modalContainer6 = document.getElementById("modalContainer6");
            var modalContainer7 = document.getElementById("modalContainer7");

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

            // Función para cerrar el modal
            function closeModal(modal) {
                modal.classList.add("hidden");
            }

            activateModalBtn6.addEventListener("click", function() {
                showModalAndInitSwiper(modalContainer6, '.swiper-container-6');
            });

            activateModalBtn7.addEventListener("click", function() {
                showModalAndInitSwiper(modalContainer7, '.swiper-container-7');
            });

            closeModalBtn6.addEventListener("click", function() {
                closeModal(modalContainer6);
            });

            closeModalBtn7.addEventListener("click", function() {
                closeModal(modalContainer7);
            });
        });
    </script>

    <script>
        // Función para abrir el modal
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        // Asignar evento de clic al botón de la imagen
        document.getElementById('openModalImg').addEventListener('click', function() {
            openModal('modalContainer7');
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
