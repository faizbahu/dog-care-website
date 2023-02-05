@extends('layouts.master')

@section('content')
    <section class="relative bg-gradient-to-br from-[#482979] via-[#4F2980] to-[#8F2EBC] min-h-screen">
        <div class="relative container mx-auto ">
            <div class="max-w-5xl min-h-screen text-white flex flex-col justify-center m-auto text-center lg:text-left">
                <div>
                    <div class="text-3xl lg:text-5xl font-medium lg:font-bold ">THE #1 BULLY COMMUNITY</div>
                    <div class="text-2xl lg:text-5xl font-normal lg:font-medium">
                        IN THE WORLD
                    </div>
                    <p class="text-xl mt-10">With over a million views each month,no Bully community </p>
                    <p class="text-xl"> comes close.Add pedigrees, connect with other </p>
                    <p class="text-xl">members, and order the most secure and fastest registration</p>
                    <p class="text-xl">in the market.</p>
                </div>

            </div>
            <div class="relative lg:absolute right-0 bottom-0">
                <img class="-mt-48 lg:mt-0 " src="{{ asset('images/hero.png') }}" alt="">
            </div>
        </div>
    </section>
    <section>
        <x-registration-grid/>
    </section>
    <section>
        <div>
            <video muted class="w-screen" autoplay loop type="video/mp4" src="{{ asset('images/video.mp4') }}"></video>
        </div>
    </section>
@endsection
