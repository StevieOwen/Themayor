<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header id="header" class="bg-white/30 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center border-b border-[#3C34891A] p-4">
    
        <!-- 1. Logo: Will stay on the left -->
        <h2 class="text-[clamp(1.5rem,3vw,2rem)] text-[#3C3489] font-bold">
            <a href=""> <span class="text-[#1a1a2e]">The Mayor</span> Building </a>
        </h2>

        <!-- 2. Navigation: Hidden on mobile, Flex item on desktop -->
        <nav id="navbar" class="hidden md:block">
            <ul class="flex flex-col space-x-0 space-y-4 md:flex-row md:space-x-6 md:space-y-0 items-center">
                <li class="menu-link"><a href="">Chambres</a></li>
                <li class="menu-link"><a href="">Services</a></li>
                <li class="menu-link"><a href="">Contact</a></li>
                <li class="menu-link">
                    <a class="bg-[#1a1a2e] py-2 px-4 text-white rounded-[10px] shadow transition-colors hover:bg-[#3C3489]" href="">
                        Réserver
                    </a>
                </li>
            </ul>
        </nav>

        <!-- 3. Burger Icon: Now a natural Flex item (Visible only on mobile) -->
        <div id="burger-menu-icon" class="md:hidden flex justify-center items-center bg-[#3C3489] rounded-full p-2 text-white cursor-pointer">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d='M3.75 6.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75'/>
            </svg>
        </div>

    </header>
    
   
   {{$slot}}


   <footer class="bg-[#1a1a2e] flex justify-between p-3 items-center text-[#FFFFFF99] text-[clamp(0.5rem,2vw,1rem)]">
    <h4 class="">The Mayor Building</h4>
    <p>© 2026 The Mayor Building. All rights reserved</p>
    <p>Developped By Stevie Owen</p>
    
   </footer>
</body>
</html>