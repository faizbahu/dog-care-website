<div>
    <section class="pt-24">
        <x-registration-grid />
    </section>
    <section>
        <div class="mt-10 text-center text-4xl font-medium">Bully Pedex Permanent Registration</div>
        <div class="text-center text-4xl font-medium">Application Form</div>
    </section>
    <section class="container mx-auto my-20">
        <form class="mx-10 lg:mx-0 space-y-20" wire:submit.prevent="submit">
            <div class="space-y-10">
                <div class="text-3xl font-medium">Owner Information</div>
                <div>
                    <div class="content text-xl font-medium mb-3">Owner Name</div>
                    <div class="lg:flex lg:gap-24 space-y-3 lg:space-y-0">
                        <div class="flex-1">
                            <label for="first_name" class="sr-only">First Name</label>
                            <input type="text" class="width rounded-md" placeholder="First Name" id="first_name"
                                   wire:model.debounce.500ms="first_name">
                            @error('first_name')
                            <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1">
                            <label for="last_name" class="sr-only">Last Name</label>
                            <input type="text" class="width rounded-md" placeholder="Last Name" id="last_name" wire:model.debounce.500ms="last_name">
                            @error('last_name')
                            <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="lg:flex lg:gap-24 space-y-3 lg:space-y-0">
                    <div class="flex-1 space-y-3">
                        <label class="content text-xl font-medium" for="email">Email</label>
                        <input type="email" class="width rounded-md" placeholder="ex: john@example.com" id="email" wire:model.debounce.500ms="email">
                        @error('email')
                        <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex-1 space-y-3">
                        <label class="content text-xl font-medium" for="phone">Phone</label>
                        <input type="tel" class="width rounded-md" placeholder="(000) 000-0000" id="phone" wire:model.debounce.500ms="phone">
                        @error('phone')
                        <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="content text-xl font-medium mb-3">Address</div>
                    <div class="space-y-3">
                        <div class="lg:flex lg:gap-x-24 space-y-3 lg:space-y-0">
                            <div class="flex-1">
                                <label for="country" class="sr-only">Country</label>
                                <select wire:model="country" id="country" class="width rounded-md">
                                    @foreach(countries() as $c)
                                        <option value="{{ $c }}">{{ $c }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="state" class="sr-only">Country</label>
                                @if($country == 'United States')
                                    <select id="state" wire:model="state" class="width rounded-md">
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
                                @else
                                    <input id="state" class="width rounded-md" wire:model.debounce.500ms="state" type="text"
                                           placeholder="Please enter your state">
                                @endif
                                @error('state')
                                <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="lg:flex lg:space-x-24 space-y-3 lg:space-y-0">
                            <div class="flex-1">
                                <label for="address" class="sr-only">Street address</label>
                                <input type="text" id="address" wire:model.debounce.500ms="address" class="width rounded-md"
                                       placeholder="Street address">
                            </div>
                            <div class="flex-1">
                                <label for="address2" class="sr-only">Street address line 2</label>
                                <input type="text" id="address2" wire:model.debounce.500ms="address2" class="width rounded-md"
                                       placeholder="Street address 2 (Optional)">
                            </div>
                        </div>
                        <div class="lg:flex lg:space-x-24 space-y-3 lg:space-y-0">
                            <div class="flex-1">
                                <label for="city" class="sr-only">City</label>
                                <input type="text" id="city" wire:model.debounce.500ms="city" class="width rounded-md" placeholder="City">
                            </div>
                            <div class="flex-1">
                                <label for="zip" class="sr-only">Zip Code</label>
                                <input type="text" id="zip" wire:model.debounce.500ms="zip" class="width rounded-md" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-10">
                <div class="text-3xl font-medium">Dog Information</div>
                <div class="space-y-10">
                    <div class="lg:w-1/2 lg:pr-12">
                        <div>
                            <div class="content mb-3 text-xl font-medium">
                                Dog Name as shown on Pedigree
                            </div>
                            <label for="dog_name" class="sr-only">Dog name</label>
                            <input type="text" id="dog_name" wire:model.debounce.500ms="dog_name" class="width rounded-md">
                        </div>
                    </div>
                    <div>
                        <div class="content mb-3 text-xl font-medium">Date Of Birth</div>
                        <div class="flex flex-col lg:flex-row lg:space-x-3 space-y-3 lg:space-y-0">
                            <div class="flex-1">
                                <label for="dob" class="sr-only">Date of birth</label>
                                <select class="w-full rounded-md" id="dob" wire:model="dob">
                                    <option value="" selected hidden>Day</option>
                                    @for($i=1; $i <= 31; $i++)
                                        <option>{{ $i }}</option>
                                    @endfor
                                </select></div>
                            <div class="flex-1">
                                <label for="mob" class="sr-only">Month of birth</label>
                                <select class="w-full rounded-md" id="mob" wire:model="mob">
                                    <option value="" selected hidden>Month</option>
                                    @for($i=now()->startOfYear(); $i < now()->endOfYear(); $i->addMonth())
                                        <option>{{ $i->format('F') }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="flex-1">
                                <label for="yob" class="sr-only">Year of birth</label>
                                <select class="w-full rounded-md" id="yob" wire:model="yob">
                                    <option value="" selected hidden>Year</option>
                                    @for($i=now()->format('Y'); $i >= 2000; $i--)
                                        <option>{{ $i }}</option>
                                    @endfor
                                </select></div>
                        </div>
                    </div>
                    <div>
                        <div class="content mb-3 text-xl font-medium">Sex</div>
                        <div class="flex space-x-6">
                            <div>
                                <input type="radio" value="Male" id="male" wire:model="sex"
                                       class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 cursor-pointer">
                                <label for="male" class="pl-1 text-sm font-medium text-gray-900 cursor-pointer">Male</label>
                            </div>
                            <div>
                                <input id="female" type="radio" value="Female" wire:model="sex"
                                       class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 cursor-pointer">
                                <label for="female" class="pl-1 text-sm font-medium text-gray-900 cursor-pointer">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex lg:gap-x-24">
                        <div class="flex-1 space-y-3">
                            <label for="breed" class="content text-xl font-medium">Breed</label>
                            <select class="width rounded-md" id="breed" wire:model="breed">
                                <option value="" selected hidden>Select Breed</option>
                                <option>American Bully</option>
                                <option>French Bulldog</option>
                                <option>English Bulldog</option>
                            </select>
                            @error('breed')
                            <span class="ml-1 font-light text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1 space-y-3">
                            <label for="color" class="content text-xl font-medium">Color</label>
                            <input type="text" id="color" wire:model.debounce.500ms="color" class="width rounded-md">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label for="sire_name" class="content mt-10 mb-3 text-xl font-medium">Sire Name (as shown on
                            Pedigree)
                        </label>
                        <input type="text" id="sire_name" wire:model.debounce.500ms="sire_name" class="width rounded-md">
                    </div>
                    <div class="space-y-3">
                        <label for="dam_name" class="content mt-10 mb-3 text-xl font-medium">Dam Name (as shown on
                            Pedigree)
                        </label>
                        <input type="text" id="dam_name" wire:model.debounce.500ms="dam_name" class="width rounded-md">
                    </div>
                    <div>
                        <div class="content mb-3 text-xl font-medium">Photo of the Dog</div>
                        <label for="dog_image"
                               class="bg-white flex cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-500 bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center p-2 h-44">
                                @if($dog_image)
                                    <img src="{{ $dog_image->temporaryUrl() }}" alt="" class="object-contain w-full h-full rounded">
                                @else
                                    <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                                            file</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, & PDF upto
                                        10MB</p>
                                @endif
                            </div>
                            <input type="file" id="dog_image" class="hidden" accept="image/*" wire:model="dog_image" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="space-y-10">
                <div class="mb-3 text-3xl font-medium">Required Documentation</div>
                <div>
                    <div class="content mb-3 text-xl font-medium">Copy of Current Pedigree (Front Side)</div>
                    <label for="pedigree_image_front"
                           class="bg-white flex cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-500 bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center p-2 h-44">
                            @if($pedigree_image_front)
                                <img src="{{ $pedigree_image_front->temporaryUrl() }}" alt="" class="object-contain w-full h-full rounded">
                            @else
                                <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                                        file</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, & PDF upto
                                    10MB</p>
                            @endif
                        </div>
                        <input type="file" id="pedigree_image_front" class="hidden" accept="image/*" wire:model="pedigree_image_front" />
                    </label>
                </div>
                <div>
                    <div class="content mb-3 text-xl font-medium">Copy of Current Pedigree (Back Side)</div>
                    <label for="pedigree_image_back"
                           class="bg-white flex cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-500 bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center p-2 h-44">
                            @if($pedigree_image_back)
                                <img src="{{ $pedigree_image_back->temporaryUrl() }}" alt="" class="object-contain w-full h-full rounded">
                            @else
                                <svg aria-hidden="true" class="mb-3 h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Upload a
                                        file</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, & PDF upto
                                    10MB</p>
                            @endif
                        </div>
                        <input type="file" id="pedigree_image_back" class="hidden" accept="image/*" wire:model="pedigree_image_back" />
                    </label>
                </div>
            </div>
            <div>
                <div class="content mb-3 text-xl font-medium">Dog Registration Fee</div>
                <div>
                    <label for="shipping" class="sr-only">Shipping</label>
                    <select class="width rounded-md" id="shipping" wire:model="shipping">
                        <option value="" selected hidden>Select shipping plan</option>
                        <option value="7">7 Days shipping ($10)</option>
                        <option value="3">3 Days shipping ($40)</option>
                        <option value="1">Next Day shipping ($60)</option>
                    </select>
                </div>
            </div>
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
            <div x-data="signature">
                <div class="flex justify-between mb-3 ">
                    <div class="content  text-xl font-medium">Owner Signature</div>
                    <button class="text-lg font-medium text-green-500 hover:text-green-800" type="button" @click="clear">Clear</button>
                </div>
                <div class="h-44">
                    <canvas x-ref="signaturePad" id="signature-pad" class="w-full h-full border border-gray-500 rounded" wire:ignore.self></canvas>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit">
                    <input class="bg-brand-primary cursor-pointer text-white px-10 py-2 text-xl rounded-md hover:bg-brand-secondary" type="submit">
                </button>
            </div>
        </form>
    </section>
</div>

@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("signature", () => ({
                signaturePad: new SignaturePad(document.querySelector("#signature-pad")),

                init() {
                    this.resizeCanvas();
                    window.addEventListener("resize", this.resizeCanvas);
                    this.signaturePad.addEventListener("endStroke", () => {
                        Livewire.emit("signed", this.signaturePad.toDataURL());
                    });
                },

                clear() {
                    Livewire.emit("signed", "");
                    this.signaturePad.clear();
                },

                resizeCanvas() {
                    let canvas = document.querySelector("#signature-pad");
                    let ratio = Math.max(window.devicePixelRatio || 1, 1);
                    canvas.width = canvas.offsetWidth * ratio;
                    canvas.height = canvas.offsetHeight * ratio;
                    canvas.getContext("2d").scale(ratio, ratio);
                    this.clear();
                }
            }));
        });
    </script>
@endpush
