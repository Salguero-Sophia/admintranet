<x-svfrontEndLayout title="El Salvador" x-data={}>

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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @vite('resources/css/app.css')

   
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
                        <th data-priority="3">Teléfono</th>
                        <th data-priority="4">Horario</th>
                        <th data-priority="5">Dirección</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- AZALEAS --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Azaleas </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2213-5854</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"> Av. Las Azaleas y Calle La Mascota, Colonia Maquilishuat, Plaza Las Azaleas </td>
                    </tr>
                    {{-- Estación Del Casco --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Estación Del Casco</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2313-5859</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Ave. El Espino, locales A102 y A202, entre redondel Roberto d'Aubuisson y San Benito, San Salvador </td>
                    </tr>
                    {{-- Merliot --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Merliot </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2213-5851</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"> Plaza Borbón, local 1, entre el boulevard Merliot y calle El Jabalí, Merliot </td>
                    </tr>
                    {{-- METROCENTRO --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Metrocentro</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2313-5856</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">CC. Metrocentro local 175, 6a etapa, blvd. de los Héroes, colonia Miramonte</td>
                    </tr>
                    {{-- Kiosko Metrocentro --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Kiosko Metrocentro </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">----</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"> CC. Metrocentro local 175, 6a etapa, blvd. de los Héroes, colonia Miramonte</td>
                    </tr>
                    {{-- La Joya --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> La Joya</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2313-5860</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km 12 Carretera al Puerto de la Libertad, Centro Comercial La Joya locales 1,2,3; Santa Tecla</td>
                    </tr>
                    {{-- Multiplaza --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Multiplaza </td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2213-5853</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"> Centro Comercial Multiplaza, carretera Panamericana, San Salvador </td>
                    </tr>
                    {{-- El Paseo --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> El Paseo</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2313-5855</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l"> Centro Comercial El Paseo, San Salvador </td>
                    </tr>
                    {{-- Santa Elena --}}
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Santa Elena</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2313-5852</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Plaza Madero, boulevard Santa Elena y calle Alegría #7, Antiguo Cuscatlán</td>
                    </tr>

                     {{-- Metrocentro Lourdes --}}
                     <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-justify font-medium text-gray-900 sm:pl-3"> Metrocentro Lourdes</td>
                        <td class="px-3 py-4 text-sm text-center text-gray-500 border-l">2313-5858</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-justify text-gray-500 border-l">Domingo a Sábado 7:00 am a 9:00 pm</td>
                        <td class="px-3 py-4 text-sm text-justify text-gray-500 border-l">Km. 23 Carretera Panamericana, Autopista a Santa Ana. C.C. Unicentro Lourdes, Ancla No. 1, La Libertad. locales 114, 115, 116;</td>
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

</x-svfrontEndLayout>