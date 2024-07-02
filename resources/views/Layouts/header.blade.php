<div class="w-full bg-lightTheme h-max lg:flex  md:flex hidden justify-center mt-2 p-2">
    <div class="lg:w-70 md:w-90 w-full flex justify-end ">
        <div class="text-black text-sm font-normal w-max flex justify-center col-span-2">
            <ul class="flex gap-2 text-darkText">
                <a href="https://lbsgcsnagar.highalteducation.in" target="_blank">
                    <li class=" border-r-[1px] border-danger underline text-lg text-danger border-black pr-2 font-semibold animate-bounce">
                        Online Admission 2024-25
                    </li>
                </a>
                <a href="{{asset('assets/pdf/covid.pdf')}}" target="_blank">
                    <li class=" pr-2 italic   ">
                        Covid-19 Guidelines
                    </li>
                </a>

            </ul>
        </div>
    </div>
</div>

<div class="w-full lg:h-36 md:h-32 sm:h-28 h-20 flex  justify-evenly px-2 pb-2 sticky top-0 z-50" style="background-color: whitesmoke">
    <img class="h-full w-auto" src="{{asset('assets/images/logo.png')}}" alt="">


    <div class="lg:flex hidden items-center gap-4 w-max">
        <div class="flex flex-col ">
            <span class="text-danger text-md font-normal"><i class="fa fa-phone"></i> Phone:-</span>
            <a href="tel:01781-238149" class="font-semibold text-lg text-darkTheme underline">01781-238149</a>
        </div>
            <div class="flex flex-col ">
                   <span class="text-danger text-md font-normal"><i class="fa fa-envelope"></i> Email:-</span>
                   <a href="mailto:gcsnagar25@rediffmail.com" class="font-semibold text-lg text-darkTheme underline">gcsnagar25@rediffmail.com</a>
            </div>


    </div>
</div>

<div class="w-full sticky lg:top-36 md:top-32 sm:top-28 top-20 z-50 lg:h-max md:h-max sm:max-h-64 max-h-64 lg:overflow-y-visible md:overflow-y-visible sm:overflow-y-auto overflow-y-auto">
    <div class="bg-darkTheme w-full flex flex-col justify-center lg:items-center  items-start gap-2 relative px-2 ">
        <div class="w-max h-max lg:hidden flex">
            <i id="toggleButton"
               class="fa-solid fa-bars  ml-1 text-lg text-lightTheme p-2 rounded-sm hover:bg-lightTheme hover:text-darkTheme transition ease-in duration-2000"
               onclick="
            let menuList = document.getElementById('menuList');
            if(menuList.classList.contains('hidden')){
                menuList.classList.remove('hidden');
            }else{
                menuList.classList.add('hidden');
            }
            " aria-hidden="true"></i>
        </div>
        <ul class="  lg:flex hidden lg:flex-row flex-col text-lightTheme uppercase w-full items-center justify-center" id="menuList">
            <a href="{{route('home')}}">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000">
                    Home
                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        About Us
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('administration/about-college')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                THE COLLEGE
                            </li>
                        </a>
                        <a href="{{route('administration/principal-message')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                PRINCIPAL MESSAGE
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/about/Vision & Mission.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                VISION & MISSION
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/about/Affiliation Letter.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                AFFILIATING UNIVERSITY
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/about/Conduct Rules.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                CODE OF CONDUCT
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/about/Anti- Ragging Policy.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ANTI-RAGGING POLICY
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/about/RTI-Statutory Declaration.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                RTI-STATUTORY DECLARATION
                            </li>
                        </a>


                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span> COMMITTEE  </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">
                                    <a href="{{asset('assets/pdf/about/Internal Complaint Committte 2023-24.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            ICC
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/about/Women  Redressal Cum Sexual Harassment Committee.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            SEXUAL HARASSMENT COMMITTEE
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/about/Students  Complaint  Committee.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            STUDENTS' COMPLAINT COMMITTEE
                                        </li>
                                    </a>

                                </ul>
                            </li>
                        </a>

                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Administrative
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('administration/principal-message')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                PRINCIPAL
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/administration/Bursar.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                BURSAR
                            </li>
                        </a>
                        <a href="{{route('administration/teaching-staff')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                TEACHING STAFF
                            </li>
                        </a>
                        <a href="{{route('administration/non-teaching-staff')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                               NON TEACHING STAFF
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/administration/Parent Teacher Association 2022.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                PTA
                            </li>
                        </a>
                        <a href="#" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                CSCA
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/administration/organogram.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ORGANOGRAM
                            </li>
                        </a>




                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Academics
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span> COURSES  </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">
                                    <a href="#">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            UG COURSES: BA, BSC, BCOM, BCA
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/academic/rusa_guidline.pdf')}}">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            PG COURSES: MA HISTORY, MA POLITICAL SCIENCE
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/academic/BROCHURE ADD-ON  23-24.pdf')}}">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            ADD-ON COURSES
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </a>

                        <a href="{{route('academics', ['type'=>'SYLLABUS'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                SYLLABUS
                            </li>
                        </a>

                        <a href="{{asset('assets/pdf/academic/Programme Outcomes.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                PROGRAMME OUTCOMES
                            </li>
                        </a>

                        <a href="{{asset('assets/pdf/academic/LESSON PLANS.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                LESSON PLANS
                            </li>
                        </a>

                        <a href="{{asset('assets/pdf/academic/Research Activities.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                RESEARCH ACTIVITIES
                            </li>
                        </a>

                        <a href="{{route('academics', ['type'=>'ACADEMIC-CALENDER'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ACADEMIC CALENDER
                            </li>
                        </a>

                        <a href="{{asset('assets/pdf/academic/Time Table 2022-23.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                TIME TABLE
                            </li>
                        </a>



                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Departments
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>ARTS FACULTY </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="{{asset('assets/pdf/departments/ENGLISH DEPARTMENT PROFILE.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            ENGLISH
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Profile of Hindi Deptt.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            HINDI
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            SANSKRIT
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Philosophy Deptt.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            PHILOSOPHY
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            HISTORY
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Political Science.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            POLITICAL SCIENCE
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Public Administration.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            PUBLIC ADMINISTRATION
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            ECONOMICS
                                        </li>
                                    </a>
                                    <a href=# target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MATHEMATICS
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            PHYSICAL EDUCATION
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MUSIC( VOCAL)
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MUSIC( INSTRUMENTAL)
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Geography.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            GEOGRAPHY
                                        </li>
                                    </a>

                                </ul>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>COMMERCE FACULTY </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="{{asset('assets/pdf/departments/Commerce.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            COMMERCE
                                        </li>
                                    </a>


                                </ul>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>SCIENCE FACULTY( MEDICAL)</span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="{{asset('assets/pdf/departments/Botany.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            BOTANY
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Chemistry.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            CHEMISTRY
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Zoology.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            ZOOLOGY
                                        </li>
                                    </a>


                                </ul>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>SCIENCE FACULTY(NON- MEDICAL)</span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="{{asset('assets/pdf/departments/Chemistry (1).pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            CHEMISTRY
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/Physics.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            PHYSICS
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MATHEMATICS
                                        </li>
                                    </a>


                                </ul>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>COMPUTER SCIENCE & B VOC FACULTY </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="{{asset('assets/pdf/departments/BCA Department.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            BCA
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            BVOC
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/departments/PGDCA.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            PGDCA
                                        </li>
                                    </a>


                                </ul>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>PG DEPARTMENTS</span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MA HISTORY
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MA POLITICAL SCIENCE
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MA ENGLISH
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MA HINDI
                                        </li>
                                    </a>
                                    <a href="#" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            M COM
                                        </li>
                                    </a>



                                </ul>
                            </li>
                        </a>

                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Admissions
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{asset('assets/pdf/admission/RUSA(CBCS).pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                RUSA (CBCS)
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/admission/Admission Procedure.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ADMISSION PROCEDURE
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/admission/admission reservation roster.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ADMISSION RESERVATIONS
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/admission/Eligibility  Conditions  For Admission.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ADMISSION RULES
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/admission/Fee_Structure.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                FEE STRUCTURE
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/admission/ADMISSION Help Desk  2023-24.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ADMISSION HELP DESK
                            </li>
                        </a>
                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Facilities
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span> INFRASTRUCTURAL FACILITIES  </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">

                                    <a href="{{asset('assets/pdf/facility/Library.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            LIBRARY
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/IT lab.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            IT LAB
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/ICT Enabled Facilities.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            ICT ENABLED FACILITIES
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Language lab.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            LANGUAGE LAB
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/SCIENCE LABORATORIES.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            SCIENCE LABS
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Seminar Hall.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            SEMINAR HALL
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Sports.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            SPORTS
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Gymnesium.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            GYMNESIUM
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/HEALTH AID ROOM.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            HEALTH AID ROOM
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Canteen.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            CANTEEN
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Hostel Facilities.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            HOSTEL
                                        </li>
                                    </a>
                                    <a href="{{asset('assets/pdf/facility/Procedures and Policies for MUPASF.pdf')}}" target="_blank">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MAINTENANACE & UTILIZATION OF SUPPORT FACILITIES
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </a>
                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span>STUDENT FACILITIES</span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">
                                    <a href="#">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            SCHOLARSHIPS/ FREESHIPS SCHEMES
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            BOOK BANK
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            FREE REMEDIAL/MERITORIUS CLASSES
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </a>
                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Activities
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('activities',['type'=>'NSS'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                NSS
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'NCC'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                NCC
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'ROVERS-RANGERS'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ROVERS & RANGERS
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'ECO-CLUB'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ECO CLUB
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'RED-RIBBON-CLUB'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                RED RIBBON CLUB
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'REGULAR-ACTIVITIES'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                REGULAR ACTIVITIES
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'ACADEMIC-ACTIVITIES'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ACADEMIC ACTIVITIES
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'EXPERIENTIAL-LEARNING'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                EXPERIENTIAL LEARNING
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'CONFERENCES-SEMINARS-WORKSHOPS'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                CONFERENCES/ SEMINARS/ WORKSHOPS
                            </li>
                        </a>
                        <a href="{{route('activities',['type'=>'WOMEN-GRIEVANCE-REDRESSAL-CELL'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                WOMEN GRIEVANCE REDRESSAL CELL
                            </li>
                        </a>



                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Reports
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('annual-report',['type'=>'COLLEGE-ANNUAL-REPORTS'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                COLLEGE ANNUAL REPORTS
                            </li>
                        </a>
                        <a href="{{route('annual-report',['type'=>'STUDENTS-SATISFACTION-SURVEY'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                STUDENTS SATISFACTION SURVEY
                            </li>
                        </a>
                        <a href="{{route('annual-report',['type'=>'STUDENTS-FEEDBACK-SURVEY'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                STUDENTS FEEDBACK SURVEY
                            </li>
                        </a>
                        <a href="{{route('annual-report',['type'=>'TEACHERS-FEEDBACK-SURVEY'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                TEACHERS FEEDBACK SURVEY
                            </li>
                        </a>



                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        NAAC
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('naac', ['type'=>'NAAC-REPORTS'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                NAAC REPORT
                            </li>
                        </a>
                        <a href="{{route('naac', ['type'=>'COLLEGE-AQAR'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                COLLEGE AQAR
                            </li>
                        </a>
                        <a href="{{route('college-aqar-data')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                COLLEGE AQAR DATA
                            </li>
                        </a>
                        <a href="{{route('college-ssr')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                COLLEGE SSR
                            </li>
                        </a>
                        <a href="{{route('naac', ['type'=>'BEST-PRACTICES'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                BEST PRACTICES
                            </li>
                        </a>
                        <a href="{{asset('assets/pdf/naac/Insttutional Distinctiveness.pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                INSTITUTIONAL DISTINCTIVENESS
                            </li>
                        </a>

                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span> IQAC </span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">
                                    <a href="{{route('naac', ['type'=>'COMPOSITION'])}}">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            COMPOSITION
                                        </li>
                                    </a>
                                    <a href="{{route('naac', ['type'=>'MEETINGS'])}}">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            MEETINGS
                                        </li>
                                    </a>
                                    <a href="{{route('naac', ['type'=>'MEETINGS-OUTCOMES'])}}">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            IQAC MEETINGS OUTCOMES
                                        </li>
                                    </a>
                                    <a href="{{route('naac', ['type'=>'ACTION-TAKEN-REPORT'])}}">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            IQAC ACTION TAKEN REPORT
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </a>

                    </ul>

                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Alumni
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{asset('assets/pdf/alumni/Alumni Charter (1).pdf')}}" target="_blank">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ALUMNI CHARTER
                            </li>
                        </a>
                        <a href="{{route('alumni/registration')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                REGISTRATION
                            </li>
                        </a>
                        <a href="{{route('alumni/feedback')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ALUMNI FEEDBACK
                            </li>
                        </a>
                        <a href="{{route('alumni/our-alumni')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                OUR ALUMNI
                            </li>
                        </a>


                    </ul>

                </li>
            </a>
        </ul>
    </div>
</div>
