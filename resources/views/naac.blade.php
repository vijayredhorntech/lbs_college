@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px] relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[80%] md:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full shadow-lg shadow-black/30 border-[1px] border-white">
                <div class="w-full bg-darkTheme lg:hidden md:hidden flex p-2">
                    <button class="bg-white text-darkTheme px-2 rounded-sm"
                            onclick=" document.getElementById('naacTabs').classList.toggle('hidden') ">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div id="naacTabs" class="w-full rounded-t-md lg:grid md:grid hidden lg:grid-cols-3 md:grid-cols-3 grid-cols-1">
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'NAAC-REPORTS'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='NAAC-REPORTS'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    NAAC REPORT
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'COLLEGE-AQAR'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='COLLEGE-AQAR'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    COLLEGE AQAR
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'college-aqar-data'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='college-aqar-data'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   COLLEGE AQAR DATA
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'college-ssr'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='college-ssr'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   COLLEGE SSR
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'BEST-PRACTICES'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='BEST-PRACTICES'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   BEST PRACTICES
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'institutional-distinctiveness'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='institutional-distinctiveness'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                  INSTITUTIONAL DISTINCTIVENESS
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:col-span-3 md:col-span-3 ">
                        <a href="javascript:void(0)"
                            onclick="document.getElementById('iqacSubMeny').classList.toggle('hidden')">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='COMPOSITION'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-md font-semibold transition-colors duration-200">
                                <span>
                                 IQAC  <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="iqacSubMeny" class="w-full rounded-t-md  grid hidden lg:grid-cols-4 md:grid-cols-4 grid-cols-1">
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'COMPOSITION'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='COMPOSITION'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   COMPOSITION
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'MEETINGS'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='MEETINGS'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   MEETINGS
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'MEETINGS-OUTCOMES'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='MEETINGS-OUTCOMES'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    MEETINGS OUTCOMES
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('naac',['type'=>'ACTION-TAKEN-REPORT'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='ACTION-TAKEN-REPORT'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                     ACTION TAKEN REPORT
                                </span>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="{{$type==='college-aqar-data'?'hidden':''}} {{$type==='college-ssr'?'hidden':''}} {{$type==='institutional-distinctiveness'?'hidden':''}} w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
                    <section class=" px-4 mx-auto">
                        <div class="w-full flex flex-col">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden ">
                                        <table class="min-w-full ">
                                            <thead class="bg-lightTheme">
                                            <tr>
                                                <th scope="col"
                                                    class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                    S.No.
                                                </th>

                                                @foreach($tableHeader as $head)
                                                    <th scope="col"
                                                        class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        {{$head}}
                                                    </th>
                                                @endforeach

                                                <th scope="col"
                                                    class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                    Download
                                                </th>

                                            </tr>
                                            </thead>


                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($tableData as $index => $data)
                                                <tr class="border-[1px] border-darkTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">{{ $index + 1 }}</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">{{ $data[0] }}</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                        <h2 class="text-sm font-normal italic text-darkTheme">{{ $data[1] }}</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>$folderName,'file'=>$data[2]]) }}" target="_blank"
                                                               class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="{{$type==='college-aqar-data'?'':'hidden'}} w-full p-4">
                    <div x-data="{ openTab: 1 }" class="overflow-x-auto w-full">
                        <div class=" mx-auto w-full">
                            <div class="mb-4 flex space-x-4 p-2 bg-lightTheme rounded-sm w-full shadow-md overflow-x-auto">
                                <button x-on:click="openTab = 1" :class="{ 'bg-darkTheme text-white': openTab === 1 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Home
                                </button>
                                <button x-on:click="openTab = 2" :class="{ 'bg-darkTheme text-white': openTab === 2 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Extended Profile
                                </button>
                                <button x-on:click="openTab = 3" :class="{ 'bg-darkTheme text-white': openTab === 3 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 1
                                </button>
                                <button x-on:click="openTab = 4" :class="{ 'bg-darkTheme text-white': openTab === 4 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 2
                                </button>
                                <button x-on:click="openTab = 5" :class="{ 'bg-darkTheme text-white': openTab === 5 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 3
                                </button>
                                <button x-on:click="openTab = 6" :class="{ 'bg-darkTheme text-white': openTab === 6 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 4
                                </button>
                                <button x-on:click="openTab = 7" :class="{ 'bg-darkTheme text-white': openTab === 7 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 5
                                </button>
                                <button x-on:click="openTab = 8" :class="{ 'bg-darkTheme text-white': openTab === 8 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 6
                                </button>
                                <button x-on:click="openTab = 9" :class="{ 'bg-darkTheme text-white': openTab === 9 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
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
                                                                    <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'naac_2018_19_aqar_report (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'naac_2018_19_aqar_report (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Vacancy Position for Last Five Years']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'LESSON PLANS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.1.3 BoS & PAPER SETTER']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.2.1  Affiliation LETTERS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 21-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 22-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Students  Satisfaction Survey (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'House  Exam Date Sheet 2021-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Date Sheet House Examinations 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Student Exchange 3.5.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.4.3 report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.4.3 report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Infrastructure     4.1.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'ICT enabled class rooms 4.1.3']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.2.1 Appointment Letters']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report of the Activities (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Facilities for Women']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.9 List of Activities for Inculcating the Values']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Pics']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.10 Code of Conduct']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report (Session 2022-23)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Criterion 7  2022-23 Data']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                <div class="{{$type==='college-ssr'?'':'hidden'}} w-full p-4">
                    <div x-data="{ openTab: 1 }" class="overflow-x-auto w-full">
                        <div class=" mx-auto w-full">
                            <div class="mb-4 flex space-x-4 p-2 bg-lightTheme rounded-sm w-full shadow-md overflow-x-auto">
                                <button x-on:click="openTab = 1" :class="{ 'bg-darkTheme text-white': openTab === 1 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Home
                                </button>
                                <button x-on:click="openTab = 2" :class="{ 'bg-darkTheme text-white': openTab === 2 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Extended Profile
                                </button>
                                <button x-on:click="openTab = 3" :class="{ 'bg-darkTheme text-white': openTab === 3 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 1
                                </button>
                                <button x-on:click="openTab = 4" :class="{ 'bg-darkTheme text-white': openTab === 4 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 2
                                </button>
                                <button x-on:click="openTab = 5" :class="{ 'bg-darkTheme text-white': openTab === 5 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 3
                                </button>
                                <button x-on:click="openTab = 6" :class="{ 'bg-darkTheme text-white': openTab === 6 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 4
                                </button>
                                <button x-on:click="openTab = 7" :class="{ 'bg-darkTheme text-white': openTab === 7 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 5
                                </button>
                                <button x-on:click="openTab = 8" :class="{ 'bg-darkTheme text-white': openTab === 8 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                    Criterion 6
                                </button>
                                <button x-on:click="openTab = 9" :class="{ 'bg-darkTheme text-white': openTab === 9 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
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
                                                                SSR Reports
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
                                                                <h2 class="text-sm font-semibold text-darkTheme">	SSR Report</h2>
                                                            </td>
                                                            <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-normal italic text-darkTheme">2012-2017</h2>
                                                            </td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'naac_2018_19_aqar_report (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Vacancy Position for Last Five Years']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'LESSON PLANS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.1.3 BoS & PAPER SETTER']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.2.1  Affiliation LETTERS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 21-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 22-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                <h2 class="text-sm font-semibold text-darkTheme">Criterion 2</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                <h2 class="text-sm font-semibold text-darkTheme">	Criterion 3.4.3 & 3.4.4 Report 2016-17</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Activities 2016-17']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

                                                                            View/Download
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 & 3.4.4 Report 2017-18</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

                                                                            View/Download
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 & 3.4.4 Report 2018-19</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Activities 2017-18']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

                                                                            View/Download
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 & 3.4.4 Report 2019-20</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Activities 2019-20']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

                                                                            View/Download
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">	Criterion 3.4.3 & 3.4.4 Report 2020-21</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Activities 2020-21']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

                                                                            View/Download
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">6</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 & 3.4.4 Combined Report</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Activities 2016-2021']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

                                                                            View/Download
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">7</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.5.1 Student Exchange Report</h2>
                                                            </td>

                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.5.1.1  Student Exchange']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship 2016-21']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.2 Sports and Culture 2016 to 2021']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.3 Capacity Building & Skill Enhancement']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.4 Career Counseling and Placement Cell Report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.2.1 Appointment Letters']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report of the Activities (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Facilities for Women']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.9 List of Activities for Inculcating the Values']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Pics']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">

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
                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.10 Code of Conduct']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                <div class="{{$type==='institutional-distinctiveness'?'':'hidden'}} w-full p-4">
                        <div class="w-full flex justify-end">
                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Insttutional Distinctiveness']) }}" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>
                        </div>
                        <p class="mt-2 text-darkText italic text-md"> The college was established in 1986. Since the college is located in rural areas,
                            its distinctiveness lies in catering to the needs of students of economically
                            weaker sections who are incapable of going to urban areas for higher
                            education. </p>
                        <p class="mt-2 text-darkText italic text-md">The college aims at providing such students the platform to hone their skills
                            by organising skill enhancement workshops , such as communications skills
                            and personality development , self defense , cooking , beautician , adventure
                            sports , yoga camps , awareness lectures about their legal rights.</p>
                        <p class="mt-2 text-darkText italic text-md">The emphasis of the college is to promote computer literacy amongst the
                            students with the college’s well equipped computer labs and planned courses
                            in computers. Most of the students in the college are from horticulture
                            background , hence the college makes an efforts to provide consultancy
                            services to the college students as well as to local people by organising lecture
                            from progressive horticulturists as well as professional consultants to make
                            them aware of the changing scenario in apple industry. </p>
                        <p class="mt-2 text-darkText italic text-md">In addition to these welfare endeavors, the preservation, promotion and
                            popularization of local culture, history and dialect are given a priority in most of
                            the co-curricular representations. All such initiatives have built a distinctive
                            identity of the institution</p>
                    </div>
            </div>

        </div>
    </div>
@endsection

