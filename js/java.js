
    const navToggle = document.querySelector(".nav-toggle");
    const navMenu = document.querySelector(".nav-menu");
    
    navToggle.addEventListener("click", () => {
      navMenu.classList.toggle("nav-menu_visible");
    
      if (navMenu.classList.contains("nav-menu_visible")) {
        navToggle.setAttribute("aria-label", "Cerrar menú");
      } else {
        navToggle.setAttribute("aria-label", "Abrir menú");
      }
    });
    /*const observar = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const id = entry.target.getAttribute("id");
        const menuOb = document.querySelectorAll(".nav-menu a[href^=\"#${id}\"]")

        if(entry.isIntersecting){
          menuOb.classList.add("selected");
        } else {
          menuOb.classList.remove("selected");
        }
      })
    })*/
    const menu = document.querySelectorAll(".nav-menu a[href^=\"#\"]");
    menu.forEach(menu => {
      menu.addEventListener("click", function() {
        navMenu.classList.remove("nav-menu_visible");
      });

      /*const hash = menuOb.getAttribute("href");
      const target = document.querySelector(hash);*/
    });

  document.getElementById("boton-fijo").addEventListener("click", botonUp);
   function botonUp() {
     var scroll = document.documentElement.scrollTop;
     if(scroll > 0){
       window.scrollTo (10, 10);
       bottonUp.style.transform = "scale(0)";
     }
   }
   bottonUp = document.getElementById("boton-fijo");
   window.onscroll = function(){
     var scrolls = document.documentElement.scrollTop;
     if(scrolls > 100){
       bottonUp.style.transform = "scale(1)";
     }else if(scrolls < 100){
      bottonUp.style.transform = "scale(0)";
     }
   };