function myFunction() {
    var x = document.getElementById("navigation");
    if (x.className === "nav") {
      x.className += " responsive";
    } else {
      x.className = "nav";
    }
} //navigation icon


function myScroll() {
  var x = document.getElementById("info-scroll");
  if (x.className === "boxes1") {
    x.className += " responsive";
  } else {
    x.className = "boxes1";
  }
}
  
const searchBar = document.querySelector(".search"); 
searchBar.addEventListener("keyup", () => {
  if(searchBar.value && clearIcon.style.visibility != "visible"){
    clearIcon.style.visibility = "visible";
  } else if(!searchBar.value) {
    clearIcon.style.visibility = "hidden";
  }
});


  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myDown() {
    document.getElementById("myDropdown").classList.toggle("show");
}
  
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



