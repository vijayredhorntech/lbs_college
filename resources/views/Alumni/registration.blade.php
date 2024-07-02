@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/42.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>OSA Registration Form</span>
            </div>
            <div class="w-full  rounded-lg  py-2 px-2 shadow-lg shadow-gray-300" style="background-color: whitesmoke">
                <form class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-2">
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="username">
                            Name
                        </label>
                        <input type="text" name="name"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Full Name Mr./ Ms"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="father_name">
                            Father's Name
                        </label>
                        <input type="text" name="father_name"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Father Name"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="subject">
                            Subject
                        </label>
                        <input type="text" name="subject"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="BA/ BSc/ BCom/ BCa"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="passing_year">
                            Passing Year
                        </label>
                        <input type="text" name="passing_year"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Year of pass out from college"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="qualification">
                            Qualification
                        </label>
                        <input type="text" name="qualification"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Current Academic qualification"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="contact_number">
                            Contact Number
                        </label>
                        <input type="number" name="contact_number"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Contact Number"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="whatsappNumber">
                            Whatsapp Number
                        </label>
                        <input type="number" name="whatsappNumber"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Whatsapp Number"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="email">
                            Email
                        </label>
                        <input type="email" name="email"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                               placeholder="Email"/>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="permanent_address">
                            Permanent Address
                        </label>
                        <textarea name="permanent_address" rows="1"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                                  placeholder="Permanent Address"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label class="block mb-2 text-sm font-semibold" for="Employment_status">
                            Employment Status
                        </label>
                        <textarea name="Employment_status" rows="1"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                                  placeholder="Employment Status"></textarea>
                    </div>
                    <div class="mb-4 w-full lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1">
                        <label class="block mb-2 text-sm font-semibold" for="place_of_posting">
                            If Govt. Job then Place of Posting
                        </label>
                        <input name="place_of_posting" rows="1"
                               class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline"
                                  placeholder="If Govt. Job then Place of Posting and designation"/>
                    </div>

                    <div class="mb-4 w-full lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1">
                        <button class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none"
                                type="button">
                            Submit
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
