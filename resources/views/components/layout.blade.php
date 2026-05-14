<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-white/30 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center border-b border-[#3C34891A] p-4">
        <h2 class="text-[clamp(2rem,3vw,2.5rem)] text-[#3C3489] font-bold md:text-[clamp(1.2rem,3vw,1.6rem)] ">
            <a href=""> <span class="text-[#1a1a2e]">The Mayor </span> Building </a>
        </h2>
        <nav class="hidden md:w-[30%] md:block max-md:border-t">
            <ul class="flex flex-col space-y-4 items-center md:space-y-0 md:flex-row md:justify-between p-1 ">
                <li class="menu-link"><a  href="">Chambres</a></li>
                <li class="menu-link"><a  href="">Services</a></li>
                <li class="menu-link"><a  href="">Contact</a></li>
                <li class=""><a  class="bg-[#1a1a2e]  py-2 px-4 text-[#fff] rounded-[10px] shadow shadow-[#1a1a2e] transition-color duration-[1000ms] hover:bg-[#3C3489] " href="">Réserver</a></li>
            </ul>
        </nav>

        <div id="burger-menu-icon" class="flex justify-center bg-[#3C3489] rounded-full p-2 text-[#fff]  md:hidden w-[15%] absolute top-4 left-80">
            <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d='M3.75 6.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75m0 5.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75'/>
            </svg>
        </div>
    </header>
    
   
   {{$slot}}
</body>
</html>