$(document).ready(function(){
                  console.log('test');
                        $(".menu-icon").click(function () {
                                                $(this).toggleClass("menu-animation");
                                                $(".nav-list").toggle("easing", function() {
                                                                      $(".nav-list").toggleClass("nav-animation");
                                                                                            });
                                                            });
                                });       
                  
