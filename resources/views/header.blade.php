    <!-- Top header -->
    <div class="top-header">
      <div class="container">
        <div class="row  align-items-center">
          <div class="col-md-3">
            <div class="social-links">
              <!-- <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-md-5">
            <div class="brand-name text-center">
              <a href="/">
                <h1>{{config('app.name')}}</h1>
                <span>On Top of the World</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Top header end -->
    <!-- Navbar  -->
    <div class="kavya-navbar" id="sticky-top">
      <div class="container">
        <nav class="nav-menu-wrapper">
          <span class="navbar-toggle" id="navbar-toggle">
            <i class="fas fa-bars"></i>
          </span>
          <div class="sticky-logo">
            <a href="/">
              <p>{{config('app.name')}}</p>
            </a>
          </div>


        </nav>
      </div>
    </div>
    <!-- Navbar end -->

    <!-- search overlay -->
    <div id="search-overlay" class="search-section">
      <span class="closebtn"><i class="fas fa-times"></i></span>
      <div class="overlay-content">
        <form action="{{route('form.search')}}" method="GET" role="search">
          <input type="text" placeholder="Search here" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <!-- search overlay end -->



    <div class="body-overlay"></div>