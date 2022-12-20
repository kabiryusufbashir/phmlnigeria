@extends('layouts.template')

@section('page-title')
    Downlaods - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        
        <!-- FAQs  -->
        <div class="bg-white mt-3 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8 gap-6 items-center">
                <div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Downloads</div>
                    <!-- Downloads  -->
                    <div class="m-3 lg:grid grid-cols-4 gap-4">
                        <div class="bg-white shadow p-4 text-center">
                            <a class="hover:text-green-600 hover:underline font-semibold" download href="{{ asset('docs/Actuarial-Data-Attendance-Documentation.pdf') }}">
                                <div><img src="{{ asset('images/download.png') }}" alt="Download PNG" class="mx-auto w-16 py-5"></div>
                                <div>Actuarial Data & Attendance Form</div>
                            </a>
                        </div>
                        <div class="bg-white shadow p-4 text-center">
                            <a class="hover:text-green-600 hover:underline font-semibold" download href="{{ asset('docs/REFERRAL-FORM.pdf') }}">
                                <div><img src="{{ asset('images/download.png') }}" alt="Download PNG" class="mx-auto w-16 py-5"></div>
                                <div>Refferal Form</div>
                            </a>
                        </div>
                        <div class="bg-white shadow p-4 text-center">
                            <a class="hover:text-green-600 hover:underline font-semibold" download href="{{ asset('docs/Claims-Form.pdf') }}">
                                <div><img src="{{ asset('images/download.png') }}" alt="Download PNG" class="mx-auto w-16 py-5"></div>
                                <div>Claims Form</div>
                            </a>
                        </div>
                        <div class="bg-white shadow p-4 text-center">
                            <a class="hover:text-green-600 hover:underline font-semibold" download href="{{ asset('docs/Change-of-Provider-Form.pdf') }}">
                                <div><img src="{{ asset('images/download.png') }}" alt="Download PNG" class="mx-auto w-16 py-5"></div>
                                <div>Change of Provider Form</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection
