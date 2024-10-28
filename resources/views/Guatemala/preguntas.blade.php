<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Preguntas Frecuentes</title>
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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @vite('resources/css/app.css')

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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="flex flex-col">
        <!--Nav-->
        <nav id="header" class="sm-bk-blue p-1 z-50">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
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
                            <a @click="showModal = true" class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black">Botón de Ética</a>
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black" href="{{ route('conoce') }}">Conoce a nuestro equipo</a>
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black" href="{{ route('interna') }}">Comunicación interna</a>
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black" href="{{ route('planta') }}">Extensiones corporativas</a>
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black" href="{{ route('tienda') }}">Extensión Tienda</a>
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black" href="{{ route('nomina') }}">Nómina</a>
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black" href="{{ route('preguntas') }}">Preguntas frecuentes</a>
                        </div>
        
                       <!-- Modal -->
                        <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center overflow-auto bg-gray-500 bg-opacity-75">
                            <div class="relative z-50 bg-white rounded-lg w-3/4 h-4/5 p-8 sm:m-0">
                                <button @click="showModal = false" class="absolute top-0 right-0 mt-4 mr-4 text-gray-700 hover:text-gray-900 focus:outline-none">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                                <div class="mt-3 text-center sm:mt-5">
                                    <h3 class="text-xl pb-8">Botón de Ética</h3>
                                    <div class="mt-2">
                                        <form method="POST" action="{{ route('sendEtica') }}" enctype="multipart/form-data" aria-label="Formulario de comentarios sobre ética" onsubmit="return validateForm()">
                                            @csrf
                                            <input type="hidden" name="country" value="gt"> 
                                            <div class="grid grid-cols-2 gap-4">
                                                <div class="mt-2.5">
                                                    <input placeholder="Nombre y apellido" type="text" name="firstname" id="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                </div>
                                                <div class="mt-2.5">
                                                    <input placeholder="Número de teléfono" type="number" name="phonenumber" id="phonenumber" autocomplete="number" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                </div>
                                            </div>
                                            <div class="border-b border-gray-200 focus-within:border-indigo-600 mt-12">
                                                <label for="comment" class="sr-only">Add your comment</label>
                                                <textarea rows="3" name="comment" id="comment" class="ckeditor h-48 block w-full resize-none border-0 border-b border-transparent p-0 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="¿Tienes algún caso especial que quieras comentarnos? Escríbenos, pero antes de hacerlo, asegúrate de estar compartiendo información verídica. Es necesario que dejes tus datos para poder darle el seguimiento al caso, no te preocupes que tus datos serán manejados confidencialmente. " required></textarea>
                                            </div>
                                            <div class="flex justify-between pt-2">
                                                <div class="flex items-center space-x-5">
                                                    <button type="submit" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-semibold text-white" style="background-color: #003B7A">Enviar</button>
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
                                    onclick="window.open('http://192.168.111.229/cpa/marcafoto', '_blank')">Registro Facial</span>
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
                                    onclick="window.open('https://smordermanager.sanmartinbakery.com/#/login', '_blank')">Orden Manager</span>
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
                        <div x-show="open" class=" absolute sm-bk-blue opacity-95">
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                                href="{{ route('sso') }}">Portal SSO</a>
                            {{-- <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                                href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención Medica</a> 
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                                href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a>--}}
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                                href="https://forms.office.com/r/N9ALmMTXbE">Investigación de Accidentes</a>
                            
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
                                <span class="mx-2 font-medium">Universidad San Martin</span>
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
                                            <a @click="showModal = true" class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white">Botón de Ética</a>
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
                                        <div x-show="showModal" class="fixed inset-0 z-10 flex items-center justify-center overflow-auto bg-gray-500 bg-opacity-75">
                                            <div class="flex items-center justify-center min-h-screen">
                                                <div class="bg-white rounded-lg w-full max-w-lg p-8">
                                                    <button @click="showModal = false" class="absolute top-0 right-0 mt-4 mr-4 text-gray-700 hover:text-gray-900 focus:outline-none">
                                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="white">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </button>
                                                    <h3 class="text-xl pb-8">Botón de Ética</h3>
                                                    <form method="POST" action="{{ route('sendEtica') }}" enctype="multipart/form-data" aria-label="Formulario de comentarios sobre ética" onsubmit="return validateForm()">
                                                        @csrf
                                                        <input type="hidden" name="country" value="gt"> 
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div class="mt-2.5">
                                                                <input placeholder="Nombre y apellido" type="text" name="firstname" id="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                            </div>
                                                            <div class="mt-2.5">
                                                                <input placeholder="Número de teléfono" type="number" name="phonenumber" id="phonenumber" autocomplete="number" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                            </div>
                                                        </div>
                                                        <div class="border-b border-gray-200 focus-within:border-indigo-600 mt-4">
                                                            <label for="comment" class="sr-only">Add your comment</label>
                                                            <textarea rows="3" name="comment" id="comment" class="ckeditor h-48 block w-full resize-none border-0 border-b border-transparent p-0 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="¿Tienes algún caso especial que quieras comentarnos? Escríbenos, pero antes de hacerlo, asegúrate de estar compartiendo información verídica. Es necesario que dejes tus datos para poder darle el seguimiento al caso, no te preocupes que tus datos serán manejados confidencialmente. " required></textarea>
                                                        </div>
                                                        <div class="flex justify-between pt-2">
                                                            <div class="flex items-center space-x-5">
                                                                <button type="submit" class="inline-flex items-center rounded-md px-3 py-2 text-sm font-semibold text-white" style="background-color: #003B7A">Enviar</button>
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
                                                    onclick="window.open('http://192.168.111.229/cpa/marcafoto', '_blank')">Registro Facial</span>
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
                                                    onclick="window.open('https://smordermanager.sanmartinbakery.com/#/login', '_blank')">Orden Manager</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div x-data="{ open: false }">
                                        <button @click="open = !open"
                                            class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
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
                                        <div x-show="open" class="bg-gray-100">
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="{{ route('sso') }}">Portal SSO</a>
                                            {{-- <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                            href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención Medica</a> 
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a>--}}
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="https://forms.office.com/r/N9ALmMTXbE">Investigación de Accidentes</a>
                                            
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
                                                <span class="mx-2 font-medium">Universidad San Martin</span>
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
                                                href="http://192.168.111.212/usm/course/index.php?categoryid=241">USM Guatemala</a>
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="http://192.168.111.212/usm/course/index.php?categoryid=384">USM Administrativos</a>
                                            {{-- <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a> --}}
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="http://192.168.111.212/usm/course/index.php?categoryid=176">USM Cielito Lindo</a>
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="http://192.168.111.212/usm/course/index.php?categoryid=100">USM Planta</a>
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
        </nav>
        {{-- mensaje de reccibido etica --}}
    @if (session('success'))
    <div aria-live="assertive" class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6 z-50">
        <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
            <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-gray-900">¡Su mensaje se ha enviado exitosamente!</p>
                            <p class="mt-1 text-sm text-gray-500">{{ session('success') }}</p>
                        </div>
                        <div class="ml-4 flex flex-shrink-0">
                            <button type="button" onclick="this.parentElement.parentElement.parentElement.parentElement.remove()" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="sr-only">Close</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const openMenuButton = document.getElementById('openMenuButton');
            const closeMenuButton = document.getElementById('closeMenuButton');
            const mobileMenu = document.querySelector('[role="dialog"]');

            openMenuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('hidden');
            });

            closeMenuButton.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>


    <div class="container mx-aut px-8">
        <main class="relative isolate">
            <div class="bg-white">
                <div class="mx-auto max-w-7xl divide-y divide-gray-900/10 px-6 py-24 sm:py-32 lg:px-8 lg:py-20">
                  <h2 class="text-2xl text-center font-bold leading-10 tracking-tight text-gray-900">Preguntas Frecuentes</h2>
                 
                  <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">

                    <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                      <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">¿Cómo repongo mi carné de empleado?</dt>
                      <dd class="mt-4 lg:col-span-7 lg:mt-0">
                        <p class="text-justify leading-7 text-gray-600">Tiendas: Debes realizar tu trámite directamente con tu gerente.<br />
                            Planta / oficinas administrativas: Debes realizar tu trámite en Desarrollo Humano de Planta o de Plaza Canadá.<br />
                            <br />
                            Recuerda que las reposiciones pueden ser por:<br />
                            •             Deterioro: Si tu carné se encuentra con deterioro puedes solicitar una reposición sin costo entregando tu carné anterior.<br />
                            •             Pérdida: Si extraviaste tu carné debes firmar un vale de autorización de descuento en planilla de Q. 40.00 y posterior se envía a la sucursal.<br />
                            •             Robo: Si cuentas con una denuncia (Ministerio Público), tu reposición no tendrá costo, si no cuentas con ella debes firmar un vale de autorización de descuento en planilla de Q. 40.00.</p>
                      </dd>
                    </div>

                    <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">

                        <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                            <dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">¿Cómo y cuándo debo tramitar mi carné de IRTRA?</dt>
                            <dd class="mt-4 lg:col-span-7 lg:mt-0">
                              <p class="text-justify leading-7 text-gray-600">Tiendas: Debes hacer tu trámite con tu gerente.<br />
                                Planta / oficinas administrativas: Debes hacer tu trámite en Desarrollo Humano de Planta o de Plaza Canadá.<br />
                                  <br />
                                  Recuerda los requisitos para cada tipo de trámite:<br />
                                  •             Primer carné: Debes tener 4 meses laborados en la empresa.<br />
                                  •             Renovación de plástico: Si tu carné ya cumplió 5 años desde su fecha de emisión, este lo debes entregar cuando realices tu trámite para que no se te cobre la reposición.<br />
                                  •             Reposición con costo: Si perdiste o te robaron tu carné, debes cancelar Q.25.00 en efectivo cuando realices tu trámite.<br />
                                  <br />Para todos los trámites debes llevar tu fotografía y firmar un formulario proporcionado por la persona encargada de estos, dependiendo tu sede de trabajo. La fotografía debe ser tamaño cédula, a color, sin rayones ni tachones, de preferencia que sea de tipo estudio. (La foto también puede ser tomada por la persona encargada de tu trámite.)

                                </p>
                            </dd>
                        </div>
            
                  </dl>
                </div>
              </div>
              
        </main>
    </div>

    <footer class="sm-bk-blue footer-container md:my-6 p-1 ">
        <div class="mx-auto max-w-xl px-6 py-4 md:flex md:items-center md:justify-between lg:px-8">
            <div class="space-x-8 flex justify-center items-center md:order-2">
                <p class=" py-1 text-xs leading-5 text-white">&copy; San Martin 2024</p>
            </div>
        </div>
    </footer>
    </div>
    </div>


</body>

</html>