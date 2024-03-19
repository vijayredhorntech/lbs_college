@extends('Layouts.layout')
@section('content')
    <div class="swiffy-slider slider-indicators-round">
        <ul class="slider-container">
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/1.jpeg">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/2.jpeg">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="https://gcharipurdhar.edu.in/assets/images/home/slider/3.jpeg">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
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
            <div class="w-full lg:col-span-2 md:col-span-2 col-span-1 h-max shadow-lg shadow-black">
                <div class="w-full flex flex-col items-center p-4 relative">
                    <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

                    </div>
                    <div class=" w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
                        <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                            <span>PRINCIPAL</span>
                        </div>
                        <div class="w-full p-2 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-4 grid-cols-1 gap-4 bg-blue-100  ">
                            <div class="w-full flex flex-col items-center">
                                <div class=" w-[200px] lg:h-auto md:h-auto sm:h-auto h-[200px] bg-white p-2 rounded-md">
                                    <img class="w-full h-full rounded-md" src="{{asset('assets/images/administration/principal.jpg')}}" alt="">
                                </div>
                                <span class="text-darkText font-bold">Dr. PP Chauhan PhD</span>
                                <span class="text-darkText font-normla italic">Principal</span>
                                <span class="text-darkText font-semibold text-xs">L.B.S Govt. College Saraswati Nagar</span>
                            </div>

                            <div class="w-full flex flex-col gap-4 lg:col-span-3 md:col-span-3 sm:col-span-3 col-span-1 px-4 text-justify">

                                <span class="text-darkText italic text-md">A momentum has been created to strengthen the frame of educational arena by following a focused approach on curriculum expansion and gearing up developmental activities in the college. As educated minds have to face challenges in the global market therefore multifarious events towards personality development have been kept in mind by the dedicated staff members who deserve due appreciation and felicitation for their contribution.
I acknowledge the whole hearted support of all the parents and well wishers without whose help any achievement would have not been possible.This is my considered opinion that a joint responsibility of the parents and teachers can guide the students to best of their destinations..
The future is in the hands of present. It is said that destiny of a nation is shaped in the classroom. So let us work together towards creating a better tomorrow. May almighty bless us all.</span>



                            </div>
                        </div>

                    </div>
                </div>

            </div>
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


            </div>
        </div>
    </div>


    <div class="w-full h-max flex justify-center px-4 py-12 bg-gradient-to-b from-[#f8d887] to-[#da8d1f]">
        <div class="lg:w-[60%] md:w-[80%] w-full">
            <div class="w-full h-max">
                <div class="w-full  text-3xl text-center font-semibold text-darkText p-2">
                    <span>REPORTS</span>
                </div>
                <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4 mt-6">
                    <a href="{{route('annual-report',['type'=>'COLLEGE-ANNUAL-REPORTS'])}}" target="_blank">

                        <div
                            class="w-full bg-transparent border-[1px] border-black h-32 flex flex-col gap-2 items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                            <i class="fa fa-file text-4xl"></i>
                            <p class="italic text-md">
                                College Annual Reports
                            </p>
                        </div>
                    </a>
                    <a href="{{route('annual-report',['type'=>'STUDENTS-SATISFACTION-SURVEY'])}}" target="_blank">
                        <div
                            class="w-full bg-transparent border-[1px] border-black h-32 flex flex-col gap-2 items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                            <i class="fa fa-square-poll-vertical text-4xl"></i>
                            <p class="italic text-md">
                                Students Satisfaction Survey
                            </p>
                        </div>
                    </a>
                    <a href="{{route('annual-report',['type'=>'STUDENTS-FEEDBACK-SURVEY'])}}" target="_blank">
                        <div
                            class="w-full bg-transparent border-[1px] border-black h-32 flex flex-col gap-2 items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                            <i class="fa fa-comment text-4xl"></i>
                            <p class="italic text-md">
                                Students Feedback Survey
                            </p>

                        </div>
                    </a>
                    <a href="{{route('annual-report',['type'=>'TEACHERS-FEEDBACK-SURVEY'])}}" target="_blank">
                        <div
                            class="w-full bg-transparent border-[1px] border-black h-32 flex flex-col gap-2 items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                            <i class="fa fa-square-poll-vertical text-4xl"></i>
                            <p class="italic text-md">
                                Teachers Feedback Survey
                            </p>

                        </div>
                    </a>

                </div>
            </div>


        </div>
    </div>


    <div class="w-full h-max flex justify-center">
            <div class="lg:w-[80%] md:w-[80%] w-full">
                <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4 px-4 py-16">
                    <div class="w-full h-full  bg-white">
                        <div class="w-full bg-darkTheme text-lightText p-2">
                            <span>Activiteis</span>
                        </div>
                        <div class="w-full p-2 grid grid-cols-1 gap-4  rounded-b-xl">
                            <div class=" w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4">
                                <a href="{{route('activities',['type'=>'NSS'])}}" target="_blank">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-20 w-20 flex justify-center items-center rounded-full bg-darkTheme text-lightTheme group-hover:bg-lightTheme group-hover:text-darkTheme transition ease-in duration-2000">
                                            <i class="fa fa-handshake-angle text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            NSS
                                        </p>

                                    </div>
                                </a>
                                <a href="{{route('activities',['type'=>'NCC'])}}" target="_blank">
                                    <div
                                        class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                        <div class="h-20 w-20 flex justify-center items-center rounded-full bg-darkTheme text-lightTheme group-hover:bg-lightTheme group-hover:text-darkTheme transition ease-in duration-2000">
                                            <i class="fa fa-shield-halved text-xl"></i>
                                        </div>
                                        <p class=" italic text-sm">
                                            NCC
                                        </p>
                                    </div>
                                </a>
                                <a href="{{route('activities',['type'=>'ROVERS-RANGERS'])}}" target="_blank">
                                    <div
                                        class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                        <div class="h-20 w-20 flex justify-center items-center rounded-full bg-darkTheme text-lightTheme group-hover:bg-lightTheme group-hover:text-darkTheme transition ease-in duration-2000">
                                            <i class="fa fa-user-ninja text-xl"></i>
                                        </div>
                                        <p class=" italic text-sm">
                                            Rovers Rangers
                                        </p>
                                    </div>
                                </a>
                                <a href="{{route('activities',['type'=>'ECO-CLUB'])}}" target="_blank">
                                    <div
                                        class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                        <div class="h-20 w-20 flex justify-center items-center rounded-full bg-darkTheme text-lightTheme group-hover:bg-lightTheme group-hover:text-darkTheme transition ease-in duration-2000">
                                            <i class="fa fa-pagelines text-xl"></i>
                                        </div>
                                        <p class=" italic text-sm">
                                            Eco Club
                                        </p>
                                    </div>
                                </a>
                                <a href="{{route('activities',['type'=>'RED-RIBBON-CLUB'])}}" target="_blank">
                                    <div
                                        class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                        <div class="h-20 w-20 flex justify-center items-center rounded-full bg-darkTheme text-lightTheme group-hover:bg-lightTheme group-hover:text-darkTheme transition ease-in duration-2000">
                                            <i class="fa fa-kit-medical text-xl"></i>
                                        </div>
                                        <p class=" italic text-sm">
                                            RED RIBBON CLUB
                                        </p>
                                    </div>
                                </a>
                                <a href="{{route('activities',['type'=>'REGULAR-ACTIVITIES'])}}" target="_blank">
                                    <div
                                        class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                        <div class="h-20 w-20 flex justify-center items-center rounded-full bg-darkTheme text-lightTheme group-hover:bg-lightTheme group-hover:text-darkTheme transition ease-in duration-2000">
                                            <i class="fa fa-chart-simple text-xl"></i>
                                        </div>
                                        <p class=" italic text-sm">
                                            Regular Activities
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:col-span-2 md:col-span-2 col-span-1">
                        <div class="w-full bg-darkTheme text-lightText p-2">
                            <span>Important Downloads</span>
                        </div>
                        <div class="w-full p-2 border-[1px] border-black border-t-0 h-[200px] overflow-y-auto">
                            <ul class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-6">
                                <a href="{{asset('assets/pdf/downloads/National Education Policy 2020.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        National Education Policy 2020
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/Prospectus 2023-24.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        Prospectus for the Session (2023-24)
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/Prospectus BCA & PGDCA  2023-24.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        Prospectus Self Financing Courses -2023-24
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/Prospectus B. Voc. 2023-24.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        Prospectus B.Voc.Degree Courses -2023-24
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/AE & Vacation Schedule.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        Admission &amp; Examination Schedule 2023-24
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/admission reservation roster.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        Admission Reservation Roster2023-24
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/Admission Schedule 2023-24.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        Admission Schedule 2023-24
                                    </li>
                                </a>
                                <a href="{{asset('assets/pdf/downloads/Hatkeshwari 2022-23.pdf')}}" target="_blank">
                                    <li class="  text-darkText italic text p-2 hover:bg-darkTheme  hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                        College Magzine2022-23
                                    </li>
                                </a>
                            </ul>
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
        </div>


    <div class="w-full h-max " style="background-image: url({{asset('assets/images/gallery/30.jpg')}})">
       <div class="w-full h-ful bg-black/75 flex justify-center">
           <div class="lg:w-[80%] md:w-[80%] w-full">
               <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4 py-16">
                   <div class="w-full h-full  bg-white rounded-b-xl">
                       <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                           <span>ACADEMICS</span>
                       </div>
                       <div class="w-full p-2 grid grid-cols-1 gap-4  rounded-b-xl">
                           <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4">
                               <a href="{{route('academics', ['type'=>'SYLLABUS'])}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-book text-xl"></i>
                                       </div>
                                       <p class="italic text-sm">
                                           Syllabus
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/academic/Programme Outcomes.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-outdent text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Programme Outcomes
                                       </p>
                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/academic/LESSON PLANS.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-person-chalkboard text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Lesson Plans
                                       </p>
                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/academic/Research Activities.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-chart-line text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Research Activities
                                       </p>

                                   </div>
                               </a>
                               <a href="{{route('academics', ['type'=>'ACADEMIC-CALENDER'])}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-calendar-days text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Academic Calender
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/academic/Time Table 2022-23.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-clock text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Time Table
                                       </p>
                                   </div>
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="w-full h-full  bg-white rounded-b-xl">
                       <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                           <span>ADMISSIONS</span>
                       </div>
                       <div class="w-full p-2 grid grid-cols-1 gap-4  rounded-b-xl">
                           <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4">
                               <a href="{{asset('assets/pdf/admission/RUSA(CBCS).pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-drupal text-xl"></i>
                                       </div>
                                       <p class="italic text-sm">
                                           RUSA (CBCS)
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/admission/Admission Procedure.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-microchip text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Admission Procedure
                                       </p>
                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/admission/admission reservation roster.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-bookmark text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Admission Reservations
                                       </p>
                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/admission/Eligibility  Conditions  For Admission.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-pen-ruler text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Admission Rules
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/admission/Fee Structure.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-folder-tree text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Fee Structure
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/admission/ADMISSION Help Desk  2023-24.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-question text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Admission Help Desk
                                       </p>
                                   </div>
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="w-full h-full  bg-white rounded-b-xl">
                       <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                           <span>FACILITIES</span>
                       </div>
                       <div class="w-full p-2 grid grid-cols-1 gap-4   rounded-b-xl">
                           <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4">
                               <a href="{{asset('assets/pdf/facility/Library.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-warning group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-book text-xl"></i>
                                       </div>
                                       <p class="italic text-sm">
                                           Library
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/facility/IT lab.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-warning group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-globe text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           IT Lab
                                       </p>
                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/facility/Language lab.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-warning group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-language text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Language Laboratory
                                       </p>
                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/facility/SCIENCE LABORATORIES.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-warning group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-flask text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Science Laboratories
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/facility/Sports.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-warning group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-volleyball text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Sports
                                       </p>

                                   </div>
                               </a>
                               <a href="{{asset('assets/pdf/facility/Gymnesium.pdf')}}" target="_blank">
                                   <div
                                       class="w-full h-full bg-white flex flex-col gap-2 shadow-lg items-center justify-center text-darkText group text-center  px-2">
                                       <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-warning group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                           <i class="fa fa-dumbbell text-xl"></i>
                                       </div>
                                       <p class=" italic text-sm">
                                           Gymnesium
                                       </p>
                                   </div>
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

@endsection
