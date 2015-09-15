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
        <div class="large-3 columns">
          <h1><img src="http://placehold.it/400x100&text=Logo"></h1>
        </div>
        <div class="large-9 columns right">
          <form>
            <div class="row collapse">
              <div class="large-10 small-8 columns">
                <input type="text"/>
              </div>

              <div class="large-2 small-4 columns">
                <a href="#" class="postfix button expand">Search</a>
              </div>
            </div>
          </form>

        </div>
        </div>



         

        <div class="row">
        <hr>
        <div class="large-2 columns">
          <img src="http://placehold.it/400x300&text=[img]">
          <br>
          <img src="http://placehold.it/400x300&text=[img]">
          <br>
          <img src="http://placehold.it/400x300&text=[img]">
          <br>
          <img src="http://placehold.it/400x300&text=[img]">
        </div>
        <div class="large-5 columns">
          <img src="http://placehold.it/400x500">
        </div>
        <div class="large-5 columns">
          <h4>This is a content section.</h4>
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

          <div class="panel">
            <h5>Header</h5>
          <h6 class="subheader">Praesent placerat dui tincidunt elit suscipit sed.</h6>
          <a href="#" class="small button">Add to Cart</a>
          </div>

        </div>
        </div>

        <div class="row">
        <hr/>
        <div class="large-6 columns">
          <h4>This is a content section.</h4>
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
        </div>
        <div class="large-6 columns">
          <h4>This is a content section.</h4>
          <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
        </div>
        </div>

        <div class="row">
        <hr>
        <div class="large-12 columns">
          <h4>You might also like:</h4>
          <img src="http://placehold.it/200x150&text=[img]">
          <img src="http://placehold.it/200x150&text=[img]">
          <img src="http://placehold.it/200x150&text=[img]">
          <img src="http://placehold.it/200x150&text=[img]">
        </div>
        </div>

        <footer class="row">
        <div class="large-12 columns">
          <hr>
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
    
@endsection