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
                <div class="my-4">
                    <div class="text-center">
                        <img class="border border-green-600 w-64 mx-auto mt-4" src="{{ asset('images/md-001.png') }}" alt="Dr. Yusuf Kalli Gazali Photo">
                    </div>
                    <div class="bg-gray-500 mx-auto text-center w-64 text-white py-3">
                        <div class="text-lg">Dr Yusuf Kalli Gazali</div> 
                        <div class="text-sm">MD/CEO POLICE HEALTH MAINTENANCE</div> 
                        <div class="text-xs">October 2022 - Present</div> 
                    </div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 items-center">
                <div class="lg:flex justify-center">
                    <div class="border border-green-600 my-4">
                        <div class="text-center">
                            <img class="w-64 mx-auto mt-4" src="{{ asset('images/md-002.png') }}" alt="Dr Ahmad Garba Yakasai">
                        </div>
                        <div class="bg-gray-500 mx-auto text-center w-64 text-white py-3">
                            <div class="text-lg">Dr Ahmad Garba Yakasai</div> 
                            <div class="text-sm">MD/CEO POLICE HEALTH MAINTENANCE</div> 
                            <div class="text-xs">October 2018 - June 2022</div> 
                        </div>
                    </div>
                    <div class="border border-green-600 my-4">
                        <div class="text-center">
                            <img class="w-64 mx-auto mt-4" src="{{ asset('images/md-004.png') }}" alt="Dr Samuel Ali Photo">
                        </div>
                        <div class="bg-gray-500 mx-auto text-center w-64 text-white py-3">
                            <div class="text-lg">Dr Samuel Ali</div> 
                            <div class="text-sm">MD/CEO POLICE HEALTH MAINTENANCE</div> 
                            <div class="text-xs">January 2018 - May 2018</div> 
                        </div>
                    </div>
                    <div class="border border-green-600 my-4">
                        <div class="text-center">
                            <img class="w-64 mx-auto mt-4" src="{{ asset('images/md-005.png') }}" alt="AIG (RTD) Alex Emeka Okeke. psc, NPM. Photo">
                        </div>
                        <div class="bg-gray-500 mx-auto text-center w-64 text-white py-3">
                            <div class="text-lg">AIG (RTD) Alex Emeka Okeke</div> 
                            <div class="text-sm">MD/CEO POLICE HEALTH MAINTENANCE</div> 
                            <div class="text-xs">January 2017 - December 2017</div> 
                        </div>
                    </div>
                    <div class="border border-green-600 my-4">
                        <div class="text-center">
                            <img class="w-64 mx-auto mt-4" src="{{ asset('images/md-003.png') }}" alt="Mr. Abdulkarim Abubakar Photo">
                        </div>
                        <div class="bg-gray-500 mx-auto text-center w-64 text-white py-3">
                            <div class="text-lg">Dr Donald Eneh</div> 
                            <div class="text-sm">MD/CEO POLICE HEALTH MAINTENANCE</div> 
                            <div class="text-xs">March 2013 - January 2017</div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
