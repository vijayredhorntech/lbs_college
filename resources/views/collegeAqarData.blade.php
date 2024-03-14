@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/47.jpg')}}">


    <div class="w-full flex flex-col items-center p-4  relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>COLLEGE AQAR DATA</span>
            </div>
            <div class="w-full p-4">
                    <div x-data="{ openTab: 1 }" class="overflow-x-auto w-full">
                        <div class=" mx-auto w-full">
                            <div class="mb-4 flex space-x-4 p-2 bg-lightTheme rounded-sm w-full shadow-md overflow-x-auto">
                                    <button x-on:click="openTab = 1" :class="{ 'bg-darkTheme text-white font-bold': openTab === 1 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Home
                                    </button>
                                    <button x-on:click="openTab = 2" :class="{ 'bg-darkTheme text-white font-bold': openTab === 2 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Extended Profile
                                    </button>
                                    <button x-on:click="openTab = 3" :class="{ 'bg-darkTheme text-white font-bold': openTab === 3 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 1
                                    </button>
                                    <button x-on:click="openTab = 4" :class="{ 'bg-darkTheme text-white font-bold': openTab === 4 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 2
                                    </button>
                                    <button x-on:click="openTab = 5" :class="{ 'bg-darkTheme text-white font-bold': openTab === 5 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 3
                                    </button>
                                    <button x-on:click="openTab = 6" :class="{ 'bg-darkTheme text-white font-bold': openTab === 6 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 4
                                    </button>
                                    <button x-on:click="openTab = 7" :class="{ 'bg-darkTheme text-white font-bold': openTab === 7 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 5
                                    </button>
                                    <button x-on:click="openTab = 8" :class="{ 'bg-darkTheme text-white font-bold': openTab === 8 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 6
                                    </button>
                                    <button x-on:click="openTab = 9" :class="{ 'bg-darkTheme text-white font-bold': openTab === 9 }" class=" flex-1 py-1 px-2 underline rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                        Criterion 7
                                    </button>
                            </div>

                            <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    AQAR Reports Cycle III
                                                                </th>
                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Year
                                                                </th>

                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">AQAr Report</h2>
                                                                </td>
                                                                <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-normal italic text-darkTheme">2021-2026</h2>
                                                                </td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/naac_2018_19_aqar_report (1).pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">AQAr Report</h2>
                                                                </td>
                                                                <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-normal italic text-darkTheme">2021-2026</h2>
                                                                </td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/naac_2018_19_aqar_report (1).pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Vacancy Positions</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Vacancy Position for Last Five Years.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 3" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Lesson Plans</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/LESSON PLANS.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.1.3 BoS & PAPER SETTER</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/1.1.3 BoS & PAPER SETTER.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.2.1 Affiliation Letters</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/1.2.1  Affiliation LETTERS.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.4.1 FEEDBACK REPORTS LINK FILE</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 21-22.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.4.1 FEEDBACK REPORTS LINK FILE</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 22-23.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 4" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Student's Satisfaction Survey</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Students  Satisfaction Survey (2021-22).pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet 2021-22</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/House  Exam Date Sheet 2021-22.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet 2022-23</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Date Sheet House Examinations 2022-23.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 5" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.5.1 Student Exchange Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Student Exchange 3.5.1.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 Extension Activity Report 2022-23</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/3.4.3 report.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Criterion 3.5.1 Student Exchange Report 2022-23</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/3.4.3 report.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 6" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Fund position</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Infrastructure</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Infrastructure     4.1.1.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	ICT Enabled Class Rooms</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/ICT enabled class rooms 4.1.3.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 7" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship & Freeships Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	5.1.2 Sports and Culture Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.1.3 Capacity Building & Skill Enhancement Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	5.1.4 Career Counseling and Placement Cell Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.2.1 Appointment Letters</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/5.2.1 Appointment Letters.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">6</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	5.3.2 Students' Engagement in Administration</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">7</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Schlorships 2022-23</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/5.1.1 Scholarship 2022-23.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 8" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Criterion 6</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="#" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <div x-show="openTab === 9" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">
                                <section class="container px-4 mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                    Activity/Metrics Reports
                                                                </th>


                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">Annual Report of the Activities (2021-22)</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Annual Report of the Activities (2021-22).pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.1.1 Annual Gender Sensitization Action Plan.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	7.1.1 Facilities for Women Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.1.1 Facilities for Women.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.1.1 Annual Gender Sensitization Action Plan.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.9 List of Activities for Inculcating the Values</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.1.9 List of Activities for Inculcating the Values.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">6</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.2.1 Best Practices (1).pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">7</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	7.2.1 Best Practices Pics</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.2.1 Best Practices Pics.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">8</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.10 Code of Conduct Report</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/7.1.10 Code of Conduct.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">9</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Annual Report (Session 2022-23)</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Annual Report (Session 2022-23).pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-[1px] border-darkTheme">
                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">10</td>
                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Criteria 7 (2022-23) Data</h2>
                                                                </td>

                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                    <div class="flex items-center gap-x-6">
                                                                        <a href="{{asset('assets/pdf/naac/Criterion 7  2022-23 Data.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                            View/Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>
                    </div>

                <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>







            </div>

        </div>
    </div>
@endsection
