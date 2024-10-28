<x-gtfrontEndLayout title="Comunicacion Interna" x-data={}>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">



    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
   
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

    {{-- Promos --}}
    <div class="container mx-auto px-10 py-6 sm:px-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">

            <!-- Facebook -->
            <div class="px-4 mb-8">
                <div class="rounded-lg text-center">
                    <img class="w-full rounded-3xl" src="interna/face.png" alt="i4">

                </div>
            </div>

            <!-- Linked in -->
            <div class="w-full px-4 mb-8">
                <div class="rounded-lg opacity-90 text-center">
                    <img class="w-full rounded-3xl" src="interna/link.png" alt="i4">

                </div>
            </div>


    <!-- canales de comunicación interna -->
    <div class="-h-40 px-4 mb-8">
        <!-- Enlace para abrir el PDF en una nueva pestaña -->
        <a id="pdfLink" href="interna/Guía de utilización  de canales de comunicación interna.pdf" target="_blank" class="sm-bk-blue card relative overflow-hidden rounded-3xl shadow-lg flex flex-col hover:bg-blue-300">
            <img class="mx-auto my-6" src="iconos/Icono de politica de comunicación.svg" alt="Ícono PDF">
            <p class="text-center -mt-8 mb-6 lg:text-lg sm:text-sm px-2 lg:px-8 font-semibold text-white"> Guía de canales de comunicación interna</p>
        </a>
    </div>

    <!-- Contenido del modal -->
    <div id="modalContainer12" class="hidden fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50">
        <div class="relative w-11/12 mx-auto py-8">
            <div class=" rounded-lg shadow-lg">
                <!-- Contenido del modal -->
                <div class="p-4">
                    <!-- Botón para cerrar el modal -->
                    <button id="closeModalBtn12"
                        class="absolute top-10 right-20 text-5xl text-red-500 hover:text-red-200 focus:outline-none">
                        &times;
                    </button>
                    <!-- Contenedor del PDF -->
                    <div class="w-full h-screen overflow-auto">
                        <iframe id="pdfIframe" class="lg:w-11/12 h-5/6 sm:w-full"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>


    {{-- Scripts --}}
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
    <script>
        // Función para detectar si el dispositivo es móvil
        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
        }
    
        // Función para mostrar el modal
        function showModal(modal) {
            modal.classList.remove("hidden");
        }
    
        // Función para cerrar el modal
        function closeModal(modal) {
            modal.classList.add("hidden");
        }
    
        // Agregar evento clic al enlace del PDF
        document.getElementById("pdfLink").addEventListener("click", function(event) {
            // Verificar si el dispositivo es móvil
            if (!isMobileDevice()) {
                // Prevenir la acción predeterminada (abrir enlace en una nueva pestaña)
                event.preventDefault();
    
                // Obtener la URL del PDF
                var pdfUrl = this.getAttribute("href");
    
                // Mostrar el modal
                var modalContainer = document.getElementById("modalContainer12");
                showModal(modalContainer);
    
                // Actualizar el iframe con la URL del PDF
                var pdfIframe = document.getElementById("pdfIframe");
                pdfIframe.src = pdfUrl;
    
                // Agregar el evento clic al botón de cerrar modal
                document.getElementById("closeModalBtn12").addEventListener("click", function() {
                    closeModal(modalContainer);
                    // Limpiar la URL del iframe al cerrar el modal
                    pdfIframe.src = "";
                });
            }
        });
    </script>



</body>

</x-gtfrontEndLayout>
