@extends('layouts.master')

@section('content')
    <section class="pt-24">
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
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
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
                        <div
                            class="text-medium rounded-full bg-purple-500 px-2 py-1 font-medium text-white lg:px-3 lg:py-2 lg:text-lg">
                            Click here to add Puppy
                        </div>
                    </a>
                </div>
                <div class="border border-gray-500 lg:overflow-x-hidden mt-10 overflow-x-scroll rounded-md shadow-xl">
                    <div class="">
                        <div class="shadow rounded divide-x divide-gray-400 md:divide-gray-100 flex lg:flex-col">
                            <div class="lg:flex justify-between  px-5 lg:px-0">
                                <h2 class="text-left lg:text-center flex-1 font-bold py-3  text-xl text-gray-900">ID</h2>
                                <h2 class="text-left lg:text-center flex-1 font-bold  py-3  text-xl text-gray-900 ">Name
                                </h2>
                                <h2 class="text-left lg:text-center flex-1 font-bold py-3  text-xl text-gray-900 ">Sex</h2>
                                <h2 class="text-left lg:text-center flex-1 font-bold py-3  text-xl text-gray-900 ">Color
                                </h2>
                                <h2 class="text-left lg:text-center flex-1 font-bold py-3  text-xl text-gray-900 ">Pattern
                                </h2>
                                <h2 class="text-left lg:text-center flex-1 font-bold py-3  text-xl text-gray-900 ">Action
                                </h2>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between  px-5 lg:px-0">
                                <div class="text-center flex-1  py-3  text-lg text-gray-900">1</div>
                                <div class="text-center flex-1 w-fit  text-lg text-gray-900 ">
                                    <input
                                        class="focus:border-gray-600 focus:ring-0 w-[100px] text-center placeholder:text-gray-900 text-lg border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600"
                                        type="text" placeholder="793795-1">
                                </div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><select
                                        class="focus:border-gray-600 focus:ring-0 pt-1 pb-1 border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600">
                                        <option value="" selected>male</option>
                                        <option value="">female</option>
                                    </select></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><input type="color"
                                        id="favcolor" name="favcolor" value="#9352A4"></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><select
                                        class=" focus:border-gray-600 focus:ring-0 pt-1 pb-1 border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600">
                                        <option value="" selected>none</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><i
                                        class="fa fa-close cursor-pointer text-3xl"></i></div>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-5 lg:px-0">
                                <div class="text-center flex-1  py-3  text-lg text-gray-900">2</div>
                                <div class="text-center flex-1 w-fit  text-lg text-gray-900 ">
                                    <input
                                        class="focus:border-gray-600 focus:ring-0 w-[100px] text-center placeholder:text-gray-900 text-lg border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600"
                                        type="text" placeholder="793795-2">
                                </div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><select
                                        class="focus:border-gray-600 focus:ring-0 pt-1 pb-1 border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600">
                                        <option value="" selected>male</option>
                                        <option value="">female</option>
                                    </select></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><input type="color"
                                        id="favcolor" name="favcolor" value="#9352A4"></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><select
                                        class="focus:border-gray-600 focus:ring-0 pt-1 pb-1 border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600">
                                        <option value="" selected>none</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><i
                                        class="fa fa-close cursor-pointer text-3xl"></i></div>
                            </div>
                            <div class="flex flex-col lg:flex-row justify-between px-5 lg:px-0">
                                <div class="text-center flex-1  py-3  text-lg text-gray-900">3</div>
                                <div class="text-center flex-1 w-fit  text-lg text-gray-900 ">
                                    <input
                                        class="focus:border-gray-600 focus:ring-0 w-[100px] text-center placeholder:text-gray-900 text-lg border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600"
                                        type="text" placeholder="793795-3">
                                </div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><select
                                        class="focus:border-gray-600 focus:ring-0 pt-1 pb-1 border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600">
                                        <option value="" selected>male</option>
                                        <option value="">female</option>
                                    </select></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><input type="color"
                                        id="favcolor" name="favcolor" value="#9352A4"></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><select
                                        class="focus:border-gray-600 focus:ring-0 pt-1 pb-1 border-t-0 border-l-0 border-r-0  border-b-4 border-gray-400 hover:border-gray-600">
                                        <option value="" selected>none</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select></div>
                                <div class="text-center flex-1  py-3  text-lg text-gray-900 "><i
                                        class="fa fa-close cursor-pointer text-3xl"></i></div>
                            </div>
                        </div>
                    </div>
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
                    <div class="content mt-10 mb-3 text-xl font-medium">SIRE BPKC#</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Sire owner Name</div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="First Name"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="Last Name"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Email</div>
                    <input type="email" class="width rounded-md" placeholder="ex: myname@example.com"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Phone</div>
                    <input type="tel" class="width rounded-md" placeholder="(000)000-0000"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
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
                    <div class="content mt-10 mb-3 text-xl font-medium">Dam BPKC#</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Owner of Litter</div>

            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="First Name"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="Last Name"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Email</div>
                    <input type="email" class="width rounded-md" placeholder="ex: myname@example.com"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Phone</div>
                    <input type="tel" class="width rounded-md" placeholder="(000)000-0000"><br>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Address</div>
            <div x-data="{ country: 'US' }" class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <select x-model="country" class="width rounded-md">
                        <option selected value="US">United States</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Aland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and Mcdonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="XK">Kosovo</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthelemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="CS">Serbia and Montenegro</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.s.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <template x-if="country==='US'">
                        <select class="width rounded-md">
                            <option value="">Select State</option>
                            <option selceted value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </template>
                    <template x-if="country !== 'US'">
                        <div>
                            <input class="width rounded-md" type="text" placeholder="Please enter your state">
                        </div>
                    </template>
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
            </div>
            <div class="lg:flex lg:space-x-24 mt-5">
                <div class="flex-1">
                    <input type="email" class="width rounded-md" placeholder="STREET ADDRESS">
                </div>
                <div class="flex-1">
                    <input type="tel" class="width rounded-md" placeholder="STREET ADDRESS 2 (OPTIONAL)">
                </div>
            </div>
            <div class="lg:flex lg:space-x-24 mt-5">
                <div class="flex-1">
                    <input type="email" class="width rounded-md" placeholder="CITY">
                </div>
                <div class="flex-1">
                    <input type="tel" class="width rounded-md" placeholder="Postal/Zip Code">
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-1">
                    <div class="flex justify-between">
                        <div class="content mt-10 mb-3 text-xl font-medium">Owner Signature</div>
                        <button class="mt-10 text-lg font-medium text-green-500 hover:text-green-800"
                            id="clear">Clear</button>
                    </div>
                    <div class="wrapper border border-gray-500">
                        <canvas id="signature-pad" class="signature-pad"></canvas>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <a href="#">
                    <input class="bg-[#9352A4] cursor-pointer text-white px-10 py-2 text-xl rounded-md " type="submit">
                </a>
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
