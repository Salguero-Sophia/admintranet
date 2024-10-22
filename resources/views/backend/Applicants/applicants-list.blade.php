<x-app-layout>
    {{-- Contenido vista --}}

    <div class="px-4 sm:px-6 lg:px-8">

        <div class="sm:flex-auto sm:items-center">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Candidatos
                ({{ $applicantsCount }})
            </h1>
            <p class="mt-2 text-sm text-gray-700">Listado de candidatos</p>
        </div>



        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    {{-- contenido --}}
                    <div class="">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Nombre</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Puesto</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Tienda</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Tipo</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Fecha</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($applicants as $applicant)
                                    <tr>
                                        <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                             <div class="font-medium text-gray-900 ml-4 flex items-center">
                                                 {{ $applicant->first_name . ' ' . $applicant->last_name }}
                                             </div>
                                        </td>

                                        <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                             <div class="font-medium text-gray-900 ml-4 flex items-center">
                                                 {{ $applicant->getCareer->title }}
                                             </div>
                                        </td>

                                        <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-truncate font-medium text-gray-900">
                                                        {{ $applicant->getCareer->getStore->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                            <div class="font-medium text-gray-900 ml-4 flex items-center">
                                                {{ $applicant->getCareer->getTypeCareer->title }}
                                            </div>
                                       </td>

                                        <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                            <div class="font-medium text-gray-900 ml-4 flex items-center">
                                                {{ $applicant->created_at }}
                                            </div>
                                       </td>

                                       <td
                                            class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                            <div class="flex gap-2 justify-center">
                                                <a href="{{ route('applicantShow', $applicant->id) }}"
                                                    class="text-blue-600 hover:text-blue-900" title="Ver">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                      </svg>
                                                </a>

                                                <a href="{{ route('applicantDelete', $applicant->id) }}"
                                                    class="text-red-600 hover:text-red-900" title="Borrar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                        <div class="pt-5 dark:false">
                            {{ $applicants->links() }}
                        </div>
                    </div>
                    {{-- fin contenido --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Fin Contenido vista --}}
</x-app-layout>
