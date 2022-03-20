@extends('custom')
@section('title', $diagnosis->disease)

@section('content')
<main class="kavya-single">

    <!-- single layout blog content -->
    <section class="single-layout">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="blog-content-wrap">
              <div class="blog-title-wrap">
                <h1 class="title-font">{{$diagnosis->disease}}</h1>
              </div>

              <div class="blog-desc">
              <p>{!! nl2br(e($diagnosis->disease_description)) !!}</p>
                <!-- <blockquote>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ex quas aliquam est
                  excepturi molestiae non dolor voluptatem voluptatum saepe?
                </blockquote> -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Single Layout Blog content end -->

@endsection