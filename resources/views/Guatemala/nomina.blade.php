<x-gtfrontEndLayout title="Nomina" x-data={}>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @vite('resources/css/app.css')

    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="max-h-screen flex flex-col">
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

<div class="container mx-auto -mt-24 px-4">
    <main class="relative isolate">
        <div class="py-10 sm:py-32">
            <h2 class="text-3xl text-center font-bold tracking-tight text-gray-900 sm:text-4xl">Nómina</h2>

            {{-- <iframe src ="{{ asset('/laraview/#../interna/Guía de utilización  de canales de comunicación interna.pdf') }}" width="1000px" height="600px"></iframe> --}}

             <div class="mx-auto max-w-7xl py-12 px-6 lg:px-4">
                <div class="container mx-auto">
                    <ul role="list"
                        class="grid grid-cols-1 gap-x-8 gap-y-8 text-center sm:grid-cols-1 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
                        <li>
                            {{-- Acción de personal --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Acción de personal</p>
                                    <button id="downloadPdf1" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar PDF</button>
                                </div>
                            </div>
                        </li>

                        <li>
                           {{-- Calendario Horas extras --}}
                           <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Calendario horas extras</p>
                                <button id="downloadPdf2" type="button"
                                    class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar PDF</button>
                            </div>
                        </div>
                        </li>

                        <li>
                          {{-- Formulario IRTRA --}}
                          <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Formulario IRTRA</p>
                                <button id="downloadPdf3" type="button"
                                    class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar PDF</button>
                            </div>
                        </div>
                        </li>

                        <li>
                           {{-- MEMO VACACIONES FLOTA, S.A. --}}
                           <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Memo vacaciones Flota, S.A.</p>
                                <button id="downloadPdf4" type="button"
                                    class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar
                                    PDF</button>
                            </div>
                        </div>
                        </li>

                        <li>
                            {{-- MEMO VACACIONES LA PANERIA, S.A. --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Memo vacaciones la Paneria, S.A.</p>
                                    <button id="downloadPdf5" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar
                                        PDF</button>
                                </div>
                            </div>
                        </li>

                        <li>
                             {{-- REPORTE DE LLAMADA DE ATENCIÓN VERBAL --}}
                             <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Reporte de llamada de atención verbal</p>
                                    <button id="downloadPdf6" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar
                                        PDF</button>
                                </div>
                            </div>
                        </li>

                        <li>
                            {{-- REPORTE LLAMADA DE ATENCIÓN POR ESCRITO --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Reporte llamada de atención por escrito</p>
                                    <button id="downloadPdf7" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar
                                        PDF</button>
                                </div>
                            </div>
                        </li>  

                        <li>
                            {{-- SUSPENSIÓN DE LABORES SIN GOCE DE SALARIO ELECTRONICO --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Suspensión de labores sin goce de salario electrónico</p>
                                    <button id="downloadPdf8" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar
                                        PDF</button>
                                </div>
                            </div>
                        </li>

                        <li>
                            {{-- ACTA ADMINISTRATIVA ABANDONO DE LABORES --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Acta administrativa abandono de labores</p>
                                    <button id="downloadPdf11" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
                                </div>
                            </div>
                          </li>

                          <li>
                            {{-- ACTA ADMINISTRATIVA ABANDONO DE PUESTO DE TRABAJO --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Acta administrativa abandono de puesto de trabajo</p>
                                    <button id="downloadPdf12" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
                                </div>
                            </div>
                          </li>

                          <li>
                            {{-- ACTA ADMINISTRATIVA DESPIDO JUSTIFICADO --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Acta administrativa despido justificado</p>
                                    <button id="downloadPdf13" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
                                </div>
                            </div>
                          </li>


                        <li>
                          {{-- CARTA DE APERCIBIMIENTO --}}
                          <div class="rounded-2xl bg-gray-50 p-8">
                            <div>
                                <p class="text-lg font-semibold tracking-tight text-gray-900">Carta de apercibiento</p>
                                <button id="downloadPdf9" type="button"
                                    class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
                            </div>
                        </div>
                        </li>

                        <li>
                            {{-- PROCESO DISCIPLINARIO --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Proceso disciplinario</p>
                                    <button id="downloadPdf10" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
                                </div>
                            </div>
                          </li>

                          <li>
                            {{-- Articulo 77 Código de Trabajo.docx --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Artículo 77 código de trabajo</p>
                                    <button id="downloadPdf14" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
                                </div>
                            </div>
                          </li>

                          <li>
                            {{-- AUDIENCIA 24 HORAS --}}
                            <div class="rounded-2xl bg-gray-50 p-8">
                                <div>
                                    <p class="text-lg font-semibold tracking-tight text-gray-900">Audiencia 24 horas</p>
                                    <button id="downloadPdf15" type="button"
                                        class="rounded-md bg-indigo-50 px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-100">Descargar</button>
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

            var pdfUrl = "docs_nomina/Acción de personal/ACCION DE PERSONAL.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Acción de personal.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf2").addEventListener("click", function() {

            var pdfUrl = "docs_nomina/Calendario Horas extras/CALENDARIO DE HORAS EXTRAS 2024 (CPA).pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Calendario Horas extras";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf3").addEventListener("click", function() {

            var pdfUrl = "docs_nomina/Formulario IRTRA/Formulario IRTRA EMPRESA.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "Formulario IRTRA EMPRESA.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf4").addEventListener("click", function() {

            var pdfUrl = "docs_nomina/Memo de vacaciones/MEMO VACACIONES FLOTA, S.A..pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "MEMO VACACIONES FLOTA, S.A.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

    <script>
        document.getElementById("downloadPdf5").addEventListener("click", function() {

            var pdfUrl = "docs_nomina/Memo de vacaciones/MEMO VACACIONES LA PANERIA, S.A..pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "MEMO VACACIONES LA PANERIA, S.A.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>

<script>
    document.getElementById("downloadPdf6").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Proceso disciplinario/01 REPORTE DE LLAMADA DE ATENCIÓN VERBAL.pdf";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "REPORTE DE LLAMADA DE ATENCIÓN VERBAL.pdf";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf7").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Proceso disciplinario/02 REPORTE LLAMADA DE ATENCIÓN POR ESCRITO.pdf";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "REPORTE LLAMADA DE ATENCIÓN POR ESCRITO";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf8").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Proceso disciplinario/03. SUSPENSIÓN DE LABORES SIN GOCE DE SALARIO ELECTRONICO.pdf";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "SUSPENSIÓN DE LABORES SIN GOCE DE SALARIO ELECTRONICO.pdf";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf9").addEventListener("click", function() {
        var docxUrl = "docs_nomina/Proceso disciplinario/CARTA DE APERCIBIMIENTO.docx";
        var link = document.createElement("a");
        link.href = docxUrl;
        link.download = "CARTA DE APERCIBIMIENTO.docx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf10").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Proceso disciplinario/PROCESO DISCIPLINARIO 22-8-2022 (1).pptx";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "PROCESO DISCIPLINARIO.pptx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>
<script>
    document.getElementById("downloadPdf11").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Actas/ACTA ADMINISTRATIVA ABANDONO DE LABORES.docx";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "ACTA ADMINISTRATIVA ABANDONO DE LABORES.docx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf12").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Actas/ACTA ADMINISTRATIVA ABANDONO DE PUESTO DE TRABAJO.docx";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "ACTA ADMINISTRATIVA ABANDONO DE PUESTO DE TRABAJO.docx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf13").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Actas/ACTA ADMINISTRATIVA DESPIDO JUSTIFICADO.docx";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "ACTA ADMINISTRATIVA DESPIDO JUSTIFICADO.docx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf14").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Actas/Articulo 77 Código de Trabajo.docx";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "Articulo 77 Código de Trabajo.docx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

<script>
    document.getElementById("downloadPdf15").addEventListener("click", function() {
        var pdfUrl = "docs_nomina/Actas/AUDIENCIA 24 HORAS.docx";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "AUDIENCIA 24 HORAS.docx";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

</body>

</x-gtfrontEndLayout>