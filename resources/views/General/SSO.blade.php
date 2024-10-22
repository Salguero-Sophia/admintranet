<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portal SSO</title>
    <meta name="description" content="Portal SSO" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    <style>
        .sm-bk-blue {
            background: linear-gradient(to bottom, #003B7A, #0b73e2);
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
            opacity: 95%;
            overflow-y: auto;
            z-index: 1000;
            padding-top: 3.5rem;
            flex-direction: column;
            background-color: #003B7A;
        }

        #nav-content a {
            display: block;
            padding: 1rem;
            text-decoration: none;
            transition: background-color 0.3s;
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

        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            padding: 8% 5%;
            z-index: 1;
            white-space: nowrap;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: inline-block;
            margin-right: 22%; 
        } 

        @media (min-width: 1024px) {
            .elemento {
                transform: translate(-15%, 5%);
            }
        }

        @media (min-width: 1024px) {
            .ele {
                width: 175%;
            }
        }

        .modal {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 50;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            position: relative;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        
        .mod {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 50;
        }

        .modal-con {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        .modal-con2 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 85%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }
        
        .icons-container {
            display: flex;
            justify-content: center;
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <!--Nav-->
    <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed -py-2">
        <!-- Sección izquierda (oculta en dispositivos móviles) -->
        <div class="hidden xl:flex xl:items-center mx-8 space-x-6">
            <a href="/" class="py-4 flex justify-center items-center">
                <!-- Logo del navbar -->
                <img id="logo" class="w-24" src="iconos/AF_Logotipo SSO_SM_2023-04.svg" alt="Logo" />
            </a>
          {{-- banderas --}}
            <a onclick="Ventana(event)">
                <img width="48" height="48" src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" />
            </a>
            <a onclick="mostrar2(event)">
                <img width="48" height="48" src="https://img.icons8.com/color/48/el-salvador-circular.png" alt="el-salvador-circular" />
            </a>
            <a onclick="Emergente3(event)">
                <img width="48" height="48" src="https://img.icons8.com/color/48/usa-circular.png" alt="usa-circular" />
            </a>

            <div id="modal" class="modal hidden fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                <div class="modal-content bg-white p-6 rounded-lg relative">
                    <button onclick="closeModal('modal')" class="absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                    <h2 class="text-xl font-bold mb-4 text-center">Guatemala</h2>
                    <div class="flex justify-center">
                        <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/EphbUy8g8bVNnpbWa9OypJ0BOZhSqHTjdnzASszKKUz6tg" class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                        <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/Eugh3McHECFMt2WjfY7IS9MB1HKx1Nsn4yGFxfJjsoAHHQ?e=IL9npi" class="rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                    </div>
                </div>
            </div>

            <div id="modal2" class="modal hidden fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                <div class="modal-content bg-white p-6 rounded-lg relative">
                    <button onclick="closeModal('modal2')" class="absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                    <h2 class="text-xl font-bold mb-4 text-center">El Salvador</h2>
                    <div class="flex justify-center">
                        <a class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Operaciones</a>
                        <a class="rounded-full bg-white px-8 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                    </div>
                </div>
            </div>

            <div id="modal3" class="modal hidden fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                <div class="modal-content bg-white p-6 rounded-lg relative">
                    <button onclick="closeModal('modal3')" class="absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                    <h2 class="text-xl font-bold mb-4 text-center">USA</h2>
                    <div class="flex justify-center">
                        <a class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Operaciones</a>
                        <a class="rounded-full bg-white px-8 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                    </div>
                </div>
            </div>

            <script>
                function toggleDropdown(dropdown) {
                    dropdown.classList.toggle('active');
                }

                function Ventana(event) {
                    event.preventDefault();
                    document.getElementById('modal').classList.remove('hidden');
                }

                function mostrar2(event) {
                    event.preventDefault();
                    document.getElementById('modal2').classList.remove('hidden');
                }

                function Emergente3(event) {
                    event.preventDefault();
                    document.getElementById('modal3').classList.remove('hidden');
                }

                function closeModal(modalId) {
                    document.getElementById(modalId).classList.add('hidden');
                }
            </script>
            {{-- banderas --}}

        </div>   

        <!-- Sección derecha (oculta en dispositivos móviles) -->
        <div class="hidden xl:flex xl:flex-initial absolute top-6 right-4">
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center py-3 px-1 text-gray-100 cursor-pointer hover:bg-blue-500 hover:text-gray-100 focus:outline-none">
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

        <div x-data="{ open: false }">
            <button @click="open = !open"
            class="w-full flex justify-center items-center py-2 mx-2 text-gray-100 hover:bg-blue-500 hover:text-gray-100 focus:outline-none">
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
                    href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención médica</a>
                <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                    href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a>
                <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                    href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Sistemas de cita médica</a>
                <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                    href="https://forms.office.com/r/N9ALmMTXbE">Investigación de accidentes</a>

            </div>
        </div>
        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="w-full flex justify-center items-center py-2 px-5 text-gray-100 cursor-pointer hover:bg-blue-500 hover:text-gray-100 focus:outline-none">
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
                    href="http://192.168.111.212/usm/course/index.php?categoryid=245">USM El Salvador</a>
                <a class="py-2 px-16 block text-sm  text-white hover:bg-gray-100 hover:text-black"
                    href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a>
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
                        <div class="w-full flex-grow lg:flex lg:w-auto mt-2 lg:mt-0 lg:bg-transparent text-black lg:p-0 z-20" id="nav-content">
                            
                            <div class="icons-container">
                                <a class="m-trigger" data-modal-id="modal-guatemala">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" />
                                </a>
                                <a class="m-trigger" data-modal-id="modal-el-salvador">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/el-salvador-circular.png" alt="el-salvador-circular" />
                                </a>
                                <a class="m-trigger" data-modal-id="modal-usa">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/usa-circular.png" alt="usa-circular" />
                                </a>
                            </div>
                            
                            <div id="modal-guatemala" class="mod">
                                <div class="modal-con">
                                    <button class="close-modal absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                    <h2 class="text-xl font-bold mb-4 text-center">Guatemala</h2>
                                    <div class="flex justify-center">
                                        <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/EphbUy8g8bVNnpbWa9OypJ0BOZhSqHTjdnzASszKKUz6tg" class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                        <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/Eugh3McHECFMt2WjfY7IS9MB1HKx1Nsn4yGFxfJjsoAHHQ?e=IL9npi" class="rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                    </div>
                                </div>
                            </div>
                            <div id="modal-el-salvador" class="mod">
                                <div class="modal-con">
                                    <button class="close-modal absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                <h2 class="text-xl font-bold mb-4 text-center">El Salvador</h2>
                                <div class="flex justify-center">
                                    <a class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                    <a class="rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                </div>
                                </div>
                            </div>
                            <div id="modal-usa" class="mod">
                                <div class="modal-con">
                                    <button class="close-modal absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                    <h2 class="text-xl font-bold mb-4 text-center">USA</h2>
                                    <div class="flex justify-center">
                                        <a class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                        <a class="rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <script>
                               document.addEventListener("DOMContentLoaded", function () {
                                const modalTriggers = document.querySelectorAll(".m-trigger");

                                modalTriggers.forEach(function (trigger) {
                                    trigger.addEventListener("click", function () {
                                        const modalId = this.getAttribute("data-modal-id");
                                        const modal = document.getElementById(modalId);

                                        if (modal) {
                                            modal.style.display = "block";
                                        }
                                    });
                                });

                                const modals = document.querySelectorAll(".mod");

                                modals.forEach(function (modal) {
                                    modal.addEventListener("click", function (event) {
                                        if (event.target === this || event.target.classList.contains("close-modal")) {
                                            this.style.display = "none";
                                        }
                                    });
                                });
                            });
                            </script>

                            <div x-data="{ open: false }" class="mt-8">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-600 hover:text-gray-100 focus:outline-none">
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
                            
                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-600 hover:text-gray-100 focus:outline-none">
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
                                        href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención médica</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="https://forms.office.com/r/04MVcKrWdr">Reporte de primeros auxilios</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Sistemas de cita médica</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="https://forms.office.com/r/N9ALmMTXbE">Investigación de accidentes</a>

                                </div>
                            </div>
                            <div x-data="{ open: false }">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-blue-600 hover:text-gray-100 focus:outline-none">
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
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=245">USM El Salvador</a>
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-blue-500 hover:text-white"
                                        href="http://192.168.111.212/usm/course/index.php?categoryid=263">USM USA</a>
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
        </div>
    </nav>
    <main class="isolate -mt-28">
         <!-- Hero section -->
    <div class="relative isolate -z-10">
        <div class="overflow-hidden">
            <div class="mt-40 mb-8">
            <!-- Bienvenidos label -->
            <div class=" mb-2" style="margin-top: 18%;">
                <div class="relative">
                    <div class="text-center relative inline-block">
                        <div class="mt-16 lg:mt-10 lg:py-4 lg:px-2 ele" style="background: #276cb6c7;">
                            <h1 class="text-lg lg:text-3xl font-bold text-white">Bienvenidos al Portal de Salud y Seguridad Ocupacional</h1>
                        </div>
                    </div>

                </div>
            </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                     <!-- Columna del swiper -->
                    <div class="relative w-3/4 mx-6 lg:w-11/12 lg:mx-0">
                        <div class="swiper-container swiper1" style="margin-left: -14%; transform: translate(14%, 9%);">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/actividad1.jpg" alt="sso1"></div>
                                <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/actividad2.jpg" alt="sso2"></div>
                                <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/diploma1.jpg" alt="sso3"></div>
                                <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/diploma2.jpg" alt="sso4"></div>
                                <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/diploma3.jpg" alt="sso4"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                        <!-- Columna de botones href="http://192.168.111.212/usm/course/index.php?categoryid=364" http://192.168.111.212/usm/ -->
                        <div class="sm:mt-20 sm:mx-8 lg:ml-12 lg:mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div class="card relative overflow-hidden rounded-lg flex flex-col mx-6 lg:mx-0 mt-10">
                                <a href="http://192.168.111.212/usm/course/index.php?categoryid=380" style="width: 100%; height:88%" class="card relative overflow-hidden border rounded-lg shadow-lg flex flex-col">
                                    <img class="mx-auto " src="sso/portal-entrena.jpeg" alt="sistema de gestion" style="width: 100%; height:100%">
                                    <div class="card-info absolute bottom-0 left-0 w-full bg-black bg-opacity-70 text-white p-4 transition-all duration-500 ease-in-out flex flex-col items-start">
                                        <h3 class="text-lg font-bold mb-1 ml-4">Portal de Entrenamiento</h3>
                                    </div>
                                </a>
                            </div>
                        
                            <div class="dropdown col-span-2 md:col-span-1 mt-10" onclick="toggleDropdown(this)">
                                <div class="card relative overflow-hidden border rounded-lg shadow-lg flex flex-col mb-8 mr-12 mx-6 lg:mx-0" style="background-image: url('sso/sistema-gestion.jpeg'); background-size: cover; background-position: center;">
                                    <a class="h-64 w-full card relative overflow-hidden border rounded-lg shadow-lg flex flex-col">
                                        <div class="card-info absolute bottom-0 left-0 w-full bg-black bg-opacity-70 text-white p-4 transition-all duration-500 ease-in-out flex flex-col items-start">
                                            <h3 class="text-lg font-bold mb-1 ml-8">Sistema de Gestión</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-content w-full -mt-12">
                                    {{-- banderas --}}
                                    <div class="hidden xl:block">
                                        <a onclick="Ventana(event)" class="hidden md:inline-block">
                                            <img width="48" height="48" src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" />
                                        </a>
                                        <a onclick="mostrar2(event)" class="hidden md:inline-block">
                                            <img width="48" height="48" src="https://img.icons8.com/color/48/el-salvador-circular.png" alt="el-salvador-circular" />
                                        </a>
                                        <a onclick="Emergente3(event)" class="hidden md:inline-block">
                                            <img width="48" height="48" src="https://img.icons8.com/color/48/usa-circular.png" alt="usa-circular" />
                                        </a>
                                
                                        <!-- Modals -->
                                        <div id="modal" class="modal hidden fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                                            <div class="modal-content bg-white p-6 rounded-lg relative">
                                                <button onclick="closeModal('modal')" class="absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                                <h2 class="text-xl font-bold mb-4 text-center">Guatemala</h2>
                                                <div class="flex justify-center">
                                                    <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/EphbUy8g8bVNnpbWa9OypJ0BOZhSqHTjdnzASszKKUz6tg" class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                                    <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/Eugh3McHECFMt2WjfY7IS9MB1HKx1Nsn4yGFxfJjsoAHHQ?e=IL9npi" class="rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div id="modal2" class="modal hidden fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                                            <div class="modal-content bg-white p-6 rounded-lg relative">
                                                <button onclick="closeModal('modal2')" class="absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                                <h2 class="text-xl font-bold mb-4 text-center">El Salvador</h2>
                                                <div class="flex justify-center">
                                                    <a class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Operaciones</a>
                                                    <a class="rounded-full bg-white px-8 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div id="modal3" class="modal hidden fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
                                            <div class="modal-content bg-white p-6 rounded-lg relative">
                                                <button onclick="closeModal('modal3')" class="absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                                <h2 class="text-xl font-bold mb-4 text-center">USA</h2>
                                                <div class="flex justify-center">
                                                    <a class="mr-8 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Operaciones</a>
                                                    <a class="rounded-full bg-white px-8 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <script>
                                            function toggleDropdown(dropdown) {
                                                dropdown.classList.toggle('active');
                                            }
                                
                                            function Ventana(event) {
                                                event.preventDefault();
                                                document.getElementById('modal').classList.remove('hidden');
                                            }
                                
                                            function mostrar2(event) {
                                                event.preventDefault();
                                                document.getElementById('modal2').classList.remove('hidden');
                                            }
                                
                                            function Emergente3(event) {
                                                event.preventDefault();
                                                document.getElementById('modal3').classList.remove('hidden');
                                            }
                                
                                            function closeModal(modalId) {
                                                document.getElementById(modalId).classList.add('hidden');
                                            }
                                        </script>
                                    </div>
                                    {{-- banderas mobile--}}
                                    <div class="ml-8">
                                        <div class="icons-container xl:hidden md:flex">
                                            <a class="m-trigger" data-modal-id="mo-guatemala">
                                                <img width="60" height="60" src="https://img.icons8.com/color/60/guatemala-circular.png" alt="guatemala-circular" />
                                            </a>
                                            <a class="m-trigger" data-modal-id="mo-el-salvador">
                                                <img width="60" height="60" src="https://img.icons8.com/color/60/el-salvador-circular.png" alt="el-salvador-circular" />
                                            </a>
                                            <a class="m-trigger" data-modal-id="mo-usa">
                                                <img width="60" height="60" src="https://img.icons8.com/color/60/usa-circular.png" alt="usa-circular" />
                                            </a>
                                        </div>
                                        
                                        <div id="mo-guatemala" class="mod hidden">
                                            <div class="modal-con2">
                                                <button class="close-modal absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                                <h2 class="text-xl font-bold mb-4 text-center">Guatemala</h2>
                                                <div class="flex justify-center">
                                                    <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/EphbUy8g8bVNnpbWa9OypJ0BOZhSqHTjdnzASszKKUz6tg" class="ml-16 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                                    <a href="https://sanmartin.sharepoint.com/:f:/s/SG-SSO-SM/Eugh3McHECFMt2WjfY7IS9MB1HKx1Nsn4yGFxfJjsoAHHQ?e=IL9npi" class="-ml-8 rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="mo-el-salvador" class="mod hidden">
                                            <div class="modal-con2">
                                                <button class="close-modal absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                            <h2 class="text-xl font-bold mb-4 text-center">El Salvador</h2>
                                            <div class="flex justify-center">
                                                <a class="ml-16 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                                <a class="-ml-8 rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div id="mo-usa" class="mod hidden">
                                            <div class="modal-con2">
                                                <button class="close-modal absolute top-2 right-2 bg-red-400 text-white rounded-full w-8 h-8 flex items-center justify-center">X</button>
                                                <h2 class="text-xl font-bold mb-4 text-center">USA</h2>
                                                <div class="flex justify-center">
                                                    <a class="ml-16 rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-lg ring-1 ring-inset ring-gray-300 hover:bg-gray-200">Operaciones</a>
                                                    <a class="-ml-8 rounded-full bg-white px-10 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Planta</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <script>
                                        document.addEventListener("DOMContentLoaded", function () {
                                            const modalTriggers = document.querySelectorAll(".m-trigger");
            
                                            modalTriggers.forEach(function (trigger) {
                                                trigger.addEventListener("click", function () {
                                                    const modalId = this.getAttribute("data-modal-id");
                                                    const modal = document.getElementById(modalId);
            
                                                    if (modal) {
                                                        modal.style.display = "block";
                                                    }
                                                });
                                            });
            
                                            const modals = document.querySelectorAll(".mod");
            
                                            modals.forEach(function (modal) {
                                                modal.addEventListener("click", function (event) {
                                                    if (event.target === this || event.target.classList.contains("close-modal")) {
                                                        this.style.display = "none";
                                                    }
                                                });
                                            });
                                        });
                                        </script>
                                    </div>
                            </div>
                            </div>
                            
                            <div class="card relative overflow-hidden border rounded-lg shadow-lg flex flex-col mt-10 lg:-mt-8 mx-6 lg:mx-0">
                                <a href="{{ route('docsso') }}" class="h-64 w-full card relative overflow-hidden border rounded-lg shadow-lg flex flex-col">
                                    <img class="mx-auto " src="sso/documentacion.jpeg" alt="sistema de gestion" style="width: 100%; height:100%">
                                    <div class="card-info absolute bottom-0 left-0 w-full bg-black bg-opacity-70 text-white p-4 transition-all duration-500 ease-in-out flex flex-col items-start">
                                        <h3 class="text-lg font-bold mb-1 ml-2">Biblioteca de Documentos</h3>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>  

            <div>
            <div class="mt-12 absolute px-36 h-px w-screen -translate-x-full bg-gray-300 sm:mx-4 lg:static lg:mx-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>

            <!-- Columna del swiper -->
            <div class="text-center text-2xl mx-auto mt-8 font-bold"> ¡CONOCE LOS INSUMOS QUE TU BOTIQUÍN DEBE TENER!</div>
            <div class="w-1/2 mx-auto">
                <div class="swiper-container swiper3">
                    <div class="swiper-wrapper" style="margin-top: 7%; margin-right: 2%;">
                        <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/botiquin1.jpg" alt="sso1"></div>
                        <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/banner/botiquin2.jpg" alt="sso2"></div>
                    </div>
                    <div class="swiper-pagination3"></div>
                </div>
            </div>

            <div class="mt-12 absolute px-36 h-px w-screen -translate-x-full bg-gray-300 sm:mx-4 lg:static lg:mx-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                <!-- Columna de botones py-20-->
                <div class="pt-20 px-10 lg:p-40 grid grid-row-4 gap-4 flex flex-col space-y-8 elemento ">
                    <a href="https://lapaneria.cloud.invgate.net/incident/create " class="rounded-md text-md px-3.5 py-3.5 text-center font-semibold text-black shadow-sm bg-blue-300 hover:bg-blue-200 flex items-center space-x-1" style="border-bottom: 2px solid rgb(172, 172, 172);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-16 icon icon-tabler icon-tabler-ticket" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#757575" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M15 5l0 2" />
                            <path d="M15 11l0 2" />
                            <path d="M15 17l0 2" />
                            <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                          </svg>
                            <span class="text-white text-xl">Generar Tickets</span>
                    </a>
                    
                    <a href="mailto:sso@sanmaarinbakery.com" class="sm-bk rounded-md px-3.5 py-3.5 text-md text-center font-semibold text-black shadow-sm bg-blue-300 hover:bg-blue-200 flex items-center space-x-1" style="border-bottom: 2px solid rgb(172, 172, 172);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-16 icon icon-tabler icon-tabler-mail" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1E88E5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                        <span class="text-white text-xl">Contactanos</span>
                    </a>
                    <a href="https://wa.me/50256932359" class="sm-bk rounded-md px-3.5 py-3.5 text-md text-center font-semibold text-black shadow-sm bg-blue-300 hover:bg-blue-200 flex items-center space-x-1" style="border-bottom: 2px solid rgb(172, 172, 172);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 mr-16 icon icon-tabler icon-tabler-brand-whatsapp" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#43A047" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                          </svg>
                        <span class="text-white text-xl">Whatsapp</span>
                    </a>
                </div>

                 <!-- Columna del swiper -->
                <div class="relative w-11/12">
                    <div class="swiper-container swiper2 ml-4 lg:-ml-40">
                        <div class="swiper-wrapper" style="margin-top: 7%; margin-right: 2%;">
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso1.jpg" alt="sso1"></div>
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso2.jpg" alt="sso2"></div>
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso3.jpg" alt="sso3"></div>
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso4.jpg" alt="sso4"></div>
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso5.jpg" alt="sso5"></div>
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso6.jpg" alt="sso6"></div>
                            <div class="swiper-slide w-full"><img class="shadow-xl rounded-3xl" src="sso/equipo/sso7.jpg" alt="sso7"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


            </div>
        </div>    
        
        {{-- separate --}}
       
  

    </main>
    
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
    var swiper1 = new Swiper('.swiper1', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '.swiper1 .swiper-button-next',
        prevEl: '.swiper1 .swiper-button-prev',
      },
      pagination: {
        el: '.swiper1 .swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
    });

    var swiper2 = new Swiper('.swiper2', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '.swiper2 .swiper-button-next',
        prevEl: '.swiper2 .swiper-button-prev',
      },
      pagination: {
        el: '.swiper2 .swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
    });

    var swiper3 = new Swiper('.swiper3', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        nextEl: '.swiper3 .swiper-button-next',
        prevEl: '.swiper3 .swiper-button-prev',
      },
      pagination: {
        el: '.swiper3 .swiper-pagination3',
        clickable: true,
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
    });
  </script>

    </div>
</div>
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