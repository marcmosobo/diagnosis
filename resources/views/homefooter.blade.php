<div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4">
            <div class="kavya-footer-intro">
              <div class="footer-logo">
                <a href="#">
                  <h5 class="brand-name">{{config('app.name')}}</h5>
                </a>
              </div>
              @foreach($abouts as $about)
              <p>{{$about->description}}</p>
              @endforeach
              <div class="circular-icons social-links">
                <h5 class="footer-title">Follow Us</h5>
                <ul>
                  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="popular-tags">
              <h5 class="footer-title">Tags</h5>
              <div class="sidebar-content">
                <ul class="sidebar-list tags-list">
                  @foreach($tags as $tag)
                  <li><a href="#">{{$tag->name}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="author-posts">
              <h5 class="footer-title">Categories</h5>
              <div class="posts-wrapper">
                <div class="card ">
                  <div class="row no-gutters">
                    <div class="col-3 col-md-3">
                      <a href="single-layout-one.html">
                        <img src="assets/images/alone.jpg" class="card-img" alt="">
                      </a>
                    </div>
                    <div class="col-9">
                      <div class="card-body">
                        <ul class="category-tag-list mb-0">
                          <li class="category-tag-name">
                            <a href="#">Lifestyle</a>
                          </li>
                        </ul>
                        <h5 class="card-title title-font"><a href="single-layout-one.html">Why staying alone is good</a>
                        </h5>
                        <div class="author-date">
                          <a class="date" href="#">
                            <span>21 Dec, 2019</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="footer-copyright">
            <p>&copy;2021 {{config('app.name')}}. All rights reserved. Theme designed by <a href="#">Marc</a> </p>
          </div>
        </div>
      </div>