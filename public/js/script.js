
// RESPONSIVE NAVBAR TOGGLER
function responsiveNavbar() {
    var m = document.getElementById("navbarMenu");
    if (m.className === "navbarMenu") {
      m.className += " responsive";
    } else {
      m.className = "navbarMenu";
    }
  }
    
  
  // CLOSE ALERT
    var close = document.getElementById("alert-close");
    close.addEventListener('click', function () {
      var alert = document.getElementById("alert");
      alert.style.display = 'none';
    }, false);
  