
<div class="simple-nav-bar" ng-controller="mainCtrl">

   <nav class="navbar navbar-light ">

      <button class="navbar-toggler hidden-md-up marg-top-0" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="icon-dehaze"></span>
      </button>

      <div class="navbar-brand">
         <?php
            $logo = 'yellow-sea-logo-white.png';
            // if(isset($isSearchOnMenu))
            //    $logo = 'red-white.png';
         ?>
         <a href="{{ $baseUrlLang }}" title="">
            <img class="main-logo" height="40px;" src="{{ asset('img/'.$logo) }}" alt="Cambodroom Logo">
         </a>

      </div>

      <div class="collapse navbar-toggleable-sm" id="navbarResponsive">


         <ul class="nav navbar-nav float-xs-right {{ $lang }}">

            <li class="nav-item">
               <a class="nav-link {{ Html::clever_link('about') }}" href="{{ $baseUrlLang.'/about' }}">About Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Html::clever_link('our-work') }}" href="{{ $baseUrlLang.'/our-work' }}">Product & Service</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Html::clever_link('2030') }}" href="{{ $baseUrlLang.'/2030' }}">Quote Request</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Html::clever_link('community') }}" href="{{ $baseUrlLang.'/community' }}">Contact Us</a>
            </li>
            {{-- <li class="nav-item">
               <a class="nav-link {{ Html::clever_link('pp-tech') }}" href="{{ $baseUrlLang.'/pp-tech' }}">PP TECH</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Html::clever_link('blog') }}" href="{{ $baseUrlLang.'/blog' }}">BLOG</a>
            </li> --}}
         </ul>


      </div>
   </nav>
</div>



<?php

    $slideInfo = array(

        'home'  => array(
            'img'   =>  'sea-port.jpg',
            'header'   =>  false,
            'text'   =>  true,
            'isShowBtn'   => true,
            'text-animate'   =>  false,
            'nor-text'   =>  'YELLOW SEA LOGISTICS offers the supports for the goods both locally and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker and Warehousing/Distribution.',
            'text1' => false,
        ),

        'about'  => array(
            'img'   =>  'Group Pic.jpg',
            'header'=> 'About Us',
            'text'   =>  false,
            'isShowBtn'   =>  false,
            'text-animate'   =>  false,
            'nor-text'   =>  'Slash is a hi-tech boutique AI foundry. Our mission is to help lean startups and innovators at enterprises build amazing products.',
            'text1' => false,
        ),

         'our-work'  => array(
            'img'   =>  'Background 2.jpg',
            'header'=> 'Our Work',
            'text'   =>  false,
            'isShowBtn'   =>  false,
            'text-animate'   =>  false,
            'nor-text'   =>  'We help hi-profile startups and enterprises, particularly from Singapore, Australia & AP region, who stand by agile methodologies, to build the future of internet products.',
            'text1' => false,
        ),

         '2030'  => array(
            'img'   =>  'Group Pic.jpg',
            'header'=> 'Venture Builder',
            'text'   =>  false,
            'isShowBtn'   =>  false,
            'text-animate'   =>  false,
            'nor-text'   =>  'Slash 2030 is our venture builder, focusing on',
            'text1' => false,
        ),
         'community'  => array(
            'img'   =>  false,
            'header'=> false,
            'text'   =>  false,
            'isShowBtn'   =>  false,
            'text-animate'   =>  false,
            'nor-text'   =>  false,
            'text1' => false,
        ),
        'pp-tech'  => array(
            'img'   =>  false,
            'header'=> false,
            'text'   =>  false,
            'isShowBtn'   =>  false,
            'text-animate'   =>  false,
            'nor-text'   =>  false,
            'text1' => false,
        ),
        'blog'  => array(
            'img'   =>  false,
            'header'=> false,
            'text'   =>  false,
            'isShowBtn'   =>  false,
            'text-animate'   =>  false,
            'nor-text'   =>  false,
            'text1' => false,
        ),

    );

    $slideByPage = $slideInfo[$page_name]

?>


<section class="slash padding-section big-padding section-bg-gray display-flex flex-center"  style="background-image:url('{{asset('/img/'. $slideByPage['img'] )}}'); background-size:cover; background-position: center center;">
<div class="layer">
   <div class="max-container no-padd">
        <div class="header">
            <p class="_title text-center en">{{ $slideByPage['header'] }}</p>
        </div>
        <div class="nor-text">
            <p class="_title text-center en">{{ $slideByPage['nor-text'] }}</p>
        </div>
        @if($slideByPage['text'])
        <div class="sub-header">
            {{-- <p class="_title text-center en"> {{ $slideByPage['text'] }}</p>
            <p class="_title text-center en">{{ $slideByPage['text1'] }} --}}
            {{-- @if($slideByPage['text-animate'])
                <span style="color:#ff6450" class="typewrite" data-period="2000" data-type='["engineering team.","AI experts.","crazy hacker team.","blockchain experts.","agile team.","data scientists.","javascript gurus."]'></span>
            </p>
            @endif --}}
            <br><br>
            @if($slideByPage['isShowBtn'])
                <a href="#" class="button" id="1">
                      <p> Quote Request </p>
                    {{-- <img src="{{asset('/img/icon_scroll (1).png')}}"> --}}
                </a>
            @endif
      </div>
      @endif
   </div>
</div>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    {{-- <script>
        $(document).ready(function (){
            $("#1").click(function (){
                $('html, body').animate({
                    scrollTop: $("#wwd").offset().top
                }, 2000);
            });
        });
    </script> --}}
   <script type="text/javascript">
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

</section>
