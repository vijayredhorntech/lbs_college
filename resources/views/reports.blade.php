@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/47.jpg')}}">


    <div class="w-full flex flex-col items-center p-4  relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>








        <div class="lg:w-[70%] md:w-[80%] w-full   rounded-md z-20 lg:grid lg:grid-cols-4   flex flex-col-reverse gap-4">
           <div class="w-full lg:col-span-3  bg-white  shadow-lg shadow-black/30">
               <div class="w-full bg-darkTheme text-white font-bold text-xl p-2 lg:border-r-[1px] md:border-r-[1px] border-r-white">
                   <span>{{$title}}</span>
               </div>
               <div class="w-full p-4">
                   <section class=" px-4 mx-auto">
                       <div class="w-full flex flex-col">
                           <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                               <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                   <div class="overflow-hidden ">
                                       <table class="min-w-full ">
                                           <thead class="bg-lightTheme">
                                           <tr>
                                               <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                   S.No.
                                               </th>

                                               @foreach($tableHeader as $head)
                                                   <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                       {{$head}}
                                                   </th>
                                               @endforeach

                                               <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
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
                                                           <a href="{{ $data[2] }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
            <div class="w-full h-max bg-white shadow-lg shadow-black/30">
                <div class="w-full bg-darkTheme text-white flex justify-between font-bold text-xl p-2 border-b-[1px] border-b-white">
                    <span>REPORTS</span>
                    <div class="w-max h-max lg:hidden  flex">
                        <i id="toggleButton"
                           class="fa-solid fa-bars px-3  ml-1 text-lg text-white rounded-sm hover:bg-lightTheme hover:text-darkTheme transition ease-in duration-2000"
                           onclick="
            let reportsMenu = document.getElementById('reportsMenu');
            if(reportsMenu.classList.contains('hidden')){
                reportsMenu.classList.remove('hidden');
            }else{
                reportsMenu.classList.add('hidden');
            }
            " aria-hidden="true">=</i>
                    </div>
                </div>

                <div class="w-full">
                      <ul id="reportsMenu" class="lg:flex flex-col hidden">
                          <a href="{{route('annual-report',['type'=>'COLLEGE-ANNUAL-REPORTS'])}}">
                              <li class="border-b-[1px] border-darkTheme group p-2 {{$type==='COLLEGE-ANNUAL-REPORTS'?'text-white bg-darkTheme':'text-darkTheme bg-white'}} hover:bg-darkTheme hover:text-white font-semibold transition-colors duration-200">
                                  COLLEGE ANNUAL REPORTS
                              </li>
                          </a>
                            <a href="{{route('annual-report',['type'=>'STUDENTS-SATISFACTION-SURVEY'])}}">
                                <li class="border-b-[1px] border-darkTheme group p-2 {{$type==='STUDENTS-SATISFACTION-SURVEY'?'text-white bg-darkTheme':'text-darkTheme bg-white'}} hover:bg-darkTheme hover:text-white font-semibold transition-colors duration-200">
                                    STUDENTS SATISFACTION SURVEY
                                </li>
                            </a>
                            <a href="{{route('annual-report',['type'=>'STUDENTS-FEEDBACK-SURVEY'])}}">
                                <li class="border-b-[1px] border-darkTheme group p-2 {{$type==='STUDENTS-FEEDBACK-SURVEY'?'text-white bg-darkTheme':'text-darkTheme bg-white'}} hover:bg-darkTheme hover:text-white font-semibold transition-colors duration-200">
                                    STUDENTS FEEDBACK SURVEY
                                </li>
                            </a>
                            <a href="{{route('annual-report',['type'=>'TEACHERS-FEEDBACK-SURVEY'])}}">
                                <li class="border-b-[1px] border-darkTheme group p-2 {{$type==='TEACHERS-FEEDBACK-SURVEY'?'text-white bg-darkTheme':'text-darkTheme bg-white'}} hover:bg-darkTheme hover:text-white font-semibold transition-colors duration-200">
                                    TEACHERS FEEDBACK SURVEY
                                </li>
                            </a>
                      </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
