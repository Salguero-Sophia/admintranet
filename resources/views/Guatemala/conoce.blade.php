<x-gtfrontEndLayout title="conoce" x-data={}>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<body>

    <div class="container mx-auto my-20 px-8" data-aos="fade-down" data-aos-easing="linear">
        <main class="relative isolate">
            <div class="py-24 sm:py-32">
                <h2 class="text-3xl text-center font-bold tracking-tight text-gray-900 sm:text-4xl">Conoce a nuestro equipo</h2>

                        {{-- Desarrollo Humano --}}
                 <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Desarrollo Humano</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                            <li>
                                <div class="-mt-12 container" style="height: 330px;"> 
                                    <img class="mx-auto h-full" src="equipo/Nadia.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Nadia Herrera</h3>
                                <p class="text-sm leading-6 text-gray-600">Gerente de Desarrollo Humano</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:nadiaherrera@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-9 container" style="height: 320px;"> 
                                    <img class="mx-auto h-full" src="equipo/Jessica Veliz.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Jessica Véliz</h3>
                                <p class="text-sm leading-6 text-gray-600">RRHH Región 8</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:jessicaveliz@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                      <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                          <div class="w-full border-t border-gray-300"></div>
                        </div>
                      </div>
                      
                    {{-- Nóminas --}}
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Nóminas</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
                            <li>
                                <div class="-mt-2 container" style="height: 290px;"> 
                                    <img class="mx-auto h-full" src="equipo/Lidia.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Lidia Ramírez</h3>
                                <p class="text-sm leading-6 text-gray-600">Jefe de compensaciones</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:lidiaramirez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mt-14 container" style="height: 230px;"> 
                                    <img class="mx-auto h-full" src="equipo/Luis.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Luis Casia</h3>
                                <p class="text-sm leading-6 text-gray-600"> Coordinador de nóminas y métricas</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:luiscasia@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-6 container" style="height: 310px;"> 
                                    <img class="mx-auto h-full" src="equipo/Andrea.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Andrea Ramírez</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de nómina</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:andrearamirez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-2 container" style="height: 290px;"> 
                                    <img class="mx-auto h-full" src="equipo/Justin.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Justin Mejía</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de Beneficios</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:justinmejiae@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="container" style="height: 285px;"> 
                                    <img class="mx-auto h-full" src="equipo/Allison.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Allison Barahona</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de Beneficios</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:allisonbarahona@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-4 container" style="height: 300px;"> 
                                    <img class="mx-auto h-full" src="equipo/Ahastari Perez.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Ahastari Pérez</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de nómina</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:ahastariperez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-4 container" style="height: 300px;"> 
                                    <img class="mx-auto h-full" src="equipo/Carolina Morales.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Carolina Morales</h3>
                                <p class="text-sm leading-6 text-gray-600">Auxiliar de Nóminas </p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:digitador@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-1 container" style="height: 290px;"> 
                                    <img class="mx-auto h-full" src="equipo/Dempsey.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Dempsey Ortiz</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de nómina</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:dempseyortiz@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mt-2 container" style="height: 280px;"> 
                                    <img class="mx-auto h-full" src="equipo/Nancy.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Nancy Moran</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de nómina</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:nancymoran@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                      <div class="w-full border-t border-gray-300"></div>
                    </div>
                  </div>

                 {{-- Reclutamiento Operaciones --}}
                 <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Reclutamiento Operaciones</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
                            <li>
                                <div class="-mt-4 container" style="height: 300px;"> 
                                    <img class="mx-auto h-full" src="equipo/Norman.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Norman Rodríguez</h3>
                                <p class="text-sm leading-6 text-gray-600">Business Partner Operaciones</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:normanrodriguez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="container" style="height: 280px;"> 
                                    <img class="mx-auto h-full" src="equipo/Gloria.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Gloria Jiménez</h3>
                                <p class="text-sm leading-6 text-gray-600">Consultor DDHH</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:gloriajimenez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mt-2 container" style="height: 280px;"> 
                                    <img class="mx-auto h-full" src="equipo/Ivan.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Iván Canel</h3>
                                <p class="text-sm leading-6 text-gray-600">Consultor DDHH</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:ivancanel@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-2 container" style="height: 290px;"> 
                                    <img class="mx-auto h-full" src="equipo/Maycol.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Maycol Ramos </h3>
                                <p class="text-sm leading-6 text-gray-600">Consultor DDHH</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:maycolramos@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>  

                            <li>
                                <div class="-mt-4 container" style="height: 300px;"> 
                                    <img class="mx-auto h-full" src="equipo/Monica.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Mónica Nochez</h3>
                                <p class="text-sm leading-6 text-gray-600">Consultor DDHH</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:monicanochez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-9 container" style="height: 320px;"> 
                                    <img class="mx-auto h-full" src="equipo/Rene.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Reneé Girón</h3>
                                <p class="text-sm leading-6 text-gray-600"> Analista de R&H</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:reneaguilar@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mt-1 container" style="height: 280px;"> 
                                    <img class="mx-auto h-full" src="equipo/Lourdes.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">  Lourdes Mérida</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de R&H</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:lourdesmerida@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                            

                            <li>
                                <img class="mx-auto" src="equipo/Cristian de la Rosa.png" alt="">
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Cristian de la Rosa</h3>
                                <p class="text-sm leading-6 text-gray-600">Auxiliar de R&H</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:cristiandelarosa@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-6 container" style="height: 290px;"> 
                                    <img class="mx-auto h-full" src="equipo/Elizabeth.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Elizabeth Lique</h3>
                                <p class="text-sm leading-6 text-gray-600">Recepcionista de Plaza de Canadá</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:recepcionrh@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                      <div class="w-full border-t border-gray-300"></div>
                    </div>
                  </div>

                   {{-- Operaciones (Planta) --}}
                 <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Reclutamiento Planta</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                            <li>
                                <div class="-mt-12 container" style="height: 330px;"> 
                                    <img class="mx-auto h-full" src="equipo/Vicky.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Vicky Gómez</h3>
                                <p class="text-sm leading-6 text-gray-600">Business Partner Planta</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:vickygomez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-7 container" style="height: 310px;"> 
                                    <img class="mx-auto h-full" src="equipo/Alex Chinchilla.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900"> Alex Chinchilla</h3>
                                <p class="text-sm leading-6 text-gray-600"> Coordinador de Desarrollo Humano de Planta de Producción</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:alexanderchinchilla@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-6 container" style="height: 310px;"> 
                                    <img class="mx-auto h-full" src="equipo/Marvin Lopez.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Marvin López</h3>
                                <p class="text-sm leading-6 text-gray-600">Consultor DDHH</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:marvinlopez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-6 container" style="height: 310px;"> 
                                    <img class="mx-auto h-full" src="equipo/Edgar.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Edgar Ramírez</h3>
                                <p class="text-sm leading-6 text-gray-600">Consultor DDHH</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:edgarramirez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="relative m-8">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                      <div class="w-full border-t border-gray-300"></div>
                    </div>
                  </div>

                   {{-- Comunicación Interna --}}
                 <div class="mx-auto mt-4 max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Comunicación Interna</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                            <li>
                                <div class="-mt-4 container" style="height: 300px;"> 
                                    <img class="mx-auto h-full" src="equipo/Karina.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Karina Masaya</h3>
                                <p class="text-sm leading-6 text-gray-600">Jefe de Comunicación Interna</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:karinamasaya@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-16 container" style="height: 350px;"> 
                                    <img class="mx-auto h-full" src="equipo/Francisco.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Francisco Román</h3>
                                <p class="text-sm leading-6 text-gray-600"> Asistente de Comunicación Interna</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:franciscoroman@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-8 container" style="height: 320px;"> 
                                    <img class="mx-auto h-full" src="equipo/Damaris.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Damaris Cosajay</h3>
                                <p class="text-sm leading-6 text-gray-600"> Diseñadora Gráfica Comunicación Interna</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:damariscosajay@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                      <div class="w-full border-t border-gray-300"></div>
                    </div>
                  </div>

                   {{-- Reclutamiento Administrativo GT --}}
                 <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Reclutamiento Administrativo</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-3 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                            <li>
                                <div class="-mt-12 container" style="height: 330px;"> 
                                    <img class="mx-auto h-full" src="equipo/Claudia Sierra.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Claudia Sierra</h3>
                                <p class="text-sm leading-6 text-gray-600">Jefe de reclutamiento y selección</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:claudiasierra@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="-mt-9 container" style="height: 320px;"> 
                                    <img class="mx-auto h-full" src="equipo/Carolina Martinez.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Carolina Martínez</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de R&H</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:carolinamartinez@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="mt-1 container" style="height: 285px;"> 
                                    <img class="mx-auto h-full" src="equipo/Jennifer.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Jennifer Contreras</h3>
                                <p class="text-sm leading-6 text-gray-600">Analista de R&H</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:jennifercontreras@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                      <div class="w-full border-t border-gray-300"></div>
                    </div>
                  </div>

                   {{-- Beneficios --}}
                {{-- <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Beneficios</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                            <li>
                                <div class="-mt-4 container" style="height: 320px;"> 
                                    <img class="mx-auto h-full" src="equipo/Mary.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Mary Santiago</h3>
                                <p class="text-sm leading-6 text-gray-600">Coordinador de beneficios</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:coordinadorbeneficios@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                      <div class="w-full border-t border-gray-300"></div>
                    </div>
                  </div> --}}
                 {{-- Desarrollo Humano Dallas --}}
                 <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <p class="mt-12 text-xl leading-8 text-black">Desarrollo Humano Dallas</p>
                    <div class="container mx-auto">
                        <ul role="list"
                            class="grid grid-cols-1 gap-x-8 gap-y-2 text-center sm:grid-cols-1 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-3">
                            <li>
                                <div class="-mt-9 container" style="height: 320px;"> 
                                    <img class="mx-auto h-full" src="equipo/Paulina.png" alt="" style="object-fit: cover;"> 
                                </div>
                                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Paulina La Fuente</h3>
                                <p class="text-sm leading-6 text-gray-600">Desarrollo Humano Dallas</p>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="flex w-0 flex-1">
                                        <a href="mailto:paulinalafuente@sanmartinbakery.com"
                                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                            Email
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </div>


</body>

</x-gtfrontEndLayout>
