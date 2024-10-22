<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dallas</title>
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
    <!--Nav-->
    <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed py-4">
        <!-- Sección izquierda (oculta en dispositivos móviles) -->
        <div class="hidden lg:flex lg:items-center mx-8">
            <a href="/" class="py-4 flex justify-center items-center">
                <!-- Logo del navbar -->
                <img id="logo" class="w-16" src="Group 1.svg" alt="Logo" />
            </a>
            <a href="{{ route('usa') }}"> <img width="56" height="56"
                src="https://img.icons8.com/color/56/usa-circular.png" alt="usa-circular" /></a>
        </div>

        <!-- Sección derecha (oculta en dispositivos móviles) -->
        <div class="hidden lg:flex lg:flex-initial absolute top-7 -right-4">
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
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
                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
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

                <div x-show="open" class=" absolute sm-bk-blue opacity-95">
                    {{-- <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('planta') }}">Extensión Planta</a> --}}
                    <a @click="showModal = true" class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black">Botón de Ética</a>
                    <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                        href="{{ route('tiend') }}">Extensión Tienda</a>
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
                                <form method="POST" action="{{ route('sendEtica') }}" enctype="multipart/form-data" aria-label="Formulario de comentarios sobre ética">
                                    @csrf
                                    <input type="hidden" name="country" value="usa"> 
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="mt-2.5">
                                            <input placeholder="Nombre y apellido" type="text" name="firstname" id="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                        <div class="mt-2.5">
                                            <input placeholder="Número de teléfono" type="number" name="phonenumber" id="phonenumber" autocomplete="number" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>
                                    <div class="mt-8 border-b border-gray-200 focus-within:border-indigo-600">
                                        <label for="comment" class="sr-only">Add your comment</label>
                                        <textarea rows="3" name="comment" id="comment" class="h-48 block w-full resize-none border-0 border-b border-transparent p-0 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="¿Tienes algún caso especial que quieras comentarnos? Escríbenos, pero antes de hacerlo, asegúrate de estar compartiendo información verídica. Es necesario que dejes tus datos para poder darle el seguimiento al caso, no te preocupes que tus datos serán manejados confidencialmente. "></textarea>
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

            {{-- <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center" onclick="window.location.href='/portal-sso'">
                        <img id="logo" class="w-14" src="iconos/AF_Logotipo SSO_SM_2023-04.svg" alt="Logo" />
                        <span class="mx-2 font-medium" onclick="window.location.href='/portal-sso'">Portal SSO</span>
                    </span>
                </button>
            </div> --}}
            
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
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
                            onclick="window.open('http://192.168.111.229/cpa/marcafoto', '_blank')">Registro Facial </span>
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
                            <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                            <line x1="13" y1="7" x2="13" y2="7.01" />
                            <line x1="17" y1="7" x2="17" y2="7.01" />
                            <line x1="17" y1="11" x2="17" y2="11.01" />
                            <line x1="17" y1="15" x2="17" y2="15.01" />
                        </svg>

                        <span class="mx-2 font-medium"
                            onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=263', '_blank')">Universidad San Martín</span>
                    </span>
                </button>
            </div>

            {{-- <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                    <span class="flex items-center">
                        <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="mx-2 font-medium"
                            onclick="window.open('https://sanmartinbakery.com/managment/orders/login/', '_blank')">Orden
                            Manager</span>
                    </span>
                </button>
            </div> --}}
            {{-- <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
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
                        href="http://192.168.111.212/usm/course/index.php?categoryid=241">USM
                        Guatemala</a>
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=245">USM El
                        Salvador</a>
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a>
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=176">USM Cielito
                        Lindo</a>
                    <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                        href="http://192.168.111.212/usm/course/index.php?categoryid=100">USM
                        Planta</a>
                </div>
            </div> --}}
            </ul>
        </div>
        {{-- mobile --}}
        <div
            class="lg:hidden w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2 sm-bk-blue">
            <div class="pl-4 flex items-center mx-auto">
                <div class="lg:hidden xs:flex xs:items-center mx-8">
                    <a href="/" class="py-4 flex justify-center items-center">
                        <!-- Logo del navbar -->
                        <img id="logo" class="w-80%" src="programa/sm.png" alt="Logo" />
                    </a>
                </div>
                <div class="block absolute left-6">
                    <div class="lg:hidden">
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

                            <a href="{{ route('usa') }}" class="absolute top-1"
                                class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                <img class="mr-2" width="48" height="48"
                                    src="https://img.icons8.com/color/48/usa-circular.png"
                                    alt="usa-circular" />
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
                                        <span class="mx-2 font-medium" onclick="window.location.href='/'">Home</span>
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
                                    {{-- <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('planta') }}">Extensión Planta</a> --}}
                                    <a @click="showModal = true" class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white">Botón de Ética</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="{{ route('tiend') }}">Extensión Tienda</a>

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
                                            <form method="POST" action="{{ route('sendEtica') }}" enctype="multipart/form-data" aria-label="Formulario de comentarios sobre ética">
                                                @csrf
                                                <input type="hidden" name="country" value="usa"> 
                                                <div class="grid grid-cols-2 gap-4">
                                                    <div class="mt-2.5">
                                                        <input placeholder="Nombre y apellido" type="text" name="firstname" id="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                    <div class="mt-2.5">
                                                        <input placeholder="Número de teléfono" type="number" name="phonenumber" id="phonenumber" autocomplete="number" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>
                                                <div class="mt-8 border-b border-gray-200 focus-within:border-indigo-600">
                                                    <label for="comment" class="sr-only">Add your comment</label>
                                                    <textarea rows="3" name="comment" id="comment" class="h-48 block w-full resize-none border-0 border-b border-transparent p-0 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6" placeholder="¿Tienes algún caso especial que quieras comentarnos? Escríbenos, pero antes de hacerlo, asegúrate de estar compartiendo información verídica. Es necesario que dejes tus datos para poder darle el seguimiento al caso, no te preocupes que tus datos serán manejados confidencialmente. "></textarea>
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

                        {{-- <div x-data="{ open: false }">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                <span class="flex items-center" onclick="window.location.href='/portal-sso'">
                                    <img id="logo" class="w-14" src="iconos/AF_Logotipo SSO_SM_2023-04.svg" alt="Logo" />
                                    <span class="mx-2 font-medium" onclick="window.location.href='/portal-sso'">Portal SSO</span>
                                </span>
                            </button>
                        </div> --}}

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
                                            Facial </span>
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
                                            <path
                                                d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                                            <line x1="13" y1="7" x2="13" y2="7.01" />
                                            <line x1="17" y1="7" x2="17" y2="7.01" />
                                            <line x1="17" y1="11" x2="17" y2="11.01" />
                                            <line x1="17" y1="15" x2="17" y2="15.01" />
                                        </svg>

                                        <span class="mx-2 font-medium"
                                            onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=263', '_blank')">Universidad San Martín</span>
                                    </span>
                                </button>
                            </div> 
                            {{-- <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-800 hover:text-gray-100 focus:outline-none">
                                    <span class="flex items-center">
                                        <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>

                                        <span class="mx-2 font-medium"
                                            onclick="window.open('https://sanmartinbakery.com/managment/orders/login/', '_blank')">Orden
                                            Manager</span>
                                    </span>
                                </button>
                            </div> --}}
                            {{-- <div x-data="{ open: false }">
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
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=245">USM El
                                        Salvador</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=176">USM Cielito
                                        Lindo</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=100">USM
                                        Planta</a>
                                </div>
                            </div> --}}
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

    {{-- Promos --}}
    <div class="container mx-auto p-10 lg:p-48 lg:-my-36" data-aos="flip-left" data-aos-duration="1500">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-36">
            <div class="relative">
                <div class="group aspect-h-20 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/croissant.jpg"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
                </div>
            </div>

            <div class="relative">
                <div class="group aspect-h-20 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/croissantchoco.jpg"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
                </div>
            </div>
            <div class="relative">
                <div class="group aspect-h-20 aspect-w-10 block w-full overflow-hidden rounded-lg">
                    <img data-aos="fade-left" src="temporada/tartlet.jpg"
                        class="w-full shadow-xl rounded-3xl aos-init aos-animate">
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
    <div class="container mx-auto p-4" data-aos="flip-right" data-aos-duration="1500">
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
             {{-- USM --}}
             <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-4/5 flex-shrink-0 rounded-full" src="programa/logotipo USM_001-03.svg" alt="">
                    <h3 class="mt-8 mb-6 text-2xl font-medium text-white">Universidad San Martín</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=263', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li>
            {{-- USM --}}
            {{-- <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-4/5 flex-shrink-0 rounded-full" src="programa/logotipo USM_001-03.svg" alt="">
                    <h3 class="mt-8 mb-6 text-2xl font-medium text-white">Aula Virtual Operaciones</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a onclick="window.open('http://192.168.111.212/usm/', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li> --}}
            {{-- USM Planta--}}
            {{-- <li class="relative divide-y divide-gray-200 rounded-lg sm-bk-blue opacity-90 text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-4/5 flex-shrink-0 rounded-full" src="programa/logotipo USM_001-03.svg"
                        alt="">
                    <h3 class="mt-8 mb-6 text-2xl font-medium text-white">Aula Virtual Planta</h3>
                </div>
                <div>
                    <div class="center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline bg-white text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            <a onclick="window.open('http://192.168.111.212/usm/course/index.php?categoryid=100', '_blank')">Acceder</a>
                        </button>
                    </div>
                </div>
            </li> --}}
        </ul>
    </div>


    <!-- FAQs -->
    {{-- <div
class="mx-auto max-w-2xl divide-y divide-gray-900/10 px-6 pb-8 sm:pb-24 sm:pt-12 lg:max-w-7xl lg:px-8 lg:pb-32">
<h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
<dl class="mt-10 space-y-8 divide-y divide-gray-900/10">
<div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
<dt class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">What&#039;s the best
thing about Switzerland?</dt>
<dd class="mt-4 lg:col-span-7 lg:mt-0">
<p class="text-base leading-7 text-gray-600">I don&#039;t know, but the flag is a big plus.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam
fugiat.</p>
</dd>
</div>


</dl>
</div> --}}
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
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

    <!-- Footer -->
    <div class="sm-bk-blue mx-auto mt-32 px-6 lg:px-8">
        <footer aria-labelledby="footer-heading" class="relative border-t border-gray-900/10 py-10">
            <section class="flex justify-center items-center">
                {{-- <a href="https://www.facebook.com/sanmartingt" target="_blank"
                    class="text-gray-200 hover:text-gray-300">
                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a> --}}
                <p class=" text-xs leading-5 text-white">&copy; San Martín 2024</p>
            </section>

    </div>
    </footer>
    </div>
    </div>


</body>

</html>
