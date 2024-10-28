<x-gtfrontEndLayout title="Extension tiendas" x-data={}>

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

    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @vite('resources/css/app.css')

<body>
    <div class="flex flex-col">
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

</x-gtfrontEndLayout>