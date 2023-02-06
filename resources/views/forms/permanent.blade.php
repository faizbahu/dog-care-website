@extends('layouts.master')

@section('content')
    <section class="pt-24">
        <x-registration-grid />
    </section>
    <section>
        <div class="mt-10 text-center text-4xl font-medium">Bully Pedex Permanent Registration</div>
        <div class="text-center text-4xl font-medium">Application Form</div>
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
                    <select class="width rounded-md">
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
                    <select class="width rounded-md">
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
            <div class="mt-10 mb-3 text-3xl font-medium">Dog Information</div>
            <div class="lg:w-2/4 lg:pr-12">
                <div class="">
                    <div class="content mt-10 mb-3 text-xl font-medium">Registering Dog Name as shown on Pedigree
                    </div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>

            <div class="relative flex space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Date Of Birth</div>
                    <div class="flex space-x-2">
                        <select class="width rounded-md">
                            <option value="" selected disabled hidden>Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <select class="width rounded-md">
                            <option value="" selected disabled hidden>Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                        </select>
                        <select class="width rounded-md">
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
                    <div class="content mt-10 mb-3 text-xl font-medium">Sex</div>
                    <input checked type="radio" value="" name=""
                        class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                    <label for="male" class="ml-2 mr-3 text-sm font-medium text-gray-900">Male</label>
                    <input id="" type="radio" value="" name=""
                        class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                    <label for="female" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">

                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Breed</div>
                    <select class="width rounded-md">
                        <option value="" selected disabled hidden>Select Breed</option>
                        <option value="">American Bully</option>
                        <option value="">French Bulldog</option>
                        <option value="">English Bulldog</option>
                    </select>
                    <p class="ml-1 font-light text-red-700">
                        Please enter your breed </p>
                </div>
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Color</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Sire Name</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="mt-10 flex items-center">
                <div class="flex-1">
                    <div class="content mb-3 text-xl font-medium">Photo of the Dog</div>
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
                                    file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <div class="mt-10 mb-3 text-3xl font-medium">Required Documentation</div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="mt-10 mb-3 text-xl font-medium"><span class="content">Copy of Current Pedigree
                        </span> (Upload Front side)
                    </div>
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
                                    file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="mt-10 mb-3 text-xl font-medium"><span class="content">Copy of Current Pedigree
                        </span> (Upload Inside)
                    </div>
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
                                    file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                10MB</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <div class="">
                {{-- <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Dog Registration Fee</div>
                    <select class="rounded-md">
                        <option value="" selected disabled hidden>Select</option>
                        <option value="">7 Days shipping 10$</option>
                        <option value="">3 Days shipping 40$</option>
                        <option value="">Next Day shipping 60$</option>
                    </select>
                </div> --}}
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Dog Registration Fee</div>
                    <select class="width rounded-md">
                        <option value="" selected disabled hidden>Select</option>
                        <option value="">7 Days shipping 10$</option>
                        <option value="">3 Days shipping 40$</option>
                        <option value="">Next Day shipping 60$</option>
                    </select>
                </div>
            </div>
            <div class="mt-10 mb-3 ">
                {{-- <table class="w-full table-auto rounded-md border-2 border-primary_black">
                    <thead>
                        <tr>
                            <th colspan="2" class="whitespace-nowrap px-6 py-4 text-xl font-bold text-gray-900">
                                Invoices
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-xl font-medium text-gray-900">
                                Registration Fees
                            </td>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-lg font-medium text-gray-900">
                                100$
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-xl font-medium text-gray-900">
                                Shipping Fees
                            </td>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-lg font-medium text-gray-900">
                                200$
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-xl font-medium text-gray-900">
                                International Fees
                            </td>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-lg font-medium text-gray-900">
                                300$
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-xl font-bold text-gray-900">
                                Total
                            </td>
                            <td class="whitespace-nowrap border-2 border-primary_black px-6 py-4 text-lg font-bold text-gray-900">
                                600$
                            </td>
                        </tr>
                    </tbody>
                </table> --}}
                <div class="shadow-xl">
                    <h1 class="text-center text-3xl font-bold mb-5">Invoices</h1>
                    <div class="flex justify-between space-x-20 border border-gray-400 text-center rounded-t-lg">
                        <h1 class="flex-1 px-2 py-3 rounded-md  text-lg text-gray-900">Regestraion Fess</h1>
                        <h2 class="flex-1 px-2 py-3 rounded-md  text-lg text-gray-900">100$</h2>
                    </div>
                    <div class="flex justify-between space-x-20 border-l border-r border-gray-400 text-center ">
                        <h1 class="flex-1 px-2 py-3 text-lg text-gray-900">Shipping Fees</h1>
                        <h2 class="flex-1 px-2 py-3 text-lg text-gray-900">200$</h2>
                    </div>
                    <div class="flex justify-between space-x-20 border-l border-r border-t border-gray-400 text-center ">
                        <h1 class="flex-1 px-2 py-3 text-lg text-gray-900">International Fees</h1>
                        <h2 class="flex-1 px-2 py-3 text-lg text-gray-900">300$</h2>
                    </div>
                    <div class="flex justify-between space-x-20  border border-gray-400 text-center rounded-b-lg">
                        <h1 class="text-lg flex-1 px-2 py-3 rounded-md first-letter:text-lg font-bold text-gray-900">Total</h1>
                        <h2 class="text-lg flex-1 px-2 py-3 rounded-md font-bold text-gray-900">600$</h2>
                    </div>
                </div>

            </div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="flex justify-between">
                        <div class="content mt-10 mb-3 text-xl font-medium">Owner Signature</div>
                        <button class="mt-10 text-lg font-medium text-green-500 hover:text-green-800" id="clear">Clear</button>
                    </div>
                    <div class="wrapper border border-gray-500">
                        <canvas id="signature-pad" class="signature-pad"></canvas>
                    </div>
                </div>
            </div>
            <div class="mt-10" >
            <a href="#">
                <input class="bg-[#9352A4] cursor-pointer text-white px-10 py-2 text-xl rounded-md " type="submit">
            </a>
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
