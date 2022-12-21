@extends('layouts.template')

@section('page-title')
    FAQs - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        
        <!-- FAQs  -->
        <div class="bg-white mt-3 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8 gap-6 items-center">
                <div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold text-center mt-3 mb-8">Frequently Asked Questions</div>
                    <div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingOne">
                                <button class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transitionfocus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Of What Benefit is NHIS to Me?
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            Enrolling in the NHIS Scheme with the Police HMO offers the following benefits:
                                        </p>
                                        <p class="py-1 px-10">
                                            - Guaranteed access to quality healthcare services. <br>
                                            - Better and wider choice of hospitals. <br>
                                            - Efficient referral system from your hospital to higher levels of care. <br>
                                            - Guaranteed emergency or out-of-station care. <br>
                                            - Counselling on immunization services. <br>
                                            - Guaranteed customer service satisfaction. <br>
                                            - Peace of mind.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingTwo">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How Can I Request for Referrals?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">

                                        <p class="py-1 px-8">
                                            Referrals can only be requested by hospitals.
                                        </p>
                                        <p class="py-1 px-8">
                                            Requests for referrals can be made via SMS, e-mail and verbally to any of our call centre lines. Below are the types referrals and their requirements:
                                        </p>
                                        <p class="py-1 px-10">
                                            - Same hospital referral - enrollee name, enrollee NHIS number, diagnosis, treatment plan and enrollee phone number. <br>
                                            - Another hospital referral - enrollee name, enrollee NHIS number, diagnosis, reason for referral, enrollee phone number and the HCP being referred to. <br>
                                            - Out-of station code - enrollee name, enrollee NHIS number, diagnosis, treatment plan, enrollee phone number. Note however that verbal code request is only allowed on emergency cases. <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingFour">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Who is a Healthcare Provider?
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            A healthcare provider is an NHIS-approved hospital.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingFive">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Who is an Enrollee?
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            A person who is registered under NHIS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingSix">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What is included in the Benefit Package?
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            Hospitals approved by the NHIS will among others, provide the following services:
                                        </p>
                                        <p class="py-1 px-10">
                                            - Out-patient care <br>
                                            - Prescribe drugs, pharmaceutical care and diagnostic tests as contained in the NHIS Drugs list and Diagnostic test list. <br>
                                            - Maternity care for up to four (4) live births. <br>
                                            - Preventive care, including immunization, as it applies in the National Programme on Immunization, health education, family planning, antenatal and post-natal care. <br>
                                            - Eye examination and care, including the provision of spectacles and contact lenses (as approved by the NHIS). <br>
                                            - Registration of parents as extra dependents at a token etc. <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingSeven">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How do I register Under this Scheme?
                                </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            Go to any NHIA office close to you with the following documents:
                                        </p>
                                        <p class="py-1 px-10">
                                            - ID card <br>
                                            - Attestation form <br>
                                            - 3-months current pay-slip <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingEight">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    If I register, change my hospital or add a dependant, how long will it take me to access care?
                                </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            There shall be a waiting/processing period of one three (3) months. However, you can call our call center periodically to confirm.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingNine">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    How many members of my family are covered under the scheme?
                                </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            A husband, one wife and four biological children not more than eighteen (18) years for serving Police Personnel. Under GIFSHIP, an enrollee can register as many dependants they choose, with the stipulated token annually. A Police retiree can register just one spouse.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingTen">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    If I am not satisfied with the services of a hospital, who do I complain to?
                                </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            You can call any of the Police HMO call center lines or on the complaint designated line 09061129318.  You can also reach us through our social media handles or the PHML website. You also have the right to change your hospital if you are not satisfied with their services.
                                        </p>
                                        <div class="py-1 font-semibold px-8 my-4">Dedicated complaint line: 09061129318</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingEleven">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    How do I get medical treatment in case I fall sick when I am on duty or out-of-station?
                                </button>
                                </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            You can walk into any NHIS-accredited hospital with your NHIS card or NHIS registration number to receive treatment and then, call Police HMO call center within 48 hours.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingTwelve">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    Is there a limit to the Medical bills Police HMO will pay?
                                </button>
                                </h2>
                                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            There is no limit. As long as the care package is within the provision of NHIS benefit package.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingThirteen">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    How many members of my family are covered under the scheme?
                                </button>
                                </h2>
                                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            A husband, one wife and four biological children not more than eighteen (18) years.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingFourteen">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    If I am not satisfied with the services of a hospital, who do I complain to?
                                </button>
                                </h2>
                                <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            You can call the Police HMO office or report to any NHIS office. You also have the right to change your hospital if you are not satisfied with their services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingFifteen">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                    How do I change my hospital if I am not satisfied with the services?
                                </button>
                                </h2>
                                <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            Go to any Police HMO office or NHIS office close to you to fill the CHANGE OF PROVIDER FORM. <a href="{{ route('downloads') }}">You can also download it from this website.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingSixteen">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                    In case of any specialized case that cannot be handled by my hospital, what do I do?
                                </button>
                                </h2>
                                <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            Your hospital will refer you to a higher hospital accredited by NHIS, by calling Police HMO call center for an authorization/referral code.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0" id="headingSeventeen">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                    Am I supposed to pay for my treatment?
                                </button>
                                </h2>
                                <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            No, but you have to pay ten percent (10%) of the cost of your drugs.
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
@endsection
