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
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Frequently Asked Questions</div>
                    <div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0 font-semibold" id="headingOne">
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
                                <h2 class="accordion-header mb-0 font-semibold" id="headingTwo">
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
                                <h2 class="accordion-header mb-0 font-semibold" id="headingThree">
                                <button class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Who is a Healthcare Provider?
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body py-4 px-5">
                                        <p class="py-1 px-8">
                                            A healthcare provider is an NHIS-approved hospital.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-white border border-gray-200">
                                <h2 class="accordion-header mb-0 font-semibold" id="headingFour">
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
                                <h2 class="accordion-header mb-0 font-semibold" id="headingFive">
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
                                <h2 class="accordion-header mb-0 font-semibold" id="headingSix">
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
                        </div>
                    </div>
                    <!-- 1  -->
                    <div class="m-3">
                        <div class="text-xl py-1 font-semibold">1) What is included in the Benefit Package?</div>
                        <div>
                            <p class="py-1 px-8">
                                Hospitals approved by the NHIS will among others, provide the following services:
                            </p>
                            <p class="py-1 px-10">
                                - Out-patient care <br>
                                - Prescribe drugs, pharmaceutical care and diagnostic tests as contained in the NHIS Drugs list and Diagnostic test list. <br>
                                - *Maternity care  <br>
                                - Preventive care, including immunization, as it applies in the National Programme on Immunization, health education, family planning, antenatal and post-natal care.  <br>
                                - Eye examination and care, including the provision of spectacles and contact lenses (as approved by the NHIS). <br>
                                - Registration of parents as extra dependents at a token etc. <br>
                            </p>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="m-3">
                        <div class="text-xl py-1 font-semibold">2) How do I register Under this Scheme?</div>
                        <div>
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
                    <!-- 3 -->
                    <div class="m-3">
                        <div class="text-xl py-1 font-semibold">3) If I register, change my hospital or add a dependant, how long will it take me to access care?</div>
                        <div>
                            <p class="py-1 px-8">
                                There shall be a waiting/processing period of one three (3) months. However, you can call our call center periodically to confirm.
                            </p>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="m-3">
                        <div class="text-xl py-1 font-semibold">4) How many members of my family are covered under the scheme?</div>
                        <div>
                            <p class="py-1 px-8">
                                A husband, one wife and four biological children not more than eighteen (18) years for serving Police Personnel. Under GIFSHIP, an enrollee can register as many dependants they choose, with the stipulated token annually. A Police retiree can register just one spouse.
                            </p>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="m-3">
                        <div class="text-xl py-1 font-semibold">5) If I am not satisfied with the services of a hospital, who do I complain to?</div>
                        <div>
                            <p class="py-1 px-8">
                                You can call any of the Police HMO call center lines or on the complaint designated line 09061129318.  You can also reach us through our social media handles or the PHML website. You also have the right to change your hospital if you are not satisfied with their services.
                            </p>
                        </div>
                        <div class="py-1 font-semibold px-8 my-4">Dedicated complaint line: 09061129318</div>
                    </div>
                </div>
            </div>
        </div>    

    </div>
@endsection
