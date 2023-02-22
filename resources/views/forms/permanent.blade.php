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
                    <input type="text" class="width rounded-md" placeholder="First Name">
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <input type="text" class="width rounded-md" placeholder="Last Name">
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
            </div>
            <div class="lg:flex lg:space-x-24">
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Email</div>
                    <input type="email" class="width rounded-md" placeholder="ex: myname@example.com">
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Phone</div>
                    <input type="tel" class="width rounded-md" placeholder="(000)000-0000">
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your first name </span>
                    @endif
                </div>
            </div>
            <div class="content mt-10 mb-3 text-xl font-medium">Address</div>
            <div class="lg:flex lg:space-x-24" x-data="{ country: 'US' }">
                <div class="flex-1">
                    <select x-model="country" class="width rounded-md">
                        <option value="US">United States</option>
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
                    <template x-if="country === 'US'">
                        <select id="second-element" class="width rounded-md">
                            <option value="">Select State</option>
                            <option value="AL">Alabama</option>
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
                            Please enter your state </span>
                    @endif
                </div>
            </div>
            <div class="mt-10 mb-3 text-3xl font-medium">Dog Information</div>
            <div class="lg:w-2/4 lg:pr-12">
                <div>
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
                    <input checked type="radio" value="" name="sex" id="male"
                        class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                    <label for="male" class="ml-2 mr-3 text-sm font-medium text-gray-900">Male</label>
                    <input id="female" type="radio" value="" name="sex" o
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
                    @if (false)
                        <span class="ml-1 font-light text-red-700">
                            Please enter your breed </span>
                    @endif
                </div>
                <div class="flex-1">
                    <div class="content mt-10 mb-3 text-xl font-medium">Color</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class=" mt-10 mb-3 text-xl font-medium"><span class="content">Sire Name</span> as shown on
                        Pedigree</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="flex space-x-24">
                <div class="flex-1">
                    <div class=" mt-10 mb-3 text-xl font-medium"><span class="content">Dam Name</span> as shown on
                        Pedigree</div>
                    <input type="text" class="width rounded-md"><br>
                </div>
            </div>
            <div class="mt-10 flex items-center">
                <div class="flex-1">
                    <div class="content mb-3 text-xl font-medium">Photo of the Dog</div>
                    <label style="background: white;" for="dropzone-file"
                        class="dark:hover:bg-bray-800 flex h-44 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-500 bg-gray-50 hover:bg-gray-100 dark:border-gray-400 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                            <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                            <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                                    file</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, HEIF, GIF & PDF upto
                                10MB</p>
                        </div>
                        <input id="dropzone-file" accept="image/*" type="file" class="hidden" />

                    </label>
                </div>
            </div>
            <div>
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
                <div class="shadow rounded divide-y divide-gray-400">
                    <h1 class="text-center text-3xl font-bold py-3 bg-gray-100">Invoice</h1>
                    <div class="flex justify-between px-16">
                        <h1 class="flex-1 px-2 py-3  text-lg text-gray-900">Registration Fee</h1>
                        <h2 class="flex-1 px-2 py-3  text-lg text-gray-900 text-right">$45</h2>
                    </div>
                    <div class="flex justify-between px-16">
                        <h1 class="flex-1 px-2 py-3 text-lg text-gray-900">3 Days Shipping</h1>
                        <h2 class="flex-1 px-2 py-3 text-lg text-gray-900 text-right">$40</h2>
                    </div>
                    <div class="flex justify-between px-16">
                        <h1 class="flex-1 px-2 py-3 text-lg text-gray-900">International Shipping</h1>
                        <h2 class="flex-1 px-2 py-3 text-lg text-gray-900 text-right">$40</h2>
                    </div>
                    <div class="flex justify-between px-16 bg-gray-100">
                        <h1 class="text-lg flex-1 px-2 py-3 font-bold text-gray-900">Total</h1>
                        <h2 class="text-lg flex-1 px-2 py-3 font-bold text-gray-900 text-right">$125</h2>
                    </div>
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





            <input type="file" />




        </form>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
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

        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
    </script>
@endpush
