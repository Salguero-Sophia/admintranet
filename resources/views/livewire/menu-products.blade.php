<div class="bg-white">
  <div class="mx-auto container px-4 sm:px-6 lg:px-8 pt-7 gap-x-2">
    <a href="{{ route('menuCategory', $categoryNavigate) }}" class="text-base flex gap-x-2 text-blue-800 hover:text-blue-600">
      <x-heroicon-o-arrow-left-circle class="h-6 w-6" />
      <p>Back to categories</p>     
    </a>
  </div>

  <div class="mx-auto container px-4 sm:px-6 lg:px-8 mt-10">

  @include('messages.success-notification')

  @if (!empty($categories))

  <div>
    <h2 class="text-xl font-bold text-gray-900 pb-5">
        Categories
    </h2>
    <div class="sm:hidden">
      <select wire:change="searchCategory($event.target.value)" id="categoriesTabs" name="categoriesTabs" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-blue-800 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          <option selected disabled>Select a category</option>
          @foreach ($categories as $category)
          <option value="{{ $category->code }}">{{ $category->name }}</option>
          @endforeach
      </select>
  </div>

    <div class="hidden sm:block">
      <div>
        <nav class="-mb-px border-b-2 flex space-x-8" aria-label="Tabs">
          <span class="cursor-pointer hover:border-blue-800 hover:text-blue-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium
                @if ($defaultCategory == $categorySearch) border-blue-800 text-blue-700 @else text-gray-500 border-transparent @endif"
                wire:click="searchByDefaultCategory('{{ $defaultCategory }}')" wire:model.live="category">
                  All
            </span>
          @foreach ($categories as $category)
            <span class="cursor-pointer hover:border-blue-800 hover:text-blue-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium
                @if ($category->code == $selectedCategory) border-blue-800 text-blue-700 @else text-gray-500 border-transparent @endif"
                wire:click="searchCategory('{{ $category->code }}')" wire:model.live="category">
                  {{ $category->name }}
            </span>
          @endforeach
        </nav>
      </div>
    </div>
  </div>

  @endif
  

  @if ($selectedCategory !== 0 && $subCategories !== [])
  <div class="mt-10">
    <h2 class="text-xl font-bold text-gray-900 pb-5">
        Sub Categories
    </h2>
    <div class="sm:hidden">
      <label for="tabs" class="sr-only">Select a sub category</label>
      <select wire:change="searchSubCategory($event.target.value)" id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-blue-800 focus:outline-none focus:ring-indigo-500 sm:text-sm">
        <option selected disabled>Select category</option>
        @foreach ($subCategories as $subCategory)
        <option  value="{{ $subCategory->code }}">{{ $subCategory->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="hidden sm:block">
      <div>
        <nav class="-mb-px flex space-x-8 border-b-2" aria-label="Tabs">
          @foreach ($subCategories as $subCategory)
            <span class="cursor-pointer hover:border-blue-800 hover:text-blue-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium
                @if ($subCategory->code == $selectedSubCategory) border-blue-800 text-blue-700 @else text-gray-500 border-transparent @endif"
                wire:click="searchSubCategory('{{ $subCategory->code }}')" wire:model.live="subCategory">
                  {{ $subCategory->name }}
            </span>
          @endforeach
        </nav>
      </div>
    </div>
  </div>
  @endif
</div>

  <div class="mx-auto container px-4 sm:px-6 lg:px-8 border-gray-200 border-b-2 pt-10">

      <h2 class="text-xl font-bold text-gray-900">
          Products
      </h2>

      <div class="mt-8 pb-10 grid grid-cols-2 gap-6 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
          {{-- Product --}}

          @foreach ($products as $product)
              <div>
                  <a href="{{ route('showProduct', $product->id) }}">
                      <div class="group relative cursor-pointer animate__animated animate__fadeIn">
    
                          <div class="relative h-72 w-full overflow-hidden rounded-lg  group-hover:opacity-75 p-5">
                              <img src="{{ $product->image }}" alt=""
                                  class="h-full w-full object-cover object-center">
                          </div>
    
                          <div class="relative mt-4">
                              <div>
                                  <h3 class="text-sm font-medium text-gray-900">
                                      {{ $product->name }} </h3>
                                  <span class="text-xs text-gray-400">
                                      SKU: {{ $product->sku }}
                                  </span>
                              </div>
    
                          </div>
                          <div
                              class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
    
                              <p class="relative text-lg font-semibold text-white" style="color:#003B7A;">
                                  @if ($product->price == 0)

                                  @else

                                  ${{ number_format($product->price, 2) }}
                                      
                                  @endif
                                  
                              </p>
                          </div>
                      </div>
                  </a>
              </div>
          @endforeach
      </div>
  </div>
</div>
