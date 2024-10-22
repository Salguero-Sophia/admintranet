<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dallas Extension Tienda</title>
    <meta name="description" content="Recursos Humanos" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


    <!-- Styles -->
    <style>
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #030406;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: .5rem;
            padding-bottom: .5rem;
            line-height: 1.25;
            border-width: 2px;
            border-radius: .25rem;
            border-color: #edf2f7;
            background-color: #edf2f7;
        }

        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            border-radius: .25rem;
            border: 1px solid transparent;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            font-weight: 700;
            border-radius: .25rem;
            background: #667eea !important;
            border: 1px solid transparent;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            font-weight: 700;
            border-radius: .25rem;
            background: #667eea !important;
            border: 1px solid transparent;
        }

        .dataTables_wrapper .dataTables_paginate {
            margin-left: -2rem;
            margin-right: -1rem;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;

        }

        .custom-pagination-arrow {
            font-weight: bold;
            font-size: 1rem;
            color: black;
        }

        .sm-bk-blue {
            background: #003B7A;
        }

        #logo {
            display: block;
            margin: 0 auto;
            max-width: 80%;
            height: auto;
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
            bottom: 0;
            width: 100%;
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
</head>

<body>
    <div class="max-h-screen flex flex-col">
    <!--Nav-->
    <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed py-1">
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
                                            onclick="window.open('http://192.168.111.229/cpa/marcafoto', '_blank')">Registro Facial </span>
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
     
    <div class="container w-full md:w-10/12 xl:w-11/12 mx-auto px-4 py-28 mt-8 xl:py-44">
        <!-- Contenido de la tabla -->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Tienda</th>
                        <th data-priority="3">Teléfono</th>
                        <th data-priority="4">Horario</th>
                        <th data-priority="5">Dirección</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- Dallas, Texas --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Dallas, Texas</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">+1 (469) 802-6652</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a
                           Jueves 7:00 am a 8:00 pm<br /> Viernes a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">3120 Mckinney Ave, Dallas, Tx 75204, USA</td>
                    </tr>
                    {{-- Addison, Dallas Tx --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Addison, Dallas Tx</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">------</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a
                            Jueves 7:00 am a 8:00 pm<br /> Viernes a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">5407 Bet Line Rd, Dallas, Tx 75254, USA</td>
                    </tr>
                
                </tbody>

            </table>
        </div>
    </div>
    {{-- Fin Tabla --}}
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

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true,
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "Todos"]
                    ],
                    "searching": true,
                    "language": {
                        "lengthMenu": "Ver _MENU_ por página",
                        "search": "Buscar:",
                        "info": "_START_ - _END_ de _TOTAL_ ",
                        "infoEmpty": "0 - 0 de 0 ",
                        "infoFiltered": "(filtrado de un total de _MAX_ entradas)",
                        "paginate": {
                            "first": "⇤",
                            "last": "⇥",
                            "next": '<span class="custom-pagination-arrow">→</span>',
                            "previous": '<span class="custom-pagination-arrow">←</span>'
                        }
                    }
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>
