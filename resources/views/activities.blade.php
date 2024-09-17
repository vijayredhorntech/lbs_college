@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px]  relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full shadow-lg shadow-black/30 border-[1px] border-white">
                <div class="w-full bg-darkTheme lg:hidden md:hidden flex p-2">
                      <button class="bg-white text-darkTheme px-2 rounded-sm"
                       onclick=" document.getElementById('activityTabs').classList.toggle('hidden') ">
                          <i class="fa fa-bars"></i>
                      </button>
                </div>

                <div id="activityTabs" class="w-full rounded-t-md lg:grid md:grid hidden lg:grid-cols-5 md:grid-cols-4 grid-cols-1">
                    <div class="w-full">
                        <a href="{{route('activities',['type'=>'NSS'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='NSS'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   NSS
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('activities',['type'=>'NCC'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='NCC'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                   NCC
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('activities',['type'=>'ROVERS-RANGERS'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='ROVERS-RANGERS'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                      ROVERS & RANGERS
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('activities',['type'=>'RED-RIBBON-CLUB'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='RED-RIBBON-CLUB'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    RED RIBBON CLUB
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('activities',['type'=>'ECO-CLUB'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='ECO-CLUB'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    ECO CLUB
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full">
                        <a href="{{route('activities',['type'=>'REGULAR-ACTIVITIES'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='REGULAR-ACTIVITIES'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    REGULAR ACTIVITIES
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:col-span-1">
                        <a href="{{route('activities',['type'=>'ACADEMIC-ACTIVITIES'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='ACADEMIC-ACTIVITIES'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    ACADEMIC ACTIVITIES
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:col-span-1">
                        <a href="{{route('activities',['type'=>'EXPERIENTIAL-LEARNING'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='EXPERIENTIAL-LEARNING'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    EXPERIENTIAL LEARNING
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:col-span-1 md:col-span-2">
                        <a href="{{route('activities',['type'=>'CONFERENCES-SEMINARS-WORKSHOPS'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='CONFERENCES-SEMINARS-WORKSHOPS'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    CONFERENCES, SEMINARS & WORKSHOPS
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="w-full lg:col-span-1 md:col-span-2">
                        <a href="{{route('activities',['type'=>'WOMEN-GRIEVANCE-REDRESSAL-CELL'])}}">
                            <div class=" group p-2 flex justify-center h-full text-center {{$type==='WOMEN-GRIEVANCE-REDRESSAL-CELL'?'text-darkTheme bg-white border-[1px] border-darkTheme':'text-white bg-darkTheme border-[1px] border-white'}}  hover:bg-white hover:text-darkText hover:border-darkTheme text-xs font-semibold transition-colors duration-200">
                                <span>
                                    WOMEN GRIEVANCE REDRESSAL CELL
                                </span>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
                    <section class=" px-4 mx-auto  {{$type ==='WOMEN-GRIEVANCE-REDRESSAL-CELL'?'hidden':''}}">
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

                    <div class="w-full p-4 {{$type !='WOMEN-GRIEVANCE-REDRESSAL-CELL'?'hidden':'flex flex-col'}}">
                        <div class="w-full text-darkTheme font-bold text-xl py-2">
                            <span>
                                {{$title}}
                            </span>
                        </div>
                        <span class="text-darkText italic text-md">Women Grievance Redressal Cell was established under the Act No 20 of 1990 of Govt of India. Women’s grievance redressal cell is meant to safe guard and promote well being of all women employees of the organization. It takes care of all complaints on sexual harassment of women of women at workplace and action taken for redressal of complaints. The cell is responsible for looking into any complaints filed by students & staff about women grievance at college.</span>
                        <div class="w-full text-darkTheme font-bold text-xl py-2">
                            <span>OBJECTIVES OF COMMITTEE</span>
                        </div>
                        <span class="text-darkText italic text-md">Women grievance redressal cell is a growing community of women in Lal Bahadur Shastri Government College Saraswati Nagar which share a common purpose to learn, educate and collaborate on ideas that have the power to effect meaningful and positive change while fighting the challenges they face.</span>
                        <span class="text-darkText italic text-md">To investigate reported cases of sexual harassment of women, if any and submit its report to the disciplinary authority recommending action to be taken against the accused miscreants.</span>
                        <span class="text-darkText italic text-md">To hold meetings regularly.</span>
                        <span class="text-darkText italic text-md">To organize various functions acquainting the women regarding their rights.</span>
                        <span class="text-darkText italic text-md">To equip the female students, faculty and staff members with knowledge of their legal rights.</span>
                        <span class="text-darkText italic text-md">To safe guard the rights of female students, faculty and staff members.</span>
                        <span class="text-darkText italic text-md">To incorporate hygiene habits and ensure a healthy atmosphere in and around college.</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

