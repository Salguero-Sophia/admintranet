<x-frontEndLayout title="Menu" x-data={}>

    <div class="bg-white border-b-2 border-gray-200">
        <main>

          @include('messages.success-notification')

          <livewire:menu-categories :categories="$categories" :stores="$stores" :store_id="$store_id" />

        </main>
      </div>
  </div>

</x-frontEndLayout>
