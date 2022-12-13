@extends('layouts.template')

@section('page-title')
    Home - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Banner -->
    <div id="banner-img">
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
                <div class="text-xl lg:text-3xl font-semibold py-2 border-b-2 border-green-600 w-full">Welcome to Police HMO</div>
                    <p class="py-3 text-xl">
                        We provide healthcare services to all serving and retired Police Men and their families, under the NHIS Scheme
                    </p>
            </div>
            <div class="lg:flex justify-between items-center">
                <p class="py-3 w-1/6 text-2xl lg:text-4xl">
                    We cover treatments outside the NHIS Benefit Package (Tertiary Assistance)
                </p>
                <p>
                    <div class="mt-4 lg:w-1/3 mx-auto bg-red-700 text-white lg:text-2xl text-xl text-center px-2 lg:py-4 py-2 rounded hover:text-green-600 hover:border-b-2 hover:border-green-600"><a href="#">How to Apply</a></div>    
                </p>
            </div>
        </div>
        <!-- Our Vision  -->
        <div id="vision" class="bg-gray-500 py-8">
            <div class="pb-6">
                <img class="lg:w-3/4 mx-auto relative top-14" src="{{ asset('images/police-man-family.png') }}" alt="police-man-family">
            </div>
        </div>

        <!-- Our Mission  -->
        <div id="mission" class="bg-white mt-8 py-8">
            <div class="text-center text-2xl lg:text-4xl font-semibold py-12">We Are The Only HMO For The Nigeria Police Force</div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-3 gap-6">
                <div>
                    <div class="text-xl py-3">We Are</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Committed</div>
                    <div class="py-3">
                        <p>
                            No other HMO truly understands how demanding the job of the Police officer is, like we do
                        </p>
                        <p class="my-2">
                            Therefore, the Police Health Maintenance Limited is committed to ensuring that all eligible serving and retired Nigeria Police personnel and their immediate family members, receive excellent healthcare
                        </p>
                    </div>
                </div>
                <div>
                    <div class="text-xl py-3">We Have</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Integrity</div>
                    <div class="py-3">
                        <p>
                            We continuously interface between our enrollees and the over 2,000 NHIS accredited healthcare providers in our network, spread across the four corners of Nigeria
                        </p>
                        <p class="my-2">
                            Through our rigorous and continuous monitoring and evaluation of these healthcare providers, the Police Health Maintenance Limited ensures that these healthcare providers meet the globally accepted quality standard and other standards as set out in the NHIS operational guidelines
                        </p>
                    </div>
                </div>
                <div>
                    <div class="text-xl py-3">We Have</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Value for Life</div>
                    <div class="py-3">
                        <p>
                            Your health and that of your family is our priority
                        </p>
                        <p class="my-2">
                            It is not what we do <i>intermittently</i> that ensures quality service delivery to you and your family, but what we do <b>consistently</b> by applying well thought-out processes and the use of up-to-date technologies
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
