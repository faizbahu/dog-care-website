<div class="flex flex-col lg:flex-row items-center mx-auto justify-center text-white ">
    <a class="cursor-pointer flex-1 bg-yellow-300" href="{{ route('registration.permanent') }}">
        <div class="h-[560px] container relative  cards-section py-10  h-11/12 max-w-2xl m-auto">
            <div id="headings" class="font-bold  text-5xl lg:text-4xl ml-8 hover-effects">
                Permanent Registration
            </div>
            <img class="w-[420px] rounded-3xl absolute  right-0 bottom-0 " src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </a>
    <a class="cursor-pointer flex-1 bg-red-600" href="{{ route('registration.kennel') }}">
        <div class="h-[560px]  relative  cards-section py-10  max-w-2xl m-auto">
            <div id="headings" class="font-bold  text-5xl lg:text-4xl ml-8 hover-effects">
                Kennel Club Registration
            </div>
            <img class=" w-[420px] rounded-3xl absolute  right-0 bottom-0 " src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </a>
    <a class="cursor-pointer flex-1 bg-blue-400" href="{{ route('registration.litter') }}">
        <div class="h-[560px]  relative  cards-section py-10  max-w-2xl m-auto">
            <div id="headings" class="font-bold  text-5xl lg:text-4xl ml-8 hover-effects">
                Litter Registration
            </div>
            <img class=" w-[420px] rounded-3xl absolute  right-0 bottom-0 " src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </a>
</div>
