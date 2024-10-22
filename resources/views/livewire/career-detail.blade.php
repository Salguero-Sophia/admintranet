    <div>
        {{-- Seccion 1 --}}
        <div class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8">
            <img src="{{ asset('careers-banners/rest-1.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
              <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Position information</h2>
            </div>
        </div>

        
        {{-- Seccion 2 --}}
        <div class="container max-w-7xl mx-auto pt-20 pb-20 px-8 ">
            <div class="px-4 sm:px-0">
                @include('messages.success')
              <h3 class="pt-4 text-base font-semibold leading-7 text-gray-900">{{ $career->title }} information</h3>
              <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500"></p>
            </div>
            <div class="mt-6 border-t border-gray-100">
              <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Description</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{!! $career->description !!}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">We offer</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{!! $career->we_offer !!}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Requirements</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{!! $career->requirements !!}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Salary Range</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $career->salary_range}}</dd>
                </div>
              </dl>
            </div>
            
            <div class="flex justify-end mt-2" x-data="{ open: false }">
                <button  @click="open = ! open" type="button" class="inline-flex items-center gap-x-1.5 rounded-md sm-bk-blue px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Complete the form
                    <svg class="-mr-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </button>

                @teleport('body')
                    <div x-show="open">
                        <div class="relative z-10" role="dialog" aria-modal="true">

                            <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>
                            
                            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                              <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                                <div class="w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                                    <button @click="open = false" type="button" class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                      <span class="sr-only">Close</span>
                                      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                      </svg>
                                    </button>
                                  
                                    <div class="sm-bk-blue py-24 sm:py-32">
                                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                                          <div class="mx-auto max-w-2xl lg:mx-0">
                                            <p class="text-base font-semibold leading-7 text-indigo-600"></p>
                                            <h2 class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-6xl">{{ $career->title }} form</h2>
                                            <p class="mt-6 text-lg leading-8 text-gray-100">Thank you for being interested in the position, please complete the form.</p>
                                          </div>
                                        </div>
                                    </div> 
                                    <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                    
                                    <div class="border-gray-100 border-b-2">
                                        

                                        <div class="container max-w-7xl mx-auto pt-20 pb-20 px-8 ">                     
                                            <form  method="POST" action="{{ route('applicantAdd') }}" enctype="multipart/form-data">

                                            @csrf

                                                <div class="space-y-12">
                                                    <div
                                                        class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                                                        <div>
                                                            <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This information is sent for business purposes only.
                                                            </p>
                                                        </div>
                                
                                                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                                            <div class="sm:col-span-4">
                                                                <label for="career_id"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Position</label>
                                                                <div class="mt-2">
                                                                    <div
                                                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                                                        <span
                                                                            class="flex select-none items-center pl-3 text-gray-500">{{ $career->title }}
                                                                        </span>
                                                                        <input type="hidden" name="career_id" id="career_id"
                                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                            value="{{ $career->id }}" readonly>
                                                                    </div>
                                                                    @error('career_id')
                                                                        <p class="text-red-500">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                
                                                            <div class="col-span-full">
                                                                <label for="about"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">About you</label>
                                                                <div class="mt-2">
                                                                    <textarea id="about" name="about" rows="3"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"></textarea>
                                                                </div>
                                                                    @error('about')
                                                                        <p class="text-red-500">{{ $message }}</p>
                                                                    @enderror
                                                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about
                                                                    yourself.
                                                                </p>
                                                            </div>
                                                            
                                                            {{-- Para adjuntar foto --}}

                                                            {{-- <div class="col-span-full">
                                                                <label for="photo"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Profile
                                                                    photo</label>
                                                                <div class="mt-2 flex items-center gap-x-3">
                                                                    <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                    <button type="button"
                                                                        class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                                                                </div>
                                                            </div> --}}
                                
                                                            <div class="col-span-full">
                                                                <label
                                                                    class="block text-sm font-medium leading-6 text-gray-900">
                                                                    Your resume
                                                                </label>
                                                                <div
                                                                    class="mt-2 flex justify-center rounded-lg px-6 py-10">
                                                                    <div class="text-center">
                                                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                                                            fill="currentColor" aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                                            <label for="attachment_info"
                                                                                class="text-justify cursor-pointer rounded-md bg-white font-semibold text-blue-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-500">
                                                                                <input id="attachment_info" name="attachment_info" type="file"
                                                                                       accept="application/pdf, image/png, image/jpeg">
                                                                            </label>
                                                                        </div>
                                                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, PDF up to 10MB</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div
                                                        class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                                                        <div>
                                                            <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information
                                                            </h2>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">Use the address where you currently
                                                                reside</p>
                                                        </div>
                                
                                                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                                            <div class="sm:col-span-3">
                                                                <label for="first_name"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">First
                                                                    name</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="first_name" id="first_name"
                                                                        autocomplete="given-name"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('first_name')
                                                                        <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                                
                                                            </div>
                                
                                                            <div class="sm:col-span-3">
                                                                <label for="last_name"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Last
                                                                    name</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="last_name" id="last_name"
                                                                        autocomplete="last_name"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('last_name')
                                                                        <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="sm:col-span-4">
                                                                <label for="email"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Email
                                                                    address</label>
                                                                <div class="mt-2">
                                                                    <input id="email" name="email" type="email" autocomplete="email"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('email')
                                                                    <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>

                                                            {{-- Para seleccionar un estado foto --}}
                                
                                                            {{-- <div class="sm:col-span-3">
                                                                <label for="country"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                                                                <div class="mt-2">
                                                                    <select id="country" name="country" autocomplete="country-name"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                                        <option>United States</option>
                                                                        <option>Canada</option>
                                                                        <option>Mexico</option>
                                                                    </select>
                                                                </div>
                                                            </div> --}}
                                
                                                            <div class="col-span-full">
                                                                <label for="street_address"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Street
                                                                    address</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="street_address" id="street_address"
                                                                        autocomplete="street_address"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('street_address')
                                                                    <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="sm:col-span-2 sm:col-start-1">
                                                                <label for="city"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">City</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="city" id="city"
                                                                        autocomplete="city"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('city')
                                                                    <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="sm:col-span-2">
                                                                <label for="state_province"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">State
                                                                    / Province</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="state_province" id="state_province"
                                                                        autocomplete="address-level1"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('state_province')
                                                                    <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="sm:col-span-2">
                                                                <label for="zip_postal_code"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">ZIP
                                                                    / Postal code</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="zip_postal_code" id="zip_postal_code"
                                                                        autocomplete="zip_postal_code"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('zip_postal_code')
                                                                    <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            
                                                            <div class="sm:col-span-2">
                                                                <label for="phone_number"
                                                                    class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="phone_number" id="phone_number"
                                                                        autocomplete="phone_number"
                                                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                                @error('phone_number')
                                                                    <p class="text-red-500">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                
                                                    <button type="submit"
                                                        class="rounded-md sm-bk-blue px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Send
                                                        my profile</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                @endteleport
            </div>
    </div>