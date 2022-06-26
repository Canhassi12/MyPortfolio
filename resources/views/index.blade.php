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
<body class="bg-main">
    <div class="max-w-7xl m-auto">
        <header class="flex justify-center h-32">
            <nav class="px-2 py-2.5 w-full mt-10">
                <div class="flex flex-wrap justify-between items-center mx-auto">
                    <a href="" class="flex items-center">
                        <button class="self-center font-semibold font text-2xl gap-{30px}">Arthur Canhassi</button>
                    </a>
                    <div class="flex gap-8 font text-lg">
                        <p>Projects</p>

                        <a href="#resume">
                            <p>Resume</p>
                        </a>

                        <a href="#contact">
                           <p>Contact</p>
                        </a>

                        <button>
                            <x-icons.dark-mode/> 
                        </button>
                    </div>
                </div>
            </nav>
        </header>
        <h4 id="resume" class="font text-base mt-32">Hey, i'm</h4>
        <h1 class="name mt-5 text-8xl text-justify font-medium">Arthur Canhassi</h1>
        <p class="font text-lg mt-3">
            I'm a software engineer, live in São Paulo, Brazil and i'm mechatronics technician. I study software development, and for to practice i make projects that i need in my day to day. I am a member of He4rt Developer comunity, my main programing languages is the PHP, JS, C++, and framework i study Laravel and Vuejs.
        </p>
        <ul id="contact" class="flex gap-2 mt-24">

            <x-contact-button 
                content="Send an email"
                icon="mail"
                color="email"
                link="https://www.linkedin.com/in/arthur-canhassi-a0546114b/"
            />

            <x-contact-button
                content="Linkedln"
                icon="linkedin"
                color="linkedin"
                link="https://www.linkedin.com/in/arthur-canhassi-a0546114b/"
            />

            <x-contact-button
                content="Github"
                icon="github"
                color="github"
                link="https://github.com/Canhassi12"
            />

            <x-contact-button
                content="Instagram"
                icon="instagram"
                color="instagram"
                link="https://www.instagram.com/canhassi_12/"
            />            
        </ul>
    </div>
    <div class="bg-black mt-20 ">
        <div class="max-w-7xl m-auto flex flex-col">
            <div>
                <span></span>
            </div>
            <h3 class="font mt-20 uppercase">experience</h3>
            <div class="font mt-10 max-w-min">
                <div class="flex">
                    <ul class="flex flex-col text-center">
                        <button id="metro-sp" class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            MetroSp
                        </button>

                        <section class="font  justify-start w-[699px] ml-72 " id="metro-paragraph">
                            <div class="flex items-baseline text-base">
                               <h1 class="text-2xl">Companhia do metropolitano de São Paulo</h1>
                               <p class="text-[#C4C4C4] ml-20">May 2022 - Present</p>
                            </div>
                            <div class="flex">
                               <p class="mt-6 text-sm text-[#6CACE4]">São Paulo | Brazil</p>
                            </div>

                            <div class="flex">
                               <p class="mt-6 text-base text-[#C4C4C4]">-Machine maintenance mechanic in general / mechatronics</p>
                            </div>

                            <hr class="bg-white mt-8">
                        </section>

                        <button id="high-school" class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E] 0">
                            High school
                        </button>

                        <section class="font justify-start w-[699px] ml-72 " id="school-paragraph">
                            <div class="flex items-baseline text-base">
                               <h1 class="text-2xl">Etec Professor Basilides de godoy</h1>
                               <p class="text-[#C4C4C4] ml-20">Jan 2019 - Complete</p>
                            </div>
                            <div class="flex">
                               <p class="mt-6 text-sm text-[#6CACE4]">São Paulo | Brazil</p>
                            </div>

                            <div class="flex">
                               <p class="mt-6 text-base text-[#C4C4C4]">-High School + mechatronics technician</p>
                            </div>

                            <hr class="bg-white mt-8">
                        </section>

                        <div class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            *
                        </div>

                        <div class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            *
                        </div>

                        <div class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            *
                        </div>
                    </ul>
                </div>
                <hr class="bg-[#C6C6C6] mt-28 w-[1300px] min-w-max">
                <p class="uppercase mt-20 text-2xl">featured projects</p>
                <div class="flex flex-wrap gap-12">
                    @foreach ($repositories as $repository)
                        <div>
                            <div class="w-80 h-60">
                                <a href="{{$repository['url']}}" target="_blank">
                                    <img class="w-full h-full mt-14" src="{{$repository['img']}}" alt="">
                                </a> 
                            </div>
                    
                            <div class=" flex mt-6 text-2xl gap-2 w-80">
                                {{$repository['name']}}
                                <div class="flex items-center gap-1">  
                                    <x-icons.star/> 
                                    {{$repository['stars']}}   
                                </div>
                            </div>

                            <div class="text-sm text-[#C4C4C4] mt-7">
                                {{$repository['description']}}
                            </div>
                        </div>
                    @endforeach
                </div>
    
                {{-- <div class="font text-sm mt-7">
                    <p class="text-[#6CACE4]">
                        Laravel - TailWind - ocamel - WebAssembly - WebSql - 00110 - Service Worker - PWA - Web3 - HTML 3 - CsS 5
                    </p> 
                </div> --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
