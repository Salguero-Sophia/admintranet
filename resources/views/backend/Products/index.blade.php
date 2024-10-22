@php
    $menu = [
        (object) [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                        </svg>
                        ',
            'name' => 'Listado de productos',
            'color' => 'indigo',
            'route' => route('productsList'),
            'description' => 'Crea, consulta, actualiza y elimina productos de forma eficiente para optimizar la administración y vista en la web',
        ],
        (object) [
            'icon' => '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9.75h4.875a2.625 2.625 0 010 5.25H12M8.25 9.75L10.5 7.5M8.25 9.75L10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185z" />
                       </svg>',
            'name' => 'Familias',
            'color' => 'red',
            'route' => route('familiesList'),
            'description' => 'Crea, consulta, actualiza y elimina familias de productos de forma eficiente para optimizar la administración y vista en la web',
        ],
        (object) [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>',
            'name' => 'Categorias',
            'color' => 'green',
            'route' => route('categoriesList'),
            'description' => 'Crea, consulta, actualiza y elimina categorias de forma eficiente para optimizar la administración y vista en la web',
        ],
        (object) [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>',
            'name' => 'Sub Categorias',
            'color' => 'purple',
            'route' => route('subCategoriesList'),
            'description' => 'Crea, consulta, actualiza y elimina sub categorias de forma eficiente para optimizar la administración y vista en la web',
        ],
        
    ];
@endphp

<x-app-layout>
    {{-- Inicio contenido vista --}}

    {{-- Item Menu --}}
    <livewire:menu-secciones :menu="$menu" />
    {{-- Fin item Menu --}}

    {{-- Fin contenido vista --}}
</x-app-layout>
flex items-center