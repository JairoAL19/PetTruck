              <script >
              "use strict";

                            (function () {

                              var target = document.querySelector(".target");
                              var links = document.querySelectorAll(".mynav a");
                              var colors = ["firebrick", "firebrick", "firebrick", "firebrick", "firebrick", "firebrick", "firebrick"];

                              function mouseenterFunc() {
                                if (!this.parentNode.classList.contains("active")) {
                                  for (var i = 0; i < links.length; i++) {
                                    if (links[i].parentNode.classList.contains("active")) {
                                      links[i].parentNode.classList.remove("active");
                                    }
                                    links[i].style.opacity = "0.25";
                                  }

                                  this.parentNode.classList.add("active");
                                  this.style.opacity = "1";

                                  var width = this.getBoundingClientRect().width;
                                  var height = this.getBoundingClientRect().height;
                                  var left = this.getBoundingClientRect().left;
                                  var top = this.getBoundingClientRect().top;
                                  var color = colors[Math.floor(Math.random() * colors.length)];

                                  target.style.width = width + "px";
                                  target.style.height = height + "px";
                                  target.style.left = left + "px";
                                  target.style.top = top + "px";
                                  target.style.borderColor = color;
                                  target.style.transform = "none";
                                }
                              }

                              for (var i = 0; i < links.length; i++) {
                                links[i].addEventListener("click", function (e) {
                                  //return e.preventDefault();
                                });
                                links[i].addEventListener("mouseenter", mouseenterFunc);
                              }
                            })();
            </script>           
            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }

                function currentDiv(n) {
                  showDivs(slideIndex = n);
                }

                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  if (n > x.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                     dots[i].className = dots[i].className.replace(" w3-white", "");
                  }
                  x[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " w3-white";
                }
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    for (i = 0; i < x.length; i++) {
                       x[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                     dots[i].className = dots[i].className.replace(" w3-white", "");
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";
                    dots[myIndex-1].className += " w3-white";  
                    setTimeout(carousel, 7000);    
                }

            </script>
            <script>
                // Get the modal
                var modal = document.getElementById('myModal');                
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

                var login = document.getElementById('login');
                var btn_bin = document.getElementById("btn_login");
                var span_bin = document.getElementsByClassName("close2")[0];
                btn_bin.onclick = function() {
                    login.style.display = "block";
                }
                span_bin.onclick = function() {
                    login.style.display = "none";
                }
            </script>