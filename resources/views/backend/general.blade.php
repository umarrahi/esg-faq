@extends('backend.layouts.app')

@section('title')
    General - ESG Form
@endsection

@section('content')
    <form class="space-y-8 pt-5" x-data="form">
        <div class="panel">
            <div class="mb-5">
                <h5 class="text-xl font-bold dark:text-white-light">General</h5>
            </div>
            <div class="mb-5" x-data="{ tab: '1' }">
                {{-- Tabs Handler (Start) --}}
                <div>
                    <ul class="mb-5 mt-3 flex flex-wrap">
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '1' }"
                                @click="tab = '1'">
                                Company Information
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '2' }"
                                @click="tab = '2'">
                                General ESG Practices
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Tabs Handler (End) --}}

                <div class="flex-1 pt-5 text-sm">
                    {{-- Company Information --}}
                    <template x-if="tab === '1'">
                        <div class="active">
                            <h4 class="text-xl font-semibold">ESG self-assessment 2024, Requested by ESGRID</h4>
                            <!-- Stepper No (Start) -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    {{-- Stepper No (Start) --}}
                                    <div class="my-10">
                                        <ul class="flex flex-wrap justify-between item-center gap-4">
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-md font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-md font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-md font-semibold">3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stepper No (End) --}}

                                    {{-- Stepper Content (Start) --}}
                                    <div class="mb-10">
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">What was the company's net turnover for the
                                                    assessment year (EUR)?
                                                </p>
                                                <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                                                    <div class="flex">
                                                        <div
                                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            €</div>
                                                        <input type="number" placeholder=""
                                                            class="form-input rounded-none py-2.5 text-base" />
                                                        <div
                                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            .00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 2">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">What were the company's total assets for the
                                                    assessment year (EUR)?</p>
                                                <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                                                    <div class="flex">
                                                        <div
                                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            €</div>
                                                        <input type="number" placeholder=""
                                                            class="form-input rounded-none py-2.5 text-base" />
                                                        <div
                                                            class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            .00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">How many employees did the company employ during the
                                                    assessment year (FTEs)?
                                                </p>
                                                <div class="grid grid-cols-1 gap-4 xl:grid-cols-3">
                                                    <input type="text" placeholder=""
                                                        class="form-input py-2.5 text-base" />
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                    {{-- Stepper Content (End) --}}

                                    {{-- Stepper Button (Start) --}}
                                    <div class="flex justify-between">
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 1"
                                            @click="activeTab--">Back</button>
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 3"
                                            @click="activeTab++">Next</button>
                                    </div>
                                    {{-- Stepper Button (End) --}}
                                </div>
                            </div>
                            <!-- Stepper No (End) -->
                        </div>
                    </template>

                    {{-- General ESG Practices --}}
                    <template x-if="tab === '2'">
                        <div>
                            <h4 class="text-xl font-semibold">ESG self-assessment 2024, Requested by ESGRID</h4>
                            <!-- Stepper -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    {{-- Stepper No (Start) --}}
                                    <div class="my-10">
                                        <ul class="flex flex-wrap justify-between item-center gap-4 bg-purple-50">
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-md font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-md font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-md font-semibold">3</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 4 }"
                                                    @click="activeTab = 4">
                                                    <span class="text-md font-semibold">4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stepper No (End) --}}

                                    {{-- Stepper Content (Start) --}}
                                    <div class="mb-10">
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Does the company have a sustainability strategy in
                                                    place, either as a separate document or as part of other
                                                    documents/policies? Please provide a link to the document or include it
                                                    as an attachment.
                                                </p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                                <hr class="my-5">
                                                <p class="mb-4 text-lg">Does the company plan to compile a sustainability
                                                    strategy?</p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 2">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Did the company publicly report its sustainability
                                                    goals, activities and results for the assessment year? Please provide a
                                                    link to the report.
                                                </p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                                <hr class="my-5">
                                                <p class="mb-4 text-lg">Does the company plan to publicly report its
                                                    sustainability goals, activities and results?</p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Has the company conducted an ESG double materiality
                                                    assessment to evaluate its impact, risks, and opportunities pertaining
                                                    to ESG?
                                                </p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes (please specify the sustainability
                                                            matters, risks, and opportunities you consider most
                                                            important)</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                                <hr class="my-5">
                                                <p class="mb-4 text-lg">Does the company plan to conduct an ESG double
                                                    materiality assessment?</p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                                <hr class="my-5">
                                                <p class="mb-4 text-lg">Have you assessed your company's main ESG impact
                                                    areas, risks, and opportunities in another way?</p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes (please specify the sustainability
                                                            matters, risks, and opportunities you consider most
                                                            important)</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 4">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Is there a specialist, manager or a dedicated team
                                                    within the company responsible for sustainability??
                                                </p>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Yes</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">Not yet, but we plan to hire</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="flex items-center cursor-pointer">
                                                        <input type="radio" name="custom_radio2" class="form-radio" />
                                                        <span class="text-lg">No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                    {{-- Stepper Content (End) --}}

                                    {{-- Stepper Button (Start) --}}
                                    <div class="flex justify-between">
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 1"
                                            @click="activeTab--">Back</button>
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 4"
                                            @click="activeTab++">Next</button>
                                    </div>
                                    {{-- Stepper Button (End) --}}
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </form>
@endsection
