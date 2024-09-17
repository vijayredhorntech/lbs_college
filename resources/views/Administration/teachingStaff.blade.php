@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/gallery/42.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>TEACHING STAFF</span>
            </div>
            <div class="w-full p-4">
                <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr_P.P._Chauhan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. P.P. Chauhan</span>
                        <span class="italic text-sm text-danger">Principal</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Monika Raina.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Monika Raina</span>
                        <span class="italic text-sm text-danger">Asstt. Prof. English</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr. Harsh Bhardwaj.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr.Harsh Bhardwaj</span>
                        <span class="italic text-sm text-danger">Assistant Prof. English</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prof_Vijay_Laxmi.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Vijay Laxmi</span>
                        <span class="italic text-sm text-danger">Assistant Prof. English</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Priyanka.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Priyanka</span>
                        <span class="italic text-sm text-danger">Asstt. Prof. English</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Vacant</span>
                        <span class="italic text-sm text-danger">Asstt.Philosophy</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Vacant</span>
                        <span class="italic text-sm text-danger">Asstt. Prof. Physical Education</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prof_Pawan_Kumar.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof Pawan Kumar</span>
                        <span class="italic text-sm text-danger">Assistant Prof. History</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Sanjeev K.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Sanjeev Kumar</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Political Science</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prof._Preeti Panta_Chhetti.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof.Preeti Panta Chhatti</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Political Science</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr. Yogita.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Yogita Bandhta</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Hindi</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/ND Bhar.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr.ND Bhardwaj</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Hindi</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prof. Kailash Chauhan.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Kailash Chauhan</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Geography</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr_Rohit_Mokta.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Rohit Mokta</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Music( V)</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr. Om Sharma.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Om Sharma</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Music (I)</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Diksha PA.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Diksha Chauhan</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Public Administration</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Punit.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Punit</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Economics</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prof_Goverdhan_Chauhan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Goverdhan Chauhan</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Mathematics</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/LKS.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Lok Raj Sharma</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Chemistry</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr_Shallu_Dogra.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Shallu Dogra</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Chemistry</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr_Punam_Chauhan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Punam Chauhan</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Zoology</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Dr_Radha Raman_Gautam.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Radha Raman Gautam</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Physics</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Shefali T.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Shefali Thanta</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Botany</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prof_Sandeep_Kumar.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Sandeep Kumar</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Commerce</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/MMV.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Man Mohan Kumar</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Commerce</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Diksha C.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Diksha Chauhan</span>
                        <span class="italic text-sm text-danger">Assistant Prof. Commerce</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Mr_Chander_Mohan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Chander Mohan</span>
                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Shiwani Rawat.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Ms.Shiwani Rawat</span>
                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Ranjna Dilta.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs.Ranjna Dilta</span>
                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Manu Panatu.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs.Manu Panatu</span>
                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Mrs. Nirdosh_Pathania.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs.Nirdosh_Pathania</span>
                        <span class="italic text-sm text-danger">Librarian</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Ankit Chauhan.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr. Ankit Chauhan</span>
                        <span class="italic text-sm text-danger">Guest Faculty History</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Miss. Archana Nanda</span>
                        <span class="italic text-sm text-danger">Guest Faculty Retail Mgt.</span>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
