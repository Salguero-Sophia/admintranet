<x-frontHeader title="{{ $title }}" />
        <div class="bg-white">
            <!-- Barra de Navegación Fija -->
            
            <div class="sticky top-0 bg-white z-50">
                <livewire:sv-menu-header />
            </div> 

            {{ $slot }}
        </div>
        <livewire:footer />
<x-frontFooter />
