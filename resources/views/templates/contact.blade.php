@extends('layouts.master')

@section('content')
 <nav class="top-bar" data-topbar>
        <ul class="title-area">
           
          <li class="name">
            <h1>
              <a href="#">
                Top Bar Title
              </a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
     
        <section class="top-bar-section">
           
          <ul class="right">
            <li class="divider"></li>
            <li class="has-dropdown">
              <a href="#">Main Item 1</a>
              <ul class="dropdown">
                <li><label>Section Name</label></li>
                <li class="has-dropdown">
                  <a href="#" class="">Has Dropdown, Level 1</a>
                  <ul class="dropdown">
                    <li><a href="#">Dropdown Options</a></li>
                    <li><a href="#">Dropdown Options</a></li>
                    <li><a href="#">Level 2</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><label>Section Name</label></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><a href="#">See all →</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li><a href="#">Main Item 2</a></li>
            <li class="divider"></li>
            <li class="has-dropdown">
              <a href="#">Main Item 3</a>
              <ul class="dropdown">
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li><a href="#">Dropdown Option</a></li>
                <li class="divider"></li>
                <li><a href="#">See all →</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </nav>
     
       
     
     
       
     
      <div class="row">
     
         
        <div class="large-9 columns">
     
          <h3>Get in Touch!</h3>
          <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
     
          <div class="section-container tabs" data-section>
            <section class="section">
              <h5 class="title"><a href="#panel1">Contact Our Company</a></h5>
              <div class="content" data-slug="panel1">
                <form>
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline">Your Name</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourName" placeholder="Jane Smith">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline"> Your Email</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourEmail" placeholder="jane@smithco.com">
                    </div>
                  </div>
                  <label>What's up?</label>
                  <textarea rows="4"></textarea>
                  <button type="submit" class="radius button">Submit</button>
                </form>
              </div>
            </section>
            <section class="section">
              <h5 class="title"><a href="#panel2">Specific Person</a></h5>
              <div class="content" data-slug="panel2">
                <ul class="large-block-grid-5">
                  <li><a href="/cdn-cgi/l/email-protection#cea3afa28ebdabbcaba0a7bab7e0acade0bcabac"><img src="http://placehold.it/200x200&text=[person]">Mal Reynolds</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#91ebfef4d1e2f4e3f4fff8e5e8bff3f2bfe3f4f3"><img src="http://placehold.it/200x200&text=[person]">Zoe Washburne</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#bcd6ddc5d2d9fccfd9ced9d2d5c8c592dedf92ced9de"><img src="http://placehold.it/200x200&text=[person]">Jayne Cobb</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#2d49424e6d5e485f4843445954034f4e035f484f"><img src="http://placehold.it/200x200&text=[person]">Simon Tam</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#63080a0f0f1a0c16140a170b0e1a0e0a0d0723100611060d0a171a4d01004d110601"><img src="http://placehold.it/200x200&text=[person]">River Tam</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#39555c585f56574d515c4e50575d794a5c4b5c57504d40175b5a174b5c5b"><img src="http://placehold.it/200x200&text=[person]">Hoban Washburne</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#1e7c7171755e6d7b6c7b70776a67307c7d306c7b7c"><img src="http://placehold.it/200x200&text=[person]">Shepherd Book</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#711a1d141431021403141f1805085f13125f031413"><img src="http://placehold.it/200x200&text=[person]">Kaywinnet Lee Fry</a></li>
                  <li><a href="/cdn-cgi/l/email-protection#7c15121d0e1d3c1b09151018521f13110c521d1010"><img src="http://placehold.it/200x200&text=[person]">Inarra Serra</a></li>
                </ul>
              </div>
            </section>
          </div>
        </div>
     
         
     
     
         
     
     
        <div class="large-3 columns">
          <h5>Map</h5>
           
          <p>
            <a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br/>
            <a href="" data-reveal-id="mapModal">View Map</a>
          </p>
          <p>
            123 Awesome St.<br/>
            Barsoom, MA 95155
          </p>
        </div>
         
      </div>
     
       
     
     
       
     
      <footer class="row">
        <div class="large-12 columns">
          <hr/>
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
     
       
     
     
     
       
     
      <div class="reveal-modal" id="mapModal">
        <h4>Where We Are</h4>
        <p><img src="http://placehold.it/800x600"/></p>
     
         
        <a href="#" class="close-reveal-modal">×</a>
      </div>
    
@endsection