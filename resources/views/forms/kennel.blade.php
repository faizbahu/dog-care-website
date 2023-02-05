@extends('layouts.master')

@section('content')
    <section class="mt-24">
        <x-registration-grid/>
    </section>
    <section>
        <div class="text-center text-4xl font-medium mt-10">Bully Pedex Kennel Club Permanent</div>
        <div class="text-center text-4xl font-medium">Registration</div>
    </section>
    <section class="container mx-auto my-20">
        <div class="text-3xl font-medium mx-10 lg:mx-0">Owner Information</div>
        <form class="mx-10 lg:mx-0" action="">
            <div class="font-medium mt-10 text-xl mb-3 content">Owner Name</div>

            <div class="lg:flex lg:space-x-24">
                <div class="flex-1 ">
                    <input type="text" class="rounded-md width" placeholder="First Name"><br>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your first name </p>
                </div>
                <div class="flex-1 ">
                    <input type="text" class="rounded-md width" placeholder="Last Name"><br>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your last name </p>
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1 ">
                    <div class="font-medium mt-10 text-xl mb-3 content">Email</div>
                    <input type="email" class="rounded-md width" placeholder="ex: myname@example.com"><br>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your email </p>
                </div>
                <div class="flex-1 ">
                    <div class="font-medium mt-10 text-xl mb-3 content">Phone Number</div>
                    <input type="tel" class="rounded-md width" placeholder="(000)000-0000"><br>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your phone number </p>
                </div>
            </div>
            <div class="font-medium mt-10 text-xl mb-3 content">Address</div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <select class="rounded-md width" value="">
                        <option value="" selected disabled hidden>Select Country</option>
                        <option value="">Country 1</option>
                        <option value="">Country 2</option>
                        <option value="">Country 3</option>
                        <option value="">Country 4</option>
                    </select>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your country </p>
                </div>
                <div class="flex-1 ">
                    <select class="rounded-md width" value="">
                        <option value="" selected disabled hidden>Select State</option>
                        <option value="">State 1</option>
                        <option value="">State 2</option>
                        <option value="">State 3</option>
                        <option value="">State 4</option>
                    </select>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your state </p>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">PUP NAME</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="flex items-center mt-10 ">
                <div class="flex-1">
                    <div class="font-medium text-xl mb-3 content">Copy of BPKC certificate</div>
                    <label style="background: white;" for="dropzone-file"
                           class="flex flex-col items-center justify-center h-44 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a file</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                                                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden"/>
                    </label>
                </div>
            </div>
            <div class="flex items-center mt-10 ">
                <div class="flex-1">
                    <div class="font-medium text-xl mb-3 content">Pup Photo</div>
                    <label style="background: white;" for="dropzone-file"
                           class="flex flex-col items-center justify-center h-44 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a file</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                                                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden"/>
                    </label>
                </div>
            </div>
        </form>
    </section>
@endsection
