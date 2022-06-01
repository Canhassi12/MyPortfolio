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
                        <span class="self-center font-semibold font text-2xl">Arthur Canhassi</span>
                    </a>
                    <div class="flex gap-8 font text-lg">
                        <p>Projects</p>
                        <p>Resume</p>
                        <p>Contact</p>
                        <p>fds</p>
                    </div>  
                </div>
            </nav>
        </header>
        <h4 class="font text-base mt-32">Hey, i'm</h4>
        <h1 class="name mt-5">Arthur Canhassi</h1>
        <p class="font text-lga mt-3">
            I'm a software engineer, live in São Paulo, Brazil and i'm mechatronics technician. I study software development, and for to practice i make projects that i need in my day to day. I am a member of He4rt Developer comunity, my main programing languages is the PHP, JS, C++, and framework i study Laravel and Vuejs. 
        </p>
        <ul class="flex gap-2 mt-24">
            <a href="" target="_blank">
                <button class="bg-gradient-to-tr from-[#9358F7] to-[#10D7E2] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>     
                        <li>Send an email</li>
                    </div>
                </button>           
            </a>
            <a href="https://www.linkedin.com/in/arthur-canhassi-a0546114b/" target="_blank">
                <button class="bg-gradient-to-br from-[#6964DE] to-[#FCA6E9] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg> 
                        <li>Linkedln</li>  
                    </div>
                </button> 
            </a>
            <a href="https://github.com/Canhassi12" target="_blank">
                <button class="bg-gradient-to-tr from-[#F4426C] to-[#FBF2B1] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg> 
                        <li>Github</li>  
                    </div>
                </button> 
            </a>
            <a href="https://www.instagram.com/canhassi_12/" target="_blank">            
                <button class="bg-gradient-to-br from-[#D24074] to-[#6518B4] p-0.5 rounded">
                    <div class="flex justify-center items-center contact-button text-base w-[200px] h-[55px] bg-main border-black rounded gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg> 
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
                    <ul class="flex flex-col text-center  max-w-min">
                        
                        <button id="high-school" class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover: hover:bg-[#1F1E1E]">
                            <li class="">High school</li>
                        </button>  
                        
                        

                        <button id="metro-sp" class="w-48 h-14 border-2 border-l-[#1F1E1E] border-black flex justify-center items-center hover:bg-[#1F1E1E]">
                            <li class="">MetroSp</li>
                        </button>

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
                   
                    <section class="font flex">
                        <p class="hidden" id="fds">sdkfjkls</p>
                    </section>
                    <section class="font flex">
                        <p class="hidden" id="fds2">dalee</p>
                    </section>
                </div> 
            </div>
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>