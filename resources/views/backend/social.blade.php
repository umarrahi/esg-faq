@extends('backend.layouts.app')

@section('title')
    Social - ESG FAQs
@endsection

@section('content')
    <form class="space-y-8 pt-5" x-data="form">
        <div class="panel">
            <div class="mb-5">
                <h5 class="text-xl font-bold dark:text-white-light">Social</h5>
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
                                Own Workforce
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '2' }"
                                @click="tab = '2'">
                                Consumers and End-Users
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '3' }"
                                @click="tab = '3'">
                                Affected Communities
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Tabs Handler (End) --}}

                <div class="flex-1 pt-5 text-sm">
                    {{-- Own Workforce --}}
                    <template x-if="tab === '1'">
                        <div class="active">
                            <h4 class="text-xl font-semibold">ESG self-assessment 2024, Requested by ESGRID</h4>
                            <!-- Stepper No (Start) -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    {{-- Stepper No (Start) --}}
                                    <div class="relative z-[1] my-10">
                                        <div class="bg-primary w-[15%] h-1 absolute ltr:left-0 rtl:right-0 top-[30px] m-auto -z-[1] transition-[width]"
                                            :class="{
                                                'w-[15%]': activeTab === 1,
                                                'w-[48%]': activeTab ===
                                                    2,
                                                'w-[81%]': activeTab === 3
                                            }">
                                        </div>
                                        <ul class="mb-5 grid grid-cols-3">
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-lg font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-lg font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-lg font-semibold">3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stepper No (End) --}}

                                    {{-- Stepper Content (Start) --}}
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Is there an established diversity and inclusion policy ensuring a balanced representation across your workforce?
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
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 2">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Are fair compensation and benefits provided equitably across all employee groups?
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
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Do you offer programs and resources that support employee well-being and professional growth?
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

                    {{-- Consumers and End-Users --}}
                    <template x-if="tab === '2'">
                        <div>
                            <h4 class="text-xl font-semibold">ESG self-assessment 2024, Requested by ESGRID</h4>
                            <!-- Stepper -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    {{-- Stepper No (Start) --}}
                                    <div class="relative z-[1] my-10">
                                        <div class="bg-primary w-[15%] h-1 absolute ltr:left-0 rtl:right-0 top-[30px] m-auto -z-[1] transition-[width]"
                                            :class="{
                                                'w-[15%]': activeTab === 1,
                                                'w-[48%]': activeTab ===
                                                    2,
                                                'w-[81%]': activeTab === 3
                                            }">
                                        </div>
                                        <ul class="mb-5 grid grid-cols-3">
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-lg font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-lg font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-lg font-semibold">3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stepper No (End) --}}

                                    {{-- Stepper Content (Start) --}}
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Is there a responsible marketing strategy in place that ensures transparent communication with consumers?
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
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 2">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Do you have policies that safeguard customer data and ensure privacy?
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
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Are sustainable product practices embedded into your product design and service delivery?
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
                        </div>
                    </template>

                    {{-- Affordable Products and Services --}}
                    <template x-if="tab === '3'">
                        <div>
                            <h4 class="text-xl font-semibold">ESG self-assessment 2024, Requested by ESGRID</h4>
                            <!-- Stepper -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    {{-- Stepper No (Start) --}}
                                    <div class="relative z-[1] my-10">
                                        <div class="bg-primary w-[15%] h-1 absolute ltr:left-0 rtl:right-0 top-[30px] m-auto -z-[1] transition-[width]"
                                            :class="{
                                                'w-[15%]': activeTab === 1,
                                                'w-[48%]': activeTab ===
                                                    2,
                                                'w-[81%]': activeTab === 3
                                            }">
                                        </div>
                                        <ul class="mb-5 grid grid-cols-3">
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-lg font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-lg font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-14 h-14 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-lg font-semibold">3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stepper No (End) --}}

                                    {{-- Stepper Content (Start) --}}
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Does your company offer affordable products or services targeted at low-income communities?
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
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 2">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Are there financial support programs or subsidies available to assist customers in need?
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
                                            </div>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">Is there a regular evaluation of the social impact of your pricing strategies?
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
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </form>
@endsection
