<x-frontEndLayout title="Promotions">

    <main>
        <div>
            {{-- Productos --}}

            <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">

                <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900 pb-5">
                    New
                </h2>

                <div class="-my-2">

                  <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                    <div class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">

                    @for($i=1; $i <= 5; $i++)
                      <a href="#" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                        <span aria-hidden="true" class="absolute inset-0">
                          <img src="{{ asset('static_files/catering/' . $i . '.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                        </span>
                        <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                        <span class="relative mt-auto text-center text-xl font-bold text-white">New Arrivals</span>
                      </a>
                    @endfor



                    </div>
                  </div>
                </div>
            </section>

            <!-- Collection section -->
            <section aria-labelledby="collection-heading"
                class="mx-auto max-w-xl px-4 pt-5 sm:px-6 sm:pt-5 lg:max-w-7xl lg:px-8">
                <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Ship Nationwide
                </h2>
                <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create
                    a collection inspired by the natural world.</p>

                <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">

                    @for ($i = 1; $i <= 3; $i++)
                        <a href="#" class="group block">
                            <div aria-hidden="true"
                                class="h-[500px] aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                                <img src="{{ asset('static_files/catering/' . $i . '.jpg') }}"
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                            <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can
                                lose everything at once.</p>
                        </a>
                    @endfor

                </div>
            </section>

            <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="relative overflow-hidden rounded-lg">
                  <div class="absolute inset-0">
                    <img src="{{ asset('static_files/login-cover.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                    <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                      <h2 id="comfort-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">San Marlin Bakery</h2>
                      <p class="mt-3 text-xl text-white">Enjoy your favorite products in any state! Send your favorites to family, friends & colleagues across the nation.</p>
                      <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Contact Us</a>
                    </div>
                  </div>
                </div>
              </section>

            {{-- End Products --}}
        </div>
    </main>


</x-frontEndLayout>
