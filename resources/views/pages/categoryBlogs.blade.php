@extends('layouts.frontend')

<div class="hero hero-single route bg-image" style="background-image: url(frontend/assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">All Blog</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Category Blogs</li>
          </ol>
        </div>
      </div>
    </div>
</div>

@section('content')

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">

        <div class="row">

          @foreach($blogs as $data)

            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img text-center">
                  <a href="{{url('/blog-single',$data->id)}}">
                    <img src="{{ asset('images/blogs/'.$data->image) }}" alt="Blog-picture" class="img-fluid" style="height:250px; width:100%; object-fit:cover">
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
                    <span class="bi bi-clock"></span>  {{$data->created_at->format('d M Y')}}
                  </div>
                </div>
              </div>
            </div>

          @endforeach


        </div>
      </div>
    </section><!-- End Blog Section -->

@endsection