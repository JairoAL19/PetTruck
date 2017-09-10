              <script >
              "use strict";

                            (function () {

                              var target = document.querySelector(".target");
                              var links = document.querySelectorAll(".mynav a");
                              var colors = ["#4F4F4F", "#4F4F4F", "#4F4F4F", "#4F4F4F", "#4F4F4F", "#4F4F4F", "#4F4F4F"];

                              function mouseenterFunc() {
                                if (!this.parentNode.classList.contains("active")) {
                                  for (var i = 0; i < links.length; i++) {
                                    if (links[i].parentNode.classList.contains("active")) {
                                      links[i].parentNode.classList.remove("active");
                                    }
                                    links[i].style.opacity = "0.65";
                                    links[i].style.color = "#4F4F4F";
                                  }

                                  this.parentNode.classList.add("active");
                                  this.style.opacity = "1";
                                  this.style.color = "#8E0E00";

                                  var width = this.getBoundingClientRect().width;
                                  var height = this.getBoundingClientRect().height;
                                  var left = this.getBoundingClientRect().left;
                                  var top = this.getBoundingClientRect().top;
                                  var color = colors[Math.floor(Math.random() * colors.length)];

                                  target.style.width = width-25 + "px";
                                  target.style.height = height + "1px";
                                  target.style.left = left + "px";
                                  target.style.top = top + "px";
                                  target.style.borderColor = color;
                                  target.style.borderBottom = "2px solid #4F4F4F";
                                  target.style.transform = "none";
                                  target.style.marginLeft = "12.5px";
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

                var login = document.getElementById('login');
                var btn_bin = document.getElementById("btn_login");
                var span_bin = document.getElementsByClassName("close2")[0];
                btn_bin.onclick = function() {
                    login.style.display = "block";
                }
                span_bin.onclick = function() {
                    login.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == login) {
                        login.style.display = "none";
                    }
                }
            </script>