<div class="w-full bg-darkTheme h-max lg:flex  md:flex hidden justify-center p-2">
    <div class="lg:w-70 md:w-90 w-full flex justify-end ">
        <div class="text-black text-sm font-normal w-max flex justify-center col-span-2">
            <ul class="flex gap-2 text-darkText">
                <a href="https://lbsgcsnagar.highalteducation.in" target="_blank"
                   class="bg-danger/70 text-white flex items-center px-4 rounded-sm animate-bounce">
                    <li class=" underline text-lg pr-2 font-semibold ">
                        Online Admission 2024-25
                    </li>
                </a>


                <a href="{{ route('pdfViewer',['folder'=>'downloads','file'=>'Prospectus_2024-25']) }}" target="_blank" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                    <li class=" pr-2 italic   ">
                        Prospectus
                    </li>
                </a>
                <a href="{{ route('pdfViewer',['folder'=>'other','file'=>'covid']) }}" target="_blank" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                    <li class=" pr-2 italic   ">
                        Covid-19 Guidelines
                    </li>
                </a>
{{--                <a href="{{asset('assets/pdf/covid.pdf')}}" target="_blank"--}}
{{--                   class="border-[1px] border-lightTheme  text-white flex items-center px-4 rounded-sm hover:bg-danger/80 hover:border-danger/80 hover:scale-105 transition ease-in duration-2000 ">--}}
{{--                    <li class=" pr-2 italic   ">--}}
{{--                        Student Login--}}
{{--                    </li>--}}
{{--                </a>--}}

            </ul>
        </div>
    </div>
</div>

<div class="w-full lg:h-36 md:h-32 sm:h-28 h-20 flex  justify-evenly px-2 pb-2 sticky top-0 z-50 bg-white">
    <img class="h-full w-auto" src="{{asset('assets/images/logo.png')}}" alt="">


    <div class="lg:flex hidden items-center gap-4 w-max">
        <div class="flex flex-col ">
            <span class="text-danger/80  text-md font-bold"><i class="fa fa-phone"></i> Phone:-</span>
            <a href="tel:01781-238149" class="font-medium text-lg text-darkTheme ">01781-238149</a>
        </div>
        <div class="flex flex-col ">
            <span class="text-danger/80  text-md font-bold"><i class="fa fa-envelope"></i> Email:-</span>
            <a href="mailto:gcsnagar25@rediffmail.com" class="font-medium text-lg text-darkTheme ">gcsnagar25@rediffmail.com</a>
        </div>


    </div>
</div>

<div
    class="w-full sticky lg:top-36 md:top-32 sm:top-28 top-20 z-50 lg:h-max md:h-max sm:max-h-64 max-h-64 lg:overflow-y-visible md:overflow-y-visible sm:overflow-y-auto overflow-y-auto">
    <div class="bg-black/80 w-full flex flex-col justify-center lg:items-center  items-start gap-2 relative px-2 ">
        <div class="w-max h-max lg:hidden flex">
            <i id="toggleButton"
               class="fa-solid fa-bars  ml-1 text-lg text-white p-2 rounded-sm hover:bg-lightTheme hover:text-darkTheme transition ease-in duration-2000"
               onclick="
            let menuList = document.getElementById('menuList');
            if(menuList.classList.contains('hidden')){
                menuList.classList.remove('hidden');
            }else{
                menuList.classList.add('hidden');
            }
            " aria-hidden="true"></i>
        </div>
        <ul class="  lg:flex hidden lg:flex-row flex-col text-white/90 uppercase w-full items-center justify-center font-medium"
            id="menuList">
            @php
                $navList = [
                             [
        'name' => 'Home',
        'link' => route('home')
    ],
                             [
        'name' => 'About Us',
        'link' => 'javascript:void(0)',
        'subNav' => [
            [
                'name' => 'THE COLLEGE',
                'link' => route('administration/about-college')
            ],
            [
                'name' => 'PRINCIPAL MESSAGE',
                'link' => route('administration/principal-message')
            ],
            [
                'name' => 'VISION & MISSION',
                'link' => route('administration/vision-mission')
            ],
            [
                'name' => 'AFFILIATING UNIVERSITY',
                'link' => route('pdfViewer',['folder'=>'about','file'=>'Affiliation Letter']),
                'target' => '_blank'
            ],
            [
                'name' => 'CODE OF CONDUCT',
                'link' => route('administration/code-of-conduct')
            ],
            [
                'name' => 'ANTI-RAGGING POLICY',
                'link' => route('administration/anti-ragging')
            ],
            [
                'name' => 'RTI-STATUTORY DECLARATION',
                'link' => route('administration/statutory-declaration')
            ],
            [
                'name' => 'COMMITTEE',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'ICC',
                        'link' => route('administration/committee', ['type' => 'ICC'] ),
                    ],
                    [
                        'name' => 'SEXUAL HARASSMENT COMMITTEE',
                        'link' => route('administration/committee', ['type' => 'Women-Redressal'])
                    ],
                    [
                        'name' => 'STUDENTS\' COMPLAINT COMMITTEE',
                        'link' => route('administration/committee', ['type' => 'Students-Complaint'])
                    ]
                ]
            ]
        ]
    ],
                             [
        'name' => 'Administrative',
        'link' => 'javascript:void(0)',
        'subNav' => [
            [
                'name' => 'PRINCIPAL',
                'link' => route('administration/principal-message')
            ],
            [
                'name' => 'BURSAR',
                'link' => route('administration/bursar')
            ],
            [
                'name' => 'TEACHING STAFF',
                'link' => route('administration/teaching-staff')
            ],
            [
                'name' => 'NON TEACHING STAFF',
                'link' => route('administration/non-teaching-staff')
            ],
            [
                'name' => 'PTA',
                'link' => route('administration/pta')
            ],
            [
                'name' => 'CSCA',
                'link' => '#',
                'target' => '_blank'
            ],
            [
                'name' => 'ORGANOGRAM',
                'link' => route('administration/organogram')
            ]
        ]
    ],
                             [
        'name' => 'Academics',
        'link' => 'javascript:void(0)',
        'subNav' => [
            [
                'name' => 'COURSES',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'UG COURSES: BA, BSC, BCOM, BCA',
                        'link' => '#'
                    ],
                    [
                        'name' => 'PG COURSES: MA HISTORY, MA POLITICAL SCIENCE',
                        'link' => route('pdfViewer',['folder'=>'academic','file'=>'rusa_guidline']),
                    ],
                    [
                        'name' => 'ADD-ON COURSES',
                        'link' => route('pdfViewer',['folder'=>'academic','file'=>'BROCHURE ADD-ON 23-24']),

                    ]
                ]
            ],
            [
                'name' => 'SYLLABUS',
                'link' => route('academics', ['type' => 'SYLLABUS'])
            ],
            [
                'name' => 'PROGRAMME OUTCOMES',
                'link' => route('pdfViewer',['folder'=>'academic','file'=>'Programme Outcomes']),

            ],
            [
                'name' => 'LESSON PLANS',
                'link' => route('pdfViewer',['folder'=>'academic','file'=>'LESSON PLANS']),

            ],
            [
                'name' => 'RESEARCH ACTIVITIES',
                'link' => route('pdfViewer',['folder'=>'academic','file'=>'Research Activities']),

            ],
            [
                'name' => 'ACADEMIC CALENDAR',
                'link' => route('academics', ['type' => 'ACADEMIC-CALENDER'])
            ],
            [
                'name' => 'TIME TABLE',
                'link' => route('pdfViewer',['folder'=>'academic','file'=>'Time Table 2022-23']),

            ]
        ]
    ],
                             [
        'name' => 'Departments',
        'link' => 'javascript:void(0)',
        'subNav' => [
            [
                'name' => 'ARTS FACULTY',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'ENGLISH',
                        'link' => route('course', ['type' => 'ENGLISH'])
                    ],
                    [
                        'name' => 'HINDI',
                        'link' => route('course', ['type' => 'HINDI'])
                    ],
                    [
                        'name' => 'SANSKRIT',
                        'link' => '#',
                    ],
                    [
                        'name' => 'PHILOSOPHY',
                        'link' => route('course', ['type' => 'PHILOSOPHY'])
                    ],
                    [
                        'name' => 'HISTORY',
                        'link' => '#',
                    ],
                    [
                        'name' => 'POLITICAL SCIENCE',
                        'link' => route('course', ['type' => 'POLITICAL-SCIENCE'])
                    ],
                    [
                        'name' => 'PUBLIC ADMINISTRATION',
                        'link' => route('course', ['type' => 'PUBLIC-ADMINISTRATION'])
                    ],
                    [
                        'name' => 'ECONOMICS',
                        'link' => '#',
                    ],
                    [
                        'name' => 'MATHEMATICS',
                        'link' => '#',
                    ],
                    [
                        'name' => 'PHYSICAL EDUCATION',
                        'link' => '#',
                    ],
                    [
                        'name' => 'MUSIC (VOCAL)',
                        'link' => '#',
                    ],
                    [
                        'name' => 'MUSIC (INSTRUMENTAL)',
                        'link' => '#',
                    ],
                    [
                        'name' => 'GEOGRAPHY',
                        'link' => route('course', ['type' => 'GEOGRAPHY'])
                    ],
                ]
            ],
            [
                'name' => 'COMMERCE FACULTY',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'COMMERCE',
                        'link' => route('course', ['type' => 'COMMERCE'])
                    ]
                ]
            ],
            [
                'name' => 'SCIENCE FACULTY (MEDICAL)',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'BOTANY',
                        'link' => route('course', ['type' => 'MEDICAL-BOTANY'])
                    ],
                    [
                        'name' => 'CHEMISTRY',
                        'link' => route('course', ['type' => 'MEDICAL-CHEMISTRY'])
                    ],
                    [
                        'name' => 'ZOOLOGY',
                        'link' => route('course', ['type' => 'MEDICAL-ZOOLOGY'])
                    ]
                ]
            ],
            [
                'name' => 'SCIENCE FACULTY (NON-MEDICAL)',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'CHEMISTRY',
                        'link' => route('course', ['type' => 'MEDICAL-CHEMISTRY'])
                    ],
                    [
                        'name' => 'PHYSICS',
                        'link' => route('course', ['type' => 'NON-MEDICAL-PHYSICS'])
                    ],
                    [
                        'name' => 'MATHEMATICS',
                        'link' => '#',
                    ]
                ]
            ],
            [
                'name' => 'COMPUTER SCIENCE & B VOC FACULTY',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'BCA',
                        'link' => route('course', ['type' => 'BCA'])
                    ],
                    [
                        'name' => 'BVOC',
                        'link' => '#',
                    ],
                    [
                        'name' => 'PGDCA',
                        'link' => route('course', ['type' => 'PGDCA'])
                    ]
                ]
            ],
            [
                'name' => 'PG DEPARTMENTS',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'MA HISTORY',
                        'link' => '#',
                    ],
                    [
                        'name' => 'MA POLITICAL SCIENCE',
                        'link' => '#',
                    ],
                    [
                        'name' => 'MA ENGLISH',
                        'link' => '#',
                    ],
                    [
                        'name' => 'MA HINDI',
                        'link' => '#',
                    ],
                    [
                        'name' => 'M COM',
                        'link' => '#',
                    ]
                ]
            ]
        ]
    ],
                             [
        'name' => 'Admissions',
        'link' => 'javascript:void(0)',
        'subNav' => [
            [
                'name' => 'RUSA (CBCS)',
                'link' => route('pdfViewer',['folder'=>'admission','file'=>'RUSA(CBCS)']),

            ],
            [
                'name' => 'ADMISSION PROCEDURE',
                 'link' => route('pdfViewer',['folder'=>'admission','file'=>'Admission Procedure']),

            ],
            [
                'name' => 'ADMISSION RESERVATIONS',
                'link' => route('pdfViewer',['folder'=>'admission','file'=>'admission reservation roster']),

            ],
            [
                'name' => 'ADMISSION RULES',
                'link' => route('pdfViewer',['folder'=>'admission','file'=>'Eligibility Conditions For Admission']),

            ],
            [
                'name' => 'FEE STRUCTURE',
                'link' => route('pdfViewer',['folder'=>'admission','file'=>'Latest_Fee_Structure']),

            ],
            [
                'name' => 'ADMISSION HELP DESK',
                'link' => route('pdfViewer',['folder'=>'admission','file'=>'ADMISSION Help Desk 2023-24']),

            ]
        ]
    ],
                             [
        'name' => 'Facilities',
        'link' => 'javascript:void(0)',
        'subNav' => [
            [
                'name' => 'Infrastructural Facilities',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'LIBRARY',
                        'link' => route('facility', ['type' => 'LIBRARY'])
                    ],
                    [
                        'name' => 'IT LAB',
                        'link' => route('facility', ['type' => 'ITLAB'])
                    ],
                    [
                        'name' => 'ICT ENABLED FACILITIES',
                        'link' => route('facility', ['type' => 'ICT'])
                    ],
                    [
                        'name' => 'LANGUAGE LAB',
                        'link' => route('facility', ['type' => 'LANGUAGE-LAB'])
                    ],
                    [
                        'name' => 'SCIENCE LABS',
                        'link' => route('facility', ['type' => 'SCIENCE-LABORATORIES'])
                    ],
                    [
                        'name' => 'SEMINAR HALL',
                        'link' => route('facility', ['type' => 'SEMINAR-HALL'])
                    ],
                    [
                        'name' => 'SPORTS',
                        'link' => route('facility', ['type' => 'SPORTS'])
                    ],
                    [
                        'name' => 'GYMNESIUM',
                        'link' => route('facility', ['type' => 'GYMNASIUM'])
                    ],
                    [
                        'name' => 'HEALTH AID ROOM',
                        'link' => route('facility', ['type' => 'HEALTH-ROOM'])
                    ],
                    [
                        'name' => 'CANTEEN',
                        'link' => route('facility', ['type' => 'CANTEEN'])
                    ],
                    [
                        'name' => 'HOSTEL',
                        'link' => route('facility', ['type' => 'HOSTEL'])
                    ],
                    [
                        'name' => 'MAINTENANCE & UTILIZATION OF SUPPORT FACILITIES',
                        'link' => route('facility', ['type' => 'MAINTENANACE'])
                    ],
                ],
            ],
            [
                'name' => 'Student Facilities',
                'link' => 'javascript:void(0)',
                'subNav' => [
                    [
                        'name' => 'SCHOLARSHIPS/ FREESHIPS SCHEMES',
                        'link' => '#'
                    ],
                    [
                        'name' => 'BOOK BANK',
                        'link' => '#'
                    ],
                    [
                        'name' => 'FREE REMEDIAL/MERITORIOUS CLASSES',
                        'link' => '#'
                    ]
                ]
            ]
        ]
    ],

                            [
                         'name' => 'Activities',
                         'link' => route('activities', ['type' => 'NSS'])
                     ],
                             [
                         'name' => 'Reports',
                         'link' => route('annual-report', ['type' => 'COLLEGE-ANNUAL-REPORTS'])
                     ],
                             [
                                  'name' => 'NAAC',
                                  'link' => route('naac', ['type' => 'NAAC-REPORTS']),
                              ],
                               [
                                  'name' => 'Alumni',
                                  'link' => route('alumni', ['type' => 'ALUMNI-CHARTER']),
                              ],

                            ];
            @endphp
            @foreach($navList as $navItem)
                <a href="{{ $navItem['link'] }}">
                    <li class="relative py-3 lg:hover:bg-darkTheme  md:hover:bg-darkTheme text-sm lg:hover:text-white md:hover:text-white px-4 transition ease-in duration-2000 group  items-center">
                        <a href="{{ $navItem['link'] }}">
                            {{ $navItem['name'] }}
                            @if(isset($navItem['subNav']))
                                <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"></i>
                            @endif
                        </a>

                        @if(isset($navItem['subNav']))
                            <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-black/90 text-white">
                                @foreach($navItem['subNav'] as $subNavItem)
                                    <a href="{{ $subNavItem['link'] }}">
                                        <li class="w-[250px] py-2.5 lg:hover:bg-darkTheme  md:hover:bg-darkTheme text-sm lg:hover:text-white md:hover:text-white px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                            <a href="{{ $subNavItem['link'] }}"
                                               @if(isset($subNavItem['target'])) target="{{ $subNavItem['target'] }}" @endif>
                                                {{ $subNavItem['name'] }}

                                                @if(isset($subNavItem['subNav']))
                                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                                       aria-hidden="true"></i>
                                                @endif
                                            </a>

                                            @if(isset($subNavItem['subNav']))
                                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-black/90 text-white">
                                                    @foreach($subNavItem['subNav'] as $nestedSubNavItem)
                                                        <a href="{{ $nestedSubNavItem['link'] }}">
                                                            <li class="w-[200px] py-2.5 hover:bg-darkTheme hover:text-white text-sm px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                                                {{ $nestedSubNavItem['name'] }}
                                                            </li>
                                                        </a>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>
