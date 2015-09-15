@extends('layouts.master')

@section('content')
       
      <style type="text/css">body{font-family:'Raleway',Helvetica,Arial,sans-serif;font-weight:400;background-color:rgba(0,0,0,0.02);}.button{font-family:'Raleway',Helvetica,Arial,sans-serif;}.button-group li{padding-top:3%;}.button-group a{color:rgba(0,0,0,1);background-color:transparent;}.button-group a:hover{color:rgba(0,0,0,0.4);background-color:transparent;}.button-group{float:none;}@media only screen and (min-width: 40.063em) {.button-group{float:right;}}.namelogo{padding:20px 10px 0px 10px;}@media only screen and (min-width: 40.063em) {.namelogo{padding-bottom:20px;}}.namelogo h1{font-size:1.5em;font-weight:600;text-align:center;}@media only screen and (min-width: 40.063em) {.namelogo h1{font-size:16px;text-align:left;}}@media only screen and (min-width: 64.063em) {.namelogo h1{font-size:24px;text-align:left;}}.hero{background:url(http://placehold.it/900x800);background-size:cover;box-shadow:inset 0px 0px 0 2000px rgba(0,0,0,0.15);height:80%;}.intro-text{padding-top:40%;color:rgba(255,255,255,1);text-align:center;}@media only screen and (min-width: 40.063em) {.intro-text{padding-top:25%;}}@media only screen and (min-width: 64.063em) {.intro-text{padding-top:18%;}}.intro-text p{font-family:'Shadows Into Light',cursive;font-size:44px;}.about,.work,.contact{padding:50px 0 0 0;}.about img{width:250px;height:250px;border-radius:150px;-webkit-border-radius:150px;-moz-border-radius:150px;}.work img:hover{opacity:0.5;-webkit-transition:0.3s ease;-moz-transition:0.3s ease;-ms-transition:0.3s ease;-o-transition:0.3s ease;transition:0.3s ease;}.work li{height:140px;overflow:hidden;}hr{border:0;height:1px;background-image:-webkit-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.75),rgba(0,0,0,0));background-image:-moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.75),rgba(0,0,0,0));background-image:-ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.75),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.75),rgba(0,0,0,0));opacity:0.8;}footer{padding:80px 0 10px 0;}footer a:hover{color:rgba(0,0,0,0.4);background-color:transparent;}</style>

       
      <div class="row">
        <div class="small-12 medium-4 large-6 columns namelogo">
          <h1>Name/Logo/Brand</h1>
        </div>
        <div class="small-12 medium-8 large-6 columns">
          <div class="nav-bar">
            <ul class="button-group">
            <li><a href="#" class="button">About</a></li>
            <li><a href="#" class="button">Work</a></li>
            <li><a href="#" class="button">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
        
      <div class="hero">
        <div class="row">
          <div class="large-12 columns intro-text">
            <p>Hi there!<br>I take outdoor pictures.</p> 
          </div>
        </div>
      </div>

      <div class="row about">
        <div class="medium-6 large-8 columns">
          <h4>About</h4>
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
        </div>
        <div class="medium-6 large-4 columns">
          <img src="http://placehold.it/550x300">
        </div>
      </div>

      <div class="row work">
        <hr>
        <div class="large-12 columns">
          <h4>Work</h4>
          <p>Click on each image to view my work!</p>

          <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
            <li>
              <a href="http://placehold.it/550x300">
              <img data-caption="caption here" src="http://placehold.it/550x300"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300"><img data-caption="caption 2 here..." src="http://placehold.it/550x300"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300"><img data-caption="caption 3 here..." src="http://placehold.it/550x300"></a>
            </li>
            <li>
              <a href="http://placehold.it/550x300"><img data-caption="caption 4 here..." src="http://placehold.it/550x300"></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row contact">
        <hr>
        <div class="large-12 columns">
          <h4>Contact Me</h4>
          <div class="large-4 columns">
            <strong>Email</strong>: <a href="#"><span class="__cf_email__" data-cfemail="ff929abf92868f908d8b9990939690d19c9092">[email protected]</span><script data-cfhash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a>
          </div>
          <div class="large-4 columns">
            <strong>Twitter</strong>: @twitterhandle
          </div>
          <div class="large-4 columns">
            <strong>Phone</strong>: 555-555-1234
          </div>
        </div>
      </div>

      <footer class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Suscribe</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      
       
      <script src="js/foundation/foundation.clearing.js"></script>
@endsection