<x-layout>

    <div class="p-6 bg-[#1a1a2e] ">

        <div class="  w-full flex flex-col space-y-4 p-4">
            <svg class="opacity-[0.06]" viewBox="0 0 800 200" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" style="position:absolute;inset:0">
            <defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="#c4bcf7" stroke-width="0.5"></path></pattern></defs>
            <rect width="800" height="200" fill="url(#grid)"></rect>
            </svg>
            <div>
                <h4 class="text-[#9b97c5] text-[clamp(0.6rem,2vw,0.8rem)] tracking-widest">ENTRER EN CONTACT</h4>
                <h2 class="text-[#fff] text-[clamp(2.5rem,3vw,3rem)] font-bold"> Nous serions ravis d' <br>
                    <span class="text-[#c4bcf7]">avoir de vos nouvelles.</span>
                </h2>
            </div>
            <div class="bg-[#3C3489] w-[10%] h-[2px]"></div>
            <p class="text-[#C8D2FFA6] text-[clamp(0.5rem,2vw,0.8rem)] pb-10">Que vous ayez une question sur la disponibilité, les prix ou les <br>
                services, notre équipe est prête à vous aider 24h/24 et 7j/7.
            </p>
        </div>

        <div class="p-8  flex flex-col space-y-5 md:flex-row md:justify-between" >
            <div class="bg-[#fff] p-8 w-full flex flex-col space-y-5">
                <div>
                    <h4 class="text-[#9b97c5] text-[clamp(0.6rem,2vw,0.8rem)] tracking-widest">ENVOYER UN MESSAGE</h4>
                    <h5 class="text-[#1a1a2e] text-[clamp(1.5rem,3vw,1.8rem)]">Faire une demande</h5>
                    <p class="text-[#888] text-[clamp(0.7rem,3vw,0.9rem)]">Remplissez le formulaire ci-dessous et notre équipe vous recontactera dans les 24 heures.</p>
                </div>
                
                <form class="flex flex-col space-y-3" action="">
                    <div class="form-inputs-cont">
                        <div class="input-lab-cont">
                            <label class="text-[#9b97c5]" for="firstName">Prénom</label>
                            <input class="bg-[#fafafe] border border-[#e0ddf0] rounded-[10px] p-2" type="text" id="firstName" value="" placeholder="Exemple James ">
                        </div>

                        <div class="flex flex-col space-y-3 md:w-[45%]">
                            <label class="text-[#9b97c5]" for="lastName">Nom de Famille</label>
                            <input class="bg-[#fafafe] border border-[#e0ddf0] rounded-[10px] p-2" type="text" id="lastName" value="" placeholder="Exemple Fankam ">
                        </div>
                    </div>

                    <div class="form-inputs-cont ">
                        <div class="input-lab-cont">
                            <label class="text-[#9b97c5]" for="email">Adresse Email</label>
                            <input class="bg-[#fafafe] border border-[#e0ddf0] rounded-[10px] p-2" type="email" id="email" value="" placeholder="james@gmail.com ">
                        </div>

                        <div class="input-lab-cont">
                            <label class="text-[#9b97c5]" for="phone">Numéro de Téléphone</label>
                            <input class="bg-[#fafafe] border border-[#e0ddf0] rounded-[10px] p-2" type="text" id="phone" value="" placeholder="+237690216724">
                        </div>
                    </div>

                    <div class="flex flex-col space-y-3 w-full">
                        <label class="text-[#9b97c5]" for="subject">Sujet</label>
                        <Select class="bg-[#fafafe] border border-[#e0ddf0] rounded-[10px] p-2" id="subject" name="subject">
                            <option value="réservation">Demande de réservation</option>
                            <option value="informations générales">Informations générales</option>
                            <option value="prix et disponibilité">Prix et disponibilité</option>
                            <option value="autre">Autre</option>
                        </Select>
                    </div>

                    <div class="flex flex-col space-y-3 w-full">
                        <label class="text-[#9b97c5]" for="message">Message</label>
                        <textarea class="bg-[#fafafe] border border-[#e0ddf0] rounded-[10px] p-4" name="message" id="mesage" placeholder="Dites nous comment nous pouvons vous aider..."></textarea>
                    </div>

                    <div class="flex flex-col space-y-3 w-full">
                        <input class="bg-[#3C3489] text-[#fff] p-2 rounded-[10px]" type="submit" name="submit" id="subit" Value="Envoyer">
                        <p class="text-center text-[#aaa] text-[clamp(0.5rem,2vw,0.9rem)]">Nous respectons votre vie privée. Vos informations ne seront jamais partagées avec des tiers.</p>
                    </div>

                </form>
            </div>

            <div class="bg-[#1a1a2e] p-4 flex flex-col space-y-3 md:w-[40%]">
                <h5 class="text-[#fff] font-bold">Coordonnées</h5>
                <p class="text-[#C8D2FFA6] text-[clamp(0.6rem,2vw,0.8rem)]">N'hésitez pas à nous contacter directement ou à vous rendre à notre service de conciergerie — nous sommes toujours disponibles.</p>
                <div class="bg-[#3C3489] w-[10%] h-[2px]"></div>
                <div class="flex flex-col space-y-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-[20%] h-[40px] bg-[#EEEDFE] rounded-[10px]"></div>
                        <div class="flex flex-col space-y-1">
                            <h6 class="text-[#fff]">Adresse</h6>
                            <p class="text-[#C8D2FFA6] text-[clamp(0.6rem,2vw,0.8rem)]">Situé derrière Neptune Nkozoa </p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="w-[20%] h-[40px] bg-[#EEEDFE] rounded-[10px]"></div>
                        <div class="flex flex-col space-y-1">
                            <h6 class="text-[#fff]">Téléphone</h6>
                            <p class="text-[#C8D2FFA6] text-[clamp(0.6rem,2vw,0.8rem)]">+237 6 99 15 51 93</p>
                            <p class="text-[#C8D2FFA6] text-[clamp(0.6rem,2vw,0.8rem)]"></p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="w-[20%] h-[40px] bg-[#EEEDFE] rounded-[10px]"></div>
                        <div class="flex flex-col space-y-1">
                            <h6 class="text-[#fff]">Email</h6>
                            <p class="text-[#C8D2FFA6] text-[clamp(0.6rem,2vw,0.8rem)]">themayor@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="bg-[#fff]">
            <div>
            </div>

            <div>
                <h4 class="text-[#9b97c5] text-[clamp(0.6rem,2vw,0.8rem)] tracking-widest">RETROUVEZ-NOUS</h4>
                <h3>Idéalement situé <br> au cœur de la ville</h3>

            </div>
        </div>
    
    </div>
</x-layout>