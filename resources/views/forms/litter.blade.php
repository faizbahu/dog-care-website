@extends('layouts.master')

@section('content')
    <section class="mt-24">
        <x-registration-grid/>
    </section>
    <section>
        <div class="text-center text-4xl font-medium mt-10">LITTER INFORMATION</div>
    </section>
    <section class="container mx-auto my-20">
        <div class="text-3xl font-medium mx-10 lg:mx-0">LITTER INFORMATION</div>
        <form class="mx-10 lg:mx-0" action="">
            <div class="lg:flex lg:space-x-24">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="font-medium mt-10 text-xl mb-3 content">Breed</div>
                    <select class="rounded-md width" value="">
                        <option value="" selected disabled hidden>Select Breed</option>
                        <option value="">American Bully</option>
                        <option value="">French Bulldog</option>
                        <option value="">English Bulldog</option>
                    </select>
                    <p class="text-red-700 font-light ml-1">
                        Please enter your breed </p>
                </div>
            </div>
            <div class="relative flex space-x-24">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">Breeding Date</div>
                    <div class="flex space-x-2">
                        <select class="rounded-md width" value="">
                            <option value="" selected disabled hidden>Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <select class="rounded-md width" value="">
                            <option value="" selected disabled hidden>Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                        </select>
                        <select class="rounded-md width" value="">
                            <option value="" selected disabled hidden>Year</option>
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="relative flex space-x-24">
                <div class="flex-1">
                    <div class="font-medium mt-10 text-xl mb-3 content">Date of Birth</div>
                    <div class="flex space-x-2">
                        <select class="rounded-md width " value="">
                            <option value="" selected disabled hidden>Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        <select class="rounded-md width" value="">
                            <option value="" selected disabled hidden>Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                        </select>
                        <select class="rounded-md width" value="">
                            <option value="" selected disabled hidden>Year</option>
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="font-medium mt-10 text-xl mb-3 content">Pup 1. Add DNA# BOX IN CASE THEY HAVE IT</div>
                <div class="flex justify-between">
                    <p class="text-lg">Puppies</p>
                    <a href="">
                        <div class="font-medium text-medium lg:text-lg bg-purple-500 px-2 lg:px-3 py-1 lg:py-2 rounded-full text-white">
                            Click here to add Puppy
                        </div>
                    </a>
                </div>
                <div class="horizontal-div overflow-x-scroll lg:overflow-x-hidden">
                    <table class="table-auto w-full mt-10 mb-3 horizontal min-w-[520px] lg:min-w-full ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Color</th>
                            <th>Patern</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-center adding-height">
                        <tr class="">
                            <td class="">1</td>
                            <td class="border  border-primary_black">793795-1</td>
                            <td><select class="border border-primary_black pt-1 pb-1" value="">
                                    <option value="" selected>male</option>
                                    <option value="">female</option>
                                </select></td>
                            <td class="border border-primary_black px-2">
                                <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                            </td>
                            <td><select class="border border-primary_black  pt-1 pb-1" value="">
                                    <option value="" selected>none</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><i class="fa fa-close text-3xl cursor-pointer"></i></td>
                        </tr>
                        </tbody>
                        <tbody class="text-center adding-height">
                        <tr class="">
                            <td class="">2</td>
                            <td class="border border-primary_black">793795-2</td>
                            <td><select class="border border-primary_black   pt-1 pb-1" value="">
                                    <option value="" selected>male</option>
                                    <option value="">female</option>
                                </select></td>
                            <td class="border border-primary_black px-2">
                                <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                            </td>
                            <td><select class="border border-primary_black  pt-1 pb-1" value="">
                                    <option value="" selected>none</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select></td>
                            <td><i class="fa fa-close text-3xl cursor-pointer"></i></td>
                        </tr>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-3xl font-medium mt-10 mb-3">Sire Information</div>
            <div class="flex ">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="font-medium mt-10 text-xl mb-3 content">Registered Name of Sire</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="flex ">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="font-medium mt-10 text-xl mb-3 content">SIRE BPKC</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="font-medium mt-10 text-xl mb-3 content">Sire owner Name</div>

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
            <div class="flex ">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="font-medium mt-10 text-xl mb-3 content">Registered Name of dam</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="flex ">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="font-medium mt-10 text-xl mb-3 content">Dam BPKC</div>
                    <input type="text" class="rounded-md width"><br>
                </div>
            </div>
            <div class="font-medium mt-10 text-xl mb-3 content">Owner of Litter</div>

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
