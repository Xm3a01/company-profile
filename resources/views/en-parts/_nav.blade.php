<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  {{ Request::is('en-home') ? 'active' : '' }}"><a href="/en-home" class="nav-link pl-0">Home</a></li>
            <li class="nav-item {{ Request::is('en-about') ? 'active' : '' }}"><a href="/en-about" class="nav-link">About</a></li>
            <li class="nav-item {{ Request::is('en-project') ? 'active' : '' }}"><a href="/en-project" class="nav-link">Project</a></li>
          <li class="nav-item  {{ Request::is('en-contact') ? 'active' : '' }}"><a href="/en-contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->