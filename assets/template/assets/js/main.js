// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// Responsive Navbar Scroll

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
    //  alert("Hello! I am an alert box!");
     console.log("noob");
  } 
}

// var sticky = navbar.offsetTop;

// Responsive Navbar Home
function responsiveHeader(){
  var x = document.getElementById("Navbar");
  var i = document.getElementById("iconNav");
  var h = document.getElementById("headHomeRespawnd");
  if (x.className === "card-nav-link"){
    x.className += " responsive";
    i.getAttributeNode("class").value = "fa fa-times";
    h.className += "home";
  }else{
    x.className = "card-nav-link";
    i.getAttributeNode("class").value = "fa fa-bars";
    h.className = "bem-header ";
  }
}

// Responsive Navbar Gallery
function responsiveGallery(){
  var g = document.getElementById("Navbar");
  var i = document.getElementById("iconNav");
  if (x.className === "card-nav-link") {
    g.className += " responsive";
    i.getAttributeNode("class").value = "fa fa-times";
  } else {
    g.className = "card-nav-link";
    i.getAttributeNode("class").value = "fa fa-bars";
  }
}

// Responsive Navbar

function myFunction() {
  var x = document.getElementById("Navbar");
  var i = document.getElementById("iconNav");
  if (x.className === "card-nav-link") {
    x.className += " responsive";
    i.getAttributeNode("class").value = "fa fa-times";
  } else {
    x.className = "card-nav-link";
    i.getAttributeNode("class").value = "fa fa-bars";
  }
  var h = document.getElementById("headRespawnd");
  if(h.className === "header-responsive"){
    h.className += " sticky";
  }else{
    // h.style.flexDirection = "column";
    h.className = "header-responsive";
    // if(h.className === "header-responsive sticky"){
    //   h.element.style.removeProperty("flex-direction");
    // }
    // var attr = h.getAttributeNode("style");
    // h.removeAttributeNode(attr);
    // if(h.className === "header-responsive sticky"){
    // }
    // f.removeAttribute("STYLE");
    // alert("ok");
    // alert("berhasil");
    // if(h.getAttribute("style") == flexDirection || h.getAttribute("style")=="flex-direction"){
      // h.removeStyle("flex-direction");
    }
  // var h = document.getElementById("headRespawnd")
  // switch(h){
  //   case h.style.flexDirection = "row":
  //     h.style.flexDirection = "column";
  //     break;
  //   case
  //     h.style.flexDirection = "column":
  //     h.style.flexDirection = "row";
  //     break;
  //   default:
  //     h.style.flexDirection = "column";
  // }

    
  
}