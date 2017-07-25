/**
 * Created Date: 04 Nov 2016
 * Create By : Flexitech Cambodia Team
 */


var app = angular.module('app',['ui.bootstrap', 'facebook', 'ngMessages','ngFileUpload', 'onFinishRenderRepeat','ngRoute']);

var namespace = {};
namespace.routes = [];

// app.config(['$routeProvider','$httpProvider',function($routeProvider, $httpProvider, $rootScope, FacebookProvider) {
app.config(function(FacebookProvider, $interpolateProvider, $routeProvider) {
    // $httpProvider.defaults.headers.common['Access-Control-Allow-Headers'] = '*';

    var fbId = $('meta[name="fb:appId"]');
    fbId = fbId ? fbId.attr('content') : '';
    
    if(!fbId || fbId== "undefined") 
        fbId = '';   
    
    // console.log("fbId",fbId);

    // console.log(fbId, "dsfsdfsdfsd");

    FacebookProvider.init({
    	appId: fbId
    });

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

   // console.log($scope.quatation_info);

    // $routeProvider.
    //   when('/home', {
    //     templateUrl: 'pages/index_static.html',
    //     controller: 'homeCtrl'
    //   }).
    //   when('/network', {
    //     templateUrl: 'pages/network.html',
    //     controller: 'networkCtrl'
    //   }).
    //   when('/about', {
    //     templateUrl: 'pages/about.html',
    //     controller: 'networkCtrl'
    //   }).
    //   otherwise({
    //     redirectTo: '/home'
    //   });

    $routeProvider.
    when('/', {
        controller: 'restMapCtrl',
        reloadOnSearch: false
    }).
    otherwise({
        redirectTo: '/'
    });

}).run(function($rootScope, $location, hhModule, Request, genfunc, $timeout, $window) {

    // console.log('root run', hhModule);

    $rootScope.hhModule = hhModule;

    $rootScope.booking = {};

    $rootScope.moveToEle = function(ele,isIncludeHeader, delay) {
        // console.log(ele,$(''+ele));

        delay = delay ? delay : 1000;

        var headerOffset = 72;
        if(isIncludeHeader)
            headerOffset  = 0;

        if ($(ele).length > 0) {
            $('html, body').stop().animate({
                scrollTop: $('' + ele).offset().top - headerOffset
            }, delay, function() {
                // $scope.success = false;
                // $scope.$apply();
            });
        }
    }

    // get param in js
    $rootScope.getParameterByName = function(name, url) {
        if (!url) {
          url = window.location.href;
        }
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    $rootScope.scrollToEle = function(ele) {
        var elem = $(ele);
        if(elem.length>0){
            $('html, body').animate({
                scrollTop: elem.offset().top
            }, 500);
        }
        else{
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        }
    }


    $rootScope.closePopup = function(){
        var magnificPopup = $.magnificPopup.instance; // save instance in magnificPopup variable
        magnificPopup.close(); // Close popup that is currently opened
    }

    $(function () {

        
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
        


    })

    });

});



