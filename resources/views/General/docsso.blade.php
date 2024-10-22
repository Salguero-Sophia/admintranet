<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Documentación SSO</title>
    <meta name="description" content="Documentación SSO" />
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
            background: #003B7A;
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

        .m-trigger {
            cursor: pointer;
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
</head>

<body>
    <!--Nav-->
    <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed -py-2">
        <!-- Sección izquierda (oculta en dispositivos móviles) -->
        <div class="hidden xl:flex xl:items-center mx-8 space-x-6">
            <a href="/portal-sso" class="py-4 flex justify-center items-center">
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
                href="{{ route('sso') }}">Portal SSO</a>
                <a class="py-2 px-16 block text-sm text-white hover:bg-gray-100 hover:text-black"
                    href="https://outlook.office365.com/owa/calendar/CLINICAMEDICA1@sanmartin.group/bookings/">Atención
                    médica</a>
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
        <div class="xl:hidden w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2 sm-bk-blue">
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
                    <ul class="list-reset justify-end flex-1 mt-2 mx-auto">
                        <div class="w-full flex-grow lg:flex lg:w-auto mt-2 lg:mt-0 lg:sm-bk-blue text-black lg:p-0 z-20" id="nav-content">
                            
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
                                        href="{{ route('sso') }}">Portal SSO</a>
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

<div class="container mx-auto mt-10 px-4">
    <main class="relative isolate">
        <div class="py-20 sm:py-32">
            <h2 class="text-3xl text-center font-bold tracking-tight text-gray-900 sm:text-4xl">Biblioteca de Documentos</h2>
            <h2 class="mt-2 text-3xl text-center font-bold tracking-tight text-gray-900 sm:text-4xl">SSO</h2>

            {{-- <iframe src ="{{ asset('/laraview/#../interna/Guía de utilización  de canales de comunicación interna.pdf') }}" width="1000px" height="600px"></iframe> --}}

             <div class="mx-auto max-w-7xl py-12 px-6 lg:px-4">
                <div class="container mx-auto">
                    <ul role="list"
                        class="grid grid-cols-1 gap-x-8 gap-y-8 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                        <li>
                            {{-- Inspección de Botiquín --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Inspección de Botiquín</p>
                                    <button id="downloadPdf1" type="button"
                                            class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                        <span>Descargar PDF</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 11l5 5l5 -5" />
                                            <path d="M12 4l0 12" />
                                        </svg> 
                                    </button>
                                </div>
                            </div>
                        </li>

                        {{-- Inspección de Extintores --}}
                        <li>
                           <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Inspección de Extintores</p>
                                <button id="downloadPdf2" type="button"
                                        class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                    <span>Descargar PDF</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                        <path d="M7 11l5 5l5 -5" />
                                        <path d="M12 4l0 12" />
                                    </svg> 
                                </button>
                            </div>
                        </div>
                        </li>

                        <li>
                          {{-- Autoevaluación de Tienda --}}
                          <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Autoevaluación de Tienda</p>
                                <button id="downloadPdf3" type="button"
                                        class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                    <span>Descargar PDF</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                        <path d="M7 11l5 5l5 -5" />
                                        <path d="M12 4l0 12" />
                                    </svg> 
                                </button>
                            </div>
                        </div>
                        </li>

                        <li>
                            {{-- FORMATO DE ACTA DE REUNIÓN MENSUAL --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                             <div>
                                 <p class="text-lg font-semibold tracking-tight text-gray-900">Formato de Acta de Reunión Mensual</p>
                                 <button id="downloadPdf8" type="button"
                                         class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                     <span>Descargar Documento</span>
                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                         <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                         <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                         <path d="M7 11l5 5l5 -5" />
                                         <path d="M12 4l0 12" />
                                     </svg> 
                                 </button>
                             </div>
                         </div>
                         </li>

                        <li>
                           {{-- Actualización de comité --}}
                           <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Actualización de Comité</p>
                                <button id="downloadPdf4" type="button"
                                        class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                    <span>Descargar Documento</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                        <path d="M7 11l5 5l5 -5" />
                                        <path d="M12 4l0 12" />
                                    </svg> 
                                </button>
                            </div>
                        </div>
                        </li>

                        <li>
                            {{-- Catálogo de EPP --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                               <div>
                                   <p class="text-lg font-semibold tracking-tight text-gray-900">Catálogo de EPP</p>
                                   <button id="downloadPdf9" type="button"
                                           class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                       <span>Descargar PDF</span>
                                       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                           <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                           <path d="M7 11l5 5l5 -5" />
                                           <path d="M12 4l0 12" />
                                       </svg> 
                                   </button>
                               </div>
                           </div>
                       </li>


                        <li>
                            {{-- Apertura de planes de SSO --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Apertura de Planes SSO</p>
                                    <button id="downloadPdf5" type="button"
                                            class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                        <span>Descargar Documento</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 11l5 5l5 -5" />
                                            <path d="M12 4l0 12" />
                                        </svg> 
                                    </button>
                            </div>
                        </li>

                        <li>
                             {{-- Listado de Asistencia Capacitaciones --}}
                             <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Listado de Asistencia Capacitaciones</p>
                                    <button id="downloadPdf6" type="button"
                                            class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                        <span>Descargar PDF</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 11l5 5l5 -5" />
                                            <path d="M12 4l0 12" />
                                        </svg> 
                                    </button>
                                </div>
                            </div>
                        </li>

                        <li>
                            {{-- Reporte de Incidentes --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="mb-4 text-lg font-semibold tracking-tight text-gray-900">Reporte de Incidentes</p>
                                    <a href="https://forms.office.com/pages/responsepage.aspx?id=wEJewC3UnUufPiOwbvg7joKw1M8k0SxPsO8LO6Xc2TFUM1Q2UDRUUkJaMTlOT0c4TTNEUUFVUFZRRy4u"  class="mt-4 mx-8 rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                        <span style="margin-left: 35%; margin-right: 5%;">Acceder</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949AB" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M9 15l6 -6" />
                                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                          </svg>
                                    </a>
                                </div>
                                
                            </div>
                        </li>  

                        <li>
                            {{-- Pausas Activas --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="mb-4 text-lg font-semibold tracking-tight text-gray-900">Pausas Activas</p>
                                    <a href="https://forms.office.com/r/7502GQxRpJ?origin=lprLink" class="mt-4 mx-8 rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                        <span style="margin-left: 35%; margin-right: 5%;">Acceder</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949AB" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M9 15l6 -6" />
                                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                          </svg>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li>
                            {{-- CV Monitores --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Plantillas de CV para Monitores </p>
                                    <button id="downloadPdf7" type="button"
                                            class="mt-4 mx-auto rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100 flex items-center">
                                        <span>Descargar Documento</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download ml-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3949A0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 11l5 5l5 -5" />
                                            <path d="M12 4l0 12" />
                                        </svg> 
                                    </button>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>

           </div>
</div>
                          

    {{-- Scripts --}}

    <script>
        document.getElementById("downloadPdf1").addEventListener("click", function() {

            var pdfUrl = "sso/docs/FORMATO-NSPECCIÓN DE BOTIQUIN.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Inspección de Botiquín.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf2").addEventListener("click", function() {

            var pdfUrl = "sso/docs/Inspección de Extintores.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Inspeccion de Extintores.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf3").addEventListener("click", function() {

            var pdfUrl = "sso/docs/FORMATO-AUTOEVALUACIÓN DE TIENDA.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Autoevaluacion de Tienda.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf4").addEventListener("click", function() {

            var pdfUrl = "sso/docs/FICHA-ACTUALIZACIÓN DE COMITE.xlsx";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Actualizacion de comite.xlsx";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf5").addEventListener("click", function() {

            var pdfUrl = "sso/docs/FICHA-APERTURA DE PLAN SSO.xlsx";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Apertura de Planes SSO.xlsx";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf6").addEventListener("click", function() {
            var pdfUrl = "sso/docs/FORMATO-LISTADO DE ASISTENCIA CAPACITACIONES.pdf";
            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Listado de Asistencia Capacitaciones.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf7").addEventListener("click", function() {
            var pdfUrl = "sso/docs/PLANTILLA-CV MONITORES.pptx";
            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Plantillas de CV para Monitores.pptx";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf8").addEventListener("click", function() {
            var pdfUrl = "sso/docs/FORMATO DE ACTA DE REUNIÓN MENSUAL.docx";
            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Formato de acta de reunión mensual";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf9").addEventListener("click", function() {
            var pdfUrl = "sso/docs/CATALOGO EPP OPERACIONES.pdf";
            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "CATALOGO EPP OPERACIONES.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>
    {{-- Fin Scripts --}}


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
