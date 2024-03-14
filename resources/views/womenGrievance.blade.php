@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/42.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>{{$title}}</span>
            </div>
            <div class="w-full p-4">
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
@endsection
