<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-main">
    <div class="max-w-7xl m-auto">
        <header class="flex justify-center h-32">
            <nav class="px-2 py-2.5 w-full mt-10">
                <div class="flex flex-wrap justify-between items-center mx-auto">
                    <a href="" class="flex items-center">
                        <button class="self-center font-semibold font text-2xl">Arthur Canhassi</button>
                    </a>
                    <div class="flex gap-8 font text-lg">
                        <p>Projects</p>

                        <a href="#resume">
                            <p>Resume</p>
                        </a>
                        
                        <a href="#contact">
                           <p>Contact</p> 
                        </a>
                            
                        <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill=#ffffff viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10v-20zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12z"/></svg></button>
                        
                    </div>  
                </div>
            </nav>
        </header>
        <h4 id="resume" class="font text-base mt-32">Hey, i'm</h4>
        <h1 class="name mt-5">Arthur Canhassi</h1>
        <p class="font text-lga mt-3">
            I'm a software engineer, live in São Paulo, Brazil and i'm mechatronics technician. I study software development, and for to practice i make projects that i need in my day to day. I am a member of He4rt Developer comunity, my main programing languages is the PHP, JS, C++, and framework i study Laravel and Vuejs. 
        </p>
        <ul id="contact" class="flex gap-2 mt-24">
            <a href="" target="_blank">
                <button class="bg-gradient-to-tr from-[#9358F7] to-[#10D7E2] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#ffffff" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>     
                        <li>Send an email</li>
                    </div>
                </button>           
            </a>
            <a href="https://www.linkedin.com/in/arthur-canhassi-a0546114b/" target="_blank">
                <button class="bg-gradient-to-br from-[#6964DE] to-[#FCA6E9] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#ffffff" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <li class="m">Linkedln</li>  
                    </div>
                </button> 
            </a>
            <a href="https://github.com/Canhassi12" target="_blank">
                <button class="bg-gradient-to-tr from-[#F4426C] to-[#FBF2B1] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#ffffff" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        <li>Github</li>  
                    </div>
                </button> 
            </a>
            <a href="https://www.instagram.com/canhassi_12/" target="_blank">            
                <button class="bg-gradient-to-br from-[#D24074] to-[#6518B4] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="#ffffff" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        <li>Instagram</li>  
                    </div>
                </button>
            </a>
        </ul>
    </div>
    <div class="bg-black mt-20">
        <div class="max-w-7xl m-auto flex flex-col">
            <div>
                <span>k</span>
            </div>
            <h3 class="font mt-20 ">EXPERIENCE</h3>
            <div class="font mt-10 max-w-min">
                <div class="flex">
                    <ul class="flex flex-col text-center">
                        <button id="metro-sp" class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            <li class="">MetroSp</li>
                        </button>

                        <section class="font hidden justify-start w-[699px] ml-72 " id="metro-paragraph">
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

                        <button id="high-school" class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover: hover:bg-[#1F1E1E] 0">
                            <li class="">High school</li>
                        </button>  
                        
                        <section class="font hidden justify-start w-[699px] ml-72 " id="school-paragraph">
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
                            <li class="">*</li>
                        </div>

                        <div class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            <li class="">*</li>
                        </div>

                        <div class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            <li class="">*</li>
                        </div>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>