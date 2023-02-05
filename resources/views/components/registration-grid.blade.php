<div class="mx-auto flex flex-col items-center justify-center text-white lg:flex-row">
    <a class="flex-1 cursor-pointer bg-yellow-300" href="{{ route('registration.permanent') }}">
        <div class="cards-section h-11/12 container relative m-auto h-[560px] max-w-2xl py-10">
            <div id="headings" class="hover-effects ml-8 text-5xl font-bold lg:text-4xl">
                Permanent Registration
            </div>
            <img class="absolute right-0 bottom-0 w-[420px] rounded-3xl" src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </a>
    <a class="flex-1 cursor-pointer bg-red-600" href="{{ route('registration.kennel') }}">
        <div class="cards-section relative m-auto h-[560px] max-w-2xl py-10">
            <div id="headings" class="hover-effects ml-8 text-5xl font-bold lg:text-4xl">
                Kennel Club Registration
            </div>
            <img class="absolute right-0 bottom-0 w-[420px] rounded-3xl" src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </a>
    <a class="flex-1 cursor-pointer bg-blue-400" href="{{ route('registration.litter') }}">
        <div class="cards-section relative m-auto h-[560px] max-w-2xl py-10">
            <div id="headings" class="hover-effects ml-8 text-5xl font-bold lg:text-4xl">
                Litter Registration
            </div>
            <img class="absolute right-0 bottom-0 w-[420px] rounded-3xl" src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </a>
</div>
