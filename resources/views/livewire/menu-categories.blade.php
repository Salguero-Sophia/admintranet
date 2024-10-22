<div x-data="{ openScheduled: false }" class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">

  @if (session('ScheduleOrder'))

  <div class="pt-24 text-center">

    <h1 class="xl:text-6xl text-4xl font-bold tracking-tight text-blue-900">Scheduled order!</h1>

    <!-- Select to choose a store to order -->



  </div>

  <div class="mt-4 pb-10 flex justify-center text-center text-sm text-gray-500">

    <p>

      You can also

      <button type="button" class="font-medium text-blue-600 hover:text-blue-500" @click="openScheduled = ! openScheduled">

        order now or reschedule to pickup

        <span aria-hidden="true"> &rarr;</span>

      </button>

    </p>

  </div>

  @else

  <div class="py-24 text-center">

    <div class="flex flex-col justify-center">

      <div>

        <h1 class="xl:text-6xl text-4xl font-bold tracking-tight text-blue-900">Order Now!</h1>

      </div>

      <!-- Select to choose a store to order -->
      <div class="grid grid-cols-1 gap-2 w-1/4 justify-center m-auto mt-4">

        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">Choose your store</label>

        <select wire:change="setStoreId($event.target.value)" value="{{$store_id}}" id="location" name="location" class="mt-2 block rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">

          @foreach ($stores as $store)

          @if ($store_id == $store->id)
            <option value="{{$store->id}}" selected>{{$store->name}}</option>
          @else
            <option value="{{$store->id}}">{{$store->name}}</option>
          @endif


          @endforeach

        </select>

      </div>

    </div>


    <div class="mt-4 pb-10 flex justify-center text-center text-sm text-gray-500">

      <p>

        you can also

        <button type="button" class="font-medium text-blue-600 hover:text-blue-500" @click="openScheduled = ! openScheduled">

          Schedule your order to pickup

          <span aria-hidden="true"> &rarr;</span>

        </button>

      </p>

    </div>

    @endif


    <!-- Product grid -->
    <section aria-labelledby="products-heading" class="pb-24">

      <h2 id="products-heading" class="sr-only">Products</h2>

      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">

        @foreach ($categories as $category)

        <a href="{{ route('menuCategory', $category->code) }}" class="group">

          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">

            <img src="{{ $category->image }}" alt="Category image" class="mx-auto h-50 w-50 object-cover object-center group-hover:opacity-75">

          </div>

          <div class="mt-4 flex items-center justify-center text-bold text-lg font-medium text-blue-900">

            <h3>{{ $category->name }}</h3>

          </div>

        </a>

        @endforeach

      </div>

    </section>

    @teleport('body')

    <livewire:schedule-order redirectTo="menu" slug=" " />

    @endteleport

  </div>