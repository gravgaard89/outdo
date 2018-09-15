// Modal Image Gallery
function onClick(element) {document.getElementById("img01").src = element.src;document.getElementById("modal01").style.display = "block";var captionText = document.getElementById("caption");captionText.innerHTML = element.alt;}
// Toggle between showing and hiding the sidebar when clicking the menu icon
var sidebar = document.getElementById("sidebar");function w3_open() {if (sidebar.style.display === 'block') {sidebar.style.display = 'none';} else {sidebar.style.display = 'block';}}
// Close the sidebar with the close button
function w3_close() {sidebar.style.display = "none";}    
function w3_open() {document.getElementById("sidebar").style.width = "100%";document.getElementById("sidebar").style.display = "block";}
function w3_close() {document.getElementById("sidebar").style.display = "none";}var acc = document.getElementsByClassName("accordion");var i;for (i = 0; i < acc.length; i++) {acc[i].addEventListener("click", function() {this.classList.toggle("active");var panel = this.nextElementSibling;if (panel.style.maxHeight){panel.style.maxHeight = null;} else {panel.style.maxHeight = panel.scrollHeight + "px";} });}
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {var header = document.getElementById("navbar");if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {header.className = " animate-top" + " dark";} else {header.className = header.className.replace(" animate-top dark", "");}}
            
            