<nav class="header bg-header transparent-light " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
  <div class="container relative">
    <!-- BEGIN LEFT CONTENT -->
    <div class="pull-left">
      <!-- .header-inner Allows to horizontally Align elements to the Center -->
      <div class="header-inner">
        <!-- BEGIN LOGO -->
        <a href="{{ route('home')}}"><img src="{{asset('storage/'.setting('site.logo'))}}" width="320" height="100" data-src-retina="{{asset('storage/'.setting('site.logo'))}}" class="img-responsive" alt=""></a>
      </div>
    </div>
    <div class="pull-right">
      <div class="header-inner">
        <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
      </div>
    </div>
    <!-- BEGIN RIGHT CONTENT -->
    <div class="menu-content mobile-dark pull-right clearfix" data-pages-direction="slideRight" id="header">
      <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
      <div class="pull-right">
        <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
          <i class=" pg-close_line"></i>
        </a>
      </div>
      <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
      <!-- BEGIN MENU ITEMS -->
      <div class="header-inner">
        <ul class="menu">
          <li>
            <a class="{{ Request::is('/*') ? 'active' : '' }}" data-text="Home" href="{{ route('home')}}">
              Home <span data-text="Welcome">Welcome</span>
            </a>
          </li>
          <li>
            <a class="{{ Request::is('portfolio*') ? 'active' : '' }}" data-text="Portofolio" href="{{ route('portfolio')}}">
              Portofolio<span data-text="Clients">Clients</span>
            </a>
          </li>
          <li>
            <a class="{{ Request::is('about-us*') ? 'active' : '' }}"data-text="Get To Know Us" href="{{route('aboutus')}}">
              About Us <span data-text="Plans">Get to Know Us</span>
            </a>
          </li>
          <li>
            <a class="{{ Request::is('contact-us*') ? 'active' : '' }}" data-text="Contact Us" href="{{route('contactus')}}">
              Contact Us <span data-text="Get in touch">Getin touch</span>
            </a>
          </li>
        </ul>
        <!-- BEGIN COPYRIGHT FOR MOBILE -->
        <div class="font-arial m-l-35 m-r-35 m-b-20  visible-sm visible-xs m-t-30">
          <p class="fs-11 no-margin small-text p-b-20">Exclusive only at ,Themeforest. See Standard licenses & Extended licenses
          </p>
          <p class="fs-11 small-text muted">Copyright &copy; 2014 REVOX</p>
        </div>
        <!-- END COPYRIGHT FOR MOBILE -->
      </div>
      <!-- END MENU ITEMS -->
    </div>
  </div>
</nav>