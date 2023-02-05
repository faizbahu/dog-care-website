@extends('layouts.master')

@section('content')
    <section class="mt-24">
        <x-registration-grid/>
    </section>
    <section>
        <div class="text-center text-4xl font-medium mt-10">Bully Pedex Permanent Registration</div>
        <div class="text-center text-4xl font-medium">Application Form</div>
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
                    <select class="rounded-md width">
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
                    <select class="rounded-md width">
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
            <div class="text-3xl font-medium mt-10 mb-3">Dog Information</div>
            <div class="lg:w-2/4 lg:pr-12">
                <div class="">
                    <div class="font-medium mt-10 text-xl mb-3 content">Registering Dog Name as shown on Pedigree
                    </div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>

            <div class="relative flex space-x-24">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">Date Of Birth</div>
                    <div class="flex space-x-2">
                        <select class="rounded-md width ">
                            <option value="" selected disabled hidden>Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <select class="rounded-md width ">
                            <option value="" selected disabled hidden>Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                        </select>
                        <select class="rounded-md width ">
                            <option value="" selected disabled hidden>Year</option>
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">Sex</div>
                    <input checked type="radio" value="" name=""
                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600">
                    <label for="male" class="ml-2 text-sm font-medium text-gray-900 mr-3 ">Male</label>
                    <input id="" type="radio" value="" name=""
                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600">
                    <label for="female" class="ml-2 text-sm font-medium text-gray-900 ">Female</label>
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">

                <div class="flex-1 ">
                    <div class="font-medium mt-10 text-xl mb-3 content">Breed</div>
                    <select class="rounded-md width">
                        <option value="" selected disabled hidden>Select Breed</option>
                        <option value="">American Bully</option>
                        <option value="">French Bulldog</option>
                        <option value="">English Bulldog</option>
                    </select>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your breed </p>
                </div>
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">Color</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">Sire Name</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="flex items-center mt-10 ">
                <div class="flex-1">
                    <div class="font-medium text-xl mb-3 content">Photo of the Dog</div>
                    <label style="background: white;" for="dropzone-file"
                           class="flex flex-col items-center justify-center h-44 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                           file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                                                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden"/>
                    </label>
                </div>
            </div>
            <div class="text-3xl font-medium mt-10 mb-3">Required Documentation</div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3"><span class="content">Copy of Current Pedigree
                  </span> (Upload Front side)
                    </div>
                    <label style="background: white;" for="dropzone-file"
                           class="flex flex-col items-center justify-center h-44 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                           file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                                                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden"/>
                    </label>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3"><span class="content">Copy of Current Pedigree
                  </span> (Upload Inside)
                    </div>
                    <label style="background: white;" for="dropzone-file"
                           class="flex flex-col items-center justify-center h-44 border-2 border-gray-500 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-400 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                           file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                                                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden"/>
                    </label>
                </div>
            </div>
            <div class="">
                <div class="flex-1 ">
                    <div class="font-medium mt-10 text-xl mb-3 content">Dog Registration Fee</div>
                    <select class="rounded-md  ">
                        <option value="" selected disabled hidden>Select</option>
                        <option value="">7 Days shipping 10$</option>
                        <option value="">3 Days shipping 40$</option>
                        <option value="">Next Day shipping 60$</option>
                    </select>
                </div>
            </div>
            <div class="mt-10 mb-3">
                <table class="table-auto border-2 border-primary_black rounded-md w-full">
                    <thead>
                    <tr>
                        <th colspan="2" class="text-xl  font-bold px-6 py-4 text-gray-900  whitespace-nowrap">Invoices
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border-2 border-primary_black font-medium px-6 py-4 text-gray-900 text-xl  whitespace-nowrap">
                            Registration Fees
                        </td>
                        <td class="border-2 border-primary_black font-medium px-6 py-4 text-gray-900 text-lg  whitespace-nowrap">
                            100$
                        </td>
                    </tr>
                    <tr>
                        <td class="border-2 border-primary_black font-medium px-6 py-4 text-gray-900 text-xl  whitespace-nowrap">
                            Shipping Fees
                        </td>
                        <td class="border-2 border-primary_black font-medium px-6 py-4 text-gray-900 text-lg  whitespace-nowrap">
                            200$
                        </td>
                    </tr>
                    <tr>
                        <td class="border-2 border-primary_black font-medium px-6 py-4 text-gray-900 text-xl  whitespace-nowrap">
                            International Fees
                        </td>
                        <td class="border-2 border-primary_black font-medium px-6 py-4 text-gray-900 text-lg  whitespace-nowrap">
                            300$
                        </td>
                    </tr>
                    <tr>
                        <td class="border-2 border-primary_black font-bold px-6 py-4 text-gray-900 text-xl  whitespace-nowrap">
                            Total
                        </td>
                        <td class="border-2 border-primary_black font-bold px-6 py-4 text-gray-900 text-lg  whitespace-nowrap">
                            600$
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="flex justify-between">
                        <div class="font-medium mt-10 text-xl mb-3 content">Owner Signature</div>
                        <button class="font-medium mt-10 text-lg text-green-500 hover:text-green-800" id="clear">Clear</button>
                    </div>
                    <div class="wrapper border-gray-500 border">
                        <canvas id="signature-pad" class="signature-pad"></canvas>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                minWidth: 100,
                maxWidth: 100,
                backgroundColor: 'rgba(255, 255, 255, 0)',
                penColor: 'rgb(0, 0, 0)'
            });

            document.getElementById('clear').addEventListener('click', (e) => {
                e.preventDefault()
                signaturePad.clear();
            });
        })
    </script>
@endpush
