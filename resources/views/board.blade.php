@extends('layouts.template')

@section('page-title')
    The Board - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        <!-- Board  -->
        <div class="bg-white mt-4 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/chairman.jpeg') }}" alt="IGP Alkali Baba Usman, psc (+), NPM, fdc Photo">
                    <div class="text-lg py-1 font-semibold">IGP Alkali Baba Usman, psc (+), NPM, fdc</div>
                    <div class="text-sm py-1">Chairman, Board of Directors</div>
                    <div class="text-xs py-1">The Inspector General of Police</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/vice_chairman.jpeg') }}" alt="DIG Sanusi M. Lemu mni">
                    <div class="text-lg py-1 font-semibold">DIG Sanusi M. Lemu mni</div>
                    <div class="text-sm py-1">Vice-Chairman of the Board</div>
                    <div class="text-xs py-1">DIG (DFA)</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-3 gap-6 items-center my-6">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/no_photo.jpg') }}" alt="DIG Mohammed Aminu Yesufu Photo">
                    <div class="text-lg py-1 font-semibold">DIG Mohammed Aminu Yesufu</div>
                    <div class="text-sm py-1">(Retd.)</div>
                    <div class="text-xs py-1">Board Member</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/board_member_001.jpeg') }}" alt="AIG Dr. (Mrs.) Adenike Abuwa Photo">
                    <div class="text-lg py-1 font-semibold">AIG Dr. (Mrs.) Adenike Abuwa</div>
                    <div class="text-sm py-1">(Retd.)</div>
                    <div class="text-xs py-1">Board Member</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/independent_director.jpg') }}" alt="DIG Sanusi M. Lemu mni">
                    <div class="text-lg py-1 font-semibold">Dr. Otive Igbuzor</div>
                    <div class="text-xs py-1">Independent Director</div>
                </div>
            </div>
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center">
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/ceo.jpeg') }}" alt="Dr. Yusuf Kalli Gazali Photo">
                    <div class="text-lg py-1 font-semibold">Dr. Yusuf Kalli Gazali</div>
                    <div class="text-xs py-1">Managing Director/C.E.O</div>
                </div>
                <div class="text-center">
                    <img class="w-64 mx-auto rounded-full" src="{{ asset('images/secretary.jpg') }}" alt="Barr. Suleiman Idris Photo">
                    <div class="text-lg py-1 font-semibold">Barr. Suleiman Idris</div>
                    <div class="text-xs py-1">Secretary of The Board</div>
                </div>
            </div>
        </div>
    </div>
@endsection
