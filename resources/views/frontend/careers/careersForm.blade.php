@php
    session_start();
@endphp

<x-frontEndLayout title="Careers" x-data={}>
    {{-- Inicio Contenido --}}

    <main>
        <livewire:career-detail :career="$career"/>
    </main>

    {{-- Fin Contenido --}}
</x-frontEndLayout>
