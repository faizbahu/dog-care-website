@extends('layouts.master')

@section('content')
    <section class="relative min-h-screen bg-gradient-to-br from-[#482979] via-[#4F2980] to-[#8F2EBC]">
        <div class="container relative mx-auto">
            <div class="m-auto flex min-h-screen max-w-5xl 2xl:max-w-7xl flex-col justify-center text-center text-white lg:text-left">
                <div>
                    <div class="text-3xl font-medium lg:text-5xl 2xl:text-7xl lg:font-bold">THE #1 BULLY COMMUNITY</div>
                    <div class="text-2xl font-normal lg:text-5xl 2xl:text-7xl lg:font-medium">
                        IN THE WORLD
                    </div>
                    <p class="mt-10 text-xl 2xl:text-3xl">With over a million views each month,no Bully community </p>
                    <p class="text-xl 2xl:text-3xl"> comes close.Add pedigrees, connect with other </p>
                    <p class="text-xl 2xl:text-3xl">members, and order the most secure and fastest registration</p>
                    <p class="text-xl 2xl:text-3xl">in the market.</p>
                </div>

            </div>
            <div class="relative right-0 bottom-0 lg:absolute">
                <img class="-mt-48 lg:mt-0" src="{{ asset('images/hero.png') }}" alt="">
            </div>
        </div>
    </section>
    <section>
        <x-registration-grid />
    </section>
    <section>
        <div>
            <video muted class="w-screen" autoplay loop type="video/mp4" src="{{ asset('images/video.mp4') }}"></video>
        </div>
    </section>
@endsection
