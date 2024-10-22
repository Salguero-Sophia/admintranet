<div class="bg-gray-50">
    {{-- Products --}}

    <div class="bg-white border-b-2 border-gray-200">
        <div
            class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <!-- Product details -->
            <div class="lg:max-w-lg lg:self-end">
                <nav aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-2">
                        <li>
                            <div class="flex items-center text-sm mb-4">
                                <a href="{{ route('menuProducts', [$categoryNavigate, $selectedCategory]) }}" class="text-base leading-7 text-blue-800 hover:text-blue-600">
                                    <span aria-hidden="true">&larr;</span> Back to menu
                                </a>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="mt-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $product->name }}
                    </h1>
                </div>

                <section aria-labelledby="information-heading" class="mt-4">
                    <h2 id="information-heading" class="sr-only">Product information</h2>

                    <div class="flex items-center">
                        <p class="text-lg text-gray-900 sm:text-xl">
                            {{ '$' . number_format($product->price, 2) }}
                        </p>
                    </div>

                    <div class="mt-4 space-y-6">
                        <p class="text-base text-gray-500">
                            {{ $product->description }}
                        </p>
                    </div>

                    <div class="mt-6 flex items-center">
                        <svg class="h-5 w-5 flex-shrink-0 text-green-500 hidden" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        <x-heroicon-s-information-circle class="h-6 w-6 text-yellow-500" />
                        <p class="ml-2 text-sm text-gray-500 font-bold">SKU: {{ $product->sku }}</p>
                    </div>
                </section>
            </div>

            <!-- Product image -->
            <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                    <img src="{{ $product->image }}"
                        alt="Model wearing light green backpack with black canvas straps and front zipper pouch."
                        class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product form -->
            <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
                <section aria-labelledby="options-heading">
                    <h2 id="options-heading" class="sr-only">Product options</h2>

                    <form method="POST" action="{{ route('addProduct') }}">

                        @csrf
                        
                        <div class="sm:flex sm:justify-between">
                            <!-- Size selector -->
                            <section aria-labelledby="details-heading" class="mt-12">
                                <h2 id="details-heading" class="sr-only">Additional details</h2>

                                <input type="hidden" id="categoryNavigate" name="categoryNavigate" value="{{ $categoryNavigate }}">
                                
                                <input type="hidden" id="selectedCategory" name="selectedCategory" value="{{ $selectedCategory }}">

                                <input type="hidden" id="productId" name="productId" value="{{ $product->id }}">

                                @if (!empty($options))

                                <select wire:change="searchModifiers($event.target.value)" id="modifierOption" name="modifierOption" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-blue-800 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option selected disabled>Select a option</option>
                                    @foreach ($options as $option)
                                    <option value="{{ implode('|', $option->modifiersId)}}"  >{{ $option->name }}</option>
                                    @endforeach
                                </select>
                                    
                                @endif
                                
                                @foreach ($modifiersToShow as $modifier)

                                <div class="divide-y divide-gray-200 border-t">
                                    <div>
                                      <h3>
                                        <!-- Expand/collapse question button -->
                                        <button type="button" class="group relative flex w-full items-center justify-between py-6 text-left" aria-controls="disclosure-1" aria-expanded="false">
                                          <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                                          <span class="text-gray-900 text-sm font-medium">{{ $modifier->name }}</span>
                                          <span class="ml-6 flex items-center">
                                            <!-- Open: "hidden", Closed: "block" -->
                                            {{-- <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg> --}}
                                            <!-- Open: "block", Closed: "hidden" -->
                                            <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                            </svg>
                                          </span>
                                        </button>
                                      </h3>
                                      <div class="prose prose-sm pb-6" id="disclosure-1">
                                          
                                        @if ($modifier->typeModifier == 1)

                                        @php
                                            $totalProducts = count($modifier->products);
                                        @endphp

                                        @foreach ($modifier->products as $index => $modifierProduct)
                                            <ul role="list">
                                                <div class="flex items-center">
                                                    <input id="{{ $modifier->id }}-{{ $modifierProduct->id }}" 
                                                           name="modifierProduct[{{ $modifier->id }}][]" 
                                                           value="{{ $modifierProduct->id }}" 
                                                           type="checkbox" 
                                                           @if ($modifierProduct->isDefault) 
                                                               checked 
                                                           @endif 
                                                           class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    @if ($modifierProduct->typeChange != '+')
                                                        <label for="{{ $modifier->id }}-{{ $modifierProduct->id }}" class="ml-3 block text-sm font-medium leading-6 text-gray-900">
                                                            {{ $modifierProduct->name }}
                                                        </label>
                                                    @else
                                                        <label for="{{ $modifier->id }}-{{ $modifierProduct->id }}" class="ml-3 flex flex-row items-center gap-2">
                                                            <span class="text-sm font-medium leading-6 text-gray-900">{{ $modifierProduct->name }}</span> 
                                                            <span class="text-sm font-bold leading-6 text-gray-400">(+) ${{ $modifierProduct->price }}</span>
                                                        </label>
                                                    @endif
                                                </div>
                                            </ul>
                                        @endforeach
                                            
                                        @else

                                        @foreach ($modifier->products as $index => $modifierProduct)
                                           <ul ul role="list">
                                             <div class="flex items-center">
                                                <input id="{{ $modifier->id }}-{{ $modifierProduct->id }}" 
                                                name="modifierProduct[{{ $modifier->id }}]" 
                                                value="{{ $modifierProduct->id }}" 
                                                type="radio"
                                                required 
                                                @if ($modifierProduct->isDefault) 
                                                    checked 
                                                @endif 
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                               @if ($modifierProduct->typeChange != '+')
                                                <label for="{{ $modifier->id }}-{{ $modifierProduct->id }}" class="ml-3 block text-sm font-medium leading-6 text-gray-900">
                                                    {{ $modifierProduct->name }}
                                                </label>
                                                @else
                                                <label for="{{ $modifier->id }}-{{ $modifierProduct->id }}" class="ml-3 flex flex-row items-center gap-2">
                                                        <span class="text-sm font-medium leading-6 text-gray-900">{{ $modifierProduct->name }}</span> 
                                                        <span class="text-sm font-bold leading-6 text-gray-400">(+) ${{ $modifierProduct->price }}</span>
                                                    </label>
                                                @endif
                                             </div>
                                           </ul>
                                         @endforeach

                                        @endif
                                      </div>
                                    </div>
                                    
                                @endforeach
                    
                                </div>
                              </section>
                        </div>

                        @if ($product->isAvailable)

                        <div class="mt-6 grid sm:grid-cols-2 gap-2">
                            <div class="grid grid-cols-3 gap-4">
                                <span wire:click="incrementQuantity()" wire:model.live="quantity" class="cursor-pointer rounded-md bg-sm-color text-white hover:bg-blue-600 flex items-center justify-center">
                                     +
                                </span>
                                <div class="flex items-center justify-center text-center">
                                    <input id="quantity" name="quantity" type="number" wire:model="quantity" class="w-16 text-center border border-gray-300 rounded-md" min="1">
                                </div>
                                <span wire:click="decrementQuantity()" wire:model.live="quantity" class="cursor-pointer rounded-md bg-sm-color text-white hover:bg-blue-600 flex items-center justify-center @if($quantity == 1) opacity-50 @endif">
                                    -
                               </span>
                            </div>
                         
                             <button type="submit"
                                 class="relative flex items-center justify-center rounded-md border border-transparent bg-blue-800 px-8 py-2 text-sm font-medium text-white hover:bg-blue-700">
                                 Add to cart
                             </button>
                         </div>
                            
                        @else

                        <div class="mt-10 text-center justify-center">
                            <h1 class="text-blue-800 text-xl">No Available</h1>
                        </div>

                         @if (session('ScheduleOrder'))
                         
                         <div x-data="{ openScheduled: false }" class="mt-3 text-center justify-center">
                            <h1 class="text-gray-800 text-base">Scheduled order {{ date("m/d/Y h:i A", strtotime(Session::get('ScheduleOrder'))) }}</h1>

                            <p>
                                <button type="button" class="font-medium text-blue-600 hover:text-blue-500" @click="openScheduled = ! openScheduled">
                                   order now or reschedule to pickup?
                                </button>
                            </p>

                            @teleport('body')
                               <livewire:schedule-order redirectTo="showProduct" slug='{{$product->id}}' />
                            @endteleport

                         </div>

                         @endif
                            
                        @endif
                       

                    </form>
                </section>
            </div>
        </div>
    </div>

    {{-- Fin Products --}}
</div>
