 function toggleMenu () {  
    const navbar = document.getElementById(".navbar");
    const burger = document.getElementById(".burger");
    burger.addEventListener('click', (e) => {
      navbar.classList.toggle('show-nav');
    })   
  }
  toggleMenu(); 
/*   function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  } */