/**
 * Created Date: 10 Mar 2017
 * Developer: Panhna Seng
 * Create By : Flexitech Cambodia Team
 */

// select hotel page controller
// app.controller('mainCtrl', function($rootScope, $scope, $http, $timeout, $location, $window, genfunc, hhModule, Request) {

//     console.log('mainCtrl');


    $(function(){

        
        $(window).scroll(function (event) {
                        var scroll = $(window).scrollTop();


                        if (scroll >= '710'){
                            $('.simple-nav-bar').addClass('fixed');
                        } else {
                            $('.simple-nav-bar').removeClass('fixed');
                        }
         });

        $(window).scroll(function(){
            // alert($(document).scrollTop());
            var scrollPos = $(window).scrollTop();
            // console.log(scrollPos);


            if(scrollPos>700){
                // background white

                $('.simple-nav-bar').addClass('nav-bar-white-bg');
            }
            else{
                // remove background (transparent)
                $('.simple-nav-bar').removeClass('nav-bar-white-bg');
                
            }

        });

        setTimeout(function(){
            $(window).trigger('scroll');
        },50)
        


    });

