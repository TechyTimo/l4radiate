@extends('layouts.bookcheetah')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

@section('content')
<!-- replace the content below to suit your page content -->


<ul id="bxslider">
  <li><img src="assets/bxslider/images/pic (1).jpg" title="1" /></li>
  <li><img src="assets/bxslider/images/pic (2).jpg" title="2" /></li>
  <li><img src="assets/bxslider/images/pic (3).jpg" title="3" /></li>
  <li><img src="assets/bxslider/images/pic (4).jpg" title="4" /></li>
</ul>
<div id="bx-pager">
  <a data-slide-index="0" href=""><span id="s1">Buy And Sell Locally</span></a>
  <a data-slide-index="1" href=""><span id="s2">Sell on Amazon</span></a>
  <a data-slide-index="2" href=""><span id="s3">BookCheetah Delivery</span></a>
  <a data-slide-index="3" href=""><span id="s4">Get Started</span></a>
</div>

<div id="bottom">

  <ul id="bx-pager2">
    <li id="prod1">1.
      <a class="btitle" data-slide-index="0" href="">Man's Search for Meaning</a>
      <span class="author">Book Author</span>
      <span class="amazonprice">On Amazon: $10</span>
    </li>
    <li id="prod2">2.
      <a class="btitle" data-slide-index="1" href="">The Law of Success</a>
      <span class="author">Book Author</span>
      <span class="amazonprice">On Amazon: $10</span>
    </li>
    <li id="prod3">3.
      <a class="btitle" data-slide-index="2" href="">The Science of Getting Rich</a>
      <span class="author">Book Author</span>
      <span class="amazonprice">On Amazon: $10</span>
    </li>
    <li id="prod4">4.
      <a class="btitle" data-slide-index="3" href="">Think and Grow Rich</a>
      <span class="author">Book Author</span>
      <span class="amazonprice">On Amazon: $10</span>
    </li>
    <li id="prod5">5.
      <a class="btitle" data-slide-index="4" href="">The Master Key System</a>
      <span class="author">Book Author</span>
      <span class="amazonprice">On Amazon: $10</span>
    </li>
  </ul>

  <ul id="bxslider2">
    <li><img src="assets/bxslider/images/img-1.jpg" title="1" /></li>
    <li><img src="assets/bxslider/images/img-2.jpg" title="2" /></li>
    <li><img src="assets/bxslider/images/img-3.jpg" title="3" /></li>
    <li><img src="assets/bxslider/images/img-4.jpg" title="4" /></li>
    <li><img src="assets/bxslider/images/img-5.jpg" title="4" /></li>
  </ul>

<span class="bookactions">
  <a class="wishlist btn btn-primary btn-small" href="">Add To Wishlist</a><br/>
  <a class="bookshelf btn btn-primary btn-small" href="">Add To Bookshelf</a>
</span>

  <div id="video">
    <iframe width="100%" height="100%" 
      src="http://www.youtube.com/embed/_ugjlxl85w4?feature=player_detailpage"
      frameborder="0" allowfullscreen>
     </iframe>
  </div>
  

</div>

@stop

@section('assets')
<!-- add your css and js here, dont add the jquery library again -->

    <link type="text/css" charset="utf-8" rel="stylesheet" media="screen" href="{{ asset('assets/styles/css/home.css')}}" />

    <!-- bxSlider Javascript file -->
    <script src="assets/bxslider/jquery.bxslider.js"></script>
    <!-- bxSlider CSS file -->
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />


    <script type="text/javascript" charset="utf-8">
        window.onload = initStyle;
        window.unload = initStyle;
            
        function initStyle() {
        //$(document).ready(function(){

            $('#bxslider').bxSlider({
              auto: true,
              autoControls: false,
              nextSelector: '#slider-next',
              prevSelector: '#slider-prev',
              mode: 'fade',
              adaptiveHeight: true,
              infiniteLoop: true,
              speed: 2000,
               onSliderLoad: function(){
                 $('.bxslider .bx-prev').css('margin-left', '-3px');
               },
              onSlideAfter: function(){
                $('#bx-pager a').children().css('color', '#74662A');
                $('#bx-pager a.active').children().css('color', '#FFD100');
              },
              pagerCustom: '#bx-pager'
            });

            $('#bxslider2').bxSlider({
              auto: true,
              autoControls: false,
              adaptiveHeight: true,
              infiniteLoop: true,
              speed: 500,
              onSliderLoad: function(){
                 $('.bxslider2 .bx-viewport').css('position', 'absolute');
                 $('.bxslider2 .bx-next').css('left', '15%');
                 $('.bxslider2 .bx-next').css('top','60px');
                 $('.bxslider2 .bx-prev').css('top','60px');
               },
              onSlideAfter: function(){
                $('#bx-pager2 li a.btitle').css('color', '#74662A');
                $('#bx-pager2 li').css('color', '#74662A');
                $('#bx-pager2 li a.active').css('color', '#FFD100');
                $('#bx-pager2 li a.active').parent().css('color', '#FFD100');
                $('#bx-pager2 li span').css('display', 'none');
                $('#bx-pager2 a.active').parent('li').children('span').css('display', 'list-item');
              },
              pagerCustom: '#bx-pager2'
            });
            
        };
   
    </script>

@stop

