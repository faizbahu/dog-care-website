@extends('layouts.master')

@section('content')
    <section class="mt-24">
        <x-registration-grid />
    </section>
    <section>
        <div class="mt-10 text-center text-4xl font-medium">LITTER INFORMATION</div>
    </section>
    <section class="container my-20 mx-auto">
        <div class="mx-10 text-3xl font-medium lg:mx-0">LITTER INFORMATION</div>
        <form class="mx-10 lg:mx-0" action="">
            <div class="lg:flex lg:space-x-24">
                <div class="lg:w-2/4 lg:pr-12">
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
            </div>
            <div class="relative flex space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Breeding Date</div>
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
            <div class="relative flex space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Date of Birth</div>
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
            <div class="">
                <div class="content mt-10 mb-3 text-xl font-medium">Pup 1. Add DNA# BOX IN CASE THEY HAVE IT</div>
                <div class="flex justify-between">
                    <p class="text-lg">Puppies</p>
                    <a href="">
                        <div class="text-medium rounded-full bg-purple-500 px-2 py-1 font-medium text-white lg:px-3 lg:py-2 lg:text-lg">
                            Click here to add Puppy
                        </div>
                    </a>
                </div>
                <div class="horizontal-div overflow-x-scroll lg:overflow-x-hidden">
                    <table class="horizontal mt-10 mb-3 w-full min-w-[520px] table-auto lg:min-w-full">
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
                        <tbody class="adding-height text-center">
                            <tr class="">
                                <td class="">1</td>
                                <td class="border border-primary_black">793795-1</td>
                                <td><select class="border border-primary_black pt-1 pb-1">
                                        <option value="" selected>male</option>
                                        <option value="">female</option>
                                    </select></td>
                                <td class="border border-primary_black px-2">
                                    <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                                </td>
                                <td><select class="border border-primary_black pt-1 pb-1">
                                        <option value="" selected>none</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select></td>
                                <td><i class="fa fa-close cursor-pointer text-3xl"></i></td>
                            </tr>
                        </tbody>
                        <tbody class="adding-height text-center">
                            <tr class="">
                                <td class="">2</td>
                                <td class="border border-primary_black">793795-2</td>
                                <td><select class="border border-primary_black pt-1 pb-1">
                                        <option value="" selected>male</option>
                                        <option value="">female</option>
                                    </select></td>
                                <td class="border border-primary_black px-2">
                                    <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                                </td>
                                <td><select class="border border-primary_black pt-1 pb-1">
                                        <option value="" selected>none</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select></td>
                                <td><i class="fa fa-close cursor-pointer text-3xl"></i></td>
                            </tr>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-10 mb-3 text-3xl font-medium">Sire Information</div>
            <div class="flex">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="content mt-10 mb-3 text-xl font-medium">Registered Name of Sire</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="flex">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="content mt-10 mb-3 text-xl font-medium">SIRE BPKC</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Sire owner Name</div>

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
            <div class="flex">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="content mt-10 mb-3 text-xl font-medium">Registered Name of dam</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="flex">
                <div class="lg:w-2/4 lg:pr-12">
                    <div class="content mt-10 mb-3 text-xl font-medium">Dam BPKC</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Owner of Litter</div>

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
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let signaturePad = new SignaturePad(document.getElementById("signature-pad"), {
                minWidth: 100,
                maxWidth: 100,
                backgroundColor: "rgba(255, 255, 255, 0)",
                penColor: "rgb(0, 0, 0)"
            });

            document.getElementById("clear").addEventListener("click", (e) => {
                e.preventDefault();
                signaturePad.clear();
            });
        });
    </script>
@endpush
