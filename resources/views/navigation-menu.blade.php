@php
    $links = [
        // (object)[
        //     "icon" => '<svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        //                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        //                 </svg>',
        //     "name" => "Inicio",
        //     "route" => route('dashboard'),
        //     "active" => request()->routeIs('dashboard')
        // ],
        (object)[
           "icon" => '<svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>',
            "name" => "Inicio",
            "route" => route('homePageEditor'),
            "active" => request()->routeIs('homePageEditor')
        ],
        (object)[
            "icon" => '<img width="48" height="48" src="https://img.icons8.com/color/48/guatemala-circular.png" alt="GT"/>
            ',
            "name" => "Guatemala",
            "route" => route('careers'),
            "active" => request()->routeIs('guatemala')
        ],
        (object)[
            "icon" => '<img width="48" height="48" src="https://img.icons8.com/color/48/el-salvador-circular.png" alt="SV">',
            "name" => "El Salvador",
            "route" => route('salvador'),
            "active" => request()->routeIs('salvador')
        ],

        (object)[
            "icon" => '<img width="48" height="48" src="https://img.icons8.com/color/48/usa-circular.png" alt="usa">',
            "name" => "USA",
            "route" => route('usa'),
            "active" => request()->routeIs('usa')
                    ],
        /*
        (object)[
            "icon" => '<svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                        </svg>',
            "name" => "Asigancion de formularios",
            "route" => route('opcionesAsignacionesFormularios'),
            "active" => request()->routeIs('opcionesAsignacionesFormularios')
        ] */
    ];
@endphp



<ul role="list" class="-mx-2 space-y-1">

    @foreach ($links as $link)
    <li>
        <!-- Current: "bg-indigo-700 text-white", Default: "text-indigo-200 hover:text-white hover:bg-indigo-700"  -->
        <a href="{{ $link->route }}" class="@if($link->active == 1) bg-blue-800 @endif text-white flex items-center group gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
            {!! $link->icon !!}
            {{ $link->name}}
        </a>
    </li>
    @endforeach

</ul>
