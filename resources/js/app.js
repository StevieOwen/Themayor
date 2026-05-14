const burger_menu_icon=document.getElementById('burger-menu-icon');
const navbar=document.getElementById('navbar');
const header=document.getElementById('header');
const menu_links=document.querySelectorAll('menu-link');

burger_menu_icon.addEventListener('click',(e)=>{
    burger_menu_icon.classList.add('hidden');
    navbar.classList.remove('hidden');
    navbar.classList.add('border-t');
    navbar.classList.add('border-[#3C3489]');
    navbar.classList.add('p-4');
    header.classList.add('flex-col');
})

menu_links.forEach((link=>{
    link.addEventListener('click',(e)=>{
        burger_menu_icon.classList.remove('hidden');
        navbar.classList.add('hidden');
        navbar.classList.remove('border-t');
        navbar.classList.remove('border-[#3C3489]');
        navbar.classList.remove('p-4');
        header.classList.remove('flex-col');
    })
}))
