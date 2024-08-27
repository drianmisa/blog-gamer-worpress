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

   allMoon = document.querySelectorAll(".icon-moon");

   for (let i = 0; i < allMoon.length; i++) {
      if (i === 0) {
         allMoon[i].setAttribute("style", "display:block;");
      } else {
         allMoon[i].setAttribute("style", "display:none;");
      }
   }


   // Verificar si hay una preferencia de tema almacenada
   const storedTheme = localStorage.getItem('theme');

   if (storedTheme) {
      document.documentElement.classList.add(storedTheme);
   } else {
      // Si no hay tema almacenado, puedes aplicar un tema por defecto si lo deseas
      // Por ejemplo, si quieres que el tema oscuro sea el predeterminado
      document.documentElement.classList.add('oscuro-theme');
   }

   // Escuchar el evento de clic en el botón de cambio de tema
   themeToggleButton.addEventListener('click', () => {
      // Alternar la clase claro-theme en el elemento root
      document.documentElement.classList.toggle('claro-theme');

      // Guardar la preferencia de tema en localStorage
      if (document.documentElement.classList.contains('claro-theme')) {
         localStorage.setItem('theme', 'claro-theme');
      } else {
         // Si no está el tema claro, guardamos el tema oscuro o borramos la clave
         localStorage.setItem('theme', 'oscuro-theme');
      }
   });
});