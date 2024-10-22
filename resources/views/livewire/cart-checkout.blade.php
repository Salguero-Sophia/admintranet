<div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">

<div class="lg:flex lg:min-h-full lg:flex-row-reverse lg:overflow-hidden">
    <h1 class="sr-only">Checkout</h1>
  
    <!-- Mobile order summary -->
    <section aria-labelledby="order-heading" class="bg-gray-50 px-4 py-6 sm:px-6 lg:hidden">
      <div class="mx-auto max-w-lg">
        <div class="flex items-center justify-between">
          <h2 id="order-heading" class="text-lg font-medium text-gray-900">Your Order</h2>
        </div>
  
        <div id="disclosure-1">
          <ul role="list" class="divide-y divide-gray-200 border-b border-gray-200">

            @foreach ($data->orderDetails as $orderDetail)

            @php
                $product = $orderDetail->product;
            @endphp

            <li class="flex space-x-6 py-6">
              <img src="{{ $product->image  }}" alt="Off-white t-shirt with circular dot illustration on the front of mountain ridges that fade." class="h-40 w-40 flex-none rounded-md bg-gray-200 object-cover object-center">
              <div class="flex flex-col justify-between space-y-4">
                <div class="space-y-1 text-sm font-medium">
                  <h3 class="text-gray-900">{{ $product->name }}</h3>
                  <p class="text-gray-600">${{ $orderDetail->price }}</p>
                  <p class="text-gray-600">Quantity: {{ $orderDetail->quantity }}</p>
                  @if (!empty($orderDetail->orderDetailModifiers))
                      @foreach ($orderDetail->orderDetailModifiers as $modifier)
                      <ul>
                          <li class="text-gray-500">
                            <b>{{ $modifier->modifier->name }}:</b> {{ $modifier->product->name }}

                            @if ($modifier->typeChange == '+')
                             ${{ $modifier->price }}
                            @endif
                          </li>
                      </ul>
                      @endforeach
                  @endif
                </div>
                <div class="flex space-x-4">
                  <button wire:click="deleteProduct('{{$orderDetail->id}}')" type="button" class="text-sm font-medium text-blue-800 hover:text-indigo-700">Remove</button>
                </div>
              </div>
            </li>

            @endforeach
  
          </ul>
        </div>
  
        <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
          <div class="flex justify-between">
            <dt>Subtotal</dt>
            <dd class="text-gray-900">${{ number_format($data->subTotal, 2) }}</dd>
          </div>
          {{-- <div class="flex justify-between">
            <dt class="flex">
              Discount
              <span class="ml-2 rounded-full bg-gray-200 px-2 py-0.5 text-xs tracking-wide text-gray-600">CHEAPSKATE</span>
            </dt>
            <dd class="text-gray-900">-$24.00</dd>
          </div> --}}
          <div class="flex justify-between">
            <dt>Taxes</dt>
            <dd class="text-gray-900">${{ $data->tax }}</dd>
          </div>
          {{-- <div class="flex justify-between">
            <dt>Shipping</dt>
            <dd class="text-gray-900">$22.00</dd>
          </div> --}}
          <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900">
            <dt class="text-base">Total</dt>
            <dd class="text-base">${{ $data->total }}</dd>
          </div>
        </dl>
      </div>
    </section>
  
    <!-- Order summary -->
    <section aria-labelledby="summary-heading" class="hidden w-full max-w-md flex-col bg-gray-50 lg:flex pb-10">
      <h2 id="summary-heading" class="sr-only">Order summary</h2>
  
      <ul role="list" class="flex-auto divide-y divide-gray-200 overflow-y-auto px-6">
        @if (!empty($data))

        @foreach ($data->orderDetails as $orderDetail)

        @php
            $product = $orderDetail->product;
        @endphp

        <li class="flex space-x-6 py-6">
            <img src="{{ $product->image }}" alt="Off-white t-shirt with circular dot illustration on the front of mountain ridges that fade." class="h-40 w-40 flex-none rounded-md bg-gray-200 object-cover object-center">
            <div class="flex flex-col justify-between space-y-4">
              <div class="space-y-1 text-sm font-medium">
                <h3 class="text-gray-900">{{ $product->name }}</h3>
                <p class="text-gray-600">${{ $orderDetail->price }}</p>
                <p class="text-gray-600">Quantity: {{ $orderDetail->quantity }}</p>
                 @if (!empty($orderDetail->orderDetailModifiers))
                      @foreach ($orderDetail->orderDetailModifiers as $modifier)
                      <ul>
                        <li class="text-gray-500">
                          <b>{{ $modifier->modifier->name }}:</b> {{ $modifier->product->name }}

                          @if ($modifier->typeChange == '+')
                           ${{ $modifier->price }}
                          @endif
                        </li>
                      </ul>
                      @endforeach
                  @endif
              </div>
              <div class="flex space-x-4">
                <button wire:click="deleteProduct('{{$orderDetail->id}}')" type="button" class="text-sm font-medium text-blue-800 hover:text-blue-700">Remove</button>
              </div>
            </div>
        </li>
            
        @endforeach
            
        @else

        <h3 class="text-gray-900">Empty Cart</h3>
            
        @endif
        
      </ul>

      <div class="sticky bottom-0 flex-none border-t border-gray-200 bg-gray-50 p-6">
        {{-- <form>
          <label for="discount-code" class="block text-sm font-medium text-gray-700">Discount code</label>
          <div class="mt-1 flex space-x-4">
            <input type="text" id="discount-code" name="discount-code" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            <button type="submit" class="rounded-md bg-gray-200 px-4 text-sm font-medium text-gray-600 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Apply</button>
          </div>
        </form> --}}
  
        <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
          <div class="flex justify-between">
            <dt>Subtotal</dt>
            <dd class="text-gray-900">${{ number_format($data->subTotal, 2) }}</dd>
          </div>
          {{-- <div class="flex justify-between">
            <dt class="flex">
              Discount
              <span class="ml-2 rounded-full bg-gray-200 px-2 py-0.5 text-xs tracking-wide text-gray-600">CHEAPSKATE</span>
            </dt>
            <dd class="text-gray-900">-$24.00</dd>
          </div> --}}
          <div class="flex justify-between">
            <dt>Taxes</dt>
            <dd class="text-gray-900">${{ $data->tax }}</dd>
          </div>
          {{-- <div class="flex justify-between">
            <dt>Shipping</dt>
            <dd class="text-gray-900">$22.00</dd>
          </div> --}}
          <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900">
            <dt class="text-base">Total</dt>
            <dd class="text-base">${{ $data->total }}</dd>
          </div>
        </dl>
      </div>
    </section>
  
    <!-- Checkout form -->
    <section aria-labelledby="payment-heading" class="bg-white flex-auto overflow-y-auto px-4 pb-16 pt-12 sm:px-6 sm:pt-16 lg:px-8 lg:pb-24 lg:pt-0">
      <h2 id="payment-heading" class="sr-only">Payment and shipping details</h2>

      @include('messages.success')
      
      @include('messages.error')
  
      <div class="mx-auto max-w-lg lg:pt-10">
  
        <form id="checkout-form" method="POST" action="{{ route('pay') }}" class="mt-6">

          @csrf

          <div class="grid grid-cols-12 gap-x-4 gap-y-6">
  

          <div class="col-span-full flex items-center gap-1 border-b border-gray-900/10 pb-6">
              <div class="block text-md font-bold text-gray-700">Store:</div>
              <div class="block text-md font-medium text-gray-700">San Martín - {{isset($store->name) ? $store->name : "Select a Store"}}</div>
            </div>

            <div class="col-span-full">
              <label for="first_name" class="block text-sm font-medium text-gray-700">First Name on card</label>
              <div class="mt-1">
                <input required value="{{old('first_name')}}" type="text" id="first_name" name="first_name" autocomplete="cc-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
           
            <div class="col-span-full">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name on card</label>
              <div class="mt-1">
                <input required value="{{old('last_name')}}" type="text" id="last_name" name="last_name" autocomplete="cc-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div class="col-span-full">
              <label for="card_number" class="block text-sm font-medium text-gray-700">Card number</label>
              <div class="mt-1">
                <input required value="{{old('card_number')}}" minlength="16" maxlength="16" type="text" id="card_number" name="card_number" autocomplete="cc-number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div class="col-span-8 sm:col-span-9">
              <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
              <div class="mt-1">
                <input 
                  required 
                  value="{{ old('expiration_date') }}" 
                  pattern="\d{2}/\d{2}" 
                  type="text" 
                  name="expiration_date" 
                  id="expiration_date" 
                  autocomplete="cc-exp" 
                  class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                >
              </div>
            </div>
  
            <div class="col-span-4 sm:col-span-3">
              <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
              <div class="mt-1">
                <input required value="{{old('cvc')}}" type="text" minlength="3" maxlength="3" name="cvc" id="cvc" autocomplete="csc" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div class="col-span-full">
              <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
              <div class="mt-1">
                <input required value="{{old('address')}}" type="text" id="address" name="address" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div class="col-span-full sm:col-span-4">
              <label for="city" class="block text-sm font-medium text-gray-700">City</label>
              <div class="mt-1">
                <input required value="{{old('city')}}" type="text" id="city" name="city" autocomplete="address-level2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div class="col-span-full sm:col-span-4">
              <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
              <div class="mt-1">
                <input required value="{{old('phone')}}" type="number" id="phone" name="phone" autocomplete="address-level1" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
  
            <div class="col-span-full sm:col-span-4">
              <label for="zip" class="block text-sm font-medium text-gray-700">Postal code</label>
              <div class="mt-1">
                <input required value="{{old('zip')}}" type="text" id="zip" name="zip" autocomplete="postal-code" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>
  
          <button id="submit-order" type="submit" class="mt-6 w-full rounded-md border border-transparent sm-bk-blue px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Pay ${{ $data->total }}
          </button>

          <p class="mt-6 flex justify-center text-sm font-medium text-gray-500">
            <svg class="mr-1.5 h-5 w-5 text-yellow-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
            </svg>
            This order applies only to restaurant pickups.
          </p>

        </form>

        <script>
          document.getElementById('checkout-form').addEventListener('submit', function(event) {
              // Deshabilita el botón al enviar el formulario para evitar múltiples envíos
              document.getElementById('submit-order').disabled = true;
          });
        </script>

        <script>
          document.addEventListener('DOMContentLoaded', function () {
            var expDateInput = document.getElementById('expiration_date');

            expDateInput.addEventListener('input', function (e) {
              var input = e.target.value.replace(/\D/g, '').substring(0, 4); // Remove non-digits and limit to 4 characters
              var month = input.substring(0, 2);
              var year = input.substring(2, 4);
            
              if (month.length === 2 && year.length === 2) {
                e.target.value = month + '/' + year;
              } else {
                e.target.value = month + (year ? '/' + year : '');
              }
            });
          });
        </script>

      </div>
    </section>
  </div>
  
</div>
