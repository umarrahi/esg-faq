@extends('backend.layouts.app')

@section('title')
    General - ESG Form
@endsection

@section('content')
    <div class="space-y-8 pt-5" x-data="form">
        <div class="panel">
            <div class="mb-5">
                <h5 class="text-lg font-semibold dark:text-white-light">General</h5>
            </div>
            <div class="mb-5" x-data="{ tab: 'home' }">
                <div>
                    <ul class="mb-5 mt-3 flex flex-wrap">
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === 'home' }"
                                @click="tab = 'home'">
                                Company Information
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;"
                                class="flex items-center border-t-2 border-transparent bg-[#f6f7f8] p-7 py-3 hover:border-secondary hover:text-secondary dark:bg-transparent dark:hover:bg-[#191e3a]"
                                :class="{ '!border-secondary text-secondary dark:bg-[#191e3a]': tab === 'profile' }"
                                @click="tab = 'profile'">
                                General ESG Practices
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex-1 pt-5 text-sm">
                    <template x-if="tab === 'home'">
                        <div class="active">
                            <h4 class="mb-4 text-xl font-semibold">We move your world!</h4>
                                <!-- icon only -->
                            <div class="mb-5" x-data="{ activeTab: 1 }">
                                <div class="inline-block w-full">
                                    <div class="relative z-[1]">
                                        <div class="bg-primary w-[15%] h-1 absolute ltr:left-0 rtl:right-0 top-[30px] m-auto -z-[1] transition-[width]"
                                            :class="{ 'w-[15%]': activeTab === 1, 'w-[48%]': activeTab ===
                                                2, 'w-[81%]': activeTab === 3 }">
                                        </div>
                                        <ul class="mb-5 grid grid-cols-3">
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 1 }"
                                                    @click="activeTab = 1">
                                                    <span class="text-lg font-semibold">1</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 2 }"
                                                    @click="activeTab = 2">
                                                    <span class="text-lg font-semibold">2</span>
                                                </a>
                                            </li>
                                            <li class="mx-auto">
                                                <a href="javascript:;"
                                                    class="bg-white dark:bg-[#253b5c] border-[3px] border-[#f3f2ee] dark:border-[#1b2e4b] flex justify-center items-center w-10 h-10 rounded-full"
                                                    :class="{ '!border-primary !bg-primary text-white': activeTab === 3 }"
                                                    @click="activeTab = 3">
                                                    <span class="text-lg font-semibold">3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <p class="mb-5">Try the keyboard navigation by clicking arrow left or right!
                                            </p>
                                        </template>
                                        <template x-if="activeTab === 2">
                                            <p class="mb-5">The next and previous buttons help you to navigate through
                                                your content.</p>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <p class="mb-5">Wonderful transition effects.</p>
                                        </template>
                                    </div>
                                    <div class="flex justify-between">
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 1"
                                            @click="activeTab--">Back</button>
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 3"
                                            @click="activeTab++">Next</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </template>
                    <template x-if="tab === 'profile'">
                        <div>
                            <div class="flex items-start">
                                <div class="h-20 w-20 flex-none ltr:mr-4 rtl:ml-4">
                                    <img src="assets/images/profile-34.jpeg" alt="image"
                                        class="m-0 h-20 w-20 rounded-full object-cover ring-2 ring-[#ebedf2] dark:ring-white-dark" />
                                </div>
                                <div class="flex-auto">
                                    <h5 class="mb-4 text-xl font-medium">Media heading</h5>
                                    <p class="text-white-dark">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras
                                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                        nunc ac nisi
                                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </div>
@endsection
