<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElevateX</title>
    <link rel="stylesheet" href="../output.css">
    <style>
        .slider {
            cursor: pointer;
            width: 100%;
            height: var(--height);
            overflow: hidden;
            margin-bottom: 50px;
            mask-image: linear-gradient(to right,
                    transparent,
                    #000 10% 90%,
                    transparent);
        }

        .slider .list {
            display: flex;
            width: 100%;
            min-width: calc(var(--width) * var(--quantity));
            position: relative;
        }

        .slider .list .item {
            width: var(--width);
            height: var(--height);
            position: absolute;
            left: 100%;
            animation: autoRun 10s linear infinite;
            transition: filter 0.5s;
            animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1) - 10s) !important;
        }

        .slider .list .item img {
            width: 100%;
        }

        @keyframes autoRun {
            from {
                left: 100%;
            }

            to {
                left: calc(var(--width) * -1);
            }
        }

        .slider:hover .item {
            animation-play-state: paused !important;
            filter: grayscale(1);
        }

        .slider .item:hover {
            filter: grayscale(0);
        }

        .slider[reverse="true"] .item {
            animation: reversePlay 10s linear infinite;
        }

        @keyframes reversePlay {
            from {
                left: calc(var(--width) * -1);
            }

            to {
                left: 100%;
            }
        }

        /* Footer gradient */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradientShift 10s ease infinite;
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradientShift 4s ease infinite;
        }
    </style>
</head>

<body class="bg-black">
    <!-- Left SVG Hexagon -->
    <div class="absolute right-150 bottom-40 w-[70%] h-full opacity-60 transform -translate-x-2/5 z-10">
        <div class="gradient-hexagon lower" data-animation-type="lottie">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1080 1080"
                width="1080" height="1080" preserveAspectRatio="xMidYMid meet"
                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                <defs>
                    <clipPath id="__lottie_element_411">
                        <rect width="1080" height="1080" x="0" y="0"></rect>
                    </clipPath>
                    <linearGradient id="gradient" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                        x1="-72.39942932128906" y1="-478.5393981933594" x2="72.39683532714844" y2="478.5390625">
                        <stop offset="0%" stop-color="rgb(231,51,89)" class="gradient-stop-1">
                            <animate attributeName="stop-color"
                                values="rgb(231,51,89); rgb(59,85,229); rgb(145,68,159); rgb(231,51,89)" dur="6s"
                                repeatCount="indefinite" />
                        </stop>
                        <stop offset="50%" stop-color="rgb(145,68,159)" class="gradient-stop-2">
                            <animate attributeName="stop-color"
                                values="rgb(145,68,159); rgb(231,51,89); rgb(59,85,229); rgb(145,68,159)" dur="6s"
                                repeatCount="indefinite" />
                        </stop>
                        <stop offset="100%" stop-color="rgb(59,85,229)" class="gradient-stop-3">
                            <animate attributeName="stop-color"
                                values="rgb(59,85,229); rgb(145,68,159); rgb(231,51,89); rgb(59,85,229)" dur="6s"
                                repeatCount="indefinite" />
                        </stop>
                    </linearGradient>
                </defs>
                <g clip-path="url(#__lottie_element_411)">
                    <g transform="matrix(1,0,0,1,540,560)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,-0.6169999837875366,-17.62700080871582)">
                            <path stroke="url(#gradient)" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                stroke-miterlimit="4" stroke-opacity="1" stroke-width="10"
                                d=" M500,0 C500,52.35987854003906 295.344970703125,406.832763671875 250,433.0126953125 C204.65501403808594,459.192626953125 -204.65501403808594,459.192626953125 -250,433.0126953125 C-295.344970703125,406.832763671875 -500,52.35987854003906 -500,6.123233701766512e-14 C-500,-52.35987854003906 -295.344970703125,-406.832763671875 -250,-433.0126953125 C-204.65501403808594,-459.192626953125 204.65501403808594,-459.192626953125 250,-433.0126953125 C295.344970703125,-406.832763671875 500,-52.35987854003906 500,0z">
                            </path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>


    <!-- Nav bar -->
    <nav class="bg-black px-6 py-4 m-3 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/" class="flex items-center">
                <!-- Logo -->
                <span class="text-white text-2xl font-bold ml-2">ElevateX</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-8">
            <!-- Dropdown menu freelance Zone -->
            <!-- flex items-center px-3 py-2 text-gray-300 hover:text-white -->
            <div class="relative group">
                <button class="flex items-center px-3 py-2 text-white cursor-pointer">
                    Freelance Zone
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="ml-1 transition-transform duration-300 hover:rotate-180">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>

                <!-- Products Mega Dropdown -->
                <div
                    class="absolute top-full left-0 w-full md:w-[960px] bg-black border border-gray-700 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 invisible group-hover:visible z-50">
                    <div class="grid grid-cols-3 gap-6 p-6">
                        <!-- Tech & Software Section -->
                        <div class="space-y-1 ">
                            <h3 class="text-lg font-medium mb-4 text-white">Tech & Software</h3>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Web Development</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Modern frameworks and
                                        tools</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M12 2a8 8 0 100 16 8 8 0 000-16z" />
                                        <path d="M9 9a3 3 0 014 0" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">AI & ML</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Powering breakthroughs
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0110 0v4" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Cybersecurity</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Scale without
                                        compromising</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path
                                            d="M18 3a3 3 0 00-3 3v12a3 3 0 003 3 3 3 0 003-3 3 3 0 00-3-3H6a3 3 0 00-3 3 3 3 0 003 3 3 3 0 003-3V6a3 3 0 00-3-3 3 3 0 00-3 3 3 3 0 003 3h12a3 3 0 003-3 3 3 0 00-3-3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">SaaS</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Software as a Service
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                                        <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Blockchain</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Decentralized solutions
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FinTech Section -->
                        <div class="space-y-1">
                            <h3 class="text-lg font-medium mb-4 text-white">FinTech</h3>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="2" y="5" width="20" height="14" rx="2" />
                                        <path d="M12 12h.01M17 12h.01M7 12h.01" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Digital Payments</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para"> Fast, scalable, and
                                        reliable</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3" />
                                        <line x1="12" y1="17" x2="12.01" y2="17" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Crypto</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Cryptocurrency solutions
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Investment Platforms</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Helping teams ship 6x
                                        faster</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">InsurTech</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Insurance technology</p>
                                </div>
                            </div>
                        </div>

                        <!-- Media & Entertainment Section -->
                        <div class="space-y-1">
                            <h3 class="text-lg font-medium mb-4 text-white">Media & Entertainment</h3>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <polygon points="23 7 16 12 23 17 23 7" />
                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Streaming</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Servers, in serverless
                                        form</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                        <line x1="8" y1="21" x2="16" y2="21" />
                                        <line x1="12" y1="17" x2="12" y2="21" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Gaming</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Speed with Enterprise
                                        scale</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">AR/VR</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Augmented & Virtual
                                        Reality</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                        <polyline points="14 2 14 8 20 8" />
                                        <line x1="16" y1="13" x2="8" y2="13" />
                                        <line x1="16" y1="17" x2="8" y2="17" />
                                        <polyline points="10 9 9 9 8 9" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Digital Content Creation</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Trace every step</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- exprtimental area -->


            <a href="#" class="text-white hover:text-gray-300 transition-colors z-10">About Us</a>
            <a href="../Listingpage/Startup/startups.php"
                class="text-white hover:text-gray-300 transition-colors">Startups
            </a>

            <a href="#" class="text-white hover:text-gray-300 transition-colors">Pitch</a>
            <a href="#" class="text-white hover:text-gray-300 transition-colors">Events</a>

            <!-- Dropdown Menus -->
            <div class="relative group">
                <!-- Dropdown menu freelance Zone -->
                <div class="flex items-center space-x-4">
                    <!-- Getting Started Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center px-3 py-2 text-white cursor-pointer">
                            Community
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-1 transition-transform duration-300 hover:rotate-180">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 w-120 bg-black border border-gray-700 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 invisible group-hover:visible z-50">
                            <div class="p-6 flex">
                                <!-- Left large area (40%) -->
                                <div class="w-2/5 pr-4 border border-gray-700 rounded-lg mr-5">
                                    <!-- For image area is left mfs -->
                                </div>

                                <!-- Right side with three lists (60%) -->
                                <div class="w-3/5">
                                    <ul class="space-y-6">
                                        <li>
                                            <h3 class="text-sm font-medium text-white">Founders</h3>
                                            <a href="../Listingpage/Founder/Founders.php">
                                                <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Helping
                                                    founders connect, collaborate, and
                                                    scale their visionary startups.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <h3 class="text-sm font-medium text-white">Investors</h3>
                                            <a href="../Listingpage/Startup/startups.php">
                                                <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Empowering
                                                    investors to fund startups with
                                                    seamless and strategic connections
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <h3 class="text-sm font-medium text-white">Contibuters</h3>
                                            <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Join as a
                                                contributor to support startups
                                                with skills, ideas, and expertise.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Auth Buttons -->
        <div class="flex items-center space-x-6">
            <button class="text-white hover:text-gray-300 flex items-center transition-colors cursor-pointer">
                <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff" class="h-6 w-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>user-profile</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Combined-Shape" fill="#ffffff" transform="translate(42.666667, 42.666667)">
                                <path
                                    d="M209.854555,426.638876 L213.333333,426.666667 C212.11355,426.666667 210.896158,426.656429 209.681238,426.636036 C208.570181,426.617387 207.461015,426.590239 206.353979,426.554656 C206.286264,426.55248 206.218215,426.550261 206.150175,426.548009 C205.038095,426.511215 203.928426,426.465921 202.820973,426.412183 C202.790586,426.410708 202.759563,426.409196 202.728542,426.407678 C201.599261,426.352392 200.472879,426.288364 199.348869,426.21563 C199.304813,426.212779 199.260112,426.209873 199.215415,426.206953 C198.113342,426.134948 197.014189,426.054626 195.917379,425.966008 C195.843781,425.960062 195.770067,425.954068 195.696363,425.948036 C194.611053,425.859218 193.528114,425.762284 192.447534,425.657288 C192.39216,425.651907 192.337128,425.646538 192.282101,425.641148 C191.198891,425.53505 190.11772,425.420812 189.038988,425.298528 C188.961425,425.289736 188.884057,425.280923 188.806702,425.272068 C187.76499,425.152828 186.725414,425.026066 185.688174,424.891854 C185.556342,424.874796 185.424963,424.857671 185.293621,424.840428 C184.317386,424.71226 183.342876,424.57744 182.370492,424.436061 C182.191508,424.410037 182.013494,424.383924 181.835552,424.357591 C180.866836,424.214238 179.899471,424.064248 178.934278,423.907783 C178.791983,423.884715 178.649977,423.861547 178.508019,423.838238 C177.508066,423.674055 176.510184,423.502871 175.514695,423.324781 C175.410597,423.306158 175.305918,423.287351 175.201266,423.268467 C174.207679,423.089177 173.217086,422.903124 172.228933,422.71025 C172.086491,422.682447 171.944487,422.654579 171.802533,422.62657 C170.836096,422.435883 169.871396,422.23854 168.909091,422.03471 C168.763114,422.003789 168.617805,421.972851 168.472552,421.941765 C167.509262,421.73561 166.547845,421.522828 165.588891,421.303585 C165.458271,421.273722 165.328004,421.243809 165.197782,421.213777 C164.217319,420.987663 163.239237,420.754741 162.263791,420.51511 C162.148274,420.486732 162.032321,420.458143 161.916406,420.429459 C160.945212,420.189129 159.977238,419.942303 159.011934,419.688882 C158.891899,419.65737 158.771961,419.62577 158.652065,419.594068 C157.683102,419.337867 156.716547,419.074937 155.752747,418.805408 C155.645281,418.775355 155.537713,418.745182 155.430181,418.714927 C154.431336,418.433891 153.435704,418.145837 152.443098,417.850754 C152.375042,417.830522 152.307114,417.810291 152.239199,417.790027 C151.234635,417.49029 150.233114,417.183332 149.234759,416.869231 C149.165524,416.847449 149.095936,416.825516 149.026364,416.803548 C146.930877,416.141887 144.84973,415.448876 142.783112,414.724954 C142.767465,414.719474 142.751522,414.713887 142.735579,414.708298 L142.701246,414.696259 C139.588277,413.604376 136.5083,412.442347 133.463211,411.212069 C133.36973,411.1743 133.276624,411.136606 133.183552,411.098849 C132.229558,410.711836 131.278741,410.318012 130.331419,409.917541 C130.2915,409.900666 130.25178,409.88386 130.212066,409.867043 C129.248242,409.458901 128.287884,409.043808 127.331211,408.621891 C127.249402,408.585811 127.167304,408.549542 127.085233,408.513222 C126.151203,408.099874 125.220943,407.680132 124.294262,407.253944 C124.227167,407.223086 124.160437,407.192354 124.093726,407.161589 C123.17809,406.739327 122.26572,406.310655 121.356909,405.875738 C121.243027,405.82124 121.128935,405.766515 121.0149,405.711692 C120.13776,405.290004 119.264105,404.862572 118.393828,404.429369 C118.275624,404.37053 118.157882,404.311784 118.040202,404.252933 C117.166805,403.816152 116.296223,403.373244 115.429111,402.924562 C115.330378,402.873474 115.232011,402.822476 115.133689,402.771405 C114.27459,402.325164 113.418751,401.873165 112.566381,401.415542 C112.426005,401.340176 112.285621,401.264603 112.145332,401.188877 C111.293062,400.728837 110.444278,400.263166 109.599031,399.791914 C109.519008,399.747298 109.439349,399.702819 109.359721,399.658289 C108.481489,399.167167 107.60677,398.669832 106.735939,398.16652 C106.652992,398.118579 106.570004,398.07054 106.487052,398.022447 C105.649079,397.536615 104.814727,397.045251 103.984037,396.548397 C103.843093,396.464095 103.702426,396.379739 103.561865,396.295226 C102.75613,395.810771 101.953598,395.320984 101.154577,394.826067 C101.04355,394.757297 100.932632,394.688453 100.821782,394.61951 C99.9912589,394.102969 99.1644817,393.58084 98.3415666,393.053213 C98.2402396,392.988246 98.1386116,392.922964 98.0370427,392.857598 C97.2170734,392.329894 96.4013484,391.796988 95.5895207,391.258673 C95.4985151,391.198328 95.407605,391.137947 95.3167439,391.077497 C94.4980986,390.532855 93.6833241,389.982635 92.8725812,389.426961 C92.7809486,389.364157 92.689408,389.301311 92.5979189,389.238396 C91.7605711,388.662568 90.9276324,388.080981 90.0990676,387.49363 C90.0482094,387.457578 89.9972737,387.421437 89.9463545,387.385274 C83.7400904,382.977624 77.7797929,378.246386 72.090021,373.216132 C72.023062,373.156934 71.9562295,373.097774 71.8894343,373.038573 C70.3322557,371.658425 68.795314,370.255766 67.2792108,368.831185 C67.1968327,368.75378 67.1147087,368.676491 67.032646,368.599138 C66.3987179,368.001594 65.7682497,367.400019 65.14148,366.794639 C24.9762443,327.999259 2.84217094e-14,273.583054 2.84217094e-14,213.333333 C2.84217094e-14,95.5125867 95.5125867,3.55271368e-14 213.333333,3.55271368e-14 C269.912851,3.55271368e-14 324.175019,22.4761259 364.18278,62.4838867 C404.190541,102.491647 426.666667,156.753816 426.666667,213.333333 C426.666667,273.585043 401.688773,328.002853 361.522928,366.79682 C361.520898,366.799478 361.521527,366.804157 361.522155,366.808836 C351.439362,376.540155 340.403853,385.287453 328.569429,392.896702 C328.514318,392.931764 328.459328,392.967092 328.40432,393.002395 C327.568306,393.539209 326.728257,394.070021 325.884283,394.595103 C325.777796,394.661262 325.671405,394.727333 325.564953,394.793313 C324.74392,395.302195 323.918817,395.80581 323.090062,396.303953 C322.98562,396.366873 322.880512,396.429936 322.775345,396.49291 C321.93817,396.993994 321.09783,397.489342 320.253833,397.979067 C320.156885,398.035657 320.059719,398.09194 319.962505,398.148149 C318.131928,399.206125 316.284353,400.237952 314.420157,401.242845 C314.293167,401.311915 314.165336,401.380659 314.037426,401.449276 C313.197359,401.899275 312.354444,402.34417 311.508221,402.78356 C311.389058,402.846139 311.270176,402.907727 311.151229,402.969206 C310.329108,403.393402 309.503546,403.813285 308.674915,404.227931 C308.489213,404.321624 308.302627,404.414653 308.115885,404.507416 C307.324076,404.899955 306.530028,405.28823 305.733238,405.671698 C305.555744,405.757928 305.37736,405.843474 305.19884,405.928779 C304.384302,406.317179 303.567852,406.700941 302.748598,407.079658 C302.574006,407.161194 302.399241,407.241695 302.224348,407.321968 C301.383282,407.707168 300.539278,408.087888 299.69238,408.463256 C299.550045,408.527172 299.407245,408.590277 299.264364,408.653229 C298.381876,409.041213 297.496639,409.424059 296.608325,409.801056 C296.482475,409.855284 296.356686,409.908525 296.230834,409.961648 C295.307254,410.350691 294.380172,410.73431 293.44983,411.111554 C293.297264,411.174211 293.144439,411.235972 292.991525,411.29756 C292.129853,411.64383 291.265732,411.985297 290.398875,412.321261 C290.222273,412.390466 290.045066,412.458869 289.867745,412.527043 C288.999446,412.860129 288.128773,413.188322 287.255416,413.510962 C287.115822,413.563248 286.976537,413.614535 286.837183,413.665681 C285.966564,413.984518 285.092863,414.298703 284.216545,414.607326 C284.02484,414.675511 283.8325,414.742935 283.640034,414.810091 C282.764935,415.114784 281.887698,415.414446 281.007912,415.708531 C280.854333,415.760485 280.700635,415.811663 280.546858,415.862671 C279.636311,416.164103 278.723091,416.460163 277.8072,416.750208 C277.679123,416.791331 277.55137,416.831652 277.423565,416.871856 C276.449164,417.177836 275.471495,417.477646 274.49087,417.770591 C274.427934,417.789899 274.365194,417.808608 274.302443,417.82729 C273.301532,418.12478 272.297314,418.41569 271.29008,418.699388 C271.15444,418.738041 271.019181,418.775991 270.883866,418.81381 C269.925978,419.081108 268.965015,419.342425 268.001384,419.597167 C267.876068,419.630688 267.750527,419.663751 267.624941,419.696701 C266.673011,419.946089 265.718639,420.189414 264.761722,420.42628 C264.641986,420.456259 264.521685,420.485924 264.401345,420.515486 C263.431666,420.753369 262.459932,420.984831 261.485648,421.209619 C261.348404,421.241574 261.210775,421.273181 261.073096,421.304655 C260.143094,421.516983 259.211208,421.723426 258.277056,421.923751 C258.097044,421.962597 257.916686,422.001026 257.736244,422.039227 C256.805768,422.235988 255.873538,422.426825 254.939116,422.611559 C254.789285,422.64138 254.639199,422.670882 254.489056,422.700226 C252.360575,423.116051 250.22088,423.500399 248.070379,423.852587 C247.985813,423.866561 247.901127,423.880377 247.816425,423.894142 C246.762702,424.065279 245.706563,424.228793 244.647898,424.384529 C244.551145,424.398855 244.454553,424.412996 244.35794,424.427072 C243.323969,424.577631 242.287465,424.720882 241.248614,424.856658 C241.158831,424.868461 241.068879,424.880159 240.978908,424.8918 C239.945241,425.025491 238.909387,425.151835 237.87127,425.270726 C237.76735,425.282674 237.663688,425.294469 237.560004,425.306189 C236.522723,425.4234 235.48288,425.533248 234.440837,425.635598 C234.341371,425.645398 234.242029,425.655085 234.142667,425.664704 C233.09981,425.765633 232.054465,425.859107 231.006978,425.945013 C230.900661,425.953751 230.793967,425.96242 230.68725,425.971011 C229.608835,426.057813 228.528374,426.136598 227.44571,426.207305 C227.400239,426.210284 227.355211,426.213211 227.310178,426.216123 C226.178062,426.289336 225.043081,426.353749 223.905761,426.409256 C223.891372,426.409962 223.876694,426.410677 223.862016,426.41139 C222.74309,426.465766 221.622181,426.511515 220.499076,426.548584 L220.456403,426.549989 C218.091582,426.627572 215.717023,426.666667 213.333333,426.666667 C212.171548,426.666667 211.011932,426.65738 209.854555,426.638876 Z M234.666667,298.666667 L192,298.666667 C158.016898,298.666667 128.295724,318.663564 114.632567,347.902712 L113.088,351.445333 L114.425218,352.433677 C138.741109,369.754783 167.79213,380.859353 199.258857,383.427964 C199.302467,383.43151 199.34549,383.435005 199.388516,383.438483 L199.258857,383.427964 C200.198067,383.504631 201.139428,383.573694 202.08288,383.63509 L199.388516,383.438483 C200.305656,383.51262 201.224359,383.579478 202.144557,383.63902 L202.08288,383.63509 C202.994611,383.694422 203.908295,383.746595 204.823875,383.791553 L202.144557,383.63902 C203.09566,383.700561 204.048361,383.754287 205.002584,383.800156 L204.823875,383.791553 C205.50866,383.825177 206.194505,383.854766 206.881389,383.880296 L213.333333,384 L216.007901,383.979451 C216.09157,383.978165 216.175229,383.976818 216.258877,383.975411 C217.160222,383.960281 218.059919,383.938143 218.957862,383.909068 L216.258877,383.975411 C217.168023,383.96012 218.075929,383.937709 218.982532,383.908213 L218.957862,383.909068 C219.872348,383.879457 220.785015,383.842652 221.695809,383.798707 L218.982532,383.908213 C219.923797,383.877589 220.863656,383.839328 221.802041,383.793468 L221.695809,383.798707 C222.644844,383.752917 223.591846,383.699376 224.536752,383.638145 L221.802041,383.793468 C222.726586,383.748285 223.6497,383.695724 224.571313,383.635825 L224.536752,383.638145 C225.460763,383.578267 226.38277,383.511037 227.302716,383.43651 L224.571313,383.635825 C225.511928,383.57469 226.450981,383.50591 227.388399,383.429524 L227.302716,383.43651 C228.196243,383.364124 229.087825,383.284856 229.977408,383.198758 L227.388399,383.429524 C228.321346,383.353502 229.252673,383.269947 230.182311,383.178897 L229.977408,383.198758 C260.393388,380.254961 288.473405,369.327262 312.095822,352.537298 L313.557333,351.445333 L312.034862,347.907108 C298.970316,319.938868 271.207611,300.423341 239.074565,298.779209 L234.666667,298.666667 Z M213.333333,42.6666667 C119.076736,42.6666667 42.6666667,119.076736 42.6666667,213.333333 C42.6666667,254.036861 56.9158894,291.412304 80.6981785,320.743507 C102.726317,282.071479 144.318498,256 192,256 L234.666667,256 C282.349887,256 323.943349,282.073359 345.967784,320.740809 C369.750452,291.413157 384,254.037325 384,213.333333 C384,119.076736 307.589931,42.6666667 213.333333,42.6666667 Z M213.333333,64 C260.461632,64 298.666667,102.205035 298.666667,149.333333 C298.666667,195.033502 262.742006,232.343016 217.592327,234.562233 L213.333333,234.666667 C166.205035,234.666667 128,196.461632 128,149.333333 C128,103.633165 163.924661,66.3236506 209.074339,64.1044332 L213.333333,64 Z M213.333333,106.666667 C189.769184,106.666667 170.666667,125.769184 170.666667,149.333333 C170.666667,172.897483 189.769184,192 213.333333,192 C236.897483,192 256,172.897483 256,149.333333 C256,125.769184 236.897483,106.666667 213.333333,106.666667 Z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
                <span class="ml-2"><a href="../SignUps/login/index.php">Log in</a></span>
            </button>

            <!-- Join Now Button -->
            <button onclick="toggleModal()"
                class="bg-[#E94560] hover:bg-[#e73351] text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center cursor-pointer">
                Join Now
            </button>

            <!-- Modal -->
            <div id="joinModal"
                class="fixed inset-0 bg-black bg-opacity-10 flex items-center justify-center z-50 hidden">
                <div class="bg-gray-900 text-white p-6 rounded-xl w-80 shadow-lg">
                    <h2 class="text-xl font-semibold mb-4 text-center">Join As</h2>
                    <div class="flex flex-col gap-3">
                        <button
                            class="bg-purple-600 hover:bg-purple-700 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/startup/index.php">Startup</a></button>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/collaborators/index.php">Collaborator</a></button>
                        <button
                            class="bg-green-600 hover:bg-green-700 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/investor/index.php">Investor</a></button>
                    </div>
                    <button onclick="toggleModal()"
                        class="mt-6 text-sm text-gray-400 hover:text-white transition text-center block mx-auto cursor-pointer">Cancel</button>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="bg-black relative py-16 overflow-hidden">

        <!-- Hero Content -->
        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <!-- Uppercase text -->
            <div class="text-center mb-6">
                <p class="uppercase tracking-wider text-gray-400 text-sm">FROM CONNECTIONS TO GROWTH</p>
            </div>

            <!-- Main heading -->
            <div class="text-center mb-8">
                <h1 class="text-white text-5xl md:text-6xl font-bold leading-tight">
                    The Future of Powerful<br>
                    <span
                        class="text-6xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-orange-500 via-purple-500 to-cyan-500">
                        STARTUP
                    </span>
                    ecosystem
                </h1>
            </div>

            <!-- Subheading with changing text -->
            <div class="text-center mb-12">
                <p class="text-white text-xl">
                    Designed to build connections between
                    <span id="changing-word" class="typing"
                        style=" white-space: nowrap;overflow: hidden; color: #E94560; font-weight: 700; border-right: 1px solid white; padding-left: 4px;"></span>
                </p>
            </div>

            <!-- CTA Button -->
            <!-- <div class="text-center">
                <a href="#"
                    class="inline-flex items-center bg-[#E94560] hover:bg-[#e73351] text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    Join Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div> -->

        </div>




        <!-- How It Works Section - Elegant Version -->
        <section class="bg-black text-white py-24 relative overflow-hidden ">
            <!-- Gradient Background Elements -->
            <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-r from-purple-600 to-[#E94560] rounded-full filter blur-3xl opacity-20 -z-10">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-l from-blue-500 to-purple-600 rounded-full filter blur-3xl opacity-10 -z-10">
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <!-- Section Header -->
                <!-- <div class="text-center mb-20">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#E94560] to-purple-500 font-bold text-lg mb-2 inline-block">SEAMLESS
                        PROCESS</span>
                    <h2 class="text-5xl font-bold mb-6">How It Works</h2>
                    <div class="w-32 h-1 bg-gradient-to-r from-[#E94560] to-purple-500 mx-auto mb-8"></div>
                    <p class="text-gray-300 max-w-3xl mx-auto text-lg">Our platform connects the startup ecosystem through
                        an
                        intuitive journey tailored to each participant's unique needs.</p>
                </div> -->

                <!-- User Type Navigation - Elegant Pill Design -->
                <div class="flex flex-wrap justify-center mb-20">
                    <div class="bg-gray-900/40 backdrop-blur-lg p-2 rounded-lg flex flex-wrap justify-center shadow-2xl shadow-[#E94560]/10 border border-gray-800">
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 active bg-gradient-to-r from-[#E94560] to-purple-600 text-white"
                            data-target="startups">Startups
                        </button>
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 bg-transparent hover:bg-gray-800/50"
                            data-target="investors">Investors
                        </button>
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 bg-transparent hover:bg-gray-800/50"
                            data-target="mentors">Mentors
                        </button>
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 bg-transparent hover:bg-gray-800/50"
                            data-target="collaborators">Collaborators
                        </button>
                    </div>
                </div>

                <!-- Content Tabs -->
                <div class="user-tab-content" id="startups-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Create Your Profile</h3>
                            <p class="text-gray-400 mb-6">Build a compelling startup profile highlighting your vision,
                                traction,
                                team, and funding needs. Showcase what makes your venture unique.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Connect & Pitch</h3>
                            <p class="text-gray-400 mb-6">Get matched with relevant investors based on your industry, stage,
                                and
                                funding requirements. Present your vision to those who can help it become reality.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Grow & Succeed</h3>
                            <p class="text-gray-400 mb-6">Secure funding, gather resources, and leverage our network to
                                scale
                                your startup to new heights. Transform your idea into a thriving business.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-tab-content hidden" id="investors-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Set Your Criteria</h3>
                            <p class="text-gray-400 mb-6">Define your investment preferences including sectors, stages, and
                                ticket sizes to receive tailored startup matches that align with your portfolio strategy.
                            </p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Review Opportunities</h3>
                            <p class="text-gray-400 mb-6">Browse curated startups that match your investment thesis and
                                connect
                                with the most promising founders before anyone else in the market.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Invest & Mentor</h3>
                            <p class="text-gray-400 mb-6">Fund promising ventures and leverage our platform tools to track
                                and
                                support your portfolio companies as they grow and expand.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-tab-content hidden" id="mentors-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Share Your Expertise</h3>
                            <p class="text-gray-400 mb-6">Create a mentor profile highlighting your experience, skills, and
                                the
                                areas where you can provide valuable guidance to ambitious founders.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Connect With Startups</h3>
                            <p class="text-gray-400 mb-6">Get matched with startups that can benefit from your specific
                                knowledge and experience. Build meaningful relationships that extend beyond business.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Make An Impact</h3>
                            <p class="text-gray-400 mb-6">Guide founders through challenges, build your reputation, and help
                                shape the next generation of innovators who will transform industries.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-tab-content hidden" id="collaborators-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Showcase Your Skills</h3>
                            <p class="text-gray-400 mb-6">Build a collaborator profile highlighting your technical skills,
                                past
                                projects, and the challenging problems you're passionate about solving.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Continuing the Collaborators tab content from where it left off -->

                        <!-- Step 2 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Find
                                Exciting Projects</h3>
                            <p class="text-gray-400 mb-6">Browse startup challenges that match your expertise and connect
                                with founders who need
                                your specific skill set to solve critical problems.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Collaborate & Build</h3>
                            <p class="text-gray-400 mb-6">Work on innovative solutions, build your portfolio, and create
                                valuable connections in
                                the startup ecosystem that can lead to future opportunities.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Decoration -->
                <div class="mt-20 text-center">
                    <div class="w-24 h-1 bg-gradient-to-r from-[#E94560] to-purple-500 mx-auto mb-6"></div>
                    <p class="text-gray-400 max-w-xl mx-auto">Join our platform today and become part of a community
                        dedicated to
                        innovation, growth, and transformative collaboration.</p>
                    <button
                        class="mt-8 px-10 py-4 cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 rounded-lg font-bold text-white transform transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-[#E94560]/20 flex items-center mx-auto">
                        Get Started Now
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg> -->
                    </button>
                </div>
            </div>
        </section>


        <!-- Right SVG Hexagon -->
        <div class="absolute right-0 top-0 w-[80%] h-full opacity-60 transform translate-x-2/4">
            <div class="gradient-hexagon lower" data-animation-type="lottie">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1080 1080" width="1080" height="1080" preserveAspectRatio="xMidYMid meet"
                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                    <defs>
                        <clipPath id="__lottie_element_412">
                            <rect width="1080" height="1080" x="0" y="0"></rect>
                        </clipPath>
                        <linearGradient id="gradient2" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-72.39942932128906" y1="-478.5393981933594" x2="72.39683532714844" y2="478.5390625">
                            <stop offset="0%" stop-color="rgb(231,51,89)" class="gradient-stop-1">
                                <animate attributeName="stop-color"
                                    values="rgb(231,51,89); rgb(59,85,229); rgb(145,68,159); rgb(231,51,89)" dur="6s"
                                    repeatCount="indefinite" />
                            </stop>
                            <stop offset="50%" stop-color="rgb(145,68,159)" class="gradient-stop-2">
                                <animate attributeName="stop-color"
                                    values="rgb(145,68,159); rgb(231,51,89); rgb(59,85,229); rgb(145,68,159)" dur="6s"
                                    repeatCount="indefinite" />
                            </stop>
                            <stop offset="100%" stop-color="rgb(59,85,229)" class="gradient-stop-3">
                                <animate attributeName="stop-color"
                                    values="rgb(59,85,229); rgb(145,68,159); rgb(231,51,89); rgb(59,85,229)" dur="6s"
                                    repeatCount="indefinite" />
                            </stop>
                        </linearGradient>
                    </defs>
                    <g clip-path="url(#__lottie_element_412)">
                        <g transform="matrix(1,0,0,1,540,560)" opacity="1" style="display: block;">
                            <g opacity="1" transform="matrix(1,0,0,1,-0.6169999837875366,-17.62700080871582)">
                                <path stroke="url(#gradient2)" stroke-linecap="butt" stroke-linejoin="miter"
                                    fill-opacity="0" stroke-miterlimit="4" stroke-opacity="1" stroke-width="10"
                                    d=" M500,0 C500,52.35987854003906 295.344970703125,406.832763671875 250,433.0126953125 C204.65501403808594,459.192626953125 -204.65501403808594,459.192626953125 -250,433.0126953125 C-295.344970703125,406.832763671875 -500,52.35987854003906 -500,6.123233701766512e-14 C-500,-52.35987854003906 -295.344970703125,-406.832763671875 -250,-433.0126953125 C-204.65501403808594,-459.192626953125 204.65501403808594,-459.192626953125 250,-433.0126953125 C295.344970703125,-406.832763671875 500,-52.35987854003906 500,0z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>


    </section>



    <!-- Carosal big -->

    <div class="slider" reverse="true" style="
                        --width: 200px;
                        --height: 200px;
                        --quantity: 9;
                    ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="../Images/Logo.png" alt=""></div>
        </div>
    </div>

    <!-- Carosal -->
    <div class="slider" style="
                    --width: 100px;
                    --height: 50px;
                    --quantity: 10;
                ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="..//Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 10"><img src="../Images/gitlab-logo-400.png" alt=""></div>
        </div>
    </div>




    <!-- User category section -->
    <section class="bg-[#000000] py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <!-- Section Header -->
            <div class="text-center mb-14">
                <h2 class="text-3xl font-bold mb-2 text-white">Who We Connect</h2>
                <div class="w-16 h-1 bg-[#E94560] mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">Our platform brings together the entire startup ecosystem,
                    creating valuable connections that drive innovation and growth.</p>
            </div>

            <!-- User Categories Tabs -->
            <div class="mb-8">
                <div class="flex flex-wrap justify-center gap-2 mb-8" id="tabs-container">
                    <button class="tab-button px-6 py-3 text-sm font-medium rounded-full bg-[#E94560] text-white"
                        onclick="changeTab('startups')">For Startups</button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium rounded-full bg-[#0b0b0d] text-gray-300 border border-gray-600 hover:border-[#E94560]"
                        onclick="changeTab('investors')">For Investors</button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium rounded-full bg-[#0b0b0d] text-gray-300 border border-gray-600 hover:border-[#E94560]"
                        onclick="changeTab('mentors')">For Mentors</button>
                    <button
                        class="tab-button px-6 py-3 text-sm font-medium rounded-full bg-[#0b0b0d] text-gray-300 border border-gray-600 hover:border-[#E94560]"
                        onclick="changeTab('collaborators')">For Collaborators</button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="relative">
                <!-- For Startups Tab -->
                <div id="startups" class="tab-content">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-[#E94560] to-purple-500 p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-[#E94560]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Startups</h3>
                                    <p class="text-gray-400 mb-6">Accelerate your growth by connecting with the
                                        resources
                                        you need most.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#E94560]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Access to capital
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#E94560]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Expert mentorship
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#E94560]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Skilled collaborators
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="inline-flex items-center text-[#E94560] hover:text-white hover:bg-[#E94560] border border-[#E94560] px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Create Startup Profile
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="bg-[#0b0b0d] rounded-2xl p-6 border border-gray-600">
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Funding Opportunities</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Connect with angel investors, VCs, and other
                                            funding sources aligned with your industry and stage. Our smart matching
                                            algorithm prioritizes relevant connections.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Expert Mentorship</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Gain insights from industry veterans who've
                                            been
                                            where you are. Schedule sessions with experienced mentors who can guide your
                                            strategy and help avoid common pitfalls.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Skilled Collaborators</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Find the right talent to help solve your
                                            challenges. Connect with developers, designers, marketers, and other
                                            professionals ready to contribute to your vision.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Visibility & Credibility</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Showcase your startup to our community of
                                            investors
                                            and industry experts. Build your profile, share updates, and increase your
                                            visibility in the ecosystem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Investors Tab -->
                <div id="investors" class="tab-content hidden">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-cyan-500 to-blue-600 p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-cyan-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Investors</h3>
                                    <p class="text-gray-400 mb-6">Discover promising opportunities and build a
                                        diversified
                                        investment portfolio.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-cyan-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Curated deal flow
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-cyan-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Advanced filtering
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-cyan-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Due diligence tools
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="inline-flex items-center text-cyan-500 hover:text-white hover:bg-cyan-500 border border-cyan-500 px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Join as Investor
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="bg-[#0b0b0d] rounded-2xl p-6 border border-gray-600">
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Deal Discovery</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Access a curated pipeline of vetted startups
                                            matching your investment criteria. Filter by industry, stage, location, and
                                            traction metrics to find your next opportunity.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Due Diligence Tools</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Access comprehensive company profiles,
                                            financial
                                            data, and market analysis. Our platform provides the information you need to
                                            make informed investment decisions.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Investor Network</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Connect with other investors for co-investment
                                            opportunities. Share insights, collaborate on due diligence, and build your
                                            professional network within the investment community.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Portfolio Analytics</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Track performance and manage your investment
                                            portfolio with powerful analytics tools. Receive updates on your portfolio
                                            companies and monitor key metrics.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Mentors Tab -->
                <div id="mentors" class="tab-content hidden">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-purple-500 to-indigo-600 p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-purple-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Mentors</h3>
                                    <p class="text-gray-400 mb-6">Share your expertise and help shape the next
                                        generation of
                                        successful companies.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Connect with founders
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Share your knowledge
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Expand your network
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="inline-flex items-center text-purple-500 hover:text-white hover:bg-purple-500 border border-purple-500 px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Become a Mentor
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="bg-[#0b0b0d] rounded-2xl p-6 border border-gray-600">
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Match With Startups</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Connect with startups that match your expertise
                                            and
                                            interests. Our platform intelligently pairs you with founders who can
                                            benefit
                                            most from your specific knowledge and experience.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Flexible Scheduling</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Set your own availability and mentoring format.
                                            Whether you prefer one-time consultations, regular check-ins, or group
                                            sessions,
                                            our platform accommodates your schedule and preferences.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Visibility & Insights</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Get a first look at emerging technologies and
                                            business models. Mentoring provides
                                            valuable market insights and keeps you connected to the latest innovations
                                            in your industry.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Build Your Reputation</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Establish yourself as a thought leader in your
                                            field. Your mentorship profile
                                            showcases your expertise and contributions to the startup ecosystem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Collaborators Tab -->
                <div id="collaborators" class="tab-content hidden">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-green-500 to-teal-600 p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-green-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Collaborators</h3>
                                    <p class="text-gray-400 mb-6">Find exciting projects to contribute your skills and
                                        expand your
                                        professional network.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Showcase your skills
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Find exciting projects
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Build your portfolio
                                        </li>
                                    </ul>
                                    <a href="#"
                                        class="inline-flex items-center text-green-500 hover:text-white hover:bg-green-500 border border-green-500 px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Create Collaborator Profile
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="bg-[#0b0b0d] rounded-2xl p-6 border border-gray-600">
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Project Matching</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Discover projects that align with your skills
                                            and interests.
                                            Our smart matching algorithm helps you find the right opportunities where
                                            your expertise
                                            will be valued.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Skill Showcase</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Highlight your skills, experience, and
                                            portfolio in a
                                            comprehensive profile. Let startups discover what you bring to the table and
                                            why they should
                                            work with you.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Flexible Engagement</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Choose how you want to collaborate - part-time,
                                            full-time,
                                            contract, equity partnership, or advisory. Work on your terms with startups
                                            that respect
                                            your preferences.</p>
                                    </div>
                                    <div class="bg-gradient-to-b from-gray-800 to-[#0b0b0d] rounded-xl p-5">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-gray-700 p-3 rounded-lg mr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                </svg>
                                            </div>
                                            <h4 class="text-lg font-medium text-white">Career Growth</h4>
                                        </div>
                                        <p class="text-gray-400 text-sm">Work with innovative startups to build your
                                            portfolio and
                                            expand your professional network. Gain experience with cutting-edge
                                            technologies and
                                            business models.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Featured Startup section-->
    <section class="bg-[#000000] py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2 text-white">Featured Startups</h2>
                <div class="w-16 h-1 bg-[#E94560] mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">Discover promising ventures actively seeking investors,
                    mentors,
                    and collaborators on our platform.</p>
            </div>

            <!-- Startup Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Startup Card 1 -->
                <div class="bg-[#0b0b0d] border border-gray-600 rounded-xl overflow-hidden transition-transform duration-300 hover:transform hover:scale-[1.02] hover:shadow-xl">
                    <div class="relative">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="../Images/nav-img-2.jpg" alt="EcoTech Solutions" class="object-cover h-full w-full">
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-[#E94560] text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Seeking Funding
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-gray-900 to-black">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-xl text-white">EcoTech Solutions</h3>
                            <span class="bg-gray-800 text-gray-300 text-xs px-2 py-1 rounded">CleanTech</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Developing sustainable waste management solutions using
                            AI-powered sorting technology to revolutionize recycling efficiency.</p>
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-5">
                            <span>Seed Stage</span>
                            <span>London, UK</span>
                        </div>
                        <div class="flex space-x-3 mb-4">
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">$500K-$1M</span>
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">10% Equity</span>
                        </div>
                        <div class="flex space-x-2 pt-4 border-t border-gray-700">
                            <button
                                class="cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 hover:bg-opacity-90 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex-1">Connect</button>
                            <button
                                class="cursor-pointer bg-transparent border border-gray-600 hover:border-gray-500 text-gray-300 text-sm font-medium py-2 px-4 rounded-md transition duration-300">Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Startup Card 2 -->
                <div
                    class="bg-[#0b0b0d] border border-gray-600 rounded-xl overflow-hidden transition-transform duration-300 hover:transform hover:scale-[1.02] hover:shadow-xl">
                    <div class="relative">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="../Images/nav-img-2.jpg" alt="MediSync" class="object-cover h-full w-full">
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-purple-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Seeking Mentorship
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-gray-900 to-black">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-xl text-white">MediSync</h3>
                            <span class="bg-gray-800 text-gray-300 text-xs px-2 py-1 rounded">HealthTech</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Healthcare platform streamlining patient data management
                            with
                            blockchain technology for secure, interoperable medical records.</p>
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-5">
                            <span>Series A</span>
                            <span>Berlin, Germany</span>
                        </div>
                        <div class="flex space-x-3 mb-4">
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">$2M-$5M</span>
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">FDA Approved</span>
                        </div>
                        <div class="flex space-x-2 pt-4 border-t border-gray-700">
                            <button
                                class="cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 hover:bg-opacity-90 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex-1">Connect</button>
                            <button
                                class="cursor-pointer bg-transparent border border-gray-600 hover:border-gray-500 text-gray-300 text-sm font-medium py-2 px-4 rounded-md transition duration-300">Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Startup Card 3 -->
                <div
                    class="bg-[#0b0b0d] border border-gray-600 rounded-xl overflow-hidden transition-transform duration-300 hover:transform hover:scale-[1.02] hover:shadow-xl">
                    <div class="relative">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="../Images/nav-img-2.jpg" alt="FinLeap" class="object-cover h-full w-full">
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-cyan-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Seeking Collaboration
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-gray-900 to-black">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-xl text-white">FinLeap</h3>
                            <span class="bg-gray-800 text-gray-300 text-xs px-2 py-1 rounded">FinTech</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Next-gen financial planning platform offering automated
                            investment strategies and personalized financial advice for millennials.</p>
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-5">
                            <span>Pre-seed</span>
                            <span>Singapore</span>
                        </div>
                        <div class="flex space-x-3 mb-4">
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">Technical
                                Co-founder</span>
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">5K+ Users</span>
                        </div>
                        <div class="flex space-x-2 pt-4 border-t border-gray-700">
                            <button
                                class="cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 hover:bg-opacity-90 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex-1">Connect</button>
                            <button
                                class="cursor-pointer bg-transparent border border-gray-600 hover:border-gray-500 text-gray-300 text-sm font-medium py-2 px-4 rounded-md transition duration-300">Profile</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="mt-12 text-center">
                <a href="#"
                    class="inline-flex items-center justify-center px-6 py-3 mx-auto text-white font-medium border border-gray-600 rounded-lg bg-gradient-to-r from-[#E94560] to-purple-600 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-[#E94560]/20">
                    Explore All Startups
                </a>
            </div>
        </div>
    </section>




    <!-- contact us section -->
    <div class="bg-black text-white py-16">
        <div class="container mx-auto px-4 max-w-5xl">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500">
                    Contact Us</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-6 rounded-full"></div>
                <p class="text-gray-300 max-w-lg mx-auto text-sm">Ready to launch your startup? Get in touch with our
                    team
                    and let's create something amazing together.</p>
            </div>

            <!-- Contact Form and Info Container -->
            <div class="flex flex-col md:flex-row gap-8 mx-auto">
                <!-- Contact Information -->
                <div class="w-full md:w-2/5 bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl backdrop-blur-sm border border-gray-700/50 shadow-xl">
                    <h3 class="text-xl font-semibold mb-6 pb-3 border-b border-purple-500/30 text-gray-100">
                        Get In Touch
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-center group">
                            <div class="bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-lg mr-4 shadow-lg group-hover:shadow-pink-500/20 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-200">Our Location</p>
                                <p class="text-sm text-gray-400">123 Innovation Street, Tech Hub City</p>
                            </div>
                        </div>

                        <div class="flex items-center group">
                            <div
                                class="bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-lg mr-4 shadow-lg group-hover:shadow-pink-500/20 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-200">Email Us</p>
                                <p class="text-sm text-gray-400">contact@ElevateX.com</p>
                            </div>
                        </div>

                        <div class="flex items-center group">
                            <div
                                class="bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-lg mr-4 shadow-lg group-hover:shadow-pink-500/20 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-200">Call Us</p>
                                <p class="text-sm text-gray-400">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-8 pt-6 border-t border-gray-700/30">
                        <p class="text-sm text-gray-400 mb-4 text-center">Connect with us</p>
                        <div class="flex space-x-4 justify-center">
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full md:w-3/5">
                    <form action="./email.php" method="POST"
                        class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl backdrop-blur-sm border border-gray-700/50 shadow-xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300 pl-1">Full Name</label>
                                <input type="text" placeholder="John Doe" name="fullName"
                                    class="w-full px-4 py-3 bg-gray-800/80 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200"
                                    required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300 pl-1">Email Address</label>
                                <input type="email" placeholder="john@example.com" name="email"
                                    class="w-full px-4 py-3 bg-gray-800/80 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200"
                                    required>
                            </div>
                        </div>

                        <div class="mb-6 space-y-2">
                            <label class="text-sm font-medium text-gray-300 pl-1">Subject</label>
                            <input type="text" placeholder="How can we help you?" name="subject"
                                class="w-full px-4 py-3 bg-gray-800/80 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200"
                                required>
                        </div>

                        <div class="mb-6 space-y-2">
                            <label class="text-sm font-medium text-gray-300 pl-1">Your Message</label>
                            <textarea rows="5" placeholder="Tell us about your project..." name="message"
                                class="w-full px-4 py-3 bg-gray-800/80 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200 resize-none"></textarea>
                        </div>

                        <div class="flex items-center mb-6">
                            <input type="checkbox" id="newsletter"
                                class="w-4 h-4 text-pink-500 bg-gray-800 border-gray-700 rounded focus:ring-0 focus:ring-offset-0 cursor-pointer">
                            <label for="newsletter" class="ml-3 text-gray-300 text-sm">Keep me updated with latest news and exclusive offers</label>
                        </div>

                        <button type="submit" name="send" value="submit"
                            class="w-full cursor-pointer bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 text-sm flex items-center justify-center shadow-lg hover:shadow-pink-500/25 transform hover:-translate-y-1">
                            Send Message
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Accoordian FAQ -->
    <section class="bg-[#000000] py-12 px-4">
        <div class="container mx-auto max-w-4xl">
            <!-- Section Header -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2 text-white">Frequently Asked Questions</h2>
                <div class="w-16 h-1 bg-[#E94560] mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-lg mx-auto">Find answers to the most common questions about our platform
                    and
                    services.</p>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4">


                <!-- FAQ Item 3 -->
                <div class="border border-gray-600 rounded-lg bg-gradient-to-br from-gray-900 to-black overflow-hidden ">
                    <button class="flex items-center justify-between w-full p-5 text-left cursor-pointer"
                        onclick="toggleAccordion('faq-3')">
                        <span class="text-white font-medium">How can collaborators help startups on your
                            platform?</span>
                        <svg id="faq-3-icon" class="w-5 h-5 text-[#E94560] transform transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-3" class="hidden px-5 pb-5">
                        <p class="text-gray-400">Collaborators on our platform include skilled professionals and service
                            providers who can assist startups with specific challenges. This includes developers,
                            designers,
                            marketers, legal experts, and more. Startups can post specific project needs or browse
                            collaborator profiles to find the right match for their requirements.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-gray-600 rounded-lg bg-gradient-to-br from-gray-900 to-black overflow-hidden">
                    <button class="flex items-center justify-between w-full p-5 text-left cursor-pointer"
                        onclick="toggleAccordion('faq-4')">
                        <span class="text-white font-medium">Is there a cost to join the platform?</span>
                        <svg id="faq-4-icon" class="w-5 h-5 text-[#E94560] transform transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-4" class="hidden px-5 pb-5">
                        <p class="text-gray-400">We offer a freemium model with basic functionality available at no
                            cost.
                            Premium plans are available for startups seeking advanced features like investor analytics,
                            enhanced visibility, and priority matching. Investors and mentors can join for free, while
                            collaborators may have different subscription options based on their service offerings.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-gray-600 rounded-lg bg-gradient-to-br from-gray-900 to-black overflow-hidden">
                    <button class="flex items-center justify-between w-full p-5 text-left cursor-pointer"
                        onclick="toggleAccordion('faq-5')">
                        <span class="text-white font-medium">How do you verify startups and investors on the
                            platform?</span>
                        <svg id="faq-5-icon" class="w-5 h-5 text-[#E94560] transform transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-5" class="hidden px-5 pb-5">
                        <p class="text-gray-400">We implement a thorough verification process for all users. Startups
                            undergo business validation checks, while investors are verified through professional
                            network
                            references and financial capability assessments. Our verification badge indicates users who
                            have
                            completed this process, creating a trusted ecosystem for meaningful connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="bg-[#0A0A0A] border-t border-gray-800 mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="text-xl font-bold mb-2 text-white">ElevateX</div>
                    <p class="text-gray-400 text-sm max-w-md">Connecting founders, investors, and talent to build the
                        next
                        generation of innovative companies.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Platform</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Discover</a></li>
                            <li><a href="#" class="hover:text-white">Startups</a></li>
                            <li><a href="#" class="hover:text-white">Investors</a></li>
                            <li><a href="#" class="hover:text-white">Talent</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Resources</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                            <li><a href="#" class="hover:text-white">Guides</a></li>
                            <li><a href="#" class="hover:text-white">Events</a></li>
                            <li><a href="#" class="hover:text-white">Podcast</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Company</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Careers</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Press</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Legal</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Privacy</a></li>
                            <li><a href="#" class="hover:text-white">Terms</a></li>
                            <li><a href="#" class="hover:text-white">Security</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-500">© 2025 ElevateX. All rights reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="./index.js"></script>
</body>

</html>