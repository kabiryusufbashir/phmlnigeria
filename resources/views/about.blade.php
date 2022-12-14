@extends('layouts.template')

@section('page-title')
    About - Police HMO - Promoting Excellent Healthcare 
@endsection

@section('body-content')
    <!-- Body Contents  -->
    <div class="pt-8 pb-5 text-justify relative top-10">
        <!-- Our Mission  -->
        <div class="bg-white mt-8 py-8">
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-3 gap-6">
                <div>
                    <div class="text-xl py-3">Who We Are</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">P H M L - The Police HMO</div>
                    <div class="py-3">
                        <p>
                            The Police Health Maintenance Limited is established by the Nigeria Police Force (NPF) and duly accredited by the National Health Insurance Scheme (NHIS) as a Health Maintenance Organization (HMO), to provide the best healthcare for all eligible Police personnel
                        </p>
                    </div>
                </div>
                <div>
                    <div class="text-xl py-3">Our Aim</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Address Service Failure Gaps</div>
                    <div class="py-3">
                        <p>
                            Borne from the renewed commitment of the Nigeria Police Force (NPF) to ensuring that Officers & Men of the NPF & their families have access to affordable healthcare, by addressing the service failures encountered by Officers and Men of the NPF in accessing care under the NHIS Scheme
                        </p>
                    </div>
                </div>
                <div>
                    <div class="text-xl py-3">Our Purpose</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">Excellent Healthcare for the NPF</div>
                    <div class="py-3">
                        <p>
                            <b>T</b>o improve healthcare services within the Police healthcare facilities and others, <b>t</b>o ensure that all Police HMO enrollees receive quality healthcare, <b>t</b>o ensure that all Police officers and their families are captured into the scheme and <b>t</b>o give the NPF full coverage of all diseases including diseases in the NHIS exclusion list
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- History  -->
        <div class="bg-gray-200 mt-8 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8 lg:grid grid-cols-2 gap-6 items-center">
                <div>
                    <img class="w-full" src="{{ asset('images/history.jpg') }}" alt="Brief History">
                </div>
                <div>
                    <div class="text-xl py-3">Emergence of Police HMO</div>
                    <div class="text-xl lg:text-3xl py-3 font-semibold">A Brief History</div>
                    <div class="py-3">
                        <p class="py-4">
                            The need to have a dedicated HMO to manage the healthcare needs of the personnel of the Nigeria Police Force necessitated the establishment of the PHML in 2007. PHML was accredited by the National Health Insurance Scheme (NHIS) on 1st March 2013 and began operations in the same year. Remarkably, the organization was able to grow it’s enrollee base from 0 to 35,000 lives within its first six months of operations
                        </p>
                        <p class="py-4">
                            Today, the organization has grown with over 2,000 hospitals in our network and 36 offices nationwide
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision -->
        <div class="bg-white mt-8 py-16">
            <div class="lg:px-24 px-8 mx-auto pb-8">
                <ul class="nav nav-tabs nav-justified flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tabJustify" role="tablist">
                    <li class="nav-item flex-grow text-center" role="presentation">
                        <a href="#tabs-ourVision" class="nav-link w-full block font-medium text-2xl uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" id="tabs-home-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-ourVision" role="tab" aria-controls="tabs-ourVision" aria-selected="true">
                        Our Vision
                        </a>
                    </li>
                    <li class="nav-item flex-grow text-center" role="presentation">
                        <a href="#tabs-ourMission" class="nav-link w-full block font-medium text-2xl uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-profile-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-ourMission" role="tab" aria-controls="tabs-ourMission" aria-selected="false">
                        Our Mission
                        </a>
                    </li>
                    <li class="nav-item flex-grow text-center" role="presentation">
                        <a href="#tabs-ourCoreObjectives" class="nav-link w-full block font-medium text-2xl uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-ourCoreObjectives" role="tab" aria-controls="tabs-ourCoreObjectives" aria-selected="false">
                        Our Core Objectives
                        </a>
                    </li>
                    <li class="nav-item flex-grow text-center" role="presentation">
                        <a href="#tabs-ourGoal" class="nav-link w-full block font-medium text-2xl uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-ourGoal" role="tab" aria-controls="tabs-ourGoal" aria-selected="false">
                        Our Goal
                        </a>
                    </li>
                </ul>
                <div class="tab-content text-xl" id="tabs-tabContentJustify">
                    <div class="text-center tab-pane fade show active" id="tabs-ourVision" role="tabpanel" aria-labelledby="tabs-home-tabJustify">
                        To become a major hub in the health maintenance organization business and stand as revolutionaries in the Country's health sector
                    </div>
                    <div class="text-center tab-pane fade" id="tabs-ourMission" role="tabpanel" aria-labelledby="tabs-profile-tabJustify">
                        To promote efficient, effective, convenient and comprehensive healthcare delivery to the Officers and Men of the Nigeria Police Force and their families
                    </div>
                    <div class="text-center tab-pane fade" id="tabs-ourCoreObjectives" role="tabpanel" aria-labelledby="tabs-profile-tabJustify">
                        To ensure that personnel and family get comprehensive and high quality health care through regular disbursement of funds and materials to the Health Care Providers (HCPs) and monitoring the standard of health care delivery regularly
                    </div>
                    <div class="text-center tab-pane fade" id="tabs-ourGoal" role="tabpanel" aria-labelledby="tabs-profile-tabJustify">
                        To ensure that through our organization, resources are utilized to deliver effective, comprehensive and cost-effective healthcare to the Officers and Men and their families through a network of registered health care providers
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
