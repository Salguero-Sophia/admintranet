<x-frontEndLayout title="Order Detail" x-data={}>

    <main class="bg-white px-4 pb-24 pt-16 sm:px-6 sm:pt-24 lg:px-8 lg:py-32">
        <div class="mx-auto max-w-3xl">
          <div class="max-w-xl">
            <h1 class="text-base font-medium text-blue-800">Thank you!</h1>
            <p class="mt-2 text-4xl font-bold tracking-tight">We receive your order!</p>
            <p class="mt-2 text-base text-gray-500">Your order #{{$order}} is in our kitchen, we will notify you by email or call when you can pick it up.</p>
      
            <dl class="mt-12 text-sm font-medium">
              <dt class="text-gray-900">Tracking number</dt>
              <dd class="mt-2 text-blue-800">{{$order}}</dd>
            </dl>
          </div>
      
          <section aria-labelledby="order-heading" class="mt-10 border-t border-gray-200">
            <h2 id="order-heading" class="sr-only">Your order</h2>
      
            <h3 class="sr-only">Items</h3>

            @foreach ($data->orderDetails as $orderDetail)
                @php
                    $product = $orderDetail->product;
                @endphp

                <div class="flex space-x-6 border-b border-gray-200 py-10">
                    <img src="{{$product->image}}" alt="Glass bottle with black plastic pour top and mesh insert." class="h-20 w-20 flex-none rounded-lg bg-gray-100 object-cover object-center sm:h-40 sm:w-40">
                    <div class="flex flex-auto flex-col">
                      <div>
                        <h4 class="font-medium text-gray-900">
                          <a href="#">{{$product->name}}</a>
                        </h4>
                        <p class="mt-2 text-sm text-gray-600">{{$product->description}}</p>
                      </div>
                      <div class="mt-6 flex flex-1 items-end">
                        <dl class="flex space-x-4 divide-x divide-gray-200 text-sm sm:space-x-6">
                          <div class="flex">
                            <dt class="font-medium text-gray-900">Quantity</dt>
                            <dd class="ml-2 text-gray-700">{{$orderDetail->quantity}}</dd>
                          </div>
                          <div class="flex pl-4 sm:pl-6">
                            <dt class="font-medium text-gray-900">Price</dt>
                            <dd class="ml-2 text-gray-700">${{$orderDetail->price}}</dd>
                          </div>
                        </dl>
                      </div>
                    </div>
                </div>

            @endforeach
            
      
            <div class="sm:ml-40 sm:pl-6">
              <h3 class="sr-only">Order information</h3>
      
              <h4 class="sr-only">Addresses</h4>
              <dl class="grid grid-cols-2 gap-x-6 py-10 text-sm">
                <div>
                  <dt class="font-medium text-gray-900">Restaurant address</dt>
                  <dd class="mt-2 text-gray-700">
                    <address class="not-italic">
                      <span class="block">San Martín Bakery</span>
                      <span class="block">{{$data->store->name}}</span>
                      <span class="block">{{$data->store->address}}</span>
                    </address>
                  </dd>
                </div>
                {{-- <div>
                  <dt class="font-medium text-gray-900">Billing address</dt>
                  <dd class="mt-2 text-gray-700">
                    <address class="not-italic">
                    <!-- <span>{{$orderDetail->store->address}}</span> -->
                      <!-- <span class="block">Kristin Watson</span>
                      <span class="block">7363 Cynthia Pass</span>
                      <span class="block">Toronto, ON N3Y 4H8</span> -->
                    </address>
                  </dd>
                </div> --}}
              </dl>
      
              <h4 class="sr-only">Payment</h4>
              <dl class="grid grid-cols-2 gap-x-6 border-t border-gray-200 py-10 text-sm">
                <div>
                  <dt class="font-medium text-gray-900">Payment method</dt>
                  <dd class="mt-2 text-gray-700">
                    <p>Card</p>
                    <p>Reference {{$data->orderPayment->reference}}</p>
                  </dd>
                </div>
                <div>
                  <dt class="font-medium text-gray-900">Delivery method</dt>
                  <dd class="mt-2 text-gray-700">
                    <p>Pickup</p>
                    {{-- <p>Takes up to 3 working days</p> --}}
                  </dd>
                </div>
              </dl>
      
              <h3 class="sr-only">Summary</h3>
      
              <dl class="space-y-6 border-t border-gray-200 pt-10 text-sm">
                {{-- <div class="flex justify-between">
                  <dt class="font-medium text-gray-900">Subtotal</dt>
                  <dd class="text-gray-700">$36.00</dd>
                </div>
                <div class="flex justify-between">
                  <dt class="flex font-medium text-gray-900">
                    Discount
                    <span class="ml-2 rounded-full bg-gray-200 px-2 py-0.5 text-xs text-gray-600">STUDENT50</span>
                  </dt>
                  <dd class="text-gray-700">-$18.00 (50%)</dd>
                </div>
                <div class="flex justify-between">
                  <dt class="font-medium text-gray-900">Shipping</dt>
                  <dd class="text-gray-700">$5.00</dd>
                </div> --}}
                <div class="flex justify-between">
                  <dt class="font-medium text-gray-900">Total</dt>
                  <dd class="text-gray-900">${{ $data->total }}</dd>
                </div>
              </dl>
            </div>
          </section>
        </div>
      </main>

</x-frontEndLayout>

