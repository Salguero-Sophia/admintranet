@php

    $menu = [
        (object) [
            'icon' => ' <img width="48" height="48" src="https://img.icons8.com/color/48/guatemala-circular.png" alt="guatemala-circular" />',
            'name'   => 'Guatemala',
            'url'    => route('careers'),
            'target' => '',
        ],
        (object) [
            'icon' => '<img width="48" height="48" src="https://img.icons8.com/color/48/el-salvador-circular.png" alt="el-salvador-circular" />',
            'name'   => 'El Salvador',
            'url'    => route('salvador'),
            'target' => '',
        ],
        (object) [
            'icon' => '<img width="48" height="48" src="https://img.icons8.com/color/48/usa-circular.png" alt="usa-circular" />',
            'name' => 'USA',
            'url'    => route('usa'),
            'target' => '',
        ],
    ];
@endphp

<div x-data="{ open: false }">
  <div x-data="{ openCartModal: false }">
    <div x-data="{ openScheduled: false }">
    {{-- Sub Menu --}}
    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

        <div class="blure fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">

            <div class="relative flex w-full max-w-xs flex-col overflow-y-auto sm-bk-blue pb-12 shadow-xl">

                <div class="flex px-4 pb-2 pt-5">
                    <button @click="open = false" type="button"
                        class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-100">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Menu -->

                <div class="space-y-6 border-t py-6">
                    @foreach ($menu as $page)
                        <div class="flow-root">
                            <a target="{{ $page->target }}"  href="{{ $page->url }}" class="-m-2 flex p-2 font-medium text-white ">
                                @if (isset($page->icon))
                                    {!! $page->icon !!}
                                @endif
                                <p style="margin-top: 5%; margin-left:4%">{{ $page->name }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    {{-- Menu --}}
    <nav aria-label="Top" class="relative z-20 bg-[#003B7A] backdrop-blur-xl backdrop-filter ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 items-center">
                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                <button @click="open = true" type="button"
                    class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <!-- Logo -->
                <div class="ml-4 flex lg:ml-0 w-auto lg:hidden">
                    <a href="{{ route('home') }}">
                        <span class="sr-only">San Martin Bakery | Intranet</span>
                        <img class="h-8 w-auto lg:hidden" src="{{ asset('logoBlancoDallas.svg') }}"
                            alt="Mobile Logo">
                    </a>
                </div>

                <div class="ml-4 lg:ml-0 hidden lg:block">
                    <a href="{{ route('home') }}">
                        <span class="sr-only">San Martin Bakery | Intranet</span>
                        <img class="h-8 w-auto hidden lg:block" src="{{ asset('logo-navbar.svg') }}"
                            alt="Desktop Logo">
                    </a>
                </div>

                <!-- Flyout menus -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                    <div class="flex h-full space-x-8">

                        @foreach ($menu as $page)
                            <a target="{{ $page->target }}" href="{{ $page->url }}"
                                class="flex items-center text-sm font-medium text-white hover:text-indigo-400">
                                @if (isset($page->icon))
                                    {!! $page->icon !!}
                                @endif
                               {{ $page->name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="ml-auto flex items-center">

                  <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                        <a href="{{ route('historia') }}" class="text-lg underline underline-offset-8 font-medium text-white hover:text-indigo-400">¿Quiénes somos?</a>
                  </div>

                </div>
            </div>
        </div>
    </nav>

    <!-- Cart Detail -->

    @teleport('body')

    <div class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" id="cartModal" x-show="openCartModal">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 overflow-hidden">
          <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
              <div class="pointer-events-auto w-screen max-w-md">
                <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                  <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                    <div class="flex items-start justify-between">
                      <h2 class="text-xl font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                      <div class="ml-3 flex h-7 items-center">
                        <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500" @click="openCartModal = false">
                          <span class="absolute -inset-0.5"></span>
                          <span class="sr-only">Close panel</span>
                          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    @if (Session::get('customerSession'))

                    @if (!empty($data))
                    @foreach ($data->orderDetails as $orderDetail)
                        @php
                            $product = $orderDetail->product;
                        @endphp
                        <div class="mt-10">
                            <div class="flow-root">
                              <ul role="list" class="-my-6 divide-y divide-gray-200">
                                <li class="flex py-6">
                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>
                                                    <a href="#">{{ $product->name }}</a>
                                                </h3>
                                                <p class="ml-4">${{ $orderDetail->price }}</p>
                                            </div>
                                            @if (!empty($orderDetail->orderDetailModifiers))
                                                @foreach ($orderDetail->orderDetailModifiers as $modifier)
                                                <ul>
                                                    <li class="mt-1 text-sm text-gray-500">
                                                        <b>{{ $modifier->modifier->name }}:</b> {{ $modifier->product->name }}

                                                        @if ($modifier->typeChange == '+')
                                                         ${{ $modifier->price }}
                                                        @endif
                                                    </li>
                                                </ul>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm pt-2">
                                            <p class="text-gray-500">Quantity {{ $orderDetail->quantity }}</p>
                                            <div class="flex">
                                                <button wire:click="deleteProduct('{{$orderDetail->id}}')" type="button" class="font-medium text-blue-600 hover:text-blues-500">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                              </ul>
                            </div>
                           </div>
                          {{-- </div> --}}
                    @endforeach
                </div>

                    @else

                    <div class="items-center justify-center flex h-full">
                       <p class="text-center">
                           Empty Cart
                       </p>
                   </div>

                   @endif

                    @else

                    <div class="items-center justify-center flex h-full">
                        <div class="text-center">
                            <div class="pb-2">
                                <a href="{{ route('customerLogin') }}" class="flex w-full justify-center rounded-md bg-blue-800 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Sign in
                                </a>
                            </div>
                            <p class="text-center text-sm leading-6 text-gray-500">
                                Not a member?
                                <a href="{{ route('customerRegistration') }}" class="font-semibold text-blue-600 hover:text-blue-500">Create account</a>
                            </p>
                        </div>
                    </div>
                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @endteleport
      <!--End Cart Detail -->

      @teleport('body')
      <livewire:schedule-order redirectTo="menu" slug=" "/>
      @endteleport

    </div>
    </div>
</div>
