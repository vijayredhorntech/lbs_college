@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/gallery/42.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>NON TEACHING STAFF</span>
            </div>
            <div class="w-full p-4">
                <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Mukesh Pathik</span>
                        <span class="italic text-sm text-danger">Superintendent G-I</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Roshni Chauhan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs. Roshni Chauhan</span>
                        <span class="italic text-sm text-danger">Superintendent G-II</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Yashwant_Kumar.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Yashwant Kumar</span>
                        <span class="italic text-sm text-danger">Senior Assistant</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Govind Singh.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Govind Singh</span>
                        <span class="italic text-sm text-danger">Clerk</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">V</span>
                        <span class="italic text-sm text-danger">Clerk</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Clerk Vacant</span>
                        <span class="italic text-sm text-danger">Clerk</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Bharat_Singh.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Bharat Singh</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Tara_devi.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Tara Devi</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Sumitra_Devi.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs .Sumitra Devi</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Sharda_Devi.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt.Sharda Devi</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Usha 1.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt.Usha Devi</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/GD.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt Guddi Devi</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Prem Lata.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt Prem Lata</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Sandeep Kumar.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh.Sandeep Kumar</span>
                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Usha_devi.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs. Usha Devi</span>
                        <span class="italic text-sm text-danger">Sweeper</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Miss Asha Sharma</span>
                        <span class="italic text-sm text-danger">Peon cum Chokidar</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs. Sangeeta Devi</span>
                        <span class="italic text-sm text-danger">Sweeper</span>
                    </div>


                </div>
            </div>



            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>Lab Staff</span>
            </div>
            <div class="w-full p-4">
                <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Anil Negi.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Anil Negi</span>
                        <span class="italic text-sm text-danger">Senior Lecturer Assistant</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Piare_Lal.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Piare Lal Sahjeta</span>
                        <span class="italic text-sm text-danger">Senior Lecturer Assistant</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Bhopinder S.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Bhopinder Singh</span>
                        <span class="italic text-sm text-danger">Junior Lecturer Assistant</span>
                    </div>
                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/administration/Bhopinder S.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt . Sunita Devi</span>
                        <span class="italic text-sm text-danger">Lab Assistant</span>
                    </div>

                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr. Jagdish Chand</span>
                        <span class="italic text-sm text-danger">Tabla Vadak</span>
                    </div>


                </div>
            </div>

        </div>

    </div>
@endsection
