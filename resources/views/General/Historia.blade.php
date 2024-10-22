<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Recursos Humanos" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    <style>
        .sm-bk-blue {
            background: #1a237e;
        }

        .sm-bk-blue {
            background: #003B7A;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="bg-white">
        <!--Nav-->
        <nav id="header" class="top-0 inset-x-0 z-50 sm-bk-blue fixed">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <!-- Sección izquierda (oculta en dispositivos móviles) -->
                <div class="hidden lg:flex lg:flex-initial lg:gap-x-12">
                    <a href="{{ route('guatemala') }}"> <img width="48" height="48"
                            src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" /></a>
                    <a href="{{ route('salvador') }}"> <img width="48" height="48"
                            src="https://img.icons8.com/color/48/el-salvador-circular.png"
                            alt="el-salvador-circular" /></a>
                    <a href="{{ route('usa') }}"> <img width="48" height="48"
                            src="https://img.icons8.com/color/48/usa-circular.png" alt="usa-circular" /></a>
                </div>
                <div class="pl-4 flex items-center mx-auto">
                    <a href="/" class="py-4 flex justify-center items-center">
                        <!-- Logo del navbar -->
                        <img id="logo" class="mx-auto w-36 md:w-80" src="programa/sm.png" alt="Logo" />
                    </a>
                </div>
                <!-- Sección derecha (oculta en dispositivos móviles) -->
                <div class="hidden lg:flex lg:flex-initial">
                    <a href="{{ route('historia') }}"
                        class="text-lg font-semibold leading-6 text-white underline underline-offset-8">¿Quiénes
                        somos?</a>
                </div>
                <div class="block absolute left-6">
                    <div class="flex lg:hidden">
                        <button id="openMenuButton" type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu open state. -->
                <div class="lg:hidden hidden" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div
                        class="fixed inset-y-0 left-0 z-0 w-1/2  overflow-y-auto sm-bk-blue opacity-90 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <div class="flex justify-center">
                                <a href="/" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto" src="Group 1.svg" alt="">
                                </a>
                            </div>

                            <button id="closeMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-white">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <line x1="9" y1="9" x2="15" y2="15" />
                                    <line x1="15" y1="9" x2="9" y2="15" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="py-6">
                                    <a href="{{ route('historia') }}"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-blue-800">¿Quiénes
                                        somos?</a>
                                </div>
                                <div class="space-y-2 py-6">
                                    <a href="{{ route('guatemala') }}"
                                        class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                        <img class="mr-2" width="36" height="36"
                                            src="https://img.icons8.com/color/48/guatemala-circular.png"
                                            alt="guatemala-circular" />
                                        Guatemala
                                    </a>
                                    <a href="{{ route('salvador') }}"
                                        class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                        <img class="mr-2" width="36" height="36"
                                            src="https://img.icons8.com/color/48/el-salvador-circular.png"
                                            alt="el-salvador-circular" />
                                        El Salvador
                                    </a>
                                    <a href="{{ route('usa') }}"
                                        class="-mx-3 flex items-center rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-blue-800">
                                        <img class="mr-2" width="36" height="36"
                                            src="https://img.icons8.com/color/48/usa-circular.png"
                                            alt="usa-circular" />
                                        USA
                                    </a>


                                </div>
                            </div>
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


    <div class="container mx-auto py-20 px-8">
        <main class="relative isolate">
            <!-- Historia -->
            <div class="mx-auto max-w-2xl text-center sm:pt-16">
                <div class="px-6 pt-2 lg:px-8">
                    <h2 class="text-3xl font-bold tracking-tight text-black sm:text-5xl">Historia</h2>
                </div>
            </div>

            <!-- Content section -->
            <div class="mx-auto mt-20 mb-8 max-w-7xl px-6 lg:px-10">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                        class="grid max-w-xl grid-cols-1 gap-24 text-base leading-7 text-black lg:max-w-none lg:grid-cols-2">
                        <div>
                            <p class="text-justify">Se inició en 1974 con una pequeña panadería y un gran sueño: querer
                                ser los mejores. Es fácil decirlo y muchas veces suena como un cliché, pero cuando a uno
                                le gusta lo que hace, todo se orienta a esa dirección. Eso nos ha hecho enfocarnos en
                                ofrecer los productos de la más alta calidad, una gran variedad de productos tanto en la
                                panadería, repostería, pastelería, así como en nuestros cafés. </p>
                            <p class="mt-8 text-justify">Desde el inicio nos propusimos a hacer las cosas diferentes,
                                desde la atención al cliente, el compromiso con la calidad, la higiene y logramos
                                cambiar la manera de vender y disfrutar el pan. Nuestros primeros años fueron de
                                crecimiento e innovación, impactando positivamente en el estilo de vida y las costumbres
                                de los guatemaltecos relacionadas con el consumo del pan. Todas nuestras panaderías
                                tienen hornos y horneros capacitados para tener pan recién horneado todo el día, todos
                                los días. Tenemos recetas originales de San Martín , como el famoso pan de agua que se
                                ha vuelto parte esencial en las mesas de los guatemaltecos. Tenemos además una cámara de
                                pasteles especializada para mantener frescos todos nuestros pasteles hechos diariamente
                                con los ingredientes más frescos y de mejor calidad.</p>
                        </div>
                        <div>
                            <p class="text-justify">En cada tienda San Martín se vive lo que llamamos la “Experiencia
                                San Martín ”, ya que somos una cadena de tiendas únicas – ¡cada una con su estilo,
                                personalidad y magia! Además, contamos con restaurantes muy acogedores, con buena
                                música, mobiliario de primera y donde la limpieza y la calidad de nuestros ingredientes
                                se ve a través de nuestras cocinas modernas y abiertas. Ofrecemos un menú sano y
                                delicioso, que incluye desayunos, sopas servidas en pan, ensaladas, sandwiches, pizzas
                                rústicas (horneadas en hornos de piedra, hamburguesas a la parrilla y el favorito de
                                nuestros clientes, ¡el 2 de 3!. Adicionalmente, contamos con una barra de café atendida
                                por verdaderos Baristas, donde ofrecemos café tostado en nuestra propia tostaduría para
                                asegurar que estamos ofreciendo café con calidad de exportación. Para aumentar nuestro
                                catálogo de productos y promover un estilo de vida saludable para la nueva generación,
                                adquirimos nuestra marca hermana Yogulicious. Esta es una heladería única en su tipo en
                                Guatemala, ofreciendo un self-service con productos saludables y de excelente calidad.
                            </p>
                            <p class="mt-8 text-justify">Gracias al compromiso, esfuerzo y pasión de quienes trabajamos
                                en San Martín continuamos creciendo. La libertad para alcanzar el éxito, ser los
                                mejores, la ética empresarial, pasión por nuestros clientes, orgullo por lo que hacemos
                                y el respeto hacia los demás constituyen los seis pilares centrales de nuestra empresa;
                                es por ello que San Martín es mucho más que pan… es innovación, calidad, excelente
                                servicio, pero sobre todo es pasión por hacer lo que más nos gusta: ¡consetir a nuestros
                                clientes!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <div class="mt-2 flex justify-center items-center sm:mt-8 xl:px-8">
                    <video controls class="aspect-[9/4] w-3/4 object-cover xl:rounded-3xl">
                        <source src="H_SM_50_AÑOS.mp4" type="video/mp4">
                    </video>
                </div>

            </div>

            <div class="relative flex justify-center items-center py-8">
                <div class="w-11/12 md:w-11/12 lg:w-11/12 border-2 bg-black"></div>
            </div>

            <!-- Mision y Vision -->
            <div class="mx-auto mt-20 mb-8 max-w-7xl px-6 lg:px-10">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                        class="grid max-w-xl grid-cols-1 gap-24 text-base leading-7 text-black lg:max-w-none lg:grid-cols-2">
                        <div>
                            <dd class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Misión</dd>
                            <p class="text-justify">Ofrecer al cliente la más amplia gama de productos de
                                calidad e inocuos en panadería, repostería, pastelería y
                                comida casual, a través de excelente atención al cliente, por
                                medio de personal altamente comprometido y un ambiente
                                agradable y acogedor. </p>
                        </div>
                        <div>
                            <dd class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Visión</dd>
                            <p class="text-justify">Ser los mejores en panadería, pastelería y restaurante de comida
                                casual del país para llegar a ser los mejores del mundo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center items-center py-8">
                <div class="w-11/12 md:w-11/12 lg:w-11/12 border-2 bg-black"></div>
            </div>

            <!-- Valores -->
            <div class="mx-auto max-w-2xl text-center sm:pt-16">
                <div class="px-6 pt-2 lg:px-8">
                    <h2 class="text-xl font-bold tracking-tight text-black sm:text-4xl">Nuestros Valores</h2>
                </div>
            </div>
            
            <div class="mx-auto mt-20 mb-8 max-w-7xl px-6 lg:px-10">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                    class="grid max-w-xl grid-cols-1 gap-24 text-base leading-7 text-black lg:max-w-none lg:grid-cols-1">
                    <div class="px-2 my-20">
                        <div class="text-center inline font-semibold text-lg text-black">
                            <!-- Icono para Lealtad -->
                            <img class="inline-block w-9 h-9 mr-2" src="valores/Leal.svg" alt=""> Lealtad 
                        </div>
                        <p class="text-justify">Cumplimos fielmente y con gratitud el compromiso que hemos adquirido con la empresa incluso en circunstancias adversas. La lealtad se manifiesta en la incondicionalidad, la forma de asumir nuestro rol y las cosas que estamos dispuestos a hacer por el bien de la empresa, aunque no sea una obligación.  <br/>En Corporación San Martín:<br />- Hablamos bien de la empresa<br />- Hablamos bien de mis compañeros de trabajo<br />- Sentimos orgullo por la empresa<br />- Cuidamos la información interna de la Corporación</p>
                    </div>
                </div>
                    <div
                        class="grid max-w-xl grid-cols-1 gap-24 text-base leading-7 text-black lg:max-w-none lg:grid-cols-2">
                        <div>
                            <div class="inline font-semibold text-lg text-black">
                                <!-- Icono para Ética -->
                                <img class="inline-block w-9 h-9 mr-2" src="valores/Ética.svg" alt=""> Ética
                            </div>
                            <p class="text-justify">Actuamos de forma correcta con responsabilidad y respeto a nuestro prójimo y a nosotros mismos; con la convicción que actuamos de manera considerada desde la mente y el corazón.<br />En Corporación San Martín:<br />- Somos leales y transparentes con nuestros jefes y compañeros de trabajo<br />- Respetamos y cumplimos con horarios de trabajo<br />- Somos responsables<br />- No participamos en chismes</p>
                        
                            <p class="mt-8 text-justify">
                                <div class="inline font-semibold text-lg text-black">
                                    <!-- Icono para Honestidad -->
                                    <img class="inline-block w-9 h-9 mr-2" src="valores/Honestidad.svg" alt=""> Honestidad
                                </div>
                                <br />
                                Cumplimos nuestro trabajo de manera transparente e íntegra sin necesidad de hacerlo por obligación. <br />En Corporación San Martín:<br />- Hablamos siempre con la verdad <br />- Cumplimos con promesas y compromisos<br />- Enfrentamos los problemas<br />- Hacemos buen uso de los recursos de la empresa
                            </p>
                        </div>
                        
                        <div>
                            <div class="inline font-semibold text-lg text-black">
                                <img class="inline-block w-9 h-9 mr-2" src="valores/Amor al Trabajo.svg" alt=""> Amor al trabajo
                            </div>
                            <p class="text-justify">Amamos nuestro trabajo porque cuando se ama lo que hacemos se
                                nota, se convierte en una pasión y una motivación, además de ser una fuente de
                                inspiración
                                para los demás.<br />
                                En Corporación San Martín: <br />
                                - Realizamos las labores diaras con entrega y dedicación<br />
                                - Agradecemos por el trabajo, todos los días. <br />
                                - Hacemos el trabajo con excelencia aunque no nos estén viendo<br />
                                - Afrontamos los retos y desafíos de forma positiva</dd>
                            </p>

                            <p class="mt-8 text-justify">
                            <div class="inline font-semibold text-lg text-black">
                                <img class="inline-block w-9 h-9 mr-2" src="valores/Humildad.svg" alt=""> Humildad
                            </div>
                            <br />
                            Somos sencillos y tratamos a todos por igual con la convicción de
                            que actuamos de forma considerada desde la mente y el corazón.<br />
                            En Corporación San Martín:<br />
                            - Compartimos conocimientos<br />
                            - Reconocemos los errores<br />
                            - Aceptamos los fracasos<br />
                            - Pedimos disculpas</dd>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


    </div>

    </main>
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
