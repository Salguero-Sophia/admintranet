@php
    $menu = [

        (object) [
            'icon' => ' <img width="48" height="48" src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" />',
            'name'   => '',
            'url'    => route('careers'),
            'target' => '',
        ],
        (object) [
            'icon' => '<svg class="h-5 w-5 mx-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>',
            'name'   => 'Desarrollo Humano',
            'url'    => '',
            'target' => '',
            'submenu' => [
                (object) [
                    'name' => 'Botón de Ética',
                    'url' => '',
                ],
                (object) [
                    'name' => 'Conoce a nuestro equipo',
                    'url' => route('conoce'),
                ],
                (object) [
                    'name' => 'Comunicación interna',
                    'url' => route('nomina'),
                ],
                (object) [
                    'name' => 'Extensiones corporativas',
                    'url' => route('guatemala'),
                ],
                (object) [
                    'name' => 'Extesiones de Tiendas',
                    'url' => route('guatemala'),
                ],
                (object) [
                    'name' => 'Nómina',
                    'url' => route('nomina'),
                ],
                (object) [
                    'name' => 'Preguntas frecuentes',
                    'url' => route('guatemala'),
                ],
            ]
        ],
        (object) [
            'icon' => '<svg class="h-5 w-5 mx-2 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                            <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                            <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                            <line x1="9" y1="10" x2="9.01" y2="10" />
                            <line x1="15" y1="10" x2="15.01" y2="10" />
                            <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                        </svg>',
            'name' => 'Registro Facial',
            'url'    => url('http://192.168.111.229/cpa/marcafoto',),
            'target' => '_blank',
        ],
        (object) [
            'icon' => ' <svg class="h-5 w-5 mx-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>',
            'name' => 'Orden Manager',
            'url'    => url('https://smordermanager.sanmartinbakery.com/#/login',),
            'target' => '_blank',
        ],
        (object) [
            'icon' => '<svg class="h-5 w-5 mx-2 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="7" cy="17" r="2" />
                            <circle cx="17" cy="17" r="2" />
                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                            <path d="M6 10h4m-2 -2v4" />
                        </svg>',
            'name'   => 'Salud y Seguridad',
            'url'    => null,
            'target' => '',
            'submenu' => [
                (object) [
                    'name' => 'Portal SSO',
                    'url' => route('sso'),
                ],
                (object) [
                    'name' => 'Investigación de accidentes',
                    'url' => url('https://forms.office.com/r/N9ALmMTXbE',),
                ],
            ]
        ],
        (object) [
            'icon' => '<svg class="h-5 w-5 mx-2 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                            <line x1="13" y1="7" x2="13" y2="7.01" />
                            <line x1="17" y1="7" x2="17" y2="7.01" />
                            <line x1="17" y1="11" x2="17" y2="11.01" />
                            <line x1="17" y1="15" x2="17" y2="15.01" />
                        </svg>',
            'name'   => 'Universidad San Martín',
            'url'    => null,
            'target' => '',
            'submenu' => [
                (object) [
                    'name' => 'USM Guatemala',
                    'url' => url('http://192.168.111.212/usm/course/index.php?categoryid=241',),
                ],
                (object) [
                    'name' => 'USM Administrativos',
                    'url' => url('http://192.168.111.212/usm/course/index.php?categoryid=384',),
                ],
                (object) [
                    'name' => 'USM Cielito Lindo',
                    'url' => url('http://192.168.111.212/usm/course/index.php?categoryid=176',),
                ],
                (object) [
                    'name' => 'USM Planta',
                    'url' => url('http://192.168.111.212/usm/course/index.php?categoryid=100',),
                ],
            ]
        ],
    ];
@endphp

<div x-data="{ open: false }">
  <div x-data="{ openCartModal: false }">
    <div x-data="{ openScheduled: false }">
    {{-- Sub Menu --}}
    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

        <div class="blure fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">

            <div class="relative flex w-full max-w-xs flex-col overflow-y-auto sm-bk-blue pb-12 shadow-xl">

                <div class="flex px-4 pb-2 pt-5">
                    <button @click="open = false" type="button"
                        class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-100">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Menu -->

                <div class="space-y-6 border-t py-6">
                    @foreach ($menu as $index => $page)
                        <div x-data="{ openSubmenu{{ $index }}: false }" class="relative group">
                            <a @click="openSubmenu{{ $index }} = !openSubmenu{{ $index }}" target="{{ $page->target }}"
                            class="flex items-center text-sm font-medium text-white hover:text-indigo-400">
                                {!! $page->icon !!}
                                {{ $page->name }}
                                @if (isset($page->submenu))
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        class="ml-1 h-8 w-8">
                                        <style>
                                            .slide-11 {
                                                animation: slide-11 1s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                                            }
                                            @keyframes slide-11 {
                                                100% {
                                                    transform: translateY(2px);
                                                }
                                            }
                                        </style>
                                        <path class="slide-11" fill="#ffffff"
                                            d="M6.832 10.516a.857.857 0 111.097-1.317l4.594 3.828L17.117 9.2a.857.857 0 011.098 1.317l-5.132 4.276a.853.853 0 01-.933.123.85.85 0 01-.187-.123l-5.131-4.276z" />
                                    </svg>
                                @endif
                            </a>

                            @if (isset($page->submenu))
                                <div x-show="openSubmenu{{ $index }}" class="relative items-center left-0 w-48 bg-white opacity-90 shadow-lg" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 transform scale-95"
                                    x-transition:enter-end="opacity-100 transform scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-95">
                                    @foreach ($page->submenu as $submenu)
                                        <a href="{{ $submenu->url }}" class="block px-4 py-2 text-black hover:bg-indigo-400">
                                            {{ $submenu->name }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>

    {{-- Menu --}}
    <nav aria-label="Top" class="relative z-20 bg-[#003B7A] backdrop-blur-xl backdrop-filter ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center">
                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                <button @click="open = true" type="button"
                    class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <!-- Logo -->
                <div class="ml-4 flex lg:ml-0 w-auto lg:hidden">
                    <a href="{{ route('home') }}">
                        <span class="sr-only">San Martin Bakery | Intranet</span>
                        <img class="h-8 w-auto lg:hidden" src="{{ asset('logoBlancoDallas.svg') }}"
                            alt="Mobile Logo">
                    </a>
                </div>

                <div class="ml-4 lg:ml-0 hidden lg:block">
                    <a href="{{ route('home') }}">
                        <span class="sr-only">San Martin Bakery | Intranet</span>
                        <img class="h-8 w-auto hidden lg:block" src="{{ asset('logo-navbar.svg') }}"
                            alt="Desktop Logo">
                    </a>
                </div>

                <!-- Flyout menus -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch items-center">
                    <div class="flex h-full items-center  space-x-8">
                        @foreach ($menu as $page)
                            <div class="relative group">
                                <a target="{{ $page->target }}" href="{{ $page->url }}"
                                    class="flex items-center text-sm font-medium text-white hover:text-indigo-400">
                                    {!! $page->icon !!}
                                    {{ $page->name }}
                                    @if (isset($page->submenu))
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
                                @endif
                                </a>

                                @if (isset($page->submenu))
                                    <!-- Flyout menu for Desarrollo Humano -->
                                    <div class="absolute left-0 hidden w-48 bg-white shadow-lg group-hover:block" style="margin-top: -1%">
                                        <div class="py-1">
                                            @foreach ($page->submenu as $submenu)
                                                <a href="{{ $submenu->url }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                    {{ $submenu->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </nav>

      @teleport('body')
      <livewire:schedule-order redirectTo="menu" slug=" "/>
      @endteleport

    </div>
    </div>
</div>
