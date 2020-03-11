
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top <?php if($page == 'home'): ?> header-transparent <?php endif; ?>">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="."><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li <?php if($page == 'home'): ?> class="active" <?php endif; ?> >
		  <a href=".">Home</a></li>
		  
          <li class="drop-down" <?php if($page == 'about'): ?> class="active" <?php endif; ?> >
		  <a href="about">About Us</a>
            <ul>
              <li><a href="about">About Us</a></li>
              <li><a href="focus-areas">Focus Areas</a></li>
            </ul>
          </li>
		  
          <li <?php if($page == 'services'): ?> class="active" <?php endif; ?> >
		  <a href="services">Services</a></li>
		  
          <li <?php if($page == 'portfolio'): ?> class="active" <?php endif; ?> >
		  <a href="portfolio">Portfolio</a></li>
		  
          <li <?php if($page == 'team'): ?> class="active" <?php endif; ?> >
		  <a href="team">Team</a></li>
		  
          <li <?php if($page == 'blog'): ?> class="active" <?php endif; ?> >
		  <a href="blog">Blog</a></li>
		  
		  
		  <!--
		  <li class="drop-down <?php if($page == 'dropdown'): ?> active <?php endif; ?>" >
          <li ><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
		  -->
		  
          <li <?php if($page == 'contact'): ?> class="active" <?php endif; ?> >
		  <a href="contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->