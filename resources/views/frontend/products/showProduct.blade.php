<x-frontEndLayout title="Product" x-data={}>
 
    <main>
        @include('messages.success-notification')
        <livewire:show-product :product="$product" :modifiers="$modifiers" :options="$options" :modifiersToShow="$modifiersToShow" />
    </main>

</x-frontEndLayout>
