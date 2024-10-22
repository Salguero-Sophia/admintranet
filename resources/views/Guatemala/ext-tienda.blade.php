<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Extension Tienda</title>
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
                                href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención médica</a> 
                            <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                                href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a>--}}
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
                                            href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención médica</a> 
                                            <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                                href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a>--}}
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

    <div class="container w-full md:w-10/12 xl:w-11/12 mx-auto px-4 mt-8 mb-8">
        <!-- Contenido de la tabla -->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Tienda</th>
                        <th data-priority="2">Extensión</th>
                        <th data-priority="3">Directo</th>
                        <th data-priority="4">Horario</th>
                        <th data-priority="5">Dirección</th>
                        <th data-priority="6">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Plaza Ferco --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            20 Calle (Plaza Ferco)</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">202</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209903</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Sábado 6:00 am a 8:00 pm<br /> Domingo 7:00 am a 7:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">20 Calle 12-84 Zona 10 ,
                            Locales 4 y 5</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:20calle@sanmartinbakery.com">20calle@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Aguilar Batres --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Aguilar
                            Batres</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">231</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209931</td>
                        <td class=" whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes
                            a Domingo de 7:00 am a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">13 Calle, 0-35 zona 11,
                            Calzada Aguilar Batres</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="aguilarbatres@sanmartinbakery.com">aguilarbatres@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Antigua --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Antigua
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">238</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209938</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 6:00 am
                            a 9:00 pm <br /> Viernes a Sábado 6:00am a 10:00pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">6a. Calle Poniente # 5,
                            Antigua Guatemala, Sacatepequez</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:antigua@sanmartinbakery.com">antigua@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Calle Marti --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Calle
                            Martí</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">200</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209901</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Viernes 6:30 am
                            a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Calle Martì 7-20 Z.2
                            Local No.8</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:callemarti@sanmartinbakery.com">callemarti@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Calle Real --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Calle
                            Real</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">204</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209905</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Miércoles 6:00
                            am a 8:30 pm<br /> Jueves a Sábado 6:00 am a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km.15.5 Carr. a El
                            Salvador Condado Concepción<br /> Calle Real fase II local 9</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:callereal@sanmartinbakery.com">callereal@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Central --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Central
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">213</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209914</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Sábado 6:00 am a
                            8:00 pm<br />Domingos 7:00 am a 7:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">2a. Calle 17-54 zona 15,
                            Colonia El Maestro Local No.2 y 3</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:central@sanmartinbakery.com">central@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Centro Historico --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Centro
                            Histórico</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">239</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209939</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo de 6:00
                            a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">6 av 10 - 00 zona 1
                            (Paseo la sexta)</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:centrohistorico@sanmartinbakery.com">centrohistorico@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Encinal --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Encinal
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">221</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209922</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Viernes 7:00 am
                            a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Calle Los Pinos 18-67
                            Z.7 Col. San Carlos, Plaza San Carlos El Encinal</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:encinal@sanmartinbakery.com">encinal@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Escala --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Escala
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">211</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209912</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 7:00 a
                            9:00 rest.<br /> vie a Sábado 7:00 a 10:00 rest<br /> <br /> Domingo a Jueves 6:00 a
                            9:00 pan.<br /> vie a Sábado 6:00 a 10:00 pan</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km. 14.5 Carret. A El
                            Salvador Sta. Catarina Pinula, Puerta Parada</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:escala@sanmartinbakery.com">escala@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Eskala Roosevelt --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Eskala
                            Roosevelt</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">222</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209923</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 8:00 am
                            a 9:00 pm<br /> Viernes y Sábado de 8:00 am a 9:30 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km.13.8 Calzada
                            Roosvelt, Z.3 de Mixco, Locales: L-143 y L-144</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:roosevelt@sanmartinbakery.com">roosevelt@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Gran Vía --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Gran Vía
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">201</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209902</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Calz. Roosevelt 28-09
                            Z.7 C.C. Gran Vía, Local 30</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:granvia@sanmartinbakery.com">granvia@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Las Américas --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Las
                            Américas</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">223</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209924</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 6:00 am
                            a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Avenida Las Américas
                            15-00 Z. 13, Plaza Subway, Locales 2 y 3</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:lasamericas@sanmartinbakery.com">lasamericas@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Majadas --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Majadas
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">220</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209921</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 6:00 am
                            a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Parque Comercial
                            Majadas, zona 11</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:majadas@sanmartinbakery.com">majadas@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- MetroCentro --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Metrocentro</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">209</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209910</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">0 Calle 16-20 Zona 4 de
                            Villa Nueva, C.C. Metrocentro, Locales: 185-188</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:metrocentrovilla@sanmartinbakery.com">metrocentrovilla@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Miraflores --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Miraflores</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">212</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209913</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">21 Avenida 4-32 Zona 11
                            C.C. Miraflores locales 2 y 3</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:miraflores@sanmartinbakery.com">miraflores@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Miraflores 2 --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Miraflores 2</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">240</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209940</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 08:00
                            am a 08:00 pm<br /> Viernes y Sábado 8:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">21 avenida 4-32, zona 11
                            C.C. Miraflores Local L140</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:miraflores2@sanmartinbakery.com">miraflores2@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Montúfar --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Montúfar
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">218</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209919</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Sábado 6:00 am a
                            9:00 pm<br /> Domingo 7:00 am a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">12 Calle 0-93 Zona 9
                            C.C. Montúfar</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:montufar@sanmartinbakery.com">montufar@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Muxbal --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Muxbal
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">214</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209927</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km. 13.5 carretera
                            antigua a El Salvador, Finca Los Tilos zona 4, Sta Catarina Pinula</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:muxbal@sanmartinbakery.com">muxbal@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Naranjo --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Naranjo
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">236</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209936</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo de 7:00
                            am a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">23 calle 10-00 z.4 de
                            Mixco Condado el Naranjo.</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:naranjo@sanmartinbakery.com">naranjo@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Oakland --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Oakland
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">237</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209937</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domigo 7:00 am a
                            10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Diagonal 6 13-01 z.10
                        </td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:oakland@sanmartinbakery.com">oakland@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Pacific --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Pacific
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">216</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209917</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Sábado 8:00 am a
                            9:00 pm<br /> Domingos 8:00am a 8:00pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">C.C. Pacific Center,
                            Calzada Aguilar Batres 32-00 Zona 11</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:pacificcenter@sanmartinbakery.com">pacificcenter@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Parque Américas --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Parque
                            Américas</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">243</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209943</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo de 7:00
                            am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Avenida Las Américas,
                            6-69 zona 14</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:parquelasamericas@sanmartinbakery.com">parquelasamericas@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Pasaje Naranjo --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Pasaje
                            Naranjo</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">241</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209941</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo de 7:00
                            am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">10 ave. 18-58 Zona 4
                            Mixco, Condado Naranjo, 800 mts. Naranjo Mall, Frente al residencial Condando Naranjo.
                        </td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:pasajonaranjo@sanmartinbakery.com">pasajonaranjo@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Petapa --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Petapa
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">230</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209930</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 7:00 a
                            10:00 rest.<br /> Domingo a Jueves 6:00 a 10:00 pan.</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Ave Petapa 50-75 zona
                            12, Local 1, Plaza Canadá</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:petapa@sanmartinbakery.com">petapa@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Peri Roosevelt --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Peri
                            Roosevelt</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">242</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209942</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo de 7:00
                            am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Calzada Roosevelt 25-50
                            de la zona 7, local IF-1, C.C. Peri Roosevelt</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:periroosevelt@sanmartinbakery.com">periroosevelt@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Plaza Madero --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Plaza
                            Madero</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">235</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209935</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km. 21.7 carretera a El
                            Salvador, zona 3 Villa Canales Gerentes</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:madero@sanmartinbakery.com">madero@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Portales --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Portales
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">224</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209925</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 7:00 am
                            a 9:00 pm<br /> Viernes y Sábado 7:00 am a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">CC Portales zona 17</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:portales@sanmartinbakery.com">portales@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Pradera --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Pradera
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">203</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209904</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">C.C. La Pradera z. 10,
                            Locales 4 y 5</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:pradera@sanmartinbakery.com">pradera@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- San Cristóbal --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            San
                            Cristóbal</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">210</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209911</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 8:30 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Zona 8 de Mixco, C.
                            Comercial Plaza San Cristóbal Local 132</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:sancristobal@sanmartinbakery.com">sancristobal@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- San Cristóbal Mix --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            San
                            Cristóbal Mix</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">205</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209906</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 7:00 am
                            a 9:00 pm <br /> Domingo a Jueves 7:00 am a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">5a. Avenida 3-05 Sector
                            A-3 zona 8 de Mixco, San Cristóbal Local No.28</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:sancristobalmix@sanmartinbakery.com">sancristobalmix@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- San Lucas --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            San
                            Lucas</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">225</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209928</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 6:30 am
                            a 9:30 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km 29.5 Carretera
                            Interamericana San Lucas, Sacatepequez Local C</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:sanlucas@sanmartinbakery.com">sanlucas@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- San Nicólas --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            San
                            Nicolás</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">217</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209918</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 8:30 pm rest.<br /> Lunes a Domingo 7:00 am a 8:00 pm café.</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"> 41 Ave. 3-10 C.C. Plaza
                            San Nicolás, Local 108 y 109, Z.4 de Mixco Bosques de Sn Nicolás</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:sannicolas@sanmartinbakery.com">sannicolas@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- San Sebastián --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            San
                            Sebastián</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">219</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209920</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km. 14.1 Carr. A El
                            Salvador antigua Finca Las Victorias, Aldea Puerta Parada z. 8, Sta. Catarina Pinula
                        </td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:sansebastian@sanmartinbakery.com">sansebastian@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- San Amelia --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Santa
                            Amelia</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">207</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209908</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo
                            a
                            Jueves 7:00 a
                            9:00 <br /> Viernes y Sábado 7:00 a 10:00 </td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">24 calle blvd centro
                            medico militar, 13-59 zona 16 Condado Santa Amelia local 1-4</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:santaamelia@sanmartinbakery.com">santaamelia@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Varietá --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Varietá
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">226</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209926</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">22 calle 03-05 lote 3
                            local 32 z. 16, CC Varietá, Boulevard Rafael Landívar</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:varieta@sanmartinbakery.com">varieta@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Vista Hermosa --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Vista
                            Hermosa</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">229</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209929</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 6:00 am
                            a 10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">21 av 2-04 z. 15 Vista
                            Hermosa I</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:vistahermosa@sanmartinbakery.com">vistahermosa@sanmartinbakery.com</a>
                        </td>
                    </tr>
                    {{-- Xela --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Xela
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">208</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209909</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Domingo 7:00 am
                            10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Avenida Las Amèrcias
                            7-04 Zona 3, Quetzaltenango, La Plaza, Pradera Xela</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:xela@sanmartinbakery.com">xela@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Xela Minerva --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Xela
                            Minerva</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">232</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209932</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lumes a
                            Viernes 7:00 am
                            10:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">23 av. 4-14 zona 3
                            Quetzaltenango.</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:minerva@sanmartinbakery.com">minerva@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Zona 10 --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Zona 10
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">215</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209916</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Sábado 6:00 am a
                            10:00 pm <br /> Domingo 7:00 am a 8:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">13 Calle y 2ª. Ave.
                            Esquina Z.10, Plaza Rosa</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:zona10@sanmartinbakery.com">zona10@sanmartinbakery.com</a></td>
                    </tr>
                    {{-- Zona 14 --}}
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3">
                            Zona 14
                        </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">206</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">24209907</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Lunes a
                            Sábado 6:00 am a
                            10:00 pm <br /> Domingo 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">9ª. Calle 7-10, Zona 14
                        </td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"><a
                                href="mailto:zona14@sanmartinbakery.com">zona14@sanmartinbakery.com</a></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    {{-- Fin Tabla --}}
    <!-- Footer -->
    <footer class="sm-bk-blue footer-container md:my-6 p-1 ">
        <div class="mx-auto max-w-xl px-6 py-4 md:flex md:items-center md:justify-between lg:px-8">
            <div class="space-x-8 flex justify-center items-center md:order-2">
                <p class=" py-1 text-xs leading-5 text-white">&copy; San Martín 2024</p>
            </div>
        </div>
    </footer>
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
