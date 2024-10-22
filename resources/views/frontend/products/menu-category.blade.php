<x-frontEndLayout title="Menu" x-data={}>

    <div class="bg-white border-b-2 border-gray-200">
      <div class="mx-auto container px-4 sm:px-6 lg:px-8 pt-7 gap-x-2">
        <a href="{{ route('menu') }}" class="text-base flex gap-x-2 text-blue-800 hover:text-blue-600">
          <x-heroicon-o-arrow-left-circle class="h-6 w-6" />
          <p>Back to main menu</p>     
        </a>
      </div>
        <main>
          <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="py-24 text-center">
              
              <h1 class="xl:text-6xl text-4xl font-bold tracking-tight text-blue-900">Order Now!</h1>
              <p class="mx-auto mt-4 xl:text-2xl text-xl text-gray-500">What are you craving today?</p>
            </div>
    
            <!-- Product grid -->
            <section aria-labelledby="products-heading" class="pb-24">
              <h2 id="products-heading" class="sr-only">Products</h2>
    
              <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                  @foreach ($categories as $category)
                      <a href="{{ route('menuProducts', [$category->code, 'all']) }}" class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                          <img src="{{ $category->image }}" alt="Category image" class="mx-auto h-35 w-35 object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="mt-4 flex items-center justify-center text-bold text-lg font-medium text-blue-900">
                          <h3>{{ $category->name }}</h3>
                        </div>
                      </a>
                  @endforeach
              </div>
  
            </section>
          </div>
        </main>
      </div>
  </div>

</x-frontEndLayout>
