@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/42.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>Contact Us</span>
            </div>
            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-4 p-4">
                <div class="w-full  rounded-lg  py-2 px-2 shadow-lg shadow-gray-300" style="background-color: whitesmoke">

                    <form class="">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-semibold" for="username">
                                Full Name
                            </label>
                            <input type="text" id="name" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your Name" />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-semibold" for="username">
                                Email
                            </label>
                            <input type="email" id="email" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your Email" />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-semibold" for="username">
                                Mobile Number
                            </label>
                            <input type="number" id="number" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your number" />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-semibold" for="username">
                                Message
                            </label>
                            <textarea id="message" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="mb-4">
                            <button class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none" type="button">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <div class="w-full ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3415.4780727968628!2d77.74737187621122!3d31.124235366605593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3905f9fc6462f91f%3A0x1f157e4613aaa539!2sLal%20Bahadur%20Shastri%20Govt.%20Degree%20College!5e0!3m2!1sen!2sin!4v1718555189112!5m2!1sen!2sin"  style="border:0;height: 100%; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>

        </div>
    </div>
@endsection