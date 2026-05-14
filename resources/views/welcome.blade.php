<x-layout>
<title>The Mayor building</title>

<section id="hero" class="relative w-full min-h-[500px] flex items-center justify-center bg-[#f0f2f5] overflow-hidden p-4 md:p-10">
    <!-- 1. Background Decorative Spheres -->
  <div class="absolute top-10 left-10 w-32 h-32 bg-blue-400 rounded-full blur-sm opacity-60"></div>
  <div class="absolute bottom-1 right-1/4 w-48 h-48 bg-blue-500 rounded-full blur-md opacity-40"></div>
  <div class="absolute top-1/4 right-10 w-24 h-24 bg-blue-300 rounded-full blur-sm opacity-50"></div>

  <!-- 2. Main Glassmorphic Wrapper -->
  <div class="relative z-10 w-full max-w-6xl bg-white/40 backdrop-blur-xl border border-white/20 rounded-[30px] shadow-2xl p-6 md:p-12 flex flex-col md:flex-row items-center gap-10">
    
    <!-- Left Side: Content Area -->
    <div class="w-full md:w-1/2 text-center md:text-left flex flex-col items-center md:items-start">
      <h1 class="text-[#3C3489] text-4xl md:text-6xl font-bold mb-4 tracking-tight">
        The Mayor Building
      </h1>
      <p class="text-lg md:text-xl mb-10 font-medium">
        La référence des appartements meublés à Yaoundé
      </p>
      
      <!-- Button with your brand colors -->
      <a href="#" class="px-8 py-4 bg-[#1a1c2e] text-white rounded-xl font-semibold hover:scale-105 transition-transform transition-colo duration-300 shadow-lg hover:bg-[#3C3489]">
        Réservez maintenant
      </a>
    </div>

    <!-- Right Side: Room Image Container -->
    <div class="w-full md:w-1/2 relative">
      <!-- The blue border frame around the image -->
      <div class="border-[6px] border-[#3C3489] rounded-[20px] overflow-hidden shadow-2xl transform rotate-1 md:rotate-2">
        <img 
          src="storage/uploads/living_room3.jpeg'" 
          alt="Room Interior" 
          class="w-full h-[400px] object-cover"
        >
      </div>
    </div>

  </div>
    
</section>

<section id="room" class="p-10 flex flex-col space-y-4 items-center bg-[#f5f4f1]">

    <h6 class="text-[#9b97c5] text-[clamp(0.6rem,2vw,0.8rem)] tracking-wider">ACCOMODATIONS</h6>
    <h4 class="text-[#1a1a2e] text-[clamp(1.2rem,3vw,1.8rem)] font-bold ">Nos Meilleurs Appartements</h4>
    <div class="w-[48%] h-[2%] bg-[#3C3489] "></div>

    {{-- Container for all rooms card --}}
    <div id="room-card-cont" class="flex flex-col space-y-8 items-center md:flex-row md:space-y-0 md:justify-around ">
        {{-- This serves as placeholder now, but we'll insert a loop letter to fetch room from the DB --}}
        <div id="room-card" class="w-[95%] flex flex-col space-y-3 bg-[#fff] md:w-[30%] shadow shadow-black shadow-lg px-4 rounded-[10px] transition-transform duration-[1000ms] hover:scale-110" >
            <div class="relative overflow-hidden">
                <img class="w-full" src="storage/uploads/room4.jpeg" alt="">
                <p class="absolute top-4 right-0  bg-[#3C3489] py-1 px-4 rounded-full font-semibold shadow-md text-sm md:text-base text-[#fff]" id="room-price">210$/Night</p>
            </div>
            
            <div class="flex flex-col space-y-3">
                <p id="room-number" class="text-[#3C3489]">Appartement 01</p>
                <p id="room-name" class="text-[#1a1a2e] font-bold"> Appart Presidentielle </p>
                <p class="text-[#d4af37]">★★★★★</p>

            </div>
            <div id="room-services" class="flex justify-between p-2 ">
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M32 32c17.7 0 32 14.3 32 32l0 224 224 0 0-128c0-17.7 14.3-32 32-32l160 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64-448 0 0 64c0 17.7-14.3 32-32 32S0 465.7 0 448L0 64C0 46.3 14.3 32 32 32zm80 160a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
                    <span class='whitespace-nowrap'>King Bed</span>
                </p>
                </div>
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M21.484 10.027c-5.314-5.036-13.654-5.036-18.968 0a.75.75 0 1 1-1.032-1.089c5.893-5.584 15.14-5.584 21.032 0a.75.75 0 0 1-1.032 1.09M4.47 12.37c4.159-4.159 10.901-4.159 15.06 0a.75.75 0 0 1-1.06 1.06 9.15 9.15 0 0 0-12.94 0 .75.75 0 1 1-1.06-1.06m3 3.258a6.407 6.407 0 0 1 9.06 0 .75.75 0 0 1-1.06 1.06 4.907 4.907 0 0 0-6.94 0 .75.75 0 0 1-1.06-1.06M12 18a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0v-.5A.75.75 0 0 1 12 18'/></svg> 
                    <span >Wifi Gratuit</span>
                </p>
                </div>
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d='m16.895 3.514 4.778 15.928c.41 1.367-.864 2.641-2.231 2.231L3.514 16.895c-.921-.277-1.496-1.258-1.175-2.222A19.5 19.5 0 0 1 14.673 2.34c.964-.322 1.945.254 2.222 1.175m-1.747.248A18 18 0 0 0 3.762 15.148c-.037.11.02.261.183.31l1.802.54A16.73 16.73 0 0 1 16 5.749l-.541-1.803c-.049-.163-.2-.22-.31-.183m.382 6.708a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06zm-4 4a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06zm5 1a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06z'/></svg>
                    <span>Petit Dej.</span>
                </p>
                </div>
            </div>
        </div>

            {{-- appart2 --}}
        <div id="room-card" class="w-[95%] flex flex-col space-y-3 bg-[#fff] md:w-[30%] px-4 rounded-[10px] shadow shadow-black shadow-lg transition-transform duration-[1000ms] hover:scale-110" >
            <div class="relative overflow-hidden">
                <img class="w-full" src="storage/uploads/living-room2.jpeg" alt="">
                <p class="absolute top-4 right-0  bg-[#3C3489] py-1 px-4 rounded-full font-semibold shadow-md text-sm md:text-base text-[#fff]" id="room-price">210$/Night</p>
            </div>
            
            <div class="flex flex-col space-y-3">
                <p id="room-number" class="text-[#3C3489]">Appartement 02</p>
                <p id="room-name" class="text-[#1a1a2e] font-bold"> Appart Presidentielle </p>
                <p class="text-[#d4af37]">★★★★★</p>

            </div>
            <div id="room-services" class="flex justify-between p-2 ">
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M32 32c17.7 0 32 14.3 32 32l0 224 224 0 0-128c0-17.7 14.3-32 32-32l160 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64-448 0 0 64c0 17.7-14.3 32-32 32S0 465.7 0 448L0 64C0 46.3 14.3 32 32 32zm80 160a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
                    <span class='whitespace-nowrap'>King Bed</span>
                </p>
                </div>
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M21.484 10.027c-5.314-5.036-13.654-5.036-18.968 0a.75.75 0 1 1-1.032-1.089c5.893-5.584 15.14-5.584 21.032 0a.75.75 0 0 1-1.032 1.09M4.47 12.37c4.159-4.159 10.901-4.159 15.06 0a.75.75 0 0 1-1.06 1.06 9.15 9.15 0 0 0-12.94 0 .75.75 0 1 1-1.06-1.06m3 3.258a6.407 6.407 0 0 1 9.06 0 .75.75 0 0 1-1.06 1.06 4.907 4.907 0 0 0-6.94 0 .75.75 0 0 1-1.06-1.06M12 18a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0v-.5A.75.75 0 0 1 12 18'/></svg> 
                    <span >Wifi Gratuit</span>
                </p>
                </div>
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d='m16.895 3.514 4.778 15.928c.41 1.367-.864 2.641-2.231 2.231L3.514 16.895c-.921-.277-1.496-1.258-1.175-2.222A19.5 19.5 0 0 1 14.673 2.34c.964-.322 1.945.254 2.222 1.175m-1.747.248A18 18 0 0 0 3.762 15.148c-.037.11.02.261.183.31l1.802.54A16.73 16.73 0 0 1 16 5.749l-.541-1.803c-.049-.163-.2-.22-.31-.183m.382 6.708a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06zm-4 4a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06zm5 1a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06z'/></svg>
                    <span>Petit Dej.</span>
                </p>
                </div>
            </div>
        </div>
            {{-- appart3 --}}
        <div id="room-card" class="w-[95%] flex flex-col space-y-3 bg-[#fff] md:w-[30%] px-4 rounded-[10px] shadow shadow-black shadow-lg transition-transform duration-[1000ms] hover:scale-110" >
            <div class="relative overflow-hidden">
                <img class="w-full" src="storage/uploads/living_room1.jpeg" alt="">
                <p class="absolute top-4 right-0  bg-[#3C3489] py-1 px-4 rounded-full font-semibold shadow-md text-sm md:text-base text-[#fff]" id="room-price">210$/Night</p>
            </div>
            
            <div class="flex flex-col space-y-3">
                <p id="room-number" class="text-[#3C3489]">Appartement 03</p>
                <p id="room-name" class="text-[#1a1a2e] font-bold"> Appart Presidentielle </p>
                <p class="text-[#d4af37]">★★★★★</p>

            </div>
            <div id="room-services" class="flex justify-between p-2 ">
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M32 32c17.7 0 32 14.3 32 32l0 224 224 0 0-128c0-17.7 14.3-32 32-32l160 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64-448 0 0 64c0 17.7-14.3 32-32 32S0 465.7 0 448L0 64C0 46.3 14.3 32 32 32zm80 160a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
                    <span class='whitespace-nowrap'>King Bed</span>
                </p>
                </div>
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d='M21.484 10.027c-5.314-5.036-13.654-5.036-18.968 0a.75.75 0 1 1-1.032-1.089c5.893-5.584 15.14-5.584 21.032 0a.75.75 0 0 1-1.032 1.09M4.47 12.37c4.159-4.159 10.901-4.159 15.06 0a.75.75 0 0 1-1.06 1.06 9.15 9.15 0 0 0-12.94 0 .75.75 0 1 1-1.06-1.06m3 3.258a6.407 6.407 0 0 1 9.06 0 .75.75 0 0 1-1.06 1.06 4.907 4.907 0 0 0-6.94 0 .75.75 0 0 1-1.06-1.06M12 18a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0v-.5A.75.75 0 0 1 12 18'/></svg> 
                    <span >Wifi Gratuit</span>
                </p>
                </div>
                <div class="text-[#666]">
                <p class='flex space-x-1 items-center text-[clamp(0.6rem,2vw,0.8rem)]'>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d='m16.895 3.514 4.778 15.928c.41 1.367-.864 2.641-2.231 2.231L3.514 16.895c-.921-.277-1.496-1.258-1.175-2.222A19.5 19.5 0 0 1 14.673 2.34c.964-.322 1.945.254 2.222 1.175m-1.747.248A18 18 0 0 0 3.762 15.148c-.037.11.02.261.183.31l1.802.54A16.73 16.73 0 0 1 16 5.749l-.541-1.803c-.049-.163-.2-.22-.31-.183m.382 6.708a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06zm-4 4a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06zm5 1a.75.75 0 1 0-1.06 1.06l.353.354a.75.75 0 0 0 1.06-1.06z'/></svg>
                    <span>Petit Dej.</span>
                </p>
                </div>
            </div>
        </div>


    </div>

</section>

<section id="services" class="flex flex-col space-y-6  items-center p-6 ">
    <h6 class="text-[#9b97c5] text-[clamp(0.7rem,2vw,0.8rem)] tracking-wider">Nos Services</h6>
    <h4 class="text-[#1a1a2e] text-[clamp(1.2rem,3vw,1.8rem)] font-bold ">Services Premiums</h4>
    <div class="w-[48%] h-[2%] bg-[#3C3489] "></div>

    <div id="services-card-cont" class="flex flex-col space-y-4 md:flex-row md:space-x-6 md:space-y-0">

        <div id="services-card" class="bg-[#fafafe] flex flex-col space-y-4 items-center p-6 rounded-[12px]">
            <div class="bg-[#eeedfe] w-[50%] p-3 rounded-[12px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M135.2 117.4l-26.1 74.6 293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 192c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-32-320 0 0 32c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 304a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
            </div>
            <div id="services-card-body">
                <h5 class="text-center text-[#1a1a2e]">Parking Sécurisé</h5>
                <p class="text-center text-[#888]">Parking surveillé 24h/24 et 7j/7 pour tous les <br> résidents et leurs invités.</p>
            </div>
        </div>

        <div id="services-card" class="bg-[#fafafe] flex flex-col space-y-4  items-center p-6 rounded-[12px]">
            <div class="bg-[#eeedfe] w-[50%] p-3 rounded-[12px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l201.2 0c-12.5-14.7-23.2-30.8-31.8-48l-89.5 0 0-80c0-17.7 14.3-32 32-32l32 0 0-26.7c0-18.1 6.1-35.2 16.6-48.8-.4-1.4-.6-2.9-.6-4.5l0-32c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 1 86.7-28.9c3.1-1 6.2-1.8 9.3-2.5L416 64c0-35.3-28.7-64-64-64L96 0zm32 112c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM272 96l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16zM128 240c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM445.3 488.5l-13.3 6.3 0-188.1 96 32 0 19.6c0 55.8-32.2 106.5-82.7 130.3zM421.9 259.5l-112 37.3c-13.1 4.4-21.9 16.6-21.9 30.4l0 31.1c0 74.4 43 142.1 110.2 173.7l18.5 8.7c4.8 2.2 10 3.4 15.2 3.4s10.5-1.2 15.2-3.4l18.5-8.7C533 500.3 576 432.6 576 358.2l0-31.1c0-13.8-8.8-26-21.9-30.4l-112-37.3c-6.6-2.2-13.7-2.2-20.2 0z"/></svg>
            </div>
            <div id="services-card-body">
                <h5 class="text-center text-[#1a1a2e]">Sécurité 24/7</h5>
                <p class="text-center text-[#888]">Service de conciergerie <br> et de sécurité 24h/24 et 7j/7 <br> pour une tranquillité d'esprit totale.</p>
            </div>
        </div>

        <div id="services-card" class="bg-[#fafafe] flex flex-col space-y-4 items-center p-6 rounded-[12px]">
            <div class="bg-[#eeedfe] w-[50%] p-3 rounded-[12px]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M566.6 54.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192-34.7-34.7c-4.2-4.2-10-6.6-16-6.6-12.5 0-22.6 10.1-22.6 22.6l0 29.1 108.3 108.3 29.1 0c12.5 0 22.6-10.1 22.6-22.6 0-6-2.4-11.8-6.6-16l-34.7-34.7 192-192zM341.1 353.4L222.6 234.9c-42.7-3.7-85.2 11.7-115.8 42.3l-8 8c-22.3 22.3-34.8 52.5-34.8 84 0 6.8 7.1 11.2 13.2 8.2l51.1-25.5c5-2.5 9.5 4.1 5.4 7.9L7.3 473.4C2.7 477.6 0 483.6 0 489.9 0 502.1 9.9 512 22.1 512l173.3 0c38.8 0 75.9-15.4 103.4-42.8 30.6-30.6 45.9-73.1 42.3-115.8z"/></svg>
            </div>
            <div id="services-card-body">
                <h5 class="text-center text-[#1a1a2e]">Ménage Quotidien</h5>
                <p class="text-center text-[#888]">Service de préparation quotidienne <br> de la chambre et service de ménage complet inclus.</p>
            </div>
        </div>


    </div>



</section>

</x-layout>