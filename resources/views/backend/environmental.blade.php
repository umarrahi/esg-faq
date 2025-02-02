@extends('backend.layouts.app')

@section('title')
    Environmental - ESG FAQs
@endsection

@section('content')
    <form class="space-y-8 pt-5" x-data="form">
        <div class="panel">
            <div class="mb-5">
                <h5 class="text-xl font-bold dark:text-white-light">Environmental</h5>
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
                                Climate Change
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '2' }"
                                @click="tab = '2'">
                                Pollution
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '3' }"
                                @click="tab = '3'">
                                Circular Economy
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '4' }"
                                @click="tab = '4'">
                                Water and Marine Resources
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === '5' }"
                                @click="tab = '5'">
                                Biodiversity
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Tabs Handler (End) --}}

                <div class="flex-1 pt-5 text-sm">
                    {{-- Climate Change --}}
                    <template x-if="tab === '1'">
                        <div class="active">
                            <h4 class="text-xl font-semibold">ESG self-assessment 2024, Requested by ESGRID</h4>
                            <!-- Stepper No (Start) -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    {{-- Stepper No (Start) --}}
                                    <div class="my-10">
                                        <ul class="flex flex-wrap justify-between item-center gap-4">
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-md font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-md font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-md font-semibold">3</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 4 }"
                                                    @click="activeTab = 4">
                                                    <span class="text-md font-semibold">4</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 5 }"
                                                    @click="activeTab = 5">
                                                    <span class="text-md font-semibold">5</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 6 }"
                                                    @click="activeTab = 6">
                                                    <span class="text-md font-semibold">6</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 7 }"
                                                    @click="activeTab = 7">
                                                    <span class="text-md font-semibold">7</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 8 }"
                                                    @click="activeTab = 8">
                                                    <span class="text-md font-semibold">8</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 9 }"
                                                    @click="activeTab = 9">
                                                    <span class="text-md font-semibold">9</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stepper No (End) --}}

                                    {{-- Stepper Content (Start) --}}
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <p class="mb-4 text-lg">
                                                    Does the company measure its total energy consumption? If yes, please
                                                    indicate the total energy consumption of the company over the assessment
                                                    period (MWh)?
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
                                                <p class="mb-4 text-lg">Are there clear targets and strategies in place to
                                                    reduce your company’s greenhouse gas emissions?
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
                                                <p class="mb-4 text-lg">Does your company significantly incorporate
                                                    renewable energy sources in its operations?
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
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 9"
                                            @click="activeTab++">Next</button>
                                    </div>
                                    {{-- Stepper Button (End) --}}
                                </div>
                            </div>
                            <!-- Stepper No (End) -->
                        </div>
                    </template>

                    {{-- Pollution --}}
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
                                                <p class="mb-4 text-lg">Do you have monitoring systems to track and report
                                                    on air and water emissions?
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
                                                <p class="mb-4 text-lg">Are there robust policies to manage and safely
                                                    dispose of hazardous waste generated in your operations?
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
                                                <p class="mb-4 text-lg">Is your company committed to reducing plastic waste
                                                    and other pollutants in its supply chain?
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

                    {{-- Circular Economy --}}
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
                                                <p class="mb-4 text-lg">Do you have a formally documented ESG policy in
                                                    place that guides your business operations?"
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
                                                <p class="mb-4 text-lg">Is there a process for engaging key
                                                    stakeholders—such as employees, investors, and community members—in ESG
                                                    discussions?
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
                                                <p class="mb-4 text-lg">Are your ESG performance metrics regularly
                                                    monitored and publicly disclosed?
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

                    {{-- Water and Marine Resources --}}
                    <template x-if="tab === '4'">
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
                                                <p class="mb-4 text-lg">Do you have a formally documented ESG policy in
                                                    place that guides your business operations?"
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
                                                <p class="mb-4 text-lg">Is there a process for engaging key
                                                    stakeholders—such as employees, investors, and community members—in ESG
                                                    discussions?
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
                                                <p class="mb-4 text-lg">Are your ESG performance metrics regularly
                                                    monitored and publicly disclosed?
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

                    {{-- Biodiversity --}}
                    <template x-if="tab === '5'">
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
                                                <p class="mb-4 text-lg">Do you have a formally documented ESG policy in
                                                    place that guides your business operations?"
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
                                                <p class="mb-4 text-lg">Is there a process for engaging key
                                                    stakeholders—such as employees, investors, and community members—in ESG
                                                    discussions?
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
                                                <p class="mb-4 text-lg">Are your ESG performance metrics regularly
                                                    monitored and publicly disclosed?
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
