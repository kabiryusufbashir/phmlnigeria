@extends('layouts.template')

@section('page-title')
    Our Offerings - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        
        <!-- History  -->
        <div class="bg-gray-200 mt-3 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8 gap-6 items-center">
                <div>
                    <div class="text-xl py-3 text-center">Ensuring that you and your family receive quality healthcare</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold text-center">Our Offerings</div>
                    <div class="lg:grid grid-cols-3 gap-6 items-center my-6">
                        <div class="text-center">
                            <img class="w-full mx-auto my-4" src="{{ asset('images/tsi.jpg') }}" alt="Tertiary Services Intervention Photo">
                            <div class="text-lg py-1 font-semibold">Tertiary Services Intervention</div>
                        </div>
                        <div class="text-center">
                            <img class="w-full mx-auto my-4" src="{{ asset('images/rcc.jpg') }}" alt="Responsive Customer Care Photo">
                            <div class="text-lg py-1 font-semibold">Responsive Customer Care</div>
                        </div>
                        <div class="text-center">
                            <img class="w-full mx-auto my-4" src="{{ asset('images/cqa.jpg') }}" alt="Continuous Quality Assurance Photo">
                            <div class="text-lg py-1 font-semibold">Continuous Quality Assurance</div>
                        </div>
                    </div>
                    <div class="lg:grid grid-cols-3 gap-6 items-center my-6">
                        <div class="text-center">
                            <img class="w-full mx-auto my-4" src="{{ asset('images/rs.jpg') }}" alt="Retiree Scheme Photo">
                            <div class="text-lg py-1 font-semibold">Retiree Scheme</div>
                        </div>
                        <div class="text-center">
                            <img class="w-full mx-auto my-4" src="{{ asset('images/me.jpg') }}" alt="Monitoring & Evaluation Photo">
                            <div class="text-lg py-1 font-semibold">Monitoring & Evaluation</div>
                        </div>
                        <div class="text-center">
                            <img class="w-full mx-auto my-4" src="{{ asset('images/en.jpg') }}" alt="Enlightenment Phot">
                            <div class="text-lg py-1 font-semibold">Enlightenment</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

    </div>
@endsection
