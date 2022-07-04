<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canhassi | Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="dark:bg-neutral-800">
    <section class="mx-auto px-4 sm:max-w-2xl md:max-w-4xl lg:max-w-5xl xl:max-w-7xl ">
        <header class="flex justify-center h-32">
            <nav class="px-2 py-2.5 w-full mt-10 ">
                <div class="flex flex-wrap justify-between items-center mx-auto">
                    <a href="" class="flex items-center">
                        <button class="self-center font-semibold  dark:text-white text-xl lg:text-2xl md:text-xl gap-{30px} ">Arthur
                            Canhassi</button>
                    </a>
                    <div class="flex gap-8  dark:text-white lg:text-lg md:text-base">
                        <a class="hidden md:block" href="#projects">
                            Projects
                        </a>

                        <a class="hidden md:block" href="#resume">
                            Resume
                        </a>

                        <a class="hidden md:block" href="#contact">
                            Contact
                        </a>

                        <button id="themeToggle">
                            <x-icons.dark-mode/>
                        </button>
                    </div>
                </div>
            </nav>
        </header>
        <h4 id="resume" class="dark:text-white text-base lg:text-base md:text-sm mt-32 xl:ml-0">Hey, i'm</h4>

        <h1 class="name mt-5 text-5xl lg:text-8xl md:text-7xl text-justify font-medium xl:ml-0">Arthur Canhassi</h1>

        <p class="dark:text-white  text-base xl:w-full lg:text-lg md:text-base mt-3 lg:w-11/12 xl:text-left lg:text-justify xl:ml-0 ">
            I'm a software engineer, live in São Paulo, Brazil and I'm mechatronics technician. I study software
            development, and to practice I make projects that I need in my day to
            day. I am a member of He4rt Developer comunity, my main programing languages
            is PHP, JS, C++, and framework I study Laravel.
        </p>
        <ul id="contact" class="flex flex-col md:flex-row md:gap-2 gap-3 mt-24 items-center">
            <x-contact-button 
                content="Send an email" 
                icon="mail" 
                color="email"
                link="https://www.linkedin.com/in/arthur-canhassi-a0546114b/"/>

            <x-contact-button 
                content="Linkedln" 
                icon="linkedin" 
                color="linkedin"
                link="https://www.linkedin.com/in/arthur-canhassi-a0546114b/"/>

            <x-contact-button 
                content="Github" 
                icon="github" 
                color="github" 
                link="https://github.com/Canhassi12"/>

            <x-contact-button 
                content="Instagram" 
                icon="instagram" 
                color="instagram"
                link="https://www.instagram.com/canhassi_12/"/>
        </ul>
    </section>
    <div class="dark:bg-neutral-900 bg-gray-100 mt-20 ">
        <div class="mx-auto px-4 max-w-7xl m-auto flex flex-col">
            <div>
                <span></span>
            </div>
            <div class="max-w-min">
                <h3 class=" title font-semibold dark:text-white text-2xl mt-20 uppercase">experience</h3>
            </div>

            <div class=" dark:text-white mt-10 ">
                <div class="flex">
                    <ul class="flex flex-col text-center w-full">
                        <button id="metro-sp"
                            class="w-48 h-14 hidden md:block border-2 dark:border-l-gray-600 dark:border-neutral-900 border-transparent border-l-[#1F1E1E] flex justify-center items-center hover:bg-[#1F1E1E] hover:border-l-[#10D7E2] hover:text-white dark:hover:border-l-white">
                            MetroSp 
                        </button>

                        <section class=" dark:text-white md:flex md:ml-56 md:flex-col 2xl:ml-72" id="metro-paragraph">
                            
                            <div class=" lg:flex items-center">
                                <h2 class="text-base xl:text-2xl  dark:text-[#C4C4C4] text-left md:text-x">Companhia do metropolitano de São Paulo.</h2>
                                <p class="dark:text-[#C4C4C4]  lg:block hidden ml-52">May 2022 - Present</p>
                            </div>

                            <h1 class="text-3xl xl:text-4xl text-left mt-10">Maintenance apprentice</h1>

                            <p class="dark:text-[#C4C4C4] text-left mt-10 lg:ml-20 lg:hidden">May 2022 - Present</p>
                        
                            <p class="mt-10 text-sm xl:text-base text-left text-[#1F26B7] dark:text-[#6CACE4]">São Paulo | Brazil</p>
                        
                            <p class="mt-6 text-base text-left  dark:text-[#C4C4C4]">- Machine maintenance mechanic in general.</p>

                            <p class="mt-6 text-base text-justify  dark:text-[#C4C4C4]">- Mechatronics.</p>
                
                        </section>

                        <hr class="dark:border-white border-black mt-10 lg:w-auto"> 

                        <button id="high-school"
                            class="w-48 h-14 mt-10 hidden md:block border-2 dark:border-l-gray-600 dark:border-neutral-900 border-transparent border-l-[#1F1E1E] flex justify-center items-center hover:bg-[#1F1E1E] hover:border-l-[#10D7E2] hover:text-white dark:hover:border-l-white">
                            High school
                        </button>

                        <section class="md:ml-56 2xl:ml-72" id="school-paragraph">
                            
                            <div class="lg:flex items-center">
                                <h2 class="text-base xl:text-2xl dark:text-[#C4C4C4] text-left mt-4 lg:mt-0">Etec Professor Basilides de godoy.  </h2>
                                <p class="dark:text-[#C4C4C4] lg:block h-full hidden ml-52">Jan 2019 - Complete</p>
                            </div>

                            <h1 class="text-3xl xl:text-4xl text-left mt-10">Student</h1>

                            <p class="dark:text-[#C4C4C4] text-left mt-10 lg:ml-20 lg:hidden">Jan 2019 - Complete</p>
                            
                            <p class="mt-10 text-sm xl:text-base text-left text-[#1F26B7] dark:text-[#6CACE4]">São Paulo | Brazil</p>

                            <p class="mt-6 text-base text-justify dark:text-[#C4C4C4]">- High School.</p>

                            <p class="mt-6 text-base text-justify dark:text-[#C4C4C4]">- Mechatronics technician.</p>

                        </section>
                            <hr class="border-black dark:border-white mt-8 lg:w-auto">
                    </ul>
                </div>
                <p id="projects" class="uppercase title mt-20 text-2xl md:text-center xl:text-left">featured projects</p>
                <div class="md:justify-center md:gap-x-56 lg:ml-0 lg:gap-24 xl:gap-28 xl:justify-start flex flex-wrap">
                    @foreach ($repositories as $repository)
                        <div class="xl:w-50 lg:w-50">
                            <div class="xl:w-80 xl:h-52 lg:w-80 lg:h-52 md:max-w-md">
                                <a href="{{ $repository['url'] }}" target="_blank">
                                    <img class="w-full h-full mt-14" src="{{ $repository['img'] }}"
                                        alt="">
                                </a>
                            </div>

                            <div class=" flex mt-6 text-2xl gap-2 w-80">
                                {{ $repository['name'] }}
                                <div class="flex items-center gap-1">
                                    <x-icons.star />
                                    {{ $repository['stars'] }}
                                </div>
                            </div>

                            <div class="text-base text-black dark:text-[#C4C4C4] mt-7">
                                {{ $repository['description'] }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
