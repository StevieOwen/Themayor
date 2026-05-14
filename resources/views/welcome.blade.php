<x-layout>
<title>The Mayor building</title>

<section id="hero" class="relative w-full min-h-[500px] flex items-center justify-center bg-[#f0f2f5] overflow-hidden p-4 md:p-10">
    <!-- 1. Background Decorative Spheres -->
  <div class="absolute top-10 left-10 w-32 h-32 bg-blue-400 rounded-full blur-sm opacity-60"></div>
  <div class="absolute bottom-10 right-1/4 w-48 h-48 bg-blue-500 rounded-full blur-md opacity-40"></div>
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
          src="{{ asset('storage/uploads/living_room3.jpeg') }}" 
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
                <img class="w-full" src="{{ asset('storage/uploads/room4.jpeg') }}" alt="">
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
                <img class="w-full" src="{{ asset('storage/uploads/living-room2.jpeg') }}" alt="">
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
                <img class="w-full" src="{{ asset('storage/uploads/living_room1.jpeg') }}" alt="">
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

<section id="services" class="flex flex-col space-y-6">
    <h6>Services Offerts</h6>
    <h3>Services Premium</h3>
    <div id="services-card">
        
    </div>


</section>

</x-layout>