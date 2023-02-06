<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bully Pedex</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav id="navbar" class="py-3 nav-bar nav fixed z-10 bg-gradient-to-br from-[#442079] via-[#451e79] to-[#572787]">
        <div class="container mx-auto">
            <div class="container mx-auto flex items-center justify-between text-black">
                <div class="flex flex-1 justify-between">
                    <div>
                        <a href="" class="flex items-center py-2">
                            <img class="w-32" src="{{ asset('images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div id="nav-buttons" class="hidden items-center space-x-10 text-white lg:flex">
                        <ul class="flex space-x-10">
                            <li class="py-1 nav-items-hover-effect"><a class="nav-items py-2 text-2xl font-medium" href="#">Home</a></li>
                            <li class=" ">
                                <div class="py-1 group inline-block relative">
                                    <button
                                        class="font-medium nav-items inline-flex items-center rounded-lg px-4 text-center text-2xl"
                                        >
                                        <span class="">Dropdown</span>
                                        <svg class="ml-2 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                        </button>
                                        <ul class="mt-1 z-10 absolute hidden w-44 rounded-lg bg-white shadow group-hover:block">
                                            <li class="">
                                              <a
                                                class="px-3 py-2 block hover:text-[#832DB1] text-black text-sm"
                                                href="#"
                                                >Permanent Registration</a
                                              >
                                            </li>
                                            <li class="">
                                              <a
                                                class="px-3 py-2 block text-black text-sm hover:text-[#832DB1]"
                                                href="#"
                                                >Kennel Registration</a
                                              >
                                            </li>
                                            <li class="">
                                              <a
                                                class="px-3 py-2 block text-black text-sm hover:text-[#832DB1]"
                                                href="#"
                                                >Litter Regestraion</a
                                              >
                                            </li>
                                          </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <button class="mobile-menu-button outline-none">
                            <svg class="h-6 w-6 text-gray-500 hover:text-primary_purple" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mobile-menu mt-8 ml-4 hidden h-52">
                <div class="flex flex-col space-y-5">
                    <a class="py-2 text-2xl font-medium" href="#">Home</a>
                    <button id="" 
                        class="inline-flex items-center rounded-lg text-center text-2xl font-medium lg:px-4" type="button">Registration
                        <svg class="ml-2 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div id="" class="bg-white block rounded-lg shadow w-44 z-10">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-primary_gray">
        <div class="container mx-auto flex max-w-5xl flex-col items-center justify-between pt-16 text-center text-white lg:flex-row lg:text-left">
            <img class="w-52" src="{{ asset('images/logo.png') }}" alt="">
            <div class="mt-10 lg:mt-0">
                <div class="text-2xl font-bold">About</div>
                <p class="mt-2 text-sm lg:text-lg">We are an independent company that stores your pedigrees </p>
                <p class="text-sm lg:text-lg">online with the ability to post pictures, and we give you the </p>
                <p class="text-sm lg:text-lg">marketing ability to reach a global market to sell your products!</p>
            </div>
        </div>
        <div class="text-med mt-20 pb-5 text-center font-medium text-gray-400">© 2023 Bully Pedex All Rights Reserved.
        </div>
    </footer>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
        btn.addEventListener("onhover", () => {
            menu.classList.toggle("hidden");
        });


        window.onscroll = function() {
            scrollFunction()
        };
        scrollFunction()

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar").style.background = "white";
                document.getElementById("nav-buttons").style.color = "black";
            } else {
                // document.getElementById("navbar").classList.add ("bg-gradient-to-br from-[#482979] via-[#4D297E] to-[#5A2A8A]");
                document.getElementById("navbar").style.background = null;
                document.getElementById("nav-buttons").style.color = "white";
            }
        }
    </script>
    @stack('scripts')
</body>

</html>
