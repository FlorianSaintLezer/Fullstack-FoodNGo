
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
// var close = document.getElementById("alert-close");
// close.addEventListener('click', function () {
//   var alert = document.getElementById("alert");
//   alert.style.display = 'none';
// }, false);



// // TABS
// function openTab(evt, tabName) {
//   // Declare all variables
//   var i, tabcontent, tablink;

//   // Get all elements with class="tabcontent" and hide them
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }

//   // Get all elements with class="tablinks" and remove the class "active"
//   tablink = document.getElementsByClassName("tablink");
//   for (i = 0; i < tablink.length; i++) {
//     tablink[i].className = tablink[i].className.replace(" active", "");
//   }
//    // Get the element with id="defaultOpen" and click on it
//   //  document.getElementById("defaultOpen").click();

//   // Show the current tab, and add an "active" class to the button that opened the tab
//   document.getElementById(tabName).style.display = "block";
//   evt.currentTarget.className += " active";


// }

