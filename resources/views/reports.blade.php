@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px] relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full shadow-lg shadow-black/30 border-[1px] border-white">
                <div class="w-full bg-darkTheme lg:hidden md:hidden flex p-2">
                    <button class="bg-white text-darkTheme px-2 rounded-sm"
                            onclick=" document.getElementById('reportTabs').classList.toggle('hidden') ">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div id="reportTabs"
                     class="w-full rounded-t-md lg:grid md:grid hidden lg:grid-cols-4 md:grid-cols-4 grid-cols-1">
                    <div class="w-full"><a href="{{route('annual-report',['type'=>'COLLEGE-ANNUAL-REPORTS'])}}">
                            <div
                                class=" group p-2 flex justify-center h-full text-center {{$type==='COLLEGE-ANNUAL-REPORTS'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    COLLEGE ANNUAL REPORTS
                                </span>
                            </div>
                        </a></div>
                    <div class="w-full">
                        <a href="{{route('annual-report',['type'=>'STUDENTS-SATISFACTION-SURVEY'])}}">
                            <div
                                class=" group p-2 flex justify-center h-full text-center {{$type==='STUDENTS-SATISFACTION-SURVEY'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">

                                <span>
                                    STUDENTS SATISFACTION SURVEY
                                </span>

                            </div>
                        </a></div>
                    <div class="w-full"><a href="{{route('annual-report',['type'=>'STUDENTS-FEEDBACK-SURVEY'])}}">
                            <div
                                class=" group p-2 flex justify-center h-full text-center {{$type==='STUDENTS-FEEDBACK-SURVEY'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">

                                <span>
                                    STUDENTS FEEDBACK SURVEY
                                </span>

                            </div>
                        </a></div>
                    <div class="w-full">
                        <a href="{{route('annual-report',['type'=>'TEACHERS-FEEDBACK-SURVEY'])}}">

                            <div
                                class=" group p-2 flex justify-center h-full text-center {{$type==='TEACHERS-FEEDBACK-SURVEY'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    TEACHERS FEEDBACK SURVEY
                                </span>

                            </div>
                        </a>
                    </div>

                    </div>
                    <div class="w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
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
                </div>

            </div>

        </div>
@endsection



