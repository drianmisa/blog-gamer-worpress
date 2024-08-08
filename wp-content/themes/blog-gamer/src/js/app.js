document.addEventListener("DOMContentLoaded", ()=>{
 let toggle = document.querySelector(".toggle");
 let menu = document.querySelector(".menu");
 let closeBtn = document.querySelector(".close")

 toggle.addEventListener("click", () =>{
    menu.classList.add("menu-active");    
 });

 closeBtn.addEventListener("click", () =>{
    menu.classList.remove("menu-active");    
 });
});