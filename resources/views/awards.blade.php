@extends('layouts.template')

@section('page-title')
    Awards - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        <!-- Board  -->
        <div class="bg-gray-200 mt-4 py-16">
            <div class="text-center text-xl lg:text-xl py-4">Some of the Accolades we have received</div>
            <div class="text-center text-2xl lg:text-5xl font-semibold py-4 mb-5">Awards</div>
            
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-3 gap-6 items-center my-6">
                <div class="text-center bg-white shadow p-4">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/award-001.png') }}" alt="Certificate for Performance Certificate">
                    <div class="text-lg py-1 font-semibold">Certificate for Performance</div>
                    <div class="text-sm py-1 font-semibold">April 2016</div>
                    <div class="text-xs py-1">Award presented to the PHML by The Coalition of Civil Society Groups for having "Performed Excellently Well in Providing Quality Healthcare Services to the Nigerian Police"</div>
                </div>
                <div class="text-center bg-white shadow p-4">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/award-002.png') }}" alt="Award for Health Maintenance Leadership Excellence Certificate">
                    <div class="text-lg py-1 font-semibold">Award for Health Maintenance Leadership Excellence</div>
                    <div class="text-sm py-1 font-semibold">2016</div>
                    <div class="text-xs py-1">The Police Health Maintenance Limited received an award for "Health Maintenance Leadership Excellence" in 2016, at the African Leadership Prize Summit</div>
                    <div class="text-xs py-1">The theme of the event was "Sustainable Leadership in Africa: The New Way Forward"</div>
                </div>
                <div class="text-center bg-white shadow p-4">
                    <img class="w-64 mx-auto my-4" src="{{ asset('images/award-003.png') }}" alt="Distinguished Customer Certificate">
                    <div class="text-lg py-1 font-semibold">Distinguished Customer</div>
                    <div class="text-sm py-1 font-semibold">2014</div>
                    <div class="text-xs py-1">"Distinguished Customer" award presented to the Police HMO in 2014, by Fidelity Bank Plc</div>
                </div>
            </div>
        </div>
    </div>
@endsection
