@extends('Layouts.layout')
@section('content')
    <div class="swiffy-slider slider-indicators-round">
        <ul class="slider-container">
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/1.jpeg">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/2.jpeg">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/3.jpeg">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/4.jpeg">
            </li>
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>

        <div class="slider-indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>


    <div class="w-full h-max flex justify-center p-4 ">
        <div class="lg:w-[80%] md:w-[80%] w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-2">

            <div class="w-full ">
                <div class="w-full bg-darkTheme text-lightText p-2">
                    <span>Upcoming Events</span>
                </div>
                <div class="w-full p-2 border-[1px] border-black border-t-0">
                    <marquee behavior="" direction="up" height="300px">
                        <ul class="flex flex-col gap-4">
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # " Annual Prize Distribution Function 2023-24 will be held on 11th March 2024
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # " NSS 7 days Camp will be held from 20th Dec.to 26th Dec 2023
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # " House Examinationn for the session 2023-24 will be held w.e.f. 4/12/2023
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # " Aids day awareness drive to be conducted in the college campus on 1st Dec. 2023
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # " Anmnual Athletic meet for the session 2023-24 will be held on 30th November 2023
                                    in the college Ground
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "New session of regular teaching will start from 15th July onwards after admission
                                    process is over
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "College will remain closed on 10th &amp; 11th July due to bad weather and
                                    incessant rain
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "Online Admission for UG Classes for the Session 2023-24 will start from 30th June
                                    2023 onwards. Please check Admission Schedule on website
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # The Annual Practical for session 2022-23 will be conducted from 20th March onwards
                                    . Practical schdule dispalyed on Notice board
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # The College will open for regular teaching on 6th Feb.2023 after winter break
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # All the UG students are directed to fill University Examination form on or before
                                    15th Feb. 2023 positively
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # All the PG students are directed to fill University Examination form on or before
                                    31st January 2023 positively
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # college will remain closed for winter Vacation from 1st Jan 2023 to 5th Feb.2023
                                    and will open for regular teaching on 6th Feb.2023
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # 7 days NSS special camp will be held from 21st December to 27th December 2022.
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # Disaster Awareness Programme by NDRF on 19th December 2022 on the college campus
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # House/ Mid Term Examination for the session 2022-23 will be held from 5th December
                                    2022 onwards.
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "NCC 8TH Battalion ATC camp will be held from 8th Nov. to 14th November 2022.
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "NAAC" Peer Team will visit college on 1st &amp; 2nd November 2022 , for 2nd Cycle
                                    of Accreditation.
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "Financial Literacy Wellness" workshop will be held on 19th Oct. 2022.
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "NSS Foundation Day" will be celebrated on 24th September 2022
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "FRESHER'S DAY 2022" will be celebrated on 21st September 2022
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "HINDI DIWAS" will be celebrated on 14th September 2022
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # Regular classes of PG and PGDCA for the Session 2022-23 will comence from 1st
                                    September 2022
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # OnlineAdmision for MA History , Political Science and PGDCA for the Session
                                    2022-23 will start from 10th August 2022 onwards
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # "ELC/ SVEEP" Programme by Election commission officers on 27th August 2022 at
                                    11.30am
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # Principal Address to New students on 25tth August 2022 at 11.30am
                                </p>
                            </li>
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # Regular classes for the Session 2022-23 will start from 1st August 2022 onwards
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Regular classes for the Session 2022-23 will start from 1st August 2022 onwards
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Webinar on "Creativity is the Elixir of Life" in co-ordination with Shoolini
                                    University on 3rd July 2020
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Online admission process for the session 2020-21 will start from July 13th 2020 to
                                    July 31st 2020
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Admission date extended upto 20th August 2020
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Regular teaching for the session 2020-21 will commence from 5th August 2020
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    The college will open for Regular teaching from 8th February 2021
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Seven days NCC camp of 3rd HP Battalion Rampur will be held in college campus from
                                    8th Feb.to 12th Feb.2021
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    House Examination for the session 2020-21 will commence from 8th March 2021
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Annual 7days NSS camps will be held from 22nd March to 28th March 2021for the
                                    session 2020-21
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    College closed for regular teaching for Indefinite period Due to Covid-19 Pandemic,
                                    annual examinations also stand postponed
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Webinar on NAAC on 5th May 2021. Prof. S.K.Gupta will be main speaker
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    Webinar on Versatile Nature of Chemistry on 18th June 2021, Dr. Kulvinder Singh,
                                    Asstt. Prof.Chemistry , DAV Chandigarh will be the main speaker
                                </p>
                            </li>
                            <li>
                                <p class=" text-darkText italic text-md">
                                    *New* Examinations of TDC-IIIrd Year will coommence from 1st July 2021. All the
                                    students are directed to go through Date sheet and appear in the Examination
                                    accordingly by following the Covid-19 Protocol
                                </p>
                            </li>
                        </ul>
                    </marquee>
                </div>
                <div class="w-full h-max mt-4 shadow-lg shadow-black">
                    <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                        <span>REPORTS</span>
                    </div>
                    <div class="w-full p-2 grid grid-cols-1 gap-4 shadow-lg  ">
                        <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-4">
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{route('annual-report',['type'=>'COLLEGE-ANNUAL-REPORTS'])}}" target="_blank">
                                    <p class="italic text-sm">
                                        College Annual Reports
                                    </p>

                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{route('annual-report',['type'=>'STUDENTS-SATISFACTION-SURVEY'])}}" target="_blank">
                                    <p class="italic text-sm">
                                        Students Satisfaction Survey
                                    </p>

                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{route('annual-report',['type'=>'STUDENTS-FEEDBACK-SURVEY'])}}" target="_blank">
                                    <p class="italic text-sm">
                                        Students Feedback Survey
                                    </p>

                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{route('annual-report',['type'=>'TEACHERS-FEEDBACK-SURVEY'])}}" target="_blank">
                                    <p class="italic text-sm">
                                        Teachers Feedback Survey
                                    </p>

                                </a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="w-full h-max shadow-lg shadow-black">
                <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                    <span>Welcome to Lal Bahadur Shastri Government College Saraswati Nagar</span>
                </div>
                <div class="w-full p-2 grid grid-cols-1 gap-4 border-[1px] border-black border-t-0  ">
                    <div
                        class="w-full flex flex-col gap-4 items-center lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1 text-justify">
                        <p class="  text-darkText italic text-md">
                            Lal Bahadur Shastri Government College Saraswati Nagar is situated at a distance of about
                            100 kms. from the capital city of Shimla near famous Hateshwari temple in Jubbal tehsil of
                            district Shimla. It is located in a valley formed by river Pabbar and is surrounded by
                            scenic beauty of small hills and apple orchards.
                        </p>
                        <p class="  text-darkText italic text-md">
                            The College was established in the year 1986 and offers courses in the Faculty of Arts (12
                            departments), Faculty of Science (both Medical and Non-Medical streams) and Faculty of
                            Commerce. The College has a new six storeyed building containing classrooms, well equipped
                            and spacious science laboratories, a hall, girls common room besides well stocked library,
                            which subscribes to several newspapers and periodicals. A new hostel for girls has been
                            constructed in the campus
                        </p>
                        <a href="{{route('administration/about-college')}}"
                           class="w-full flex justify-center items-center py-2 bg-darkTheme text-lightText font-semibold  text-md border-[1px] border-darkTheme hover:bg-white hover:text-darkText transition ease-in duration-2000">
                            Read More
                        </a>


                    </div>
                </div>
            </div>
            <div class="w-full ">
                <div class="w-full bg-darkTheme text-lightText p-2">
                    <span>Important Downloads</span>
                </div>
                <div class="w-full p-2 border-[1px] border-black border-t-0 h-[300px] overflow-y-auto">
                    <ul class="flex flex-col gap-6">
                        <a href="{{asset('assets/pdf/downloads/National Education Policy 2020.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                National Education Policy 2020
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/Prospectus 2023-24.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                Prospectus for the Session (2023-24)
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/Prospectus BCA & PGDCA  2023-24.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                Prospectus Self Financing Courses -2023-24
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/Prospectus B. Voc. 2023-24.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                Prospectus B.Voc.Degree Courses -2023-24
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/AE & Vacation Schedule.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                Admission &amp; Examination Schedule 2023-24
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/admission reservation roster.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                Admission Reservation Roster2023-24
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/Admission Schedule 2023-24.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                Admission Schedule 2023-24
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/downloads/Hatkeshwari 2022-23.pdf')}}" target="_blank">
                            <li class="  text-danger italic text-md underline">
                                College Magzine2022-23
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="w-full h-max mt-4 shadow-lg shadow-black">
                    <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                        <span>ADMISSIONS</span>
                    </div>
                    <div class="w-full p-2 grid grid-cols-1 gap-4 shadow-lg  ">
                        <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{asset('assets/pdf/admission/RUSA(CBCS).pdf')}}" target="_blank">
                                    <p class="italic text-sm">
                                        RUSA (CBCS)
                                    </p>

                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  text-center hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{asset('assets/pdf/admission/Admission Procedure.pdf')}}" target="_blank">
                                    <p class=" italic text-sm">
                                        Admission Procedure
                                    </p>
                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  text-center hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{asset('assets/pdf/admission/admission reservation roster.pdf')}}" target="_blank">
                                    <p class=" italic text-sm">
                                        Admission Reservations
                                    </p>
                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  text-center hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{asset('assets/pdf/admission/Eligibility  Conditions  For Admission.pdf')}}" target="_blank">
                                    <p class=" italic text-sm">
                                        Admission Rules
                                    </p>

                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  text-center hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{asset('assets/pdf/admission/Fee Structure.pdf')}}" target="_blank">
                                    <p class=" italic text-sm">
                                        Fee Structure
                                    </p>

                                </a>
                            </div>
                            <div class="w-full bg-white border-[1px] border-black h-12 flex items-center justify-center text-darkText  text-center hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                                <a href="{{asset('assets/pdf/admission/ADMISSION Help Desk  2023-24.pdf')}}" target="_blank">
                                    <p class=" italic text-sm">
                                        Admission Help Desk
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                {{--                <div class="swiffy-slider slider-indicators-round slider-nav-autoplay">--}}
{{--                    <ul class="slider-container">--}}
{{--                        <li>--}}
{{--                            <div class="w-full h-96 bg-lightTheme mt-4 p-3 rounded-md relative">--}}
{{--                                <a href="{{route('gallery', ['type'=>'PHOTOS'])}}">--}}
{{--                                    <img src="{{asset('assets/images/gallery/3.jpg')}}" class="w-full h-full object-cover rounded-md"--}}
{{--                                         alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="w-full h-96 bg-lightTheme mt-4 p-3 rounded-md relative">--}}
{{--                                <a href="{{route('gallery', ['type'=>'PHOTOS'])}}">--}}
{{--                                    <img src="{{asset('assets/images/gallery/1.jpg')}}" class="w-full h-full object-cover rounded-md"--}}
{{--                                         alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="w-full h-96 bg-lightTheme mt-4 p-3 rounded-md relative">--}}
{{--                                <a href="{{route('gallery', ['type'=>'PHOTOS'])}}">--}}
{{--                                    <img src="{{asset('assets/images/gallery/2.jpg')}}" class="w-full h-full object-cover rounded-md"--}}
{{--                                         alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="w-full h-96 bg-lightTheme mt-4 p-3 rounded-md relative">--}}
{{--                                <a href="{{route('gallery', ['type'=>'PHOTOS'])}}">--}}
{{--                                    <img src="{{asset('assets/images/gallery/4.jpg')}}" class="w-full h-full object-cover rounded-md"--}}
{{--                                         alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="w-full h-96 bg-lightTheme mt-4 p-3 rounded-md relative">--}}
{{--                                <a href="{{route('gallery', ['type'=>'PHOTOS'])}}">--}}
{{--                                    <img src="{{asset('assets/images/gallery/5.jpg')}}" class="w-full h-full object-cover rounded-md"--}}
{{--                                         alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </div>--}}



            </div>

        </div>
    </div>
@endsection
