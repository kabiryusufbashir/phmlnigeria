@extends('layouts.template')

@section('page-title')
    Contact Us - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        
        <!-- FAQs  -->
        <div class="bg-white mt-3 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8 gap-6 items-center">
                <div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold text-center mt-3 mb-8">Our Office Locations & Contacts</div>
                    <div class="lg:grid grid-cols-2 gap-4">
                        <div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingOne">
                                    <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transitionfocus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Head Office
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-10">
                                                Plot 517 Sylvester Ugoh Crescent, <br>
                                                Off Idris Ibrahim Crescent, <br>
                                                Off Obafemi Awolowo Way, Jabi, Abuja. <br>
                                                Tel: 08174210058, 09055293969, 08132529114 <br>
                                                info@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTwo">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        North-East Zonal Office - Gombe
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-10">
                                                Adamu-Fura House, <br>
                                                Adjacent Ecobank, <br>
                                                Biu Road, <br>
                                                Gombe State <br>
                                                Tel: 09051099132 <br>
                                                gombe@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFour">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        North-West - I Zonal Office - Kaduna
                                    </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                No. 63, Ilorin Road, <br>
                                                Opposite Kaduna Central Prisons <br>
                                                Off Independence Way, <br>
                                                Marafa Estate, Kaduna <br>
                                                Tel: 08136103984, 09051099125 <br>
                                                kaduna@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFive">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        South-East Zonal Office - Enugu
                                    </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Goshen Plaza, 38 Garden Avenue, <br>
                                                Beside ECOBANK PLC, <br>
                                                Enugu, Enugu State <br>
                                                Tel: 08134900793, 09051099131 <br>
                                                enugu@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSix">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        South-South Zonal Office - Rivers
                                    </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Forte Oil Plc Complex, <br>
                                                No. 11 Moscow Road, Port Harcourt, <br>
                                                Rivers State. <br>
                                                Tel: 08064928877, 09051099128 <br>
                                                rivers@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSeven">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        South-West Zonal Office - Lagos
                                    </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                No. 26 Oba Akinjobi Road, <br>
                                                Opposite Police Cooperative Multi-Purpose Society Limited, <br>
                                                Police College Ikeja, <br>
                                                Lagos State <br>
                                                Tel: 09051099127 <br>
                                                lagos@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingEight">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Abia State Office
                                    </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                No. 4 Bende Road, Police Clinics, <br>
                                                Umuahia, Abia State. <br>
                                                Tel: 08072676363 <br>
                                                abia@phmlnigeria.com <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingNine">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Adamawa State Office
                                    </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Zonal Headquarters, <br>
                                                Adamawa State <br>
                                                Tel: 09051099134 <br>
                                                adamawa@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Akwa-Ibom State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Clinic, <br>
                                                State Command, <br>
                                                Ikoro Gbanabia, <br>
                                                Uyo, Akwa Ibom State <br>
                                                Tel: 08119714963 <br>
                                                akwaibom@phmlnigeria.com    
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingEleven">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Anambra State Office
                                    </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Comprehensive Health Centre, <br>
                                                Anambra Police Command, <br>
                                                Awka, Anambra State <br>
                                                Tel: 08072676353 <br>
                                                anambra@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTwelve">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        Bauchi State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Shop No BA4, <br>
                                                2nd Floor, AB Maigoro Plaza <br>
                                                Yandoka Road, Bauchi <br>
                                                Bauchi State. <br> 
                                                Tel: 08076469449 <br>
                                                bauchi@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingThirteen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                        Bayelsa State Office
                                    </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Clinic, <br>
                                                By Federal Medical Center Junction <br>
                                                Yenegoa, Bayelsa State <br>
                                                Tel: 08112083745 <br>
                                                bayelsa@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFourteen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                        Benue State Office
                                    </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Zonal Headquarters, <br>
                                                Zone 4 <br>
                                                Makurdi, Benue State <br>
                                                Tel: 09051099136 <br>
                                                benue@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFifteen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                        Borno State Office
                                    </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                No. 13 Damboa Road, Opposite Hospital Mgt Board, <br>
                                                NHIS Building <br>
                                                Maidugri, Borno State <br>
                                                Tel: 09052557203 <br>
                                                borno@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSixteen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                        Cross-River State Office
                                    </button>
                                    </h2>
                                    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Zone 6 Police Zonal Headquarters, <br>
                                                Calabar, Cross River State <br>
                                                Tel:09051155218 <br>
                                                crossriver@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSeventeen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                        Delta State Office
                                    </button>
                                    </h2>
                                    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Room B334 City Complex, <br>
                                                455 Nnebisi Road, <br>
                                                Asaba Delta State <br>
                                                Tel: 09051099140 <br>
                                                delta@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingEighteen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                        Ebonyi State Office
                                    </button>
                                    </h2>
                                    <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Command, <br>
                                                Opposite Govt. House, <br>
                                                Abakiliki, Ebonyi State <br>
                                                Tel: 08076471191 <br>
                                                ebonyi@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingNineteen">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                        Edo State Office
                                    </button>
                                    </h2>
                                    <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                NPF Zonal Command, Zone 5, <br>
                                                Adesua Road, <br>
                                                Benin City, Edo State <br>
                                                Tel: 08112083980 <br>
                                                edo@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTwenty">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                        Ekiti State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Headquarters Ado, <br>
                                                Along Iyin Road, <br>
                                                Ado-Ekiti, Ekiti State <br>
                                                Tel: 08151255878 <br>
                                                ekiti@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTwo1">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        Imo State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-10">
                                                POWA Shop located beside Shell Camp, <br>
                                                Police Barracks <br>
                                                Owerri, Imo State <br>
                                                Tel: 09051099137 <br>
                                                imo@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTwo2">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        Jigawa State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-10">
                                                Asma'u House, Road G9, <br>
                                                Dutse Town, Jigawa State <br>
                                                Tel: 09051099130 <br>
                                                jigawa@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFour4">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                        Kano State Office
                                    </button>
                                    </h2>
                                    <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Satatima Plaza, <br>
                                                No. 2 Mila Road, <br>
                                                Opposite Police Officers Mess, <br>
                                                Bompai, Kano State <br>
                                                Tel: 09051099129 <br>
                                                kano@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFive5">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                        Katsina State Office
                                    </button>
                                    </h2>
                                    <div id="collapseFive5" class="accordion-collapse collapse" aria-labelledby="headingFive5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Pension Office, <br>
                                                Katsina State Police Command Headquarters, <br>
                                                Daura Road, GRA, <br>
                                                Katsina, Katsina State. <br>
                                                Tel: 09051099138 <br>
                                                katsina@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSix6">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                        Kebbi State Office
                                    </button>
                                    </h2>
                                    <div id="collapseSix6" class="accordion-collapse collapse" aria-labelledby="headingSix6" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Suite 3, 3rd Floor, <br>
                                                No. 62 Ahmadu Bello Way <br>
                                                Birnin Kebbi, Kebbi State <br>
                                                Tel: 09052557202 <br>
                                                kebbi@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSeven7">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                        Kogi State Office
                                    </button>
                                    </h2>
                                    <div id="collapseSeven7" class="accordion-collapse collapse" aria-labelledby="headingSeven7" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Zonal Headquarters, <br>
                                                Zone 8 <br>
                                                Lokoja, Kogi State. <br>
                                                Tel: 09051099135 <br>
                                                kogi@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingEight8">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                        Kwara State Office
                                    </button>
                                    </h2>
                                    <div id="collapseEight8" class="accordion-collapse collapse" aria-labelledby="headingEight8" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Training School Ilorin, <br>
                                                Kwara State. <br>
                                                Tel: 08112083639 <br>
                                                kwara@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingNine9">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                        Nasarawa State Office
                                    </button>
                                    </h2>
                                    <div id="collapseNine9" class="accordion-collapse collapse" aria-labelledby="headingNine9" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Command Headquarters, <br>
                                                Shendam Road, <br>
                                                Lafia, Nassarawa State <br>
                                                Tel: 09051099139 <br>
                                                nasarawa@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTen10">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                        Niger State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTen10" class="accordion-collapse collapse" aria-labelledby="headingTen10" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                The Nigeria Police Force, <br>
                                                Counter Terrorism Unit, <br>
                                                Base 12, Bosso Road <br>
                                                Minna, Niger State <br>
                                                Tel: 09052557201 <br>
                                                niger@phmlnigeria.com    
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingEleven11">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven11" aria-expanded="false" aria-controls="collapseEleven11">
                                        Ogun State Office
                                    </button>
                                    </h2>
                                    <div id="collapseEleven11" class="accordion-collapse collapse" aria-labelledby="headingEleven11" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Ogun State Police Command, <br>
                                                Eleweran, <br>
                                                Abeokuta, Ogun State <br>
                                                Tel: 08112083669 <br>
                                                ogun@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingTwelve12">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve12" aria-expanded="false" aria-controls="collapseTwelve12">
                                        Ondo State Office
                                    </button>
                                    </h2>
                                    <div id="collapseTwelve12" class="accordion-collapse collapse" aria-labelledby="headingTwelve12" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Clinic, <br>
                                                State Command, <br>
                                                Igbatoro <br>
                                                Akure, Ondo State <br>
                                                Tel: 08112084175 <br>
                                                ondo@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingThirteen13">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen13" aria-expanded="false" aria-controls="collapseThirteen13">
                                        Osun State
                                    </button>
                                    </h2>
                                    <div id="collapseThirteen13" class="accordion-collapse collapse" aria-labelledby="headingThirteen13" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Zonal Police Headquarters, <br>
                                                Zone 11 Abera, <br>
                                                Gbogun Expressway, Oshogbo, <br>
                                                Osun State. <br>
                                                Tel: 08076365903 <br>
                                                osun@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFourteen14">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen14" aria-expanded="false" aria-controls="collapseFourteen14">
                                        Oyo State Office
                                    </button>
                                    </h2>
                                    <div id="collapseFourteen14" class="accordion-collapse collapse" aria-labelledby="headingFourteen14" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Clinic, <br>
                                                Police Command HQ, <br>
                                                Eleyele, <br>
                                                Ibadan, Oyo State <br>
                                                Tel: 08072676352 <br>
                                                oyo@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingFifteen15">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen15" aria-expanded="false" aria-controls="collapseFifteen15">
                                        Plateau State Office
                                    </button>
                                    </h2>
                                    <div id="collapseFifteen15" class="accordion-collapse collapse" aria-labelledby="headingFifteen15" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                A Division Barracks. <br>
                                                Opposite Police Children School, <br>
                                                Jos, Plateau State. <br>
                                                Tel: 09051155217 <br>
                                                plateau@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSixteen16">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen16" aria-expanded="false" aria-controls="collapseSixteen16">
                                        Sokoto State Office
                                    </button>
                                    </h2>
                                    <div id="collapseSixteen16" class="accordion-collapse collapse" aria-labelledby="headingSixteen16" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                NPF Zonal Command <br>
                                                Zone 10 Sokoto, <br>
                                                Sokoto State. <br>
                                                Tel: 09052557206  <br>
                                                sokoto@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingSeventeen17">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen17" aria-expanded="false" aria-controls="collapseSeventeen17">
                                        Taraba State Office
                                    </button>
                                    </h2>
                                    <div id="collapseSeventeen17" class="accordion-collapse collapse" aria-labelledby="headingSeventeen17" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Police Clinic, <br>
                                                Jalingo,Taraba State <br>
                                                Tel: 08112083772 <br>
                                                taraba@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingEighteen18">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen18" aria-expanded="false" aria-controls="collapseEighteen18">
                                        Yobe State Office
                                    </button>
                                    </h2>
                                    <div id="collapseEighteen18" class="accordion-collapse collapse" aria-labelledby="headingEighteen18" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                Damaturu Area Command, <br>
                                                After A Division, Gudba Road, <br>
                                                Yobe State <br>
                                                Tel: 08112083883 <br>
                                                yobe@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-white border border-gray-200">
                                    <h2 class="accordion-header mb-0" id="headingNineteen19">
                                    <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen19" aria-expanded="false" aria-controls="collapseNineteen19">
                                        Zamfara State Office
                                    </button>
                                    </h2>
                                    <div id="collapseNineteen19" class="accordion-collapse collapse" aria-labelledby="headingNineteen19" data-bs-parent="#accordionExample">
                                        <div class="accordion-body py-4 px-5">
                                            <p class="py-1 px-8">
                                                OGB Plaza, <br>
                                                No II Kaura Namoda Road, <br>
                                                Opposite Tudun Wada Market, <br>
                                                Gusau, Zamfara State <br>
                                                Tel: 09051099126 <br>
                                                zamfara@phmlnigeria.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection
