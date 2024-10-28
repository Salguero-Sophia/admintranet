<x-gtfrontEndLayout title="Extension de planta" x-data={}>

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

</x-gtfrontEndLayout>