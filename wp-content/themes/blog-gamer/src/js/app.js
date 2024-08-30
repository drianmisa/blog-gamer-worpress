document.addEventListener("DOMContentLoaded", () => {
   let toggle = document.querySelector(".toggle");
   let menu = document.querySelector(".menu");
   let closeBtn = document.querySelector(".close")

   toggle.addEventListener("click", () => {
      menu.classList.add("menu-active");
   });

   closeBtn.addEventListener("click", () => {
      menu.classList.remove("menu-active");
   });


   const themeToggleButton = document.getElementById('theme-toggle');

const moon = document.querySelector(".icon-moon .iconLuna");
const sun = document.querySelector(".icon-moon .iconSol");

// Verificar si hay una preferencia de tema almacenada
const storedTheme = localStorage.getItem('theme');

if (storedTheme) {
   document.documentElement.classList.add(storedTheme);
}
 else {
   
    sun.style.display = "block";
 }

// Escuchar el evento de clic en el botón de cambio de tema
themeToggleButton.addEventListener('click', () => {
   // Alternar la clase claro-theme en el elemento root
   document.documentElement.classList.toggle('claro-theme');

   // Guardar la preferencia de tema en localStorage
   if (document.documentElement.classList.contains('claro-theme')) {
      localStorage.setItem('theme', 'claro-theme');
      sun.style.display = "none";
      moon.style.display = "block";
   } else {
      // Si no está el tema claro, guardamos el tema oscuro o borramos la clave
      localStorage.setItem('theme', 'oscuro-theme');
      sun.style.display = "block";
      moon.style.display = "none";

   }
});

});