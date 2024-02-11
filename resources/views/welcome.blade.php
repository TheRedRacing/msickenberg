<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="Maxime Sickenberg">
    <meta name="copyright" content="Maxime Sickenberg">

    <!-- Web -->
    <meta content="Website portfolio of maxime sickenberg" name="description">

    <meta content="Maxime Sickenberg WebSite" property="og:title">
    <meta content="Website portfolio of maxime sickenberg" property="og:description">
    <meta content="https://msickenberg.ch/img/portfolio.png" property="og:image">
    <meta content="website" property="og:type">

    <!-- Twitter -->
    <meta content="Maxime Sickenberg WebSite" property="twitter:title">
    <meta content="Website portfolio of maxime sickenberg" property="twitter:description">
    <meta content="https://msickenberg.ch/img/portfolio.png" property="twitter:image">
    <meta content="summary_large_image" name="twitter:card">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.png" sizes="50x50">

    <title>Maxime Sickenberg 🪴</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- External link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="scroll-smooth">
    <!-- <div id="cursor" class="absolute z-[100] h-5 w-5 rounded-full bg-zinc-300"></div> -->

    <header class="fixed left-0 right-0 top-0 z-30 flex w-full flex-col items-center justify-center border-b border-zinc-200 bg-white bg-opacity-70 py-2 backdrop-blur">
        <a href="/" class="-translate-x-24 transform rounded-md px-5 py-2 text-lg font-medium opacity-0 transition-transform delay-100 duration-1000 ease-out hover:bg-blue-100 md:absolute md:left-4" data-replace='{ "-translate-x-24": "translate-y-0", "opacity-0": "opacity-100", "delay-100":"delay-0" }'>Maxime Sickenberg</a>
        <div class="flex items-center justify-center">
            <a href="#work" class="flex w-20 items-center justify-center gap-2 rounded-md py-2 text-zinc-700 hover:bg-blue-100">
                Work
            </a>
            <a href="#api" class="flex w-20 items-center justify-center gap-2 rounded-md py-2 text-zinc-700 hover:bg-blue-100">
                API
            </a>
            <a class="buttonAbout flex w-20 cursor-pointer items-center justify-center gap-2 rounded-md py-2 text-zinc-700 hover:bg-blue-100">
                About
            </a>
        </div>
        <a href="#contact" class="inline-flex translate-x-24 transform items-baseline gap-2 rounded-md px-5 py-2 align-middle text-base font-medium text-blue-600 opacity-0 transition-all delay-100 duration-1000 ease-out hover:bg-blue-100 md:absolute md:right-4" data-replace='{ "translate-x-24": "translate-y-0", "opacity-0": "opacity-100", "delay-100":"delay-0"}'>
            <div>Contact me</div>
            <svg width="7" height="10" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.566.434 6.131 5 1.566 9.566.434 8.434 3.869 5 .434 1.566z" fill="currentColor"></path>
            </svg>
        </a>
    </header>

    <section class="container mx-auto mt-36 sm:px-6 md:mt-16 lg:px-8">
        <div id="banners" class="-translate-y-24 transform bg-blue-600 opacity-0 transition-all delay-700 duration-1000 ease-out sm:rounded-lg" data-replace='{ "-translate-y-24": "translate-y-0", "opacity-0": "opacity-100" ,"delay-100":"delay-0"}'>
            <div class="mx-auto max-w-7xl px-3 py-3 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex w-0 flex-1 items-center">
                        <span class="flex rounded-lg bg-blue-800 p-2">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                        </span>
                        <p class="ml-3 truncate font-medium text-white">
                            <span class="lg:hidden">Looking for work!</span>
                            <span class="hidden lg:inline">Looking for work! Contact me today to discuss how I can bring value to your company.</span>
                        </p>
                    </div>
                    <div class="order-3 mt-2 w-full flex-shrink-0 sm:order-2 sm:mt-0 sm:w-auto">
                        <a href="https://www.linkedin.com/in/maxime-sickenberg/" class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-2 text-sm font-medium text-blue-600 shadow-sm hover:bg-blue-50">Hire me</a>
                    </div>
                    <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                        <button id="Dismissbanners" type="button" class="-mr-1 flex rounded-md p-2 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative mt-5 flex w-full flex-col items-center justify-start text-center lg:mt-20 lg:min-h-[580px]">
            <div class="bigHero max-w-[830px] translate-y-12 transform text-5xl opacity-0 transition-all delay-150 duration-1000 ease-out md:text-7xl lg:text-8xl" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100","delay-150":"delay-0" }'>Full-Stack Swiss Developper</div>
            <div class="mb-6 mt-4 max-w-[600px] translate-y-12 transform text-zinc-600 opacity-0 transition-all delay-300 duration-1000 ease-out lg:text-2xl" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100","delay-300":"delay-0" }'>Developper focused on design, where attention to detail is very important.</div>

            <div class="grid w-full grid-cols-1 gap-2 px-4 text-center lg:my-16 lg:grid-cols-3">

                <div class="flex -translate-y-24 transform flex-col items-center justify-center gap-2.5 rounded-lg border-2 border-zinc-200 p-2.5 opacity-0 transition-all delay-[500ms] duration-1000 ease-out hover:border-blue-600 lg:gap-5 lg:px-4 lg:py-6" data-replace='{"-translate-y-24":"translate-y-0","opacity-0": "opacity-100","delay-[500ms]":"delay-0" }'>
                    <div class="text-2xl text-blue-600 md:text-3xl lg:text-4xl"><i class="fad fa-code"></i></div>
                    <div>
                        <h2 class="title-font text-xl font-medium text-gray-900 md:text-2xl lg:text-3xl">+12</h2>
                        <p class="text-xs font-medium leading-relaxed md:text-base">Languages Learned</p>
                    </div>
                </div>

                <div class="flex -translate-y-24 transform flex-col items-center justify-center gap-2.5 rounded-lg border-2 border-zinc-200 p-2.5 opacity-0 transition-all delay-[700ms] duration-1000 ease-out hover:border-blue-600 lg:px-4 lg:py-6" data-replace='{"-translate-y-24":"translate-y-0","opacity-0": "opacity-100","delay-[700ms]":"delay-0" }'>
                    <div class="text-2xl text-blue-600 md:text-3xl lg:text-4xl"><i class="fad fa-file-certificate"></i></div>
                    <div>
                        <h2 class="title-font text-xl font-medium text-gray-900 md:text-2xl lg:text-3xl">3</h2>
                        <p class="text-xs font-medium leading-relaxed md:text-base">Work Experience</p>
                    </div>
                </div>

                <div class="flex -translate-y-24 transform flex-col items-center justify-center gap-2.5 rounded-lg border-2 border-zinc-200 p-2.5 opacity-0 transition-all delay-[800ms] duration-1000 ease-out hover:border-blue-600 lg:px-4 lg:py-6" data-replace='{"-translate-y-24":"translate-y-0","opacity-0": "opacity-100","delay-[800ms]":"delay-0" }'>
                    <div class="text-2xl text-blue-600 md:text-3xl lg:text-4xl"><i class="fad fa-browser"></i></div>
                    <div>
                        <h2 class="title-font text-xl font-medium text-gray-900 md:text-2xl lg:text-3xl">+8</h2>
                        <p class="text-xs font-medium leading-relaxed md:text-base">Software known</p>
                    </div>
                </div>
            </div>

            <div class="scroll-downs hidden translate-y-12 transform opacity-0 transition-all delay-1000 duration-1000 ease-out lg:block" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" ,"delay-1000":"delay-0"}'>
                <div class="mousey border-2 border-blue-600">
                    <div class="scroller bg-blue-600"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto sm:px-6 lg:px-8" id="work">
        <div class="py-12 text-center text-2xl font-medium md:text-4xl lg:py-24 lg:text-6xl">My work</div>
        <div class="grid w-full grid-cols-1 gap-5 px-4 md:grid-cols-2">
            <a class="3dhover group relative row-span-1 flex h-[25vh] min-h-[224px] w-full cursor-pointer items-end justify-center rounded-xl bg-gradient-to-br from-green-600 to-cyan-800 hover:shadow-xl lg:h-[40vh]" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-gyroscope="false">
                <div class="h-[85%] w-[85%] rounded-t-lg bg-cover bg-center transition-all group-hover:h-full group-hover:w-full group-hover:rounded-b-lg" style="background-image: url('/img/mapEvents.png');"></div>
            </a>

            <a href="https://rocketleague.theredracing.ch/" target="_blank" class="3dhover group relative row-span-1 flex h-[25vh] min-h-[224px] w-full cursor-pointer items-end justify-center rounded-xl bg-gradient-to-br from-blue-400 to-indigo-800 hover:shadow-xl lg:h-[40vh]" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-gyroscope="false">
                <div class="h-[85%] w-[85%] rounded-t-lg bg-cover bg-top transition-all group-hover:h-full group-hover:w-full group-hover:rounded-b-lg" style="background-image: url('/img/rl.png');"></div>
            </a>

            <a class="3dhover group relative row-span-1 flex h-[25vh] min-h-[224px] w-full cursor-pointer items-end justify-center rounded-xl bg-gradient-to-br from-yellow-400 to-yellow-700 hover:shadow-xl lg:h-[40vh]" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-gyroscope="false">
                <div class="h-[85%] w-[85%] rounded-t-lg bg-cover bg-center transition-all group-hover:h-full group-hover:w-full group-hover:rounded-b-lg" style="background-image: url('/img/Olocal.png');"></div>
            </a>

            <a class="3dhover group relative row-span-1 flex h-[25vh] min-h-[224px] w-full cursor-pointer items-end justify-center rounded-xl bg-gradient-to-br from-red-400 to-purple-700 hover:shadow-xl lg:h-[40vh]" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-gyroscope="false">
                <div class="h-[85%] w-[85%] rounded-t-lg bg-cover bg-center transition-all group-hover:h-full group-hover:w-full group-hover:rounded-b-lg" style="background-image: url('/img/portfolio.png');"></div>
            </a>
        </div>
    </section>

    <section id="api" class="container mx-auto px-4 py-6 sm:px-6 lg:px-8 lg:pt-24">
        <div class="py-12 text-center text-2xl font-medium md:text-4xl lg:py-24 lg:text-6xl">API</div>

        <div class="flex flex-col md:flex-row md:gap-2.5 lg:gap-5">
            <div class="flex w-full flex-col">
                <div class="flex w-full cursor-pointer items-center justify-between border-y border-zinc-200 py-2.5 text-left font-medium hover:border-blue-600">
                    <div class="flex items-center justify-start gap-2.5">
                        <span class="rounded-md bg-blue-400 px-4 py-2 text-white">GET</span>
                        <div class="flex flex-col items-baseline justify-start text-zinc-800 lg:flex-row lg:gap-2.5">
                            <span>/api/get/name</span>
                            <span class="text-xs text-zinc-500 lg:text-sm">Get my full name</span>
                        </div>
                    </div>

                    <div id="btnCallName" class="cursor-pointer rounded-md bg-blue-500 px-2 py-1 text-white hover:bg-blue-600"><i class="fas fa-fw fa-play"></i></div>
                </div>

                <div class="flex w-full cursor-pointer items-center justify-between border-y border-zinc-200 py-2.5 text-left font-medium hover:border-blue-600">
                    <div class="flex items-center justify-start gap-2.5">
                        <span class="rounded-md bg-blue-400 px-4 py-2 text-white">GET</span>
                        <div class="flex flex-col items-baseline justify-start text-zinc-800 lg:flex-row lg:gap-2.5">
                            <span>/api/get/email</span>
                            <span class="text-xs text-zinc-500 lg:text-sm">Get my email</span>
                        </div>
                    </div>

                    <div id="btnCallemail" class="cursor-pointer rounded-md bg-blue-500 px-2 py-1 text-white hover:bg-blue-600"><i class="fas fa-fw fa-play"></i></div>
                </div>

                <div class="flex w-full cursor-pointer items-center justify-between border-y border-zinc-200 py-2.5 text-left font-medium hover:border-blue-600">
                    <div class="flex items-center justify-start gap-2.5">
                        <span class="rounded-md bg-blue-400 px-4 py-2 text-white">GET</span>
                        <div class="flex flex-col items-baseline justify-start text-zinc-800 lg:flex-row lg:gap-2.5">
                            <span>/api/get/age</span>
                            <span class="text-xs text-zinc-500 lg:text-sm">Get my age</span>
                        </div>
                    </div>

                    <div id="btnCallage" class="cursor-pointer rounded-md bg-blue-500 px-2 py-1 text-white hover:bg-blue-600"><i class="fas fa-fw fa-play"></i></div>
                </div>

                <div class="flex w-full cursor-pointer items-center justify-between border-y border-zinc-200 py-2.5 text-left font-medium hover:border-blue-600">
                    <div class="flex items-center justify-start gap-2.5">
                        <span class="rounded-md bg-blue-400 px-4 py-2 text-white">GET</span>
                        <div class="flex flex-col items-baseline justify-start text-zinc-800 lg:flex-row lg:gap-2.5">
                            <span>/api/get/languages</span>
                            <span class="text-xs text-zinc-500 lg:text-sm">Get all the programming languages</span>
                        </div>
                    </div>

                    <div id="btnCalllanguages" class="cursor-pointer rounded-md bg-blue-500 px-2 py-1 text-white hover:bg-blue-600"><i class="fas fa-fw fa-play"></i></div>
                </div>

                <div class="flex w-full cursor-pointer items-center justify-between border-y border-zinc-200 py-2.5 text-left font-medium hover:border-blue-600">
                    <div class="flex items-center justify-start gap-2.5">
                        <span class="rounded-md bg-blue-400 px-4 py-2 text-white">GET</span>
                        <div class="flex flex-col items-baseline justify-start text-zinc-800 lg:flex-row lg:gap-2.5">
                            <span>/api/get/software</span>
                            <span class="text-xs text-zinc-500 lg:text-sm">Get all the software I know how to use </span>
                        </div>
                    </div>

                    <div id="btnCallsoftware" class="cursor-pointer rounded-md bg-blue-500 px-2 py-1 text-white hover:bg-blue-600"><i class="fas fa-fw fa-play"></i></div>
                </div>

                <div class="flex w-full cursor-pointer items-center justify-between border-y border-zinc-200 py-2.5 text-left font-medium hover:border-blue-600">
                    <div class="flex items-center justify-start gap-2.5">
                        <span class="rounded-md bg-blue-400 px-4 py-2 text-white">GET</span>
                        <div class="flex flex-col items-baseline justify-start text-zinc-800 lg:flex-row lg:gap-2.5">
                            <span>/api/get/experience</span>
                            <span class="text-xs text-zinc-500 lg:text-sm">Get all experience i do</span>
                        </div>
                    </div>

                    <div id="btnCallexperience" class="cursor-pointer rounded-md bg-blue-500 px-2 py-1 text-white hover:bg-blue-600"><i class="fas fa-fw fa-play"></i></div>
                </div>
            </div>

            <!-- Terminal -->
            <div id="terminal" class="grid h-[45vh] min-h-[350px] auto-rows-min grid-cols-2 rounded-lg bg-zinc-900 p-2.5 text-white md:h-auto md:w-1/2 lg:w-1/3"></div>
        </div>
    </section>

    <section id="contact" class="container mx-auto px-4 pb-6 pt-12 sm:px-6 lg:px-8 lg:pt-24">
        <div class="grid h-[60vh] min-h-[560px] w-full grid-cols-1 grid-rows-3 gap-2.5 md:h-[70vh] md:grid-cols-2 md:gap-5">
            <div class="group min-h-[180px] cursor-pointer overflow-hidden rounded-lg bg-cover bg-center md:col-span-2 md:row-span-2" style="background-image: url('/img/photo-1551970634-747846a548cb.avif');">
                <div class="flex h-full w-full flex-col items-center justify-evenly bg-black bg-opacity-60 transition-all duration-500 md:justify-center md:gap-10 lg:backdrop-blur-sm lg:group-hover:backdrop-blur-none">
                    <div class="text-center text-xl font-medium text-white md:text-5xl">Interested to work together?</div>

                    <a href="https://www.linkedin.com/in/maxime-sickenberg/" target="_blank" class="inline-flex items-center gap-2 rounded-md border border-transparent bg-blue-600 px-3 py-2 align-middle text-sm font-medium leading-4 text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 md:px-4 md:text-lg lg:px-6 lg:py-3 lg:text-xl">
                        Send me a message
                    </a>
                </div>
            </div>

            <div class="flex min-h-[180px] flex-col items-center justify-center gap-2.5 rounded-lg bg-[#e9e8e4] p-4 transition-shadow hover:shadow lg:p-5">
                <a href="mailto:maxime.sickenberg@gmail.com" class="text-sm text-blue-500 hover:text-blue-700 md:text-base lg:text-lg">My e-mail</a>
                <div class="relative w-full">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="bg-[#e9e8e4] px-2 text-sm text-gray-500">Or</span>
                    </div>
                </div>
                <a href="https://www.linkedin.com/in/maxime-sickenberg/" class="text-sm text-blue-500 hover:text-blue-700 md:text-base lg:text-lg">My linkedin page</a>
            </div>
            <div class="buttonAbout flex min-h-[180px] cursor-pointer flex-col items-start justify-center rounded-lg bg-cover bg-bottom p-4 transition-shadow hover:shadow lg:p-5" style="background-image: url('/img/photo-1483794344563-d27a8d18014e.avif');">

                <span class="text-xl font-medium lg:text-3xl">About me</span>
                <span class="max-w-[50%] text-sm text-zinc-500 md:text-base lg:text-lg">Learn more about me and my story</span>

            </div>
        </div>
    </section>

    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-6 pb-12 pt-6 lg:flex lg:items-center lg:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 lg:order-2">
                <a href="https://github.com/TheRedRacing" class="rounded-md border-2 border-white p-2 text-gray-400 hover:border-blue-500 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/maxime-sickenberg/" class="rounded-md border-2 border-white p-2 text-gray-400 hover:border-blue-500 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>

                <a href="https://www.instagram.com/makcnmas/" class="rounded-md border-2 border-white p-2 text-gray-400 hover:border-blue-500 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 lg:order-1 lg:mt-0">
                <p class="text-center text-xs leading-5 text-gray-500">&copy; 2024 Maxime Sickenberg. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <div class="relative z-50 hidden" id="aboutmodal">
        <div id="closeModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center">
                <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-xl sm:p-6">
                    <div class="">
                        <div class="flex items-center justify-between text-lg font-medium leading-6 text-gray-900 lg:text-xl">
                            <div>About me</div>
                            <button id="DismissModal" type="button" class="-mr-1 flex cursor-pointer rounded-full border-2 border-white p-2 hover:border-blue-500 sm:-mr-2">
                                <span class="sr-only">Dismiss</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-2">
                            <div class="flex w-full flex-col text-justify text-xs text-gray-600 lg:text-lg">
                                <span>Passionné de l'informatique, j'ai rapidement développé une passion pour le design et la technologie. J'ai passé de nombreuses heures à explorer les designs et les sites web pour comprendre l'art qui se cache derrière. Cela m'a incité à poursuivre des études en tant que designer web en autodidacte, ce qui est devenu une passion profonde.</span>

                                <span class="mt-2">Plus tard, j'ai découvert Figma et j'ai été immédiatement fasciné par son potentiel. Cela m'a poussé à poursuivre une formation en tant que designer UI/UX. Actuellement, je suis en train de me former en tant que développeur Full-stack et Designer UI/UX.</span>

                                <span class="mt-2">Je considère l'honnêteté et la transparence comme des valeurs fondamentales dans tout ce que je fais. Mon objectif est de travailler avec des entreprises et des équipes qui partagent ma passion et mon engagement pour construire des projets remarquables.</span>

                                <span class="mt-2">Maxime Sickenberg 🪴</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
