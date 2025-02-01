@extends('backend.layouts.app')

@section('title')
    Social - ESG FAQs
@endsection

@section('content')
    <div class="space-y-8 pt-5" x-data="form">
        <div class="panel">
            <div class="mb-5">
                <h5 class="text-lg font-semibold dark:text-white-light">Social</h5>
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
                            <h4 class="mb-4 text-2xl font-semibold">We move your world!</h4>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip
                                ex ea commodo consequat.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip
                                ex ea commodo consequat.
                            </p>
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
