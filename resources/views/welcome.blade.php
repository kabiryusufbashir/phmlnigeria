@extends('layouts.template')

@section('page-title')
    Home - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Banner -->
    <div>
        @include('layouts.banner')
        <div class="absolute lg:top-48 top-52">
            <div class="text-white font-extrabold p-8 bg-green-700 rounded-tr-lg" id="slogan">        
                <p class="flex justify-center text-white font-semibold p-5">
                    Introducing the Police HMO Providers' Portal
                </p>
                <p class="lg:text-lg">
                    Code Requests, Claims Processing & Reconciliation has never been easier.
                    Make submissions, get feedback & monitor progress ALL IN REAL TIME.
                    So, what are you waiting for? Sign up and sign in now <br>
                    <div class="mt-4 lg:w-1/6 mx-auto bg-gray-200 text-gray-700 px-2 py-2 rounded hover:text-green-600 hover:border-b-2 hover:border-green-600"><a href="#">Let's Go!</a></div>
                </p>
            </div>
        </div>
    </div>
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify">
        <!-- Slogan  -->
        <div id="about-us" class="lg:px-24 px-8 py-8 mt-8">
            <!-- logo  -->
            <div>
                <img class="w-64 mx-auto" src="{{ asset('images/micohsat.png') }}" alt="MIKIYA INTERNATIONAL COLLEGE OF HEALTH SCIENCE AND TECHNOLOGY (MICOHSAT) LOGO">
            </div>
            <!-- About Us  -->
            <div class="text-center lg:w-2/3 mx-auto">
                <div class="text-center text-2xl font-medium py-2 border-b-2 border-green-600 w-1/4 mx-auto">Preamble</div>
                <p class="py-3">
                    MICOHSAT is a college of Health Science and Technology established in the year 2022 with 50 expected staff strength and 1500 expected students population located at No. 1 Engr. Surajo Garba Complex beside Bari Science Academy along Falgore road Bari Town of Rogo LG Kano State.
                </p>
            </div>
        </div>
        <!-- Our Vision  -->
        <div id="vision" class="bg-white mt-8 py-8 shadow-lg">
            <div class="text-center text-2xl font-medium py-6">Our Vision</div>
            <div class="pb-6">
                <img class="w-24 mx-auto" src="{{ asset('images/vision.png') }}" alt="Vision">
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8">
                <p class="text-center lg:w-1/3 mx-auto">
                    Leading institution in the production of well trained and qualitative health care providers across the community
                </p>
            </div>
        </div>

        <!-- Our Mission  -->
        <div id="mission" class="bg-white mt-8 py-8 shadow">
            <div class="text-center text-2xl font-medium py-6">Our Mission</div>
            <div class="pb-6">
                <img class="w-24 mx-auto" src="{{ asset('images/objective.png') }}" alt="Mission">
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8">
                <p class="text-center lg:w-1/3 mx-auto">
                    To effectively train a qualitative health care providers with the use of higher groomed staff at both Academic and Professional level
                </p>
            </div>
        </div>
    </div>
@endsection
