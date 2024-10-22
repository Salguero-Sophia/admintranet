<x-frontEndLayout title="Menu" x-data={}>

    <div class="bg-gray-50">
        <main>
          <livewire:menu-products :category="$category" :categorySearch="$categorySearch"/>
        </main>
      </div>
  </div>

</x-frontEndLayout>
