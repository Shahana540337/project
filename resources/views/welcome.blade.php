@extends('layouts.frontend')


@section('hero')

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(frontend/assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">{{$banner->title}}</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

@endsection


@section('content')

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">

              <div class="row">

                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{asset('images/abouts/'.$about->image)}}" alt="photo"  class="img-fluid rounded b-shadow-a" >
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{$about->name}}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{$about->profile}}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{$about->email}}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{$about->phone}}</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>

                    @foreach($skillabout as $data)

                      <span>{{$data->skill_title}}</span> <span class="pull-right">{{$data->skill_percentage}}</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    @endforeach

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">{{$about->description}}</p>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

        @foreach($services as $data)

          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><img src="{{asset('images/services/'.$data->image)}}" alt="image" style="width:100%; height:100%; border-radius:50%; object-fit:cover;"></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{$data->name}}</h2>
                <p class="s-description text-center">{{$data->description}}</p>
              </div>
            </div>
          </div>
        
        @endforeach

        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        
        <div class="row">
          @foreach($portfolios as $data)
          <div class="col-md-4">
            <div class="work-box" style="border-radius:10px;">
              <a href="{{ asset('images/portfolios/'.$data->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img" style="border-radius:10px;">
                  <img src="{{ asset('images/portfolios/'.$data->image) }}" alt="Portfolio-Picture" class="img-fluid" style="width:100%; height:250px; object-fit:cover;">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{$data->title}}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{$data->category}}</span> / <span class="w-date">{{$data->created_at->format('d M Y')}}</span>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Category Section ======= -->
    <section id="category" class="category-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Category
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            @foreach($blogCategorys as $data)
              <a href="{{url('/categoryBlogs',$data->id)}}" class="btn btn-secondary">{{$data->title}}</a>
            @endforeach
          </div>
        </div>
      </div>
    </section><!-- End Category Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Latest Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

          @foreach($blogs as $data)

            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img text-center">
                  <a href="{{url('/blog-single',$data->id)}}">
                    <img src="{{ asset('images/blogs/'.$data->image) }}" alt="Blog-picture" class="img-fluid" style=" object-fit:cover">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">{{$data->blogCategory->title}}</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="{{url('/blog-single',$data->id)}}">{{Str::limit($data->title,20)}}</a>
                  </h3>
                  <p class="card-description">{{Str::limit($data->description,30)}}</p>
                </div>
                <div class="card-footer" style="display:flex; justify-content:space-between;">
                  <div class="post-author">
                    <a href="#">
                      <img src="{{ asset('frontend/assets/img/testimonial.jpg') }}" alt="" class="avatar rounded-circle">
                      <span class="author">Morgan Freeman</span>
                    </a>
                  </div>
                  <div class="post-date">
                    <span class="bi bi-clock"></span> {{$data->created_at->format('d M Y')}}
                  </div>
                </div>
              </div>
            </div>

          @endforeach

          <div class="col-12 text-center">
            <a href="{{url('/allBlog')}}" class="btn btn-primary">See All</a>
          </div>

        </div>
      </div>
    </section><!-- End Blog Section -->

@endsection