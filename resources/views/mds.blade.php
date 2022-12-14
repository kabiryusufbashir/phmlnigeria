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
                <div class="my-4 items-center lg:grid grid-cols-2 bg-gray-100 lg:w-3/4 mx-auto">
                    <div class="py-5 px-8">
                        <h1 class="lg:text-2xl text-xl font-semibold">PROFILE OF DR. YUSUF KALLI GAZALI</h1>
                        <p class="my-3">
                            Dr. Yusuf Kalli Gazali is the Managing Director/CEO who over sees all the aspects of the company's operation
                        </p>
                        <p class="my-3">
                            A graduate from the University of Maiduguri, Dr. Gazali has over 13 years of experience in medical practice in diverse fields like Pathology, Microbiology, Otorhinolaryngology and family medicine. Outside medical practice, he also has vast experience in project management.
                        </p>
                    </div>
                    <div class="text-center float-right">
                        <img class="border border-2 border-green-600 lg:w-2/3 float-right" src="{{ asset('images/md-001.png') }}" alt="Dr. Yusuf Kalli Gazali Photo">
                    </div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 items-center">
                <div class="lg:flex justify-center">
                    <div class="border border-green-600 my-4">
                        <div class="text-center">
                            <img class="w-64 mx-auto mt-4" src="{{ asset('images/md-001.png') }}" alt="Dr. Yusuf Kalli Gazali Photo">
                        </div>
                        <div class="bg-gray-500 mx-auto text-center w-64 text-white py-3">
                            <div class="text-lg">Dr Yusuf Kalli Gazali</div> 
                            <div class="text-sm">MD/CEO POLICE HEALTH MAINTENANCE</div> 
                            <div class="text-xs">September 2022 - Present</div> 
                        </div>
                    </div>
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
                            <div class="text-xs">June 2017 - December 2017</div> 
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
