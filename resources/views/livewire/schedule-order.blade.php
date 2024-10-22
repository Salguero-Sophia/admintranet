<div x-show="openScheduled">
    <div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-50 w-screen overflow-y-auto">
          <div class="flex min-h-full justify-center p-4 text-center items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                <div class="flex ml-3">
                    <button @click="openScheduled = ! openScheduled">
                        <x-heroicon-o-x-circle class="w-6 h-6 text-red-800 hover:text-red-600 cursor-pointer" />
                    </button>
                </div>
              <div>
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-blue-100">
                  <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Schedule a pickup time for your order</h3>
                </div>
              </div>

              <form action="{{ route('scheduleOrder') }}" method="POST">
                @csrf

                  <input hidden type="text" id="redirectTo" name="redirectTo" value="{{ $redirectTo }}">  
                  <input hidden type="text" id="slug" name="slug" value="{{ $slug }}">  

                  <div class="mt-4 text-center">
                    <input type="datetime-local" id="scheduleOrder" name="scheduleOrder" value="{{ $today }}" min="{{ $today }}" max="{{ $maxDateToSchedule }}" />
                  </div>

                  @if (session('ScheduleOrder'))

                  <div class="mt-5 sm:mt-6">
                    <button type="submit" class="inline-flex w-full justify-center rounded-md bg-blue-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                      Reschedule!
                    </button>
                  </div>
                  <div class="mt-2 sm:mt-2">
                    <a href="{{ route('deleteScheduleOrder', [$redirectTo, $slug]) }}" class="inline-flex w-full justify-center rounded-md bg-red-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                      Delete schedule
                    </a>
                  </div>
                      
                  @else

                  <div class="mt-5 sm:mt-6">
                    <button type="submit" class="inline-flex w-full justify-center rounded-md bg-blue-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Accept!
                    </button>
                  </div>
                      
                  @endif
              </form>
            </div>
          </div>
        </div>
      </div>
</div>