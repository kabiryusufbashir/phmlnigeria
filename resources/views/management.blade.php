@extends('layouts.template')

@section('page-title')
    Management Team - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        <!-- Board  -->
        <div class="bg-white mt-4 py-16">
            <div class="text-center text-xl lg:text-xl py-4">Police Health Maintenance Limited</div>
            <div class="text-center text-2xl lg:text-5xl font-semibold py-4 mb-5">Meet the Management Team</div>
            
            <div class="lg:px-24 px-8 mx-auto pb-8 items-center">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/ceo.jpeg') }}" alt="Dr. Yusuf Kalli Gazali Photo">
                    <div class="text-lg py-1 font-semibold">Dr. Yusuf Kalli Gazali</div>
                    <div class="text-xs py-1">Managing Director/C.E.O</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/cfo.jpeg') }}" alt="Mr. Ahmed Isyaku Photo">
                    <div class="text-lg py-1 font-semibold">Mr. Ahmed Isyaku</div>
                    <div class="text-xs py-1">Chief Finance Officer</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/hr.jpeg') }}" alt="Mr. Abdulkarim Abubakar Photo">
                    <div class="text-lg py-1 font-semibold">Mr. Abdulkarim Abubakar</div>
                    <div class="text-xs py-1">Head, Administration & Human Resources</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/hds.jpeg') }}" alt="Dr. Yinnang Wushipba Damwa Photo">
                    <div class="text-lg py-1 font-semibold">Dr. Yinnang Wushipba Damwa</div>
                    <div class="text-xs py-1">Head, Medical Services</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/ho.png') }}" alt="Dr. Abdullahi Idris El-Agbo Photo">
                    <div class="text-lg py-1 font-semibold">Dr. Abdullahi Idris El-Agbo</div>
                    <div class="text-xs py-1">Ag Head, Operations</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/hbd.jpeg') }}" alt="Mr. William Wampana Mamza Photo">
                    <div class="text-lg py-1 font-semibold">Mr. William Wampana Mamza</div>
                    <div class="text-xs py-1">Head, Business Development</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/cam.jpeg') }}" alt="Mrs. Aisha Ali Photo">
                    <div class="text-lg py-1 font-semibold">Mrs. Aisha Ali</div>
                    <div class="text-xs py-1">Corporate Affairs Manager</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/ica.jpeg') }}" alt="Mrs. Aimalohi Odo Photo">
                    <div class="text-lg py-1 font-semibold">Mrs. Aimalohi Odo</div>
                    <div class="text-xs py-1">Head Internal Control & Audit</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full my-4" src="{{ asset('images/ahit.jpg') }}" alt="Mr. Abba Mustapha Jime Photo">
                    <div class="text-lg py-1 font-semibold">Mr. Abba Mustapha Jime</div>
                    <div class="text-xs py-1">Ag. Head ICT</div>
                </div>
            </div>
        </div>
    </div>
@endsection
