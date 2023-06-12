(window.load = function (event) {
  const togglerNav = document.querySelector(".js-navbar__toggler");
  const nav = document.querySelector(".js-navbar__navigation");

  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      nav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("body").classList.add("active");
      navFlag = true;
    } else {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("body").classList.remove("active");
      navFlag = false;
    }
  });

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll(".js-navbar__navigation a");
  for (let i = 0; i < itemsNAv.length; i++) {
    itemsNAv[i].addEventListener("click", () => {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

  // sticy nabvbar
  const navbarBottom = document.querySelector("#header-bottom");
  const navbarTop = document.querySelector("#header-top");
  document.addEventListener("scroll", () => {
    console.log(navbarBottom.offsetTop, window.pageYOffset);
    if (navbarBottom.offsetTop <= window.pageYOffset) {
      navbarBottom.classList.add("active");
      document.querySelector("body").style.paddingTop = navbarTop.clientHeight + "px";
    }
    if (navbarTop.clientHeight >= window.pageYOffset) {
      navbarBottom.classList.remove("active");
      document.querySelector("body").style.paddingTop = "0";
    }
    // if (window.pageYOffset) {
    //   navbar.classList.add("active");
    //   document.querySelector("body").style.paddingTop = heightHeader.clientHeight + "px";
    // } else {
    //   navbar.classList.remove("active");
    //   document.querySelector("body").style.paddingTop = "0";
    // }
  });

  // footer
  const calaps = document.querySelectorAll(".calaps");
  console.log(calaps);
  for (let i = 0; i < calaps.length; i++) {
    console.log(calaps[i].querySelector(".calaps__opener"));
    calaps[i].querySelector(".calaps__opener").addEventListener("click", function () {
      calaps[i].classList.toggle("active");
    });
  }
})();
