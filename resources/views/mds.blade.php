@extends('layouts.template')

@section('page-title')
    MDs - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        <!-- Board  -->
        <div class="bg-white mt-4 py-16">
            <div class="text-center text-xl lg:text-xl py-4">Police Health Maintenance Limited</div>
            <div class="text-center text-2xl lg:text-5xl font-semibold py-4 mb-5">MDs</div>
            
            <div class="lg:px-24 px-8 mx-auto pb-8 items-center">
                <div class="text-center">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/md-001.png') }}" alt="Dr. Yusuf Kalli Gazali Photo">
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/md-002.png') }}" alt="Mr. Ahmed Isyaku Photo">
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/md-003.png') }}" alt="Mr. Abdulkarim Abubakar Photo">
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/md-004.png') }}" alt="Dr. Yinnang Wushipba Damwa Photo">
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/md-005.png') }}" alt="Dr. Abdullahi Idris El-Agbo Photo">
                </div>
            </div>
        </div>
    </div>
@endsection
