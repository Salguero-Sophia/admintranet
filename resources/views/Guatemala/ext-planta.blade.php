<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Extensiones corporativas</title>
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

        <div class="container w-full md:w-10/12 xl:w-11/12 mx-auto mt-14 mb-8">
            <!-- Contenido de la tabla -->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

                <table id="example" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">Departamento/Nombre</th>
                            <th data-priority="2">Extensión</th>
                            <th data-priority="3">Corto</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Recepción Administración --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Recepción administración</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="py-3 text-md text-gray-500">Dayerlinee Rodas Oficinas centrales 50 calle</td>
                            <td class="text-md text-gray-500 text-center">101</td>
                            <td class="text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr>
                            <td class="py-3 text-md text-gray-500">Elizabeth Lique Oficinas Plaza Canadá</td>
                            <td class="text-md text-gray-500 text-center">172</td>
                            <td class="text-md text-gray-500 text-center">----</td>
                        </tr>
                        {{-- Bodega Central --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Bodegas</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bodega Central</td>
                            <td class=" text-md text-gray-500 text-center">154</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Recepción Bodega Central</td>
                            <td class=" text-md text-gray-500 text-center">153</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bodega Congelado</td>
                            <td class=" text-md text-gray-500 text-center">177</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bodega 47</td>
                            <td class=" text-md text-gray-500 text-center">245</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Planificación de compras</td>
                            <td class=" text-md text-gray-500 text-center">160</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Recetas Bodega</td>
                            <td class=" text-md text-gray-500 text-center">157</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bodega Producto Terminado</td>
                            <td class=" text-md text-gray-500 text-center">168</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Producto Terminado</td>
                            <td class=" text-md text-gray-500 text-center">152</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Omar/ Producto Terminado</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Oscar/ Producto Terminado</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Albino Carreto</td>
                            <td class=" text-md text-gray-500 text-center">245</td>
                            <td class=" text-md text-gray-500 text-center">8163</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andrés García</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8185</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Erick Romero</td>
                            <td class=" text-md text-gray-500 text-center">245</td>
                            <td class=" text-md text-gray-500 text-center">8172</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Francis Vargas</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Fredy Chip</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8195</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Henry Alvarez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8033</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jose</td>
                            <td class=" text-md text-gray-500 text-center">153</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Julio Alvarado</td>
                            <td class=" text-md text-gray-500 text-center">150</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Juan Carlos Rodriguez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8000</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Omar Cordero </td>
                            <td class=" text-md text-gray-500 text-center">157</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Oscar Urbina</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500"> Wendy Batz </td>
                            <td class=" text-md text-gray-500 text-center">298</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            </td>
                        </tr>

                        {{-- Producción --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Producción</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ingenieria de Procesos</td>
                            <td class=" text-md text-gray-500 text-center">124</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ing. Prod</td>
                            <td class=" text-md text-gray-500 text-center">182</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Planificación</td>
                            <td class=" text-md text-gray-500 text-center">156</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andrea De León</td>
                            <td class=" text-md text-gray-500 text-center">181</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="text-md text-gray-500">Alicia Flores</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8009</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Candy Anleu</td>
                            <td class=" text-md text-gray-500 text-center">164</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Christopher Lafage</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8012</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Estuardo Pirir</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8022</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Exner Garcia</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8170</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Flor Sierra</td>
                            <td class=" text-md text-gray-500 text-center">182</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jennifer Ramos</td>
                            <td class=" text-md text-gray-500 text-center">160</td>
                            <td class=" text-md text-gray-500 text-center">8153</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jorge Gonzales</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">José Luis Alfaro</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8231</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Leonel Rodriguez</td>
                            <td class=" text-md text-gray-500 text-center">162</td>
                            <td class=" text-md text-gray-500 text-center">8011</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Luis Angel Muracao</td>
                            <td class=" text-md text-gray-500 text-center">161</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Luis López</td>
                            <td class=" text-md text-gray-500 text-center">165</td>
                            <td class=" text-md text-gray-500 text-center">8032</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Marian Moscoso</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Monica Zamora</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Natalia Mendez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Oscar Jimenez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Victor Boch</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        {{-- Sistema de gestión de calidad y seguridad  --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Sistema de gestión de calidad y seguridad </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Clínica San Martín </td>
                            <td class=" text-md text-gray-500 text-center">294</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ana Portillo</td>
                            <td class=" text-md text-gray-500 text-center">188</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Carlos Alvarado</td>
                            <td class=" text-md text-gray-500 text-center">180</td>
                            <td class=" text-md text-gray-500 text-center">8015</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Carlos Gonzales</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Claudia Vargas</td>
                            <td class=" text-md text-gray-500 text-center">180</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Sara Corado</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                         {{-- Operaciones --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Operaciones</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Alfredo Santos</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Amory Herrera</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andree Cotton</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Angel Cermeño</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Antonio Rucal</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Daniel Alvarado</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Dayana Polanco</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Edy Chavarria</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Erick Sanchez</td>
                            <td class=" text-md text-gray-500 text-center">132</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Hugo Sandoval</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jorge Vanegas</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8154</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jose Melgar</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Kike Molina</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Klauss</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Lenin Muñoz</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Lucia Vargas</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Mark Quezada</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Paula Ruano</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Petra Flotke</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Rebeca Gaitan</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8087</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Rene Santos</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Sanders Garcia</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8212</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Torrefactora</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Walter Gonzalez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>              
                         {{-- Flota --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Flota</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Carlos Hernandez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8049</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Huber Gomez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8053</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Humberto Cardona</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8054</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Julio Alvarado </td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8217</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Julio Guerra</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Julio Solis</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8044</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Juan Valenzuela</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8028</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jorge Maldonado</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8040</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Luis Diaz</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8049</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Luis Orozco</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8069</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Mario Rodas</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8065</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Marvin Reyes</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8067</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Rafael Vasquez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8096</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ricardo Montezuma</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8083</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Victor López</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8059</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Welman Juarez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8063</td>
                        </tr>
                          {{-- Mercadeo --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Mercadeo</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Alejandro Vítola</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andrea Hernández</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andrea Estrada</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Carmen López</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Gabriela Pontaza</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Juan Fernando Carranza</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Karen Santizo</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Marynes Torres</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8023/td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Miguel Aleman</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Paulina Ibarguen</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8003</td>
                        </tr>
                       
                        {{-- Finanzas --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Finanzas</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Alvaro Aroche</td>
                            <td class=" text-md text-gray-500 text-center">116</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Aury Mejia</td>
                            <td class=" text-md text-gray-500 text-center">144</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bolsa de Cuero</td>
                            <td class=" text-md text-gray-500 text-center">138</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Contraloria</td>
                            <td class=" text-md text-gray-500 text-center">136</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Cristian Lopez</td>
                            <td class=" text-md text-gray-500 text-center">132</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Febe Alas</td>
                            <td class=" text-md text-gray-500 text-center">142</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Leslie Álvarez</td>
                            <td class=" text-md text-gray-500 text-center">143</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Lesly Arevalo</td>
                            <td class=" text-md text-gray-500 text-center">141</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ligia de Fong</td>
                            <td class=" text-md text-gray-500 text-center">144</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Mynor Brito</td>
                            <td class=" text-md text-gray-500 text-center">143</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ricardo Montezuma</td>
                            <td class=" text-md text-gray-500 text-center">178</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Tesoreria</td>
                            <td class=" text-md text-gray-500 text-center">139</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Victor Silva</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8043</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Wendy Batz</td>
                            <td class=" text-md text-gray-500 text-center">142</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                         {{-- Compras --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Compras</td>
                            <td></td>
                            <td></td>                      
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ana Cristina Morales</td>
                            <td class=" text-md text-gray-500 text-center">183</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Claudio López</td>
                            <td class=" text-md text-gray-500 text-center">146</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Diego Palomo</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ingrid Jerez</td>
                            <td class=" text-md text-gray-500 text-center">147</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jimena Larin</td>
                            <td class=" text-md text-gray-500 text-center">115</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Josseline Ruano</td>
                            <td class=" text-md text-gray-500 text-center">130</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Karina Castillo</td>
                            <td class=" text-md text-gray-500 text-center">174</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Lorena Guerra</td>
                            <td class=" text-md text-gray-500 text-center">145</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Marco Morales</td>
                            <td class=" text-md text-gray-500 text-center">118</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Sergio</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8027</td>
                        </tr>
                       {{-- Desarrollo Humano --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Desarrollo Humano</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ahastari</td>
                            <td class=" text-md text-gray-500 text-center">173</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Alexander Chinchilla</td>
                            <td class=" text-md text-gray-500 text-center">190</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andrea Ramirez</td>
                            <td class=" text-md text-gray-500 text-center">140</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Claudia Sierra</td>
                            <td class=" text-md text-gray-500 text-center">126</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Damaris Cosajay </td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Elizabeth Lique</td>
                            <td class=" text-md text-gray-500 text-center">172</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Francisco Román</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Gloria Jimenez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ivan Canel</td>
                            <td class=" text-md text-gray-500 text-center">171</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Justin Mejía</td>
                            <td class=" text-md text-gray-500 text-center">290</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Karina Masaya</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Lidia Ramirez</td>
                            <td class=" text-md text-gray-500 text-center">127</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Luis Casia</td>
                            <td class=" text-md text-gray-500 text-center">128</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Marvin Lopez </td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Mary Santiago </td>
                            <td class=" text-md text-gray-500 text-center">186</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Nadia Herrera</td>
                            <td class=" text-md text-gray-500 text-center">120</td>
                            <td class=" text-md text-gray-500 text-center">8005</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Norman Rodriguez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Sara Duarte</td>
                            <td class=" text-md text-gray-500 text-center">291</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Vicky Gomez</td>
                            <td class=" text-md text-gray-500 text-center">244</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        
                        {{-- Seguridad Física --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Seguridad Física</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Garita RRHH</td>
                            <td class=" text-md text-gray-500 text-center">158</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Garita de Producción</td>
                            <td class=" text-md text-gray-500 text-center">159</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>

                        {{-- Sistemas --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Sistemas</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Alessandro España </td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andres Berthet </td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Angel Lainez </td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bryan Mayorga </td>
                            <td class=" text-md text-gray-500 text-center">122</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Gustavo Isem </td>
                            <td class=" text-md text-gray-500 text-center">122</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Haroldo Mutaz </td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Hugo Espinoza </td>
                            <td class=" text-md text-gray-500 text-center">123</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jaime Ramirez </td>
                            <td class=" text-md text-gray-500 text-center">123</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jefferson Ixcot </td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jorge Luna </td>
                            <td class=" text-md text-gray-500 text-center">122</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jose Miguel </td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jose Zapeta</td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>                       
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Kevin Duarte</td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Mario Castillo </td>
                            <td class=" text-md text-gray-500 text-center">113</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Marvin Gomez </td>
                            <td class=" text-md text-gray-500 text-center">113</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Pablo Ascon</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Randolfo López </td>
                            <td class=" text-md text-gray-500 text-center">113</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ricardo Ramírez </td>
                            <td class=" text-md text-gray-500 text-center">113</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Rogelio Ángel </td>
                            <td class=" text-md text-gray-500 text-center">228</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ronald Sazo </td>
                            <td class=" text-md text-gray-500 text-center">123</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Victor Pérez </td>
                            <td class=" text-md text-gray-500 text-center">122</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Will Morales</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>

                        {{-- Mantenimiento --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Mantenimiento</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ariel Soto</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bryan Quintana</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Carlos Morales</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8008</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Erick Machine</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Fredi Martinez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Gabriel Similox</td>
                            <td class=" text-md text-gray-500 text-center">163</td>
                            <td class=" text-md text-gray-500 text-center">8045</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Geovanny</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Gilmar Jimenez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Hugo Barrantes</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Kevin Muñoz</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Noe Martinez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Otto Gallo</td>
                            <td class=" text-md text-gray-500 text-center">170</td>
                            <td class=" text-md text-gray-500 text-center">8010</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Samuel</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Sebastian Salinas</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">8037</td>
                        </tr>
                        
                        {{-- Arquitectura --}}
                        <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Arquitectura</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Ahmid Daccaret</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Gabriel Pérez</td>
                            <td class=" text-md text-gray-500 text-center">179</td>
                            <td class=" text-md text-gray-500 text-center">8156</td>
                        </tr> 
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jorge López</td>
                            <td class=" text-md text-gray-500 text-center">185</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Jose Tejeda</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr> 
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Lisbeth Barrios</td>
                            <td class=" text-md text-gray-500 text-center">185</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr> 

                         {{-- Servicio al cliente  --}}
                         <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Servicio al cliente </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Bélgica Orellana</td>
                            <td class=" text-md text-gray-500 text-center">137</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Paula Gaytan</td>
                            <td class=" text-md text-gray-500 text-center">103</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr> 
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Yadira Batres</td>
                            <td class=" text-md text-gray-500 text-center">219</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Wanda Álvarez</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr> 
                         {{-- Desarrollo de producto  --}}
                         <tr style="background-color: #d1d5db; font-weight: bold;">
                            <td>Desarrollo de producto </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Abel Pérez</td>
                            <td class=" text-md text-gray-500 text-center">181</td>
                            <td class=" text-md text-gray-500 text-center">8181</td>
                        </tr>
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Andreas Pelaez</td>
                            <td class=" text-md text-gray-500 text-center">181</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr> 
                        <tr class="border-t border-gray-300">
                            <td class="py-3 text-md text-gray-500">Fernando Falla</td>
                            <td class=" text-md text-gray-500 text-center">299</td>
                            <td class=" text-md text-gray-500 text-center">----</td>
                        </tr>
                        {{-- fin de los datos --}}
                    </tbody>
                </table>
            </div>
        </div>
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

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true,
                    ordering: false,
                    language: {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Ver _MENU_ por página",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "_START_ - _END_ de _TOTAL_",
                        "sInfoEmpty": "0 - 0 de 0",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": '<span class="custom-pagination-arrow">→</span>',
                            "sPrevious": '<span class="custom-pagination-arrow">←</span>'
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    {{-- Fin Tabla --}}


</body>

</html>
