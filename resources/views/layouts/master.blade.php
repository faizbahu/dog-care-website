<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bully Pedex</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
<nav id="navbar" class="bg-transparent fixed nav-bar nav z-10 ">
    <div class="container mx-auto">
        <div class="container flex items-center justify-between mx-auto text-black ">
            <div class="flex justify-between flex-1">
                <div>
                    <a href="#" class="flex items-center py-2">
                        <img class="w-32" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <div id="nav-buttons" class="hidden lg:flex items-center space-x-10 text-white">
                    <ul class="flex space-x-10">
                        <li><a class="nav-items py-2 text-2xl font-medium " href="#">Home</a></li>
                        <li>
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class="nav-items text-2xl inline-flex items-center px-4 rounded-lg text-center font-medium" type="button">
                                Registration
                                <svg class="w-4 h-4 ml-2 " aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-black " aria-labelledby="dropdownDefaultButton">
                            <li class="w-full">
                                <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li class="w-full">
                                <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li class="w-full">
                                <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                                                                                  out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:hidden flex items-center">
                    <button class="outline-none mobile-menu-button ">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-primary_purple " fill="none" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden mobile-menu h-52 mt-8 ml-4">
            <div class="flex flex-col space-y-5">
                <a class="py-2 text-2xl font-medium" href="#">Home</a>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-2xl inline-flex items-center lg:px-4 rounded-lg text-center font-medium" type="button">Registration
                    <svg class="w-4 h-4 ml-2 " aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2  dark:hover:bg-gray-600 dark:hover:text-white">Sign
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
    <div class="pt-16 max-w-5xl flex flex-col lg:flex-row container text-center lg:text-left justify-between mx-auto text-white  items-center">
        <img class="w-52" src="{{ asset('images/logo.png') }}" alt="">
        <div class="mt-10 lg:mt-0 ">
            <div class="font-bold text-2xl">About</div>
            <p class="mt-2 text-sm lg:text-lg">We are an independent company that stores your pedigrees </p>
            <p class=" text-sm lg:text-lg">online with the ability to post pictures, and we give you the </p>
            <p class=" text-sm lg:text-lg">marketing ability to reach a global market to sell your products!</p>
        </div>
    </div>
    <div class="pb-5 font-medium mt-20 text-center text-gray-400 text-med">© 2023 Bully Pedex All Rights Reserved.
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


    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.background = "white";
            document.getElementById("nav-buttons").style.color = "black";
        }
        else {
            document.getElementById("navbar").style.background = "transparent";
            document.getElementById("nav-buttons").style.color = "white";
        }
    }
</script>
@stack('scripts')
</body>
</html>
