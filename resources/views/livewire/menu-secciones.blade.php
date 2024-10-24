<div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200  sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
    @foreach($menu as $item)
        <div class=" sm:rounded-tr-none group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
        <div>
            <span class="inline-flex rounded-lg p-3 bg-{{$item->color}}-50 text-{{$item->color}}-700 ring-4 ring-white">
                {!! $item->icon  !!}
            </span>
        </div>
        <div class="mt-8">
            <h3 class="text-base font-semibold leading-6 text-gray-900">
            <a href="{{ $item->route }}" class="focus:outline-none">
                <!-- Extend touch target to entire panel -->
                <span class="absolute inset-0" aria-hidden="true"></span>
                {{ $item->name  }}
            </a>
            </h3>
            <p class="mt-2 text-sm text-gray-500">
                {{ $item->description  }}
            </p>
        </div>
        <span class="pointer-events-none absolute right-6 top-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
            </svg>
        </span>
        </div>
    @endforeach
</div>
