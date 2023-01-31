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
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    </head>
    <body class="scroll-smooth">
        <!-- <div id="cursor" class="absolute z-[100] w-5 h-5 rounded-full bg-zinc-300"></div> -->

        <header class="fixed left-0 right-0 top-0 z-30 flex flex-col justify-center items-center w-full py-2 bg-white bg-opacity-70 backdrop-blur border-b border-zinc-200">         
            <a href="/" class="lg:absolute lg:left-4 px-5 py-2 text-lg font-medium hover:bg-blue-100 rounded-md">Maxime Sickenberg</a>
            <div class="flex justify-center items-center">
                <a href="#work" class="w-20 text-zinc-700 flex justify-center items-center gap-2 py-2 hover:bg-blue-100 rounded-md">
                    Work
                </a>
                <a href="#api" class="w-20 text-zinc-700 flex justify-center items-center gap-2 py-2 hover:bg-blue-100 rounded-md">
                    API
                </a>
                <a id="buttonAbout" class="w-20 text-zinc-700 flex justify-center items-center gap-2 py-2 hover:bg-blue-100 rounded-md cursor-pointer">
                    About
                </a>
            </div>
            <a href="#contact" class="lg:absolute lg:right-4 inline-flex align-middle text-blue-600 items-baseline gap-2 px-5 py-2 text-base font-medium hover:bg-blue-100 rounded-md">
                <div>Contact me</div>
                <svg width="7" height="10" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.566.434 6.131 5 1.566 9.566.434 8.434 3.869 5 .434 1.566z" fill="currentColor"></path>
                </svg>
            </a>                    
        </header>

        <section class="container mx-auto sm:px-6 lg:px-8 mt-40 lg:mt-20">
            <div id="banners" class="bg-blue-600 lg:rounded-lg">
                <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
                    <div class="flex flex-wrap items-center justify-between">
                    <div class="flex w-0 flex-1 items-center">
                        <span class="flex rounded-lg bg-blue-800 p-2">
                            <!-- Heroicon name: outline/megaphone -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
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

            <div class="mt-5 lg:mt-20 min-h-[580px] relative mb-6 w-full flex-col flex justify-start items-center text-center">
                <div class="bigHero max-w-[830px] text-5xl md:text-7xl lg:text-8xl">Full-Stack Swiss Developper</div>
                <div class="max-w-[600px] mt-4 mb-6 lg:text-2xl text-zinc-600">Developer focused on design, where attention to detail is very important.</div>

                <div class="w-full px-4 grid grid-col-1 sm:grid-cols-2 gap-2 lg:grid-cols-4 lg:mt-6 text-center">
                    <div class="w-full">
                        <div class="border-2 border-zinc-200 p-2.5 lg:px-4 lg:py-6 rounded-lg cursor-pointer hover:border-blue-600">
                            <div class="text-blue-600 text-4xl mb-4"><i class="fad fa-code"></i></div>
                            <h2 class="title-font font-medium text-3xl text-gray-900">8</h2>
                            <p class="leading-relaxed">Languages Learned</p>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="border-2 border-zinc-200 p-2.5 lg:px-4 lg:py-6 rounded-lg cursor-pointer hover:border-blue-600">
                            <div class="text-blue-600 text-4xl mb-4"><i class="fab fa-windows"></i></div>
                            <h2 class="title-font font-medium text-3xl text-gray-900">4</h2>
                            <p class="leading-relaxed">Software known</p>
                        </div>
                    </div>
      
                    <div class="w-full">
                        <div class="border-2 border-zinc-200 p-2.5 lg:px-4 lg:py-6 rounded-lg cursor-pointer hover:border-blue-600">
                            <div class="text-blue-600 text-4xl mb-4"><i class="fad fa-file-certificate"></i></div>
                            <h2 class="title-font font-medium text-3xl text-gray-900">2</h2>
                            <p class="leading-relaxed">Work Experience</p>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="border-2 border-zinc-200 p-2.5 lg:px-4 lg:py-6 rounded-lg cursor-pointer hover:border-blue-600">
                            <div class="text-blue-600 text-4xl mb-4"><i class="fad fa-browser"></i></div>
                            <h2 class="title-font font-medium text-3xl text-gray-900">+4</h2>
                            <p class="leading-relaxed">Projects</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-downs hidden md:block mt-8">
                    <div class="mousey border-2 border-blue-600">
                        <div class="scroller bg-blue-600"></div>
                    </div>    
                </div>
            </div>
        </section>

        <section class="container mx-auto sm:px-6 lg:px-8" id="work">
            <div class="py-12 text-2xl md:text-4xl lg:py-24 lg:text-6xl font-medium text-center">My work</div>
            <div class="px-4 w-full grid grid-cols-1 md:grid-cols-2 gap-5">
                <a class="group 3dhover relative flex justify-center items-end w-full h-[25vh] lg:h-[40vh] row-span-1 bg-gradient-to-br from-green-600 to-cyan-800 rounded-xl hover:shadow-xl cursor-pointer" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="absolute top-5 right-5 opacity-0 group-hover:opacity-100 p-2 bg-zinc-800 text-zinc-400 hover:text-blue-600 rounded-full flex justify-center items-center transition-opacity"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg></div>
                    <div class="w-[85%] h-[85%] group-hover:w-full group-hover:h-full transition-all rounded-t-lg group-hover:rounded-b-lg bg-center bg-cover" style="background-image: url('/img/mapEvents.png');"></div>
                </a>

                <a class="group 3dhover relative flex justify-center items-end w-full h-[25vh] lg:h-[40vh] row-span-1 bg-gradient-to-br from-blue-400 to-indigo-800 rounded-xl hover:shadow-xl cursor-pointer" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="absolute top-5 right-5 opacity-0 group-hover:opacity-100 p-2 bg-zinc-800 text-zinc-400 hover:text-blue-600 rounded-full flex justify-center items-center transition-opacity"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg></div>
                    <div class="w-[85%] h-[85%] group-hover:w-full group-hover:h-full transition-all rounded-t-lg group-hover:rounded-b-lg bg-center bg-cover" style="background-image: url('/img/Olocal.png');"></div>
                </a>

                <a class="group 3dhover relative flex justify-center items-end w-full h-[25vh] lg:h-[40vh] row-span-1 bg-gradient-to-br from-yellow-400 to-yellow-700 rounded-xl hover:shadow-xl cursor-pointer" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="absolute top-5 right-5 opacity-0 group-hover:opacity-100 p-2 bg-zinc-800 text-zinc-400 hover:text-blue-600 rounded-full flex justify-center items-center transition-opacity"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg></div>
                    <div class="w-[85%] h-[85%] group-hover:w-full group-hover:h-full transition-all rounded-t-lg group-hover:rounded-b-lg bg-center bg-cover"></div>
                </a>

                <a class="group 3dhover relative flex justify-center items-end w-full h-[25vh] lg:h-[40vh] row-span-1 bg-gradient-to-br from-red-400 to-purple-700 rounded-xl hover:shadow-xl cursor-pointer" data-tilt data-tilt-max="5" data-tilt-speed="400">
                    <div class="absolute top-5 right-5 opacity-0 group-hover:opacity-100 p-2 bg-zinc-800 text-zinc-400 hover:text-blue-600 rounded-full flex justify-center items-center transition-opacity"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg></div>
                    <div class="w-[85%] h-[85%] group-hover:w-full group-hover:h-full transition-all rounded-t-lg group-hover:rounded-b-lg bg-center bg-cover"></div>
                </a>
            </div>
        </section>

        <section id="api" class="container mx-auto sm:px-6 lg:px-8">
            <div class="py-12 text-2xl md:text-4xl lg:py-24 lg:text-6xl font-medium text-center">API</div>

            <div class="flex flex-col lg:flex-row gap-5 px-4">
                <div class="w-full flex flex-col">
                    <div class="flex items-center justify-between w-full py-2.5 font-medium text-left border-y border-zinc-200 hover:border-blue-600 cursor-pointer">
                        <div class="flex justify-start items-center gap-2.5">
                            <span class="bg-blue-400 text-white py-2 px-4 rounded-md">GET</span>
                            <div class="flex flex-col lg:flex-row justify-start items-baseline lg:gap-2.5 text-zinc-800">
                                <span>/api/get/name</span> 
                                <span class="text-xs lg:text-sm text-zinc-500">Get my full name</span>
                            </div>
                        </div>
                        
                        <div id="btnCallName" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md cursor-pointer"><i class="fas fa-fw fa-play"></i></div>
                    </div>

                    <div class="flex items-center justify-between w-full py-2.5 font-medium text-left border-y border-zinc-200 hover:border-blue-600 cursor-pointer">
                        <div class="flex justify-start items-center gap-2.5">
                            <span class="bg-blue-400 text-white py-2 px-4 rounded-md">GET</span>
                            <div class="flex flex-col lg:flex-row justify-start items-baseline lg:gap-2.5 text-zinc-800">
                                <span>/api/get/email</span> 
                                <span class="text-xs lg:text-sm text-zinc-500">Get my email</span>
                            </div>
                        </div>
                        
                        <div id="btnCallemail" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md cursor-pointer"><i class="fas fa-fw fa-play"></i></div>
                    </div>
        
                    <div class="flex items-center justify-between w-full py-2.5 font-medium text-left border-y border-zinc-200 hover:border-blue-600 cursor-pointer">
                        <div class="flex justify-start items-center gap-2.5">
                            <span class="bg-blue-400 text-white py-2 px-4 rounded-md">GET</span>
                            <div class="flex flex-col lg:flex-row justify-start items-baseline lg:gap-2.5 text-zinc-800">
                                <span>/api/get/age</span> 
                                <span class="text-xs lg:text-sm text-zinc-500">Get my age</span>
                            </div>
                        </div>
                        
                        <div id="btnCallage" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md cursor-pointer"><i class="fas fa-fw fa-play"></i></div>
                    </div>
        
                    <div class="flex items-center justify-between w-full py-2.5 font-medium text-left border-y border-zinc-200 hover:border-blue-600 cursor-pointer">
                        <div class="flex justify-start items-center gap-2.5">
                            <span class="bg-blue-400 text-white py-2 px-4 rounded-md">GET</span>
                            <div class="flex flex-col lg:flex-row justify-start items-baseline lg:gap-2.5 text-zinc-800">
                                <span>/api/get/languages</span> 
                                <span class="text-xs lg:text-sm text-zinc-500">Get all the programming languages</span>
                            </div>
                        </div>
                        
                        <div id="btnCalllanguages" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md cursor-pointer"><i class="fas fa-fw fa-play"></i></div>
                    </div>
        
                    <div class="flex items-center justify-between w-full py-2.5 font-medium text-left border-y border-zinc-200 hover:border-blue-600 cursor-pointer">
                        <div class="flex justify-start items-center gap-2.5">
                            <span class="bg-blue-400 text-white py-2 px-4 rounded-md">GET</span>
                            <div class="flex flex-col lg:flex-row justify-start items-baseline lg:gap-2.5 text-zinc-800">
                                <span>/api/get/software</span> 
                                <span class="text-xs lg:text-sm text-zinc-500">Get all the software I know how to use </span>
                            </div>
                        </div>
                        
                        <div id="btnCallsoftware" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md cursor-pointer"><i class="fas fa-fw fa-play"></i></div>
                    </div>

                    <div class="flex items-center justify-between w-full py-2.5 font-medium text-left border-y border-zinc-200 hover:border-blue-600 cursor-pointer">
                        <div class="flex justify-start items-center gap-2.5">
                            <span class="bg-blue-400 text-white py-2 px-4 rounded-md">GET</span>
                            <div class="flex flex-col lg:flex-row justify-start items-baseline lg:gap-2.5 text-zinc-800">
                                <span>/api/get/experience</span> 
                                <span class="text-xs lg:text-sm text-zinc-500">Get all experience i do</span>
                            </div>
                        </div>
                        
                        <div id="btnCallexperience" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-md cursor-pointer"><i class="fas fa-fw fa-play"></i></div>
                    </div>
                </div>
                    
                <!-- Terminal -->
                <div id="terminal" class="h-[45vh] lg:h-auto lg:w-1/3 p-2.5 bg-zinc-900 text-white rounded-lg grid grid-cols-2 auto-rows-min"></div>
            </div>            
        </section>

        <section id="contact" class="text-gray-600 body-font relative">
            <div class="container mx-auto sm:px-6 lg:px-8 pb-12 px-4">
                <div class="py-12 text-2xl md:text-4xl lg:py-24 lg:text-6xl font-medium text-center">Contact Me</div>
                <form action="">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">SEND</button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center flex flex-col items-center gap-5">
                            <div class="flex flex-col">Don't like forms ? <a class="text-indigo-500 cursor-pointer" href="mailto:maxime.sickenberg@gmail.com">maxime.sickenberg@gmail.com</a></div>
                        </div>
                    </div>
                </form>
                
            </div>
        </section>

        <footer class="bg-zinc-100">
            <div class="mx-auto max-w-7xl py-6 px-6 lg:flex lg:items-center lg:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 lg:order-2">  
                    <a href="https://www.instagram.com/makcnmas/" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="https://github.com/TheRedRacing" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    
                    <a href="https://www.linkedin.com/in/maxime-sickenberg/" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
                <div class="mt-8 lg:order-1 lg:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-500">&copy; 2023 Maxime Sickenberg. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <div class="relative z-50 hidden" id="aboutmodal">
        <!--
            Background backdrop, show/hide based on modal state.

            Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
            Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
            <div id="closeModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
                    Modal panel, show/hide based on modal state.

                    Entering: "ease-out duration-300"
                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    To: "opacity-100 translate-y-0 sm:scale-100"
                    Leaving: "ease-in duration-200"
                    From: "opacity-100 translate-y-0 sm:scale-100"
                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                -->
                <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl sm:p-6">
                    <div class="text-left">
                        <div class="text-lg font-medium leading-6 text-gray-900 flex justify-between items-center">
                            <div>About</div>
                            <button id="DismissModal" type="button" class="-mr-1 flex rounded-full p-2 border-2 border-white hover:border-blue-500 sm:-mr-2 cursor-pointer">
                                <span class="sr-only">Dismiss</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-2">
                            <div class="text-gray-600 flex flex-col gap-2 text-xs lg:text-base lg:gap-4">
                                <span>Après avoir terminé ma scolarité obligatoire, j'ai découvert l'informatique et son univers vaste et sans fin. J'ai donc poursuivi mes études à l'École Technique des Métiers de l'Informatique (ETML), où j'ai acquis des connaissances solides en réseaux, programmation et bureautique.</span>
                                <span>À la fin de la première année, j'ai choisi de me spécialiser en développement web, attiré par les langages utilisés dans ce domaine. Après deux années d'étude supplémentaires et une année de stage en entreprise à temps plein, j'ai obtenu mon Certificat Fédéral de Capacité (CFC) en informatique.</span>
                                <span>Initialement, mon rêve était de devenir policier, mais malheureusement je n'ai pas été admis à l'école de police en raison de facteurs personnels qui m'ont touché depuis ma naissance. Cependant, je poursuis mon apprentissage en informatique en autodidacte, en me concentrant sur des technologies telles que Laravel, Angular et Alpine.</span>
                                <span>Je suis très perfectionniste, autonome, innovant et capable de m'adapter aux besoins des clients. J'adopte une méthode Agile pour mon travail, utilise Github et Trello pour organiser mes tâches, maîtrise Figma pour proposer des maquettes efficaces, et suis capable de travailler avec les systèmes d'exploitation Linux, Windows et MacOS. Je suis également familiarisé avec les technologies web telles que Vue.js, Nuxt.js et React.</span>
                                <span>Si vous souhaitez en savoir plus sur moi, je serai ravi de répondre à vos questions. Vous pouvez me contacter par courrier électronique à maxime.sickenberg@gmail.com, par téléphone au 078 830 58 50 ou via LinkedIn.</span>
                                <span>Je me tiens à votre disposition pour échanger avec vous.</span>
                                <span>Maxime Sickenberg 🪴</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        









    </body>
</html>
