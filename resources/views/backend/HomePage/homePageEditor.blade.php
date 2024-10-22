<x-app-layout>

    @include('messages.success')
  
  <div class="bg-white py-24 sm:py-32">

    <section class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Banners</h2>
      </div>
      <div class="mx-auto mt-6 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        
        @foreach ($categoriesImages as $bannerImage)

          <?php
              $image_path = Storage::disk('s3')->temporaryUrl(
                  $bannerImage->image_path, 
                  now()->addMinutes(1)
              );
          ?>
        <div>
          <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ $image_path }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          
            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
              <time datetime="2020-03-16" class="mr-8">
                {{ \Carbon\Carbon::parse($bannerImage->updated_at)->format('M d, Y') }}
              </time>
              <div class="-ml-4 flex items-center gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5">
                  <img src="https://ui-avatars.com/api/?name={{$bannerImage->updated_by}}&color=7F9CF5&background=EBF4FF" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
                  {{ $bannerImage->updated_by }}
                </div>
              </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
              <p>
                <span class="absolute inset-0"></span>
                {{ $bannerImage->name }}
              </p>
            </h3>
          </article>

          <form method="POST" action="{{ route('changeImage') }}" enctype="multipart/form-data">
            @csrf

            <input hidden id="imageId" name="imageId" type="text" value="{{ $bannerImage->id }}">

            <div class="mt-4">
              <label for="order" class="block text-sm font-medium leading-6 text-gray-900">Order</label>
              <div class="mt-2">
                <input type="number" value="{{ $bannerImage->order }}" name="order" id="order" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div class="mt-4">
              <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
              <div class="mt-2 flex justify-center rounded-lg border-gray-900/25 px-6 py-10">
                <div class="text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                  </svg>
                  <div class="mt-4 flex text-sm leading-6 text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-700">
                      <input id="attachment_info" name="attachment_info" type="file" accept="image/png, image/jpeg">
                    </label>
                  </div>
                  <p class="text-xs leading-5 text-gray-600">PNG, JPG up to 10MB</p>
                </div>
              </div>
            </div>

            <button type="submit" class="mt-4 rounded-full bg-blue-800 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
              Guardar
            </button>

          </form>
          
        </div>
            
        @endforeach
  
      </div>
    </section>

    <section class="mt-20 mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Información General</h2>
      </div>
      <div class="mx-auto mt-6 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        
        @foreach ($bannerImages as $categoryImage)
      
          <?php
              $image_path = Storage::disk('s3')->temporaryUrl(
                  $categoryImage->image_path, 
                  now()->addMinutes(1)
              );
          ?>
        
        <div>
          <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ $image_path }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          
            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
              <time datetime="2020-03-16" class="mr-8">
                {{ \Carbon\Carbon::parse($categoryImage->updated_at)->format('M d, Y') }}
              </time>
              <div class="-ml-4 flex items-center gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5">
                  <img src="https://ui-avatars.com/api/?name={{$bannerImage->updated_by}}&color=7F9CF5&background=EBF4FF" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
                  {{ $categoryImage->updated_by }}
                </div>
              </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
              <p>
                <span class="absolute inset-0"></span>
                {{ $categoryImage->name }}
              </p>
            </h3>
          </article>
      
          <form method="POST" action="{{ route('changeImage') }}" enctype="multipart/form-data">
            @csrf

            <input hidden id="imageId" name="imageId" type="text" value="{{ $categoryImage->id }}">

            <div class="mt-4">
              <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
              <div class="mt-2">
                <input type="text" value="{{ $categoryImage->name }}" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div class="mt-4">
              <label for="order" class="block text-sm font-medium leading-6 text-gray-900">Order</label>
              <div class="mt-2">
                <input type="number" value="{{ $categoryImage->order }}" name="order" id="order" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            {{-- <div class="mt-4">
              <label for="href" class="block text-sm font-medium leading-6 text-gray-900">Link</label>
              <div class="mt-2">
                <input type="text" value="{{ $categoryImage->href }}" name="href" id="href" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div> --}}
        
            <div class="mt-4">
              <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
              <div class="mt-2 flex justify-center rounded-lg border-gray-900/25 px-6 py-10">
                <div class="text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                  </svg>
                  <div class="mt-4 flex text-sm leading-6 text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-700">
                      <input id="attachment_info" name="attachment_info" type="file" accept="image/png, image/jpeg" >
                    </label>
                  </div>
                  <p class="text-xs leading-5 text-gray-600">PNG, JPG up to 10MB</p>
                </div>
              </div>
            </div>

            <button type="submit" class="mt-4 rounded-full bg-blue-800 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
              Guardar
            </button>

          </form>
          
        </div>
              
        @endforeach
      
      </div>
      
    </section>

    <section class="mt-20 mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Temporada</h2>
      </div>
      <div class="mx-auto mt-6 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        
        @foreach ($favoritesImages as $favoriteImage)

          <?php
              $image_path = Storage::disk('s3')->temporaryUrl(
                  $favoriteImage->image_path, 
                  now()->addMinutes(1)
              );
          ?>

        <div>
          <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ $image_path }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          
            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
              <time datetime="2020-03-16" class="mr-8">
                {{ \Carbon\Carbon::parse($favoriteImage->updated_at)->format('M d, Y') }}
              </time>
              <div class="-ml-4 flex items-center gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5">
                  <img src="https://ui-avatars.com/api/?name={{$bannerImage->updated_by}}&color=7F9CF5&background=EBF4FF" alt="" class="h-6 w-6 flex-none rounded-full bg-white/10">
                  {{ $favoriteImage->updated_by }}
                </div>
              </div>
            </div>
            <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
              <p>
                <span class="absolute inset-0"></span>
                {{ $favoriteImage->name }}
              </p>
            </h3>
          </article>

          <form method="POST" action="{{ route('changeImage') }}" enctype="multipart/form-data">
            @csrf

            <input hidden id="imageId" name="imageId" type="text" value="{{ $favoriteImage->id }}">

            <div class="mt-4">
              <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
              <div class="mt-2">
                <input type="text" value="{{ $favoriteImage->name }}" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div class="mt-4">
              <label for="order" class="block text-sm font-medium leading-6 text-gray-900">Order</label>
              <div class="mt-2">
                <input type="number" value="{{ $favoriteImage->order }}" name="order" id="order" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div class="mt-4">
              <label for="href" class="block text-sm font-medium leading-6 text-gray-900">Link</label>
              <div class="mt-2">
                <input type="text" value="{{ $favoriteImage->href }}" name="href" id="href" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
        
            <div class="mt-4">
              <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
              <div class="mt-2 flex justify-center rounded-lg border-gray-900/25 px-6 py-10">
                <div class="text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                  </svg>
                  <div class="mt-4 flex text-sm leading-6 text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-700">
                      <input id="attachment_info" name="attachment_info" type="file" accept="image/png, image/jpeg">
                    </label>
                  </div>
                  <p class="text-xs leading-5 text-gray-600">PNG, JPG up to 10MB</p>
                </div>
              </div>
            </div>

            <button type="submit" class="mt-4 rounded-full bg-blue-800 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
              Guardar
            </button>

          </form>
          
        </div>
            
        @endforeach
  
      </div>
    </section>

  </div>
</x-app-layout>