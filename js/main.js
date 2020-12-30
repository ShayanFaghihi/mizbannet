
        // sessionStorage.reloadAfterPageLoad = true;
        // window.location.reload();

        
        
        // if ( sessionStorage.reloadAfterPageLoad ) {
        //     var loader = document.querySelector(".loader");
        //     var preloader = document.querySelector(".preloader");
        //     setTimeout( () => {
        //     loader.classList.add('completein');
        //   },500);
        //   setTimeout( () => {
        //     preloader.classList.add('complete');
        //   },10);
        //     sessionStorage.reloadAfterPageLoad = false;
        // }
        
        window.onload = function () { 
            var loader = document.querySelector(".loader");
            var preloader = document.querySelector(".preloader");
            setTimeout( () => {
            loader.classList.add('completein');
          },500);
          setTimeout( () => {
            preloader.classList.add('complete');
          },10);
}

    /* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                Sticky Nav
      \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */
      window.onscroll = function() {stickyNav()};
      var toTop = document.getElementById("toTop");

      if(window.innerWidth > 768) {
          var header = document.querySelector("#header");
        // For larger screen only
          var navbar = document.querySelector(".main-nav");
          var sticky = navbar.offsetTop;
        
    
        function stickyNav() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
            navbar.style.padding = "0"; 
            header.style.padding = "16rem 0 8rem 0";
            toTop.classList.add("visible");
    
          } else {
            navbar.classList.remove("sticky");
            navbar.style.padding = "1rem 0"; 
            header.style.padding = "8rem 0 8rem 0";
            toTop.classList.remove("visible");
          }
        }
      } else {
        function stickyNav() {
          if (window.pageYOffset >= sticky) {
            toTop.classList.add("visible");
    
          } else {
            toTop.classList.remove("visible");
          }
        }
      }

    /* \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                Mobile Nav
      \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ */

      var
            dropdown = document.getElementById("dropdown"),
            dropdownBow = document.querySelector(".navigation__link--dropdown");

      dropdown.addEventListener('click', () => {
        dropdownBow.classList.toggle('dropdown-open');
      });
     