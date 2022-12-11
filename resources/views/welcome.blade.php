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
        <div class="lg:px-24 px-8 py-16 lg:grid grid-cols-2 gap-8 bg-gray-100">
            <!-- About Us  -->
            <div>
                <div class="text-2xl font-semibold py-2 border-b-2 border-green-600 w-full">Welcome to Police HMO</div>
                    <p class="py-3 text-2xl">
                        We provide healthcare services to all serving and retired Police Men and their families, under the NHIS Scheme
                    </p>
            </div>
            <div class="lg:flex justify-between items-center">
                <p class="py-3 w-1/6 text-4xl">
                    We cover treatments outside the NHIS Benefit Package (Tertiary Assistance)
                </p>
                <p>
                    <div class="mt-4 w-1/3 mx-auto bg-red-700 text-white text-2xl text-center px-2 py-6 rounded hover:text-green-600 hover:border-b-2 hover:border-green-600"><a href="#">How to Apply</a></div>    
                </p>
            </div>
        </div>
        <!-- Our Vision  -->
        <div id="vision" class="bg-gray-500 py-8">
            <div class="pb-6">
                <img class="w-1/2 mx-auto" src="{{ asset('images/police-man-family.png') }}" alt="police-man-family">
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
