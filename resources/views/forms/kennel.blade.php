@extends('layouts.master')

@section('content')
    <section class="mt-24">
        <x-registration-grid />
    </section>
    <section>
        <div class="mt-10 text-center text-4xl font-medium">Bully Pedex Kennel Club Permanent</div>
        <div class="text-center text-4xl font-medium">Registration</div>
    </section>
    <section class="container mx-auto my-20">
        <div class="mx-10 text-3xl font-medium lg:mx-0">Owner Information</div>
        <form class="mx-10 lg:mx-0" action="">
            <div class="content mt-10 mb-3 text-xl font-medium">Owner Name</div>

            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="First Name"><br>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your first name </p>
                </div>
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="Last Name"><br>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your last name </p>
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Email</div>
                    <input type="email" class="width rounded-md" placeholder="ex: myname@example.com"><br>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your email </p>
                </div>
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Phone Number</div>
                    <input type="tel" class="width rounded-md" placeholder="(000)000-0000"><br>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your phone number </p>
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Address</div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <select class="width rounded-md" value="">
                        <option value="" selected disabled hidden>Select Country</option>
                        <option value="">Country 1</option>
                        <option value="">Country 2</option>
                        <option value="">Country 3</option>
                        <option value="">Country 4</option>
                    </select>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your country </p>
                </div>
                <div class="flex-1">
                    <select class="width rounded-md" value="">
                        <option value="" selected disabled hidden>Select State</option>
                        <option value="">State 1</option>
                        <option value="">State 2</option>
                        <option value="">State 3</option>
                        <option value="">State 4</option>
                    </select>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your state </p>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">PUP NAME</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="mt-10 flex items-center">
                <div class="flex-1">
                    <div class="content mb-3 text-xl font-medium">Copy of BPKC certificate</div>
                    <label style="background: white;" for="dropzone-file"
                        class="dark:hover:bg-bray-800 flex h-44 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-500 bg-gray-50 hover:bg-gray-100 dark:border-gray-400 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                                    file</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <div class="mt-10 flex items-center">
                <div class="flex-1">
                    <div class="content mb-3 text-xl font-medium">Pup Photo</div>
                    <label style="background: white;" for="dropzone-file"
                        class="dark:hover:bg-bray-800 flex h-44 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-500 bg-gray-50 hover:bg-gray-100 dark:border-gray-400 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                                    file</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
        </form>
    </section>
@endsection
