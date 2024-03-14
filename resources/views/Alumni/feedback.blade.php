@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/42.jpg')}}">


    <div class="w-full flex flex-col items-center p-4  relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>ALUMNI FEEDBACK</span>
            </div>
            <div class="w-full p-4">
                <!-- component -->
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
                                                Alumni Feedback
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
                                            <td class="px-4 py-1  text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                            <td class="px-4 py-1  text-sm  whitespace-nowrap border-[1px] border-darkTheme">
                                                    <h2 class="text-sm font-semibold text-darkTheme">Alumni Feedback_2019_20_Report</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                <h2 class="text-sm font-normal italic text-darkTheme">Yearly Status Report - 2019-20</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                <div class="flex items-center gap-x-6">
                                                    <a href="https://www.lbsgcsnagar.edu.in/pdf/Alumni%20Feedback.pdf" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                        View/ Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-[1px] border-darkTheme">
                                            <td class="px-4 py-1  text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                            <td class="px-4 py-1  text-sm  whitespace-nowrap border-[1px] border-darkTheme">
                                                    <h2 class="text-sm font-semibold text-darkTheme">Alumni Feedback_2020-21_Report</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                <h2 class="text-sm font-normal italic text-darkTheme">Yearly Status Report - 2020-21</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                <div class="flex items-center gap-x-6">
                                                    <a href="{{asset('assets/pdf/alumni/Alumni feedback 2020-21.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                        View/ Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-[1px] border-darkTheme">
                                            <td class="px-4 py-1  text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                            <td class="px-4 py-1  text-sm  whitespace-nowrap border-[1px] border-darkTheme">
                                                    <h2 class="text-sm font-semibold text-darkTheme">Alumni Feedback_2021-22_Report</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                <h2 class="text-sm font-normal italic text-darkTheme">Yearly Status Report - 2021-22</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                <div class="flex items-center gap-x-6">
                                                    <a href="{{asset('assets/pdf/alumni/Alumni Feedback 21-22.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                        View/ Download
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-[1px] border-darkTheme">
                                            <td class="px-4 py-1  text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>
                                            <td class="px-4 py-1  text-sm  whitespace-nowrap border-[1px] border-darkTheme">
                                                    <h2 class="text-sm font-semibold text-darkTheme">Alumni Feedback_2022-23_Report</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                <h2 class="text-sm font-normal italic text-darkTheme">Yearly Status Report - 2022-23</h2>
                                            </td>
                                            <td class="px-4 py-1  text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                <div class="flex items-center gap-x-6">
                                                    <a href="{{asset('assets/pdf/alumni/Alumni Feedback 22-23.pdf')}}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                        View/ Download
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
@endsection
