@php
    session_start();
@endphp
<x-frontEndLayout title="Careers" x-data={}>
    
    {{-- Inicio Contenido --}}

    <div class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8">
        <img src="{{ asset('careers-banners/rest-5.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
          <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
          <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Available opportunities</h2>
        </div>
    </div>

    @if (session('success'))
      <div class="bg-green-50 border-l-4 border-green-400 p-4 mt-5">
          <div class="flex">
              <div class="flex-shrink-0">
                  <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M0 11l2-2 5 5L18 3l2 2L7 18z" clip-rule="evenodd" />
                  </svg>
              </div>
              <div class="ml-3">
                  <p class="text-sm leading-5 font-medium text-green-800">
                      {{ session('success') }}
                  </p>
              </div>
          </div>
      </div>
    @endif

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 bg-white pt-20">

        @if (count($careers) === 0)
            
        <div class="bg-white p-2">
            <div class="mx-auto max-w-2xl text-center">
              <p class="mt-6 text-xl leading-8 text-gray-600">Sorry! we have no opportunities available to this position</p>
              <a href="{{ route('careers') }}" class="text-md font-semibold leading-7 text-indigo-600"><span aria-hidden="true">&larr;</span> Back to careers</a>
            </div>
        </div>
          

        @else

            <ul role="list" class="divide-y divide-gray-100 mr-3 ml-3">
                @foreach ($careers as $career)
                <li class="flex items-center justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset('isotipo-sm.svg')}}" alt="">
                        <div class="min-w-0 flex-auto">
                          <p class="text-sm font-semibold leading-6 text-gray-900">{{ $career->title }}</p>
                          <p class="mt-1 truncate text-xs leading-5 text-gray-500">Published <time>{{ \Carbon\Carbon::parse($career->updated_at)->format('Y-m-d') }}</time> - {{ $career->getStore->name}}</p>
                        </div>
                      </div>
                    <div class="flex flex-none items-center gap-x-4">
                        <a href="{{ route('careersApply', $career->id) }}" class="rounded sm-bk-blue px-2 py-1 text-sm font-semibold text-indigo-50 shadow-sm hover:bg-indigo-100">Apply</a>
                    </div>
                </li>
                @endforeach
            </ul>

        @endif

        
        <div class="pt-10 mr-3 ml-3">
            {{ $careers->links() }}
        </div>
    
    </div>

  
</x-frontEndLayout>
