<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Request::is('ar-home') ? 'active' : '' }}"><a href="/ar-home" class="nav-link pl-0">الرئسيه</a></li>
        <li class="nav-item {{ Request::is('ar-about') ? 'active' : '' }} "><a href="/ar-about" class="nav-link">من نحن</a></li>
            <li class="nav-item {{ Request::is('ar-project') ? 'active' : '' }}"><a href="/ar-project" class="nav-link">المشاريع</a></li>
          <li class="nav-item {{ Request::is('ar-contact') ? 'active' : '' }}"><a href="/ar-contact" class="nav-link">واصلنا</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->